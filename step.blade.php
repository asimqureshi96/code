@extends('layout/center-column', ['noError' => true])

@php
    $totalSteps = config('buzz.steps');

    if($type){
        if($type === 'supplier'){
            $totalSteps = 4;
        }else{
            $totalSteps = 7;
        }
    }
@endphp


@section('content')
    @include('wizard')
    <form
        action="{{ route('step'.$step) }}"
        class="form-wizard-step{{$step}}"
        data-buzz-wizard="form"
        method="post"
        role="form"
    >
        {!! csrf_field() !!}

        @include('steps.'.$step)

        <unclaimed-errors></unclaimed-errors>

        <div class="row mt-4">
            @if($step > 1)
                @if($step === 4 && $type === 'supplier')
                    <div class="col-3">
                        <a
                            class="btn btn-block btn-secondary"
                            href="{{ route('step3') }}"
                        >{{ transUi('Back') }}</a>
                    </div>
                @else
                    <div class="col-3">
                        <a
                            class="btn btn-block btn-secondary"
                            href="{{ route('step'.($step - 1)) }}"
                        >{{ transUi('Back') }}</a>
                    </div>
                @endif
            @endif

            <div class="col">
                @if(customer() && (customer()->flow->status === 'completed' || customer()->flow->step > $step))
                    @if($step < $totalSteps)
                        <a
                            class="btn btn-block btn-primary"
                            data-buzz-wizard="next"
                            href="{{ route('step'.($step + 1)) }}"
                        >
                            {{ $step == $totalSteps ? transUi('Submit') : transUi('Continue') }}
                        </a>
                    @else
                        <a
                            class="btn btn-block btn-primary"
                            data-buzz-wizard="next"
                            href="{{ route('profile') }}"
                        >
                            {{ $step == $totalSteps ? transUi('Submit') : transUi('Continue') }}
                        </a>
                    @endif

                    <button
                        class="btn btn-block btn-primary d-none"
                        data-buzz-wizard="submit"
                        type="submit"
                        {!! $step < config('buzz.steps') ? sprintf(
                            'data-buzz-confirm="%s"',
                             transUi('Are you sure you want to change your registration? You will need to complete the registration process again.')
                         ) : '' !!}
                    >
                        {{ $step == $totalSteps ? transUi('Submit') : transUi('Continue') }}
                    </button>
                @else
                    <button
                        type="submit"
                        class="btn btn-block btn-primary"
                    >
                        {{ $step == $totalSteps ? transUi('Submit') : transUi('Continue') }}
                    </button>
                @endif
            </div>
        </div>
    </form>
    <div class="grey-section fit-to-bottom mt-4 text-center">
        @if (config('buzz.onsite'))
            <h5>If you are having difficulty using this form please see a member of staff</h5>
        @else
            @if (passwordIsEnabled())
                @guest
                    <p class="mb-1">{{ transUi('Already registered for this year\'s show') }}?</p>
                    <a href="{{ route('auth::login') }}">{{ transUi('Login to your registration') }}</a>
                @endguest
            @endif

            @auth
                <a href="{{ route('auth::logout') }}">{{ transUi('Logout') }}</a>
            @endauth
        @endif
    </div>
@endsection

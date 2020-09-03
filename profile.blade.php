@extends('layout/auth')

@section('content')
    <div class="grey-section border-top-0 mb-3">
        <h3 class="desktopText">Summary | Review your registration details <i class="fa fa-pencil-square"></i></h3>
        <h4 class="mobileText text-center">Summary <br> Review your registration details
            <i class="fa fa-pencil-square"></i></h4>
    </div>
    <div class="row justify-content-between">
        <div class="col-xl-6">
            <h2 class="desktopText mb-2">{{ transUi('Your badge') }} <i class="fa fa-id-badge"></i></h2>
            <h2 class="mobileText text-center mb-2">{{ transUi('Your badge') }} <i class="fa fa-id-badge"></i></h2>

            @php
                $type = registrationType();
            @endphp
            {{-- vip and supplier pending--}}


            <div class="my-1">
                <div class="row">
                    <div class="col-md-12 desktopText normal-text">
                        @if($type === 'xlist')
                            Hi <span style="color: #F18E8E;">{{ customer()->name }}</span>  <br>
                            <p class="normal-text">
                                Thank you for registering to attend Venues + Events Live Manchester&nbsp;2020. &nbsp;</p>

                            <p>
                                Unfortunately, after carefully considering your application we have decided to decline your registration at this time.</p>

                            <p>You can find the full&nbsp;<a
                                    href="https://www.venuesandevents.co.uk/"
                                    style="color:#f69d9a;"
                                    target="_blank"
                                >show admissions policy here</a>.</p>

                            <p>If you’d like to speak to one of the team about your registration, please email&nbsp;<a
                                    href="mailto:ve-manchester-2020@livebuzz.co.uk"
                                    style="color:#f69d9a;"
                                >ve-manchester-2020@livebuzz.co.uk</a>.</p>

                            <p>Best wishes&nbsp;</p>
                        @elseif(customer()->status === 'rejected' || customer()->custom_status_id === 'xlist')
                            <p class="normal-text">
                                Your entry application to Venues + Events Live has been declined. If you would like to discuss your registration, please email ve-manchester-2020@livebuzz.co.uk

                            </p>
                        @elseif(customer()->status === 'pending')
                            <div
                                class="mb-1"
                                style="font-size: 17px;"
                                class="normal-text"
                            >
                                Hi <span style="color: #F18E8E;">{{ customer()->name }}</span> ! <br>

                                <p class="normal-text">Thank you for registering to attend Venues + Events Live Manchester 2020.
                                    <br>

                                    Your registration is currently pending review.<br> We’ll come back to you within five working days to let you know the status of your application.
                                </p></div>
                            {{-- vip and active--}}
                        @elseif($type === 'vip' && customer()->status =='active')
                            <div
                                class="mb-1"
                                style="font-size: 17px;"
                                class="normal-text"
                            >
                                Hi <span style="color: #F18E8E;">{{ customer()->name }}</span> ! <br>
                                {{ transUi('YOU\'RE CONFIRMED TO ATTEND!') }} <br>
                                {{ trans('Venues + Events Live Manchester 2020') }}!<br>
                                {{ transUi('Your badge will be available to view and download one week before the show starts.') }}
                            </div>
                            {{-- supllier and active--}}
                        @elseif($type === 'supplier' && customer()->status =='active')
                            <p
                                class="normal-text"
                                style="font-size: 17px;"
                            >Hi {{ customer()->name }}!<br>
                                {{ transUi('YOU\'RE CONFIRMED TO ATTEND!') }} <br>
                                {{ trans('Venues + Events Live Manchester 2020') }}!<br>
                            {{ transUi('Your badge will be available to view and download one week before the show starts.') }}
                        @else
                            <div
                                class="normal-text"
                                style="font-size: 17px;"
                            >
                                Hi <span style="color: #F18E8E;">{{ customer()->name }}</span> ! <br>
                                {{ transUi('YOU\'RE CONFIRMED TO ATTEND!') }} <br>
                                {{ trans('Venues + Events Live Manchester 2020') }}!<br>
                                {{ transUi('Your badge will be available to view and download one week before the show starts.') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-12 text-center mobileText normal-text">
                        @if(customer()->status === 'pending')
                            Hi <span style="color: #F18E8E;">{{ customer()->name }}</span> ! <br>

                            <p>Thank you for registering to attend Venues + Events Live Manchester 2020. <br>

                                Your registration is currently pending review.<br> We’ll come back to you within five working days to let you know the status of your application.
                            </p>
                            {{-- vip and active--}}
                        @elseif($type === 'vip' && customer()->status =='active')
                            <div
                                class="mb-1"
                                style="font-size: 17px;"
                                class="normal-text"
                            >
                                Hi <span style="color: #F18E8E;">{{ customer()->name }}</span> ! <br>
                                {{ transUi('YOU\'RE CONFIRMED TO ATTEND!') }} <br>
                                {{ trans('Venues + Events Live Manchester 2020') }}!<br>
                                {{ transUi('Your badge will be available to view and download one week before the show starts.') }}
                            </div>
                            {{-- supllier and active--}}
                        @elseif($type === 'supplier' && customer()->status =='active')
                            <p
                                class="normal-text"
                                style="font-size: 17px;"
                            >Hi {{ customer()->name }}!<br>
                                {{ transUi('YOU\'RE CONFIRMED TO ATTEND!') }} <br>
                                {{ trans('Venues + Events Live Manchester 2020') }}!<br>
                                {{ trans('Please note that the show is only open to suppliers on Thursday 24th September.') }}!<br>
                            {{ transUi('Your badge will be available to view and download one week before the show starts.') }}
                        @else
                            <div
                                class="normal-text"
                                style="font-size: 17px;"
                            >
                                Hi <span style="color: #F18E8E;">{{ customer()->name }}</span> ! <br>
                                {{ transUi('YOU\'RE CONFIRMED TO ATTEND!') }} <br>
                                {{ trans('Venues + Events Live Manchester 2020') }}!<br>
                                {{ transUi('Your badge will be available to view and download one week before the show starts.') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="desktopText">
                <h2 class="mt-2 mb-2">{{ transUi('Registration Details') }} <i class="fa fa-clipboard"></i></h2>
                <p class="mb-1 normal-text">{{ customer()->title }} {{ customer()->name }}</p>
                <p class="mb-1 normal-text">{{ customer()->email }}</p>
                <p class="mb-1 normal-text">{{ customer()->job_title }}</p>
                <p class="mb-1 normal-text">{{ customer()->company }}</p>
            </div>

            <div class="mobileText text-center">
                <h2 class="mt-2 mb-2">{{ transUi('Registration Details') }} <i class="fa fa-clipboard"></i></h2>

                <p class="mb-1 normal-text">{{ customer()->title }} {{ customer()->name }}</p>
                <p class="mb-1 normal-text">{{ customer()->email }}</p>
                <p class="mb-1 normal-text">{{ customer()->job_title }}</p>
                <p class="mb-1 normal-text">{{ customer()->company }}</p>
            </div>
            <div class="mt-3">
                <div class="row">
                    <div class="col-md-6 desktopText">
                        <a
                            href="{{ route('step1') }}"
                            class="btn btn-sm btn-secondary"
                        >
                            <i
                                class="fa fa-pencil"
                                aria-hidden="true"
                            ></i>
                            {{ transUi('Amend my registration') }}
                        </a>
                    </div>
                    <div class="col-md-6 mobileText text-center">
                        <a
                            href="{{ route('step1') }}"
                            class="btn btn-sm btn-secondary mb-1"
                        >
                            <i
                                class="fa fa-pencil"
                                aria-hidden="true"
                            ></i>
                            {{ transUi('Amend my registration') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <h2 class="mb-2 desktopText"><strong>{{ transUi('Venue Details') }} <i class="fa fa-building"></i></strong>
            </h2>
            <h3 class="mb-2 mobileText text-center mt-2"><strong>{{ transUi('Venue Details') }}
                    <i class="fa fa-building"></i></strong></h3>

            <h4 class="desktopText normal-text">Venues + Events Live Manchester 2020!</h4>
            <h5 class=" text-center mobileText normal-text">Venues + Events Live Manchester 2020!</h5>

            <address
                class="mb-2 my-1 desktopText normal-text"
                style="font-size: 18px;"
            >
                Manchester Central,<br>
                Windmill St,<br>
                Manchester
                M2 3GX
            </address>
            <address
                class="mb-2 my-1 text-center mobileText normal-text"
                style="font-size: 15px;"
            >
                Manchester Central,<br>
                Windmill St,<br>
                Manchester
                M2 3GX<br>
                {{ trans('buzz.event.date') }}
            </address>
            <h5 class="mb-2 desktopText normal-text">
                {{ trans('buzz.event.date') }}
            </h5>

            <p class="mb-2 desktopText">
                <a
                    href="https://www.venuesandevents.co.uk/"
                    target="_blank"
                    class="normal-text"
                >
                    <i
                        class="fa fa-globe"
                        aria-hidden="true"
                    ></i>
                    Visit Website
                </a>
                <a
                    href="https://www.google.com/maps/dir/my+location/Manchester+Central+Convention+Complex/@52.9367673,-2.5283742,9z/"
                    target="_blank"
                    class="normal-text"
                >
                    <i
                        class="fa fa-map-marker ml-1"
                        aria-hidden="true"
                    ></i>
                    Get directions
                </a>
            </p>


            <p class="mb-2 mobileText text-center">
                <a
                    href="https://www.venuesandevents.co.uk/"
                    target="_blank"
                >
                    <i
                        class="fa fa-globe"
                        aria-hidden="true"
                    ></i>
                    Visit Website
                </a>
                <a
                    href="https://www.google.com/maps/dir/my+location/Old+Billingsgate,+1+Old+Billingsgate+Walk+(Riverside,+16+Lower+Thames+St,+manchester+EC3R+6DX/@51.9631636,-1.281158,9z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x4870b344960c5917:0x4bc379a8739906a5!2m2!1d-1.5693159!2d52.4201745!1m5!1m1!1s0x4876035191ff3db9:0x597fc1ee6823a304!2m2!1d-0.0840537!2d51.5090426"
                    target="_blank"
                >
                    <i
                        class="fa fa-map-marker ml-1"
                        aria-hidden="true"
                    ></i>
                    Get directions
                </a>
            </p>
            <leaflet-map
                :lat="53.4765447"
                :lng="-2.246416"
                :zoom="13"
            ></leaflet-map>

        </div>
    </div>

    @if($seminars->count())
        <h3 class="mb-3">{{ transUi('Seminar Agenda') }}</h3>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">{{ transUi('Session') }}</th>
                    <th scope="col">{{ transUi('Date & Time') }}</th>
                    <th scope="col">{{ transUi('Theatre') }}</th>
                    <th scope="col">
                        <div class="row justify-content-between">
                            <div class="col-md-8">{{ transUi('Attendee(s)') }}</div>
                            <div class="col-md-4">{{ transUi('Status') }}</div>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($seminars as $seminar)
                    <tr>
                        <td>{{ $seminar->title }}</td>
                        <td>
                            {{ $seminar->starts_at->copy()->tz(cache('settings')['locale']['timezone'])->format('l jS M') }}
                            <br/>
                            {{ $seminar->starts_at->copy()->tz(cache('settings')['locale']['timezone'])->format('H:i') }} - {{ $seminar->ends_at->copy()->tz(cache('settings')['locale']['timezone'])->format('H:i') }}
                        </td>
                        <td>{{ $seminar->theater->name }}</td>
                        <td>
                            @foreach($seminar->attendees_filtered as $attendee)
                                <div class="row justify-content-between">
                                    <div class="col-md-8">
                                        @if($attendee->customer)
                                            @if($attendee->customer->id === customer()->id)
                                                <i
                                                    title="{{ transUi('I am attending') }}"
                                                    class="fa fa-user"
                                                ></i>
                                            @else
                                                {{ $attendee->customer->name }}
                                            @endif
                                        @else
                                            {{ transUi('non allocated') }}
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        @if($attendee->status === 'in_basket')
                                            {{ transUi('In Basket') }}
                                        @elseif($attendee->status === 'awaiting_payment')
                                            {{ transUi(' Awaiting Payment') }}
                                        @else
                                            {{ transUi('Confirmed') }}
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    @if($webModulesOauthToken)
        <web-module-loader
            organization="{{ config('buzz.organization') }}"
            campaign="{{ config('buzz.campaign') }}"
            web-module-o-auth-token="{{ $webModulesOauthToken }}"
            version="v1-latest-{{ app()->environment() === 'production' ? 'prod' : 'staging' }}"
            env="production"
        ></web-module-loader>
    @endif
    @if(customer()->status === 'active')
        @if(config('buzz.social_reg_enabled') || config('buzz.social_share_enabled') || config('buzz.social_invite_enabled'))
            <div class="grey-section fit-to-bottom mt-3">
                @if(config('buzz.social_share_enabled'))
                    <div class="row justify-content-center mb-3">
                        <div class="col-md-6">
                            <h5
                                class="mt-4 text-center"
                                id="inviteLink"
                            >{{ transUi('Tell people you\'re coming') }} <i class="fa fa-comment"></i></h5>

                            <div class="row social-icons pb-2">
                                <div class="col-4 facebook-icon">
                                    <a
                                        href="http://www.facebook.com/share.php?u={{ urlencode($shareUrls['facebook']) }}"
                                        target="_blank"
                                    >
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="col-4 twitter-icon">
                                    <a
                                        href="http://twitter.com/intent/tweet?status={{ urlencode(trans('buzz.twitter_share_message')) }}+{{ urlencode($shareUrls['twitter']) }}"
                                        target="_blank"
                                    >
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="col-4 linkedin-icon">
                                    <a
                                        href="http://www.linkedin.com/shareArticle?mini=true&url={{ urlencode($shareUrls['linkedin']) }}&summary={{ urlencode(trans('buzz.linkedin_share_message')) }}"
                                        target="_blank"
                                    >
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @else

                @endif
                @if(config('buzz.social_invite_enabled'))
                    <social
                        :buzz-config="{{ json_encode(config('buzz')) }}"
                        suggest-url="{{ route('social::suggest') }}"
                        invite-connection-url="{{ route('social::invite-connection') }}"
                        invite-email-url="{{ route('social::invite-email') }}"
                    ></social>
                @endif

                @if(config('buzz.social_reg_enabled'))
                    <div class="login-buttons login-buttons--main">
                        <h5 class="mt-4 text-center">{{ transUi('Connect your social accounts') }}</h5>
                        @foreach([
                            'linkedin' => 'linkedin',
                         ] as $icon => $provider)
                            @if($customerSocials->contains($provider))
                                <span class="btn btn--buzz btn--{{ $provider }} connected">
                            <i class="fa fa-{{ $icon }}"></i> {{ transUi('already connected') }}
                        </span>
                            @else
                                <a
                                    class="btn btn--buzz btn--{{ $provider }}"
                                    href="{{ $stream->social_connect_urls[$provider] .'/' . customer()->id  }}"
                                >
                                    <i class="fa fa-{{ $icon }}"></i> {{ transUi('Connect') }}
                                </a>
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        @endif
@endsection


@extends('layout/auth')

@section('content')
    <div class="grey-section border-top-0 mb-3">
        <h3>{{ transUi('Communication Preferences') }}</h3>
        <p class="mb-0">{{ transUi('Update your preferences below') }}</p>
    </div>

    <form
        role="form"
        method="post"
        action="{{ route('save-privacy') }}"
    >
        <h4 class="required">Admissions Policy</h4>
        <p class="normal-text">The organisers of Venues + Events Live reserve the right to refuse entry. The canvassing of exhibitors is strictly prohibited and anyone overtly selling to, inappropriately distracting exhibitors, or other visitors, will be asked to leave. View the full admissions policy <a href="https://www.venuesandevents.co.uk/information/admissions-policy" target="_blank" style="text-decoration: none; color: black">here.</a></p>
        <p class="normal-text">
            The organisers of Venues + Events Live reserve the right to refuse entry to anyone deemed unsuitable and the canvassing of exhibitors is strictly prohibited.</p>
        <h5>Photography + Videography</h5>
        <p class="normal-text">

            During Venues + Events Live there will be photographers and film crews onsite. By entering our event, you are giving consent that images/videos of yourself may be used to promote Venues + Events Live and/or its sponsors. If you do not wish to be filmed or photographed please inform the organisers when entering the venue and you will be given a sticker to add to your badge.
        </p>
        <h5>Badge Scanning</h5>
        <p class="normal-text">
            I understand that by allowing my badge to be scanned by an exhibitor/sponsor or by scanning my badge at a touchpoint, I will be providing that exhibitor/sponsor with my personal data (as disclosed when registering). I consent to this personal data being transferred and accept that this exhibitor/sponsor may contact me about their products or services. I also understand and agree that my personal data may be held and used by the organiser of Venues + Events Live, and any third party hosting provider acting on its behalf, in order to stage the event and to analyse visitor traffic with a view to improving the event experience for visitors.
        </p>
        <buzz-checkbox
            name="questions[admissions-policy][options][yes][key]"
            :required="{{ in_array('admissions-policy', $required) ? 'true' : 'false' }}"
            true-value="1477af78-56f5-11ea-a16b-000000000000"
            :checked-values="{{ json_encode(customer() && customer()->getAnswerByIdentifier('admissions-policy') ? ['1477af78-56f5-11ea-a16b-000000000000'] : [])}}"
        >
    <span class="required">
        I have read and understood the Admissions Policy
    </span>
        </buzz-checkbox>


        <button
            type="submit"
            class="btn btn-primary btn-block mt-4"
        >
            {{ transUi('Submit') }}
        </button>
    </form>
@endsection

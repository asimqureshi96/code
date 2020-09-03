@if($type === 'supplier')

    <answer
        :answer="{{ customer()->getAnswerByIdentifier('would-you-like-to-receive-a-regular-subscription-to-squaremeal') ?? 'null' }}"
        :question="{{ $questions['would-you-like-to-receive-a-regular-subscription-to-squaremeal'] }}"
        :required="{{ in_array('would-you-like-to-receive-a-regular-subscription-to-squaremeal', $required) ? 'true' : 'false' }}"
        :column-count="2"
    >
        <answer
            :answer="{{ customer()->getAnswerByIdentifier('how-would-you-like-to-receive-this') ?? 'null' }}"
            :question="{{ $questions['how-would-you-like-to-receive-this'] }}"
            :required="{{ in_array('how-would-you-like-to-receive-this', $required) ? 'true' : 'false' }}"
            :column-count="2"
            slot="yes::after"
        ></answer>
    </answer>

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
@else
    <answer
        :answer="{{ customer()->getAnswerByIdentifier('what-type-of-events-do-you-organise') ?? 'null' }}"
        :question="{{ $questions['what-type-of-events-do-you-organise'] }}"
        :required="{{ in_array('what-type-of-events-do-you-organise', $required) ? 'true' : 'false' }}"
        :column-count="2"
    ></answer>
    <answer
        :answer="{{ customer()->getAnswerByIdentifier('where-do-you-hold-your-events') ?? 'null' }}"
        :question="{{ $questions['where-do-you-hold-your-events'] }}"
        :required="{{ in_array('where-do-you-hold-your-events', $required) ? 'true' : 'false' }}"
        :column-count="2"
    >
        <answer
            :answer="{{ customer()->getAnswerByIdentifier('if-overseas-is-chosen-where-do-you-hold-your-overseas-events') ?? 'null' }}"
            :question="{{ $questions['if-overseas-is-chosen-where-do-you-hold-your-overseas-events'] }}"
            :required="{{ in_array('if-overseas-is-chosen-where-do-you-hold-your-overseas-events', $required) ? 'true' : 'false' }}"
            :column-count="2"
            slot="overseas::after"
        ></answer>
        <answer
            :answer="{{ customer()->getAnswerByIdentifier('if-overseas-is-chosenhow-many-overseas-events-do-you-organise') ?? 'null' }}"
            :question="{{ $questions['if-overseas-is-chosenhow-many-overseas-events-do-you-organise'] }}"
            :required="{{ in_array('if-overseas-is-chosenhow-many-overseas-events-do-you-organise', $required) ? 'true' : 'false' }}"
            slot="overseas::after"
        ></answer>
    </answer>
    <answer
        :answer="{{ customer()->getAnswerByIdentifier('are-you-responsible-for-booking-travel-if-so-please-let-us-know-which-options') ?? 'null' }}"
        :question="{{ $questions['are-you-responsible-for-booking-travel-if-so-please-let-us-know-which-options'] }}"
        :required="{{ in_array('are-you-responsible-for-booking-travel-if-so-please-let-us-know-which-options', $required) ? 'true' : 'false' }}"
        :column-count="2"
    ></answer>

@endif

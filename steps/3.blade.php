<h4><i class="fa fa-handshake-o mr-1"></i>{{ transUi('Your events') }}</h4>
@if($type === 'supplier')
    <answer
        :answer="{{ customer()->getAnswerByIdentifier('which-type-of-events-do-you-supply-services-to') ?? 'null' }}"
        :question="{{ $questions['which-type-of-events-do-you-supply-services-to'] }}"
        :required="{{ in_array('which-type-of-events-do-you-supply-services-to', $required) ? 'true' : 'false' }}"
        :column-count="2"
    ></answer>

    <custom-answer
        :answer="{{ customer()->getAnswerByIdentifier('venue-supplier-do-you-represent') ?? 'null' }}"
        :question="{{ $questions['venue-supplier-do-you-represent'] }}"
        :required="{{ in_array('venue-supplier-do-you-represent', $required) ? 'true' : 'false' }}"
        :column-count="2"
        :collapsed="false"
    ></custom-answer>
    <answer
        :answer="{{ customer()->getAnswerByIdentifier('main-reason-for-attending-venues-events-live-supplier') ?? 'null' }}"
        :question="{{ $questions['main-reason-for-attending-venues-events-live-supplier'] }}"
        :required="{{ in_array('main-reason-for-attending-venues-events-live-supplier', $required) ? 'true' : 'false' }}"
        :column-count="2"
    ></answer>
@else
    <answer
        :answer="{{ customer()->getAnswerByIdentifier('what-percentage') ?? 'null' }}"
        :question="{{ $questions['what-percentage'] }}"
        :required="{{ in_array('what-percentage', $required) ? 'true' : 'false' }}"
    ></answer>
    <answer
        :answer="{{ customer()->getAnswerByIdentifier('what-is-your-level-of-seniority') ?? 'null' }}"
        :question="{{ $questions['what-is-your-level-of-seniority'] }}"
        :required="{{ in_array('what-is-your-level-of-seniority', $required) ? 'true' : 'false' }}"
    ></answer>
    <answer
        :answer="{{ customer()->getAnswerByIdentifier('how-many-events-do-you-organise-each-year') ?? 'null' }}"
        :question="{{ $questions['how-many-events-do-you-organise-each-year'] }}"
        :required="{{ in_array('how-many-events-do-you-organise-each-year', $required) ? 'true' : 'false' }}"
    ></answer>
    <answer

        :answer="{{ customer()->getAnswerByIdentifier('what-size-events-do-you-hold-on-average-attendance') ?? 'null' }}"
        :question="{{ $questions['what-size-events-do-you-hold-on-average-attendance'] }}"
        :required="{{ in_array('what-size-events-do-you-hold-on-average-attendance', $required) ? 'true' : 'false' }}"
        :column-count="2"
    ></answer>
    <answer
        :answer="{{ customer()->getAnswerByIdentifier('what-is-your-total-annual-budget-for-events') ?? 'null' }}"
        :question="{{ $questions['what-is-your-total-annual-budget-for-events'] }}"
        :required="{{ in_array('what-is-your-total-annual-budget-for-events', $required) ? 'true' : 'false' }}"
    ></answer>
@endif

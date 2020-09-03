<answer
    @if(customer())
    :answer="{{ customer()->getAnswerByIdentifier('what-is-your-main-reason-for-attending-venues-events-live') ?? 'null' }}"
    @endif
    :question="{{ $questions['what-is-your-main-reason-for-attending-venues-events-live'] }}"
    :required="{{ in_array('what-is-your-main-reason-for-attending-venues-events-live', $required) ? 'true' : 'false' }}"
    :column-count="2"
></answer>

@if(!customer()->custom_status || !$type === 'xlist')
    <answer
        :answer="{{ customer()->getAnswerByIdentifier('register-for-ve-london') ?? 'null' }}"
        :question="{{ $questions['register-for-ve-london'] }}"
        :required="{{ in_array('register-for-ve-london', $required) ? 'true' : 'false' }}"
    ></answer>
@endif
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


<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<h4 class="required">Your Interests</h4>
<h5 class="mb-0">Which of the following is of most interest to you?</h5>
<p class="normal-text mb-1">Click the buttons to reveal the options</p>
<h5 id="venueInt" class="mb-1"><img src="https://livebuzz-production.s3.eu-west-1.amazonaws.com/ocean-media/campaign/0aad5e6e-435b-11ea-a207-000000000000/iconmonstr-arrow-20-16.png"> Interests - Venues</h5>
<div id="venueText" class="venueText">
    <answer
        @if(customer())
        :answer="{{ customer()->getAnswerByIdentifier('which-of-the-following-are-you-most-interested-in-venues') ?? 'null' }}"
        @endif
        :show-title="false"
        :question="{{ $questions['which-of-the-following-are-you-most-interested-in-venues'] }}"
        :required="{{ in_array('which-of-the-following-are-you-most-interested-in-venues', $required) ? 'true' : 'false' }}"
        :column-count="2"
    ></answer>
</div>

<h5 id="suppInt"><img src="https://livebuzz-production.s3.eu-west-1.amazonaws.com/ocean-media/campaign/0aad5e6e-435b-11ea-a207-000000000000/iconmonstr-arrow-20-16.png"> Interests - Suppliers</h5>
<div id="suppText" class="suppText">
    <answer
        @if(customer())
        :answer="{{ customer()->getAnswerByIdentifier('which-of-the-following-are-you-most-interested-in-suppliers') ?? 'null' }}"
        @endif
        :show-title="false"
        :question="{{ $questions['which-of-the-following-are-you-most-interested-in-suppliers'] }}"
        :required="{{ in_array('which-of-the-following-are-you-most-interested-in-suppliers', $required) ? 'true' : 'false' }}"
        :column-count="2"
    ></answer>
</div>
<script>
$(document).ready(function(){
    $("#venueInt").click(function(){
        $("#venueText").toggle();
    });
    $("#suppInt").click(function(){
        $("#suppText").toggle();
    });
});
</script>

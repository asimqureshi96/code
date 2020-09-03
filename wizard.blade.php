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

<div class="grey-section progress-section row mb-3">
    <div class="progress">
        <div
            role="progressbar"
            aria-valuenow="{{ ($step / $totalSteps) * 100 }}"
            aria-valuemin="0"
            aria-valuemax="100"
            class="progress-bar"
            style="width: {{ ($step / $totalSteps) * 100 }}%;"
        >
            Step {{ $step }} of {{ $totalSteps }}
        </div>
    </div>
</div>

<div class="{{ $block }}">
    <div class="{{ $block->elem('container') }}">
        <div class="{{ $block->elem('text') }}">
            {{ GetMessage("MFT_" . $name) }}@if($isRequired)<span class="{{ $block->elem('required') }}">*</span>@endif
        </div>
        <textarea class="@if($isRequired)required @endif{{ $block->elem('field') }}" name="{{ $name }}">{{ ($arResult[$name] ?? '') }}</textarea>
    </div>
</div>
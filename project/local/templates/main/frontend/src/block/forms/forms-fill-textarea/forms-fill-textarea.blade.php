<div class="{{ $block }}">
    <div class="{{ $block->elem('container') }}">
        <div class="{{ $block->elem('text') }}">
            {{ GetMessage("MFT_" . $name) }}@if(empty($requiredFields) || in_array($name, $requiredFields))<span class="{{ $block->elem('required') }}">*</span>@endif
        </div>
        <textarea class="{{ $block->elem('field') }}" name="{{ $name }}">{{ ($arResult[$name] ?? '') }}</textarea>
    </div>
</div>
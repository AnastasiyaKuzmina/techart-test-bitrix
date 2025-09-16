<div class="{{ $block }}">
    <div class="{{ $block->elem('container') }}">
        <div class="{{ $block->elem('text') }}">
            {{ GetMessage("MFT_" . $name) }}@if(empty($requiredFields) || in_array($name, $requiredFields))<span class="{{ $block->elem('required') }}">*</span>@endif
        </div>
        <input class="{{ $block->elem('field') }}" type="{{ $type }}" name="user_{{ strtolower($name) }}" value="{{ $arResult['AUTHOR_' . $name] }}">
    </div>
</div>
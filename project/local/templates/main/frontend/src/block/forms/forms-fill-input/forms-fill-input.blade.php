<div class="{{ $block }}">
    <div class="{{ $block->elem('container') }}">
        <div class="{{ $block->elem('text') }}">
            {{ GetMessage("MFT_" . $name) }}@if($isRequired)<span class="{{ $block->elem('required') }}">*</span>@endif
        </div>
        <input class="@if($isRequired)required @endif{{ $block->elem('field') }} {{ $group }}" type="{{ $type }}" name="{{ $name }}" value="{{ $arResult['AUTHOR_' . $name] }}">
    </div>
</div>
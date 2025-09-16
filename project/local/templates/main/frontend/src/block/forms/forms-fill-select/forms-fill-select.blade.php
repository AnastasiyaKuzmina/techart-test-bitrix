<div class="{{ $block }}">
    <div class="{{ $block->elem('container') }}">
        <div class="{{ $block->elem('text') }}">
            {{ GetMessage("MFT_" . $name) }}@if(empty($requiredFields) || in_array($name, $requiredFields))<span class="{{ $block->elem('required') }}">*</span>@endif
        </div>
        <select class="{{ $block->elem('field') }}" name="{{ strtolower($name) }}" id="{{ strtolower($name) }}">
			@foreach($arResult["THEMES"] as $theme)
				<option value="{{ $arResult['AUTHOR_' . $name] }}">{{ $theme["NAME"] }}</option>
			@endforeach
		</select>
    </div>
</div>
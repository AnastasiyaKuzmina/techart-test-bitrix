<div class="{{ $block }}">
    <div class="{{ $block->elem('container') }}">
        <div class="{{ $block->elem('text') }}">
            {{ GetMessage("MFT_" . $name) }}@if($isRequired)<span class="{{ $block->elem('required') }}">*</span>@endif
        </div>
        <select class="@if($isRequired)required @endif{{ $block->elem('field') }}" name="{{ $name }}" id="{{ strtolower($name) }}">
            <option selected disabled value="">Выберите вариант</option>
			@foreach($arResult["THEMES"] as $theme)
				<option value="{{ $theme['NAME'] }}">{{ $theme["NAME"] }}</option>
			@endforeach
		</select>
    </div>
</div>
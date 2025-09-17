<div class="{{ $block }}">
    <div class="{{ $block->elem('container') }}">
        <input type="hidden" name="PARAMS_HASH" value="{{$arResult['PARAMS_HASH']}}">
        <input class="{{ $block->elem('field') }}" type="submit" name="{{ strtolower($name) }}" value="{{ GetMessage('MFT_' . $name) }}">
    </div>
</div>
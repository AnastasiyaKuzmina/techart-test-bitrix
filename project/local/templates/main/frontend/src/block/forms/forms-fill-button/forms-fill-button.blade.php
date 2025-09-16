<div class="{{ $block }}">
    <div class="{{ $block->elem('container') }}">
        <input class="{{ $block->elem('field') }}" type="submit" name="{{ strtolower($name) }}" value="{{ GetMessage('MFT_' . $name) }}">
    </div>
</div>
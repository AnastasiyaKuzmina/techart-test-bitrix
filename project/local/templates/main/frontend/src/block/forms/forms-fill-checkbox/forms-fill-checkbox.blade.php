<div class="{{ $block }}">
    <div class="{{ $block->elem('container') }}">
        <label class="{{ $block->elem('text') }}">
            <input class="{{ $block->elem('field') }}" type="checkbox" name="{{ $name }}" value="{{ $name }}">
            {{ $text }}
        </label>
    </div>
</div>
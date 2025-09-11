<div class="{{ $block }} wrapper">
    <div class="{{ $block->elem('container') }}">
        @for ($index = 0, $itemSize = count($titles); $index < $itemSize; $index++)
            @if($index > 0)
                <p class="{{ $block->elem('delimeter') }}">/</p>
            @endif
            @if ($links[$index] <> "")
                <p class="{{ $block->elem('element') }}">
                    <a class="{{ $block->elem('element-link') }}" href=" {{ $links[$index] }}" title="{{ htmlspecialcharsex($titles[$index]) }}">
                        {{ htmlspecialcharsex($titles[$index]) }}
                    </a>
                </p>
            @else
                <p class="{{ $block->elem('element')->mod('current') }}">{{ htmlspecialcharsex($titles[$index]) }}</p>
            @endif
        @endfor
    </div>
</div>
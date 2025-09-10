<div class="{{ $block }} wrapper">
    <div class="{{ $block->elem('container') }}">
        @if (!empty($arResult))
            @foreach ($arResult as $arItem)
                <div class="{{ $block->elem('item') }}">
                    {!! $renderer->renderBlock('common/news-item', ['arItem' => $arItem, 'itemId' => $itemId]) !!}
                </div>
            @endforeach
        @endif
    </div>
</div>
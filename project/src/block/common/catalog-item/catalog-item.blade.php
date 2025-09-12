<div class="{{ $block }}">
    <div class="{{ $block->elem('container') }}">
        <a class="{{ $block->elem('link') }}" href="{!! $item['DETAIL_PAGE_URL'] !!}" title="<?=$imgTitle?>">
            <img class="{{ $block->elem('image') }}" src="{{ $item['PREVIEW_PICTURE']['SRC'] }}" alt="">
            <p class="{{ $block->elem('title') }}">{{ $item['NAME'] }}</p>
        </a>
        @if (!empty($arParams['PRODUCT_BLOCKS_ORDER']))
            @foreach ($arParams['PRODUCT_BLOCKS_ORDER'] as $blockName)
                @switch($blockName)
                    @case('props')
                        @if (!empty($item['DISPLAY_PROPERTIES']))
                            <div class="{{ $block->elem('properties') }}">
                                @foreach ($item['DISPLAY_PROPERTIES'] as $code => $displayProperty)
                                    <div class="{{ $block->elem('property') }}">
                                        <p class="{{ $block->elem('property-name') }}">{{ $displayProperty['NAME'] }}</p>
                                        <p class="{{ $block->elem('property-values') }}">
                                            {!! (is_array($displayProperty['DISPLAY_VALUE'])
                                                ? implode(' / ', $displayProperty['DISPLAY_VALUE'])
                                                : $displayProperty['DISPLAY_VALUE']) !!}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        @break
                @endswitch
            @endforeach
        @endif
    </div>
</div>

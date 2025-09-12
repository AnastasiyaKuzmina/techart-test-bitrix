<div class="{{ $block }} wrapper">
    <div class="{{ $block->elem('container') }}" id="{{ $itemIds['ID'] }}">
        <div class="{{ $block->elem('left-side') }}">
            <div class="{{ $block->elem('slider') }}" id="{{ $itemIds['BIG_SLIDER_ID'] }}">
                <img class="{{ $block->elem('image') }}" src="{{ $arResult['DETAIL_PICTURE']['SRC'] }}" alt="">
            </div>
        </div>
        <div class="{{ $block->elem('right-side') }}">
            <div class="{{ $block->elem('right-side-container') }}">
                <p class="{{ $block->elem('details') }}">{!! $arResult['DETAIL_TEXT'] !!}</p>
                @foreach ($arParams['PRODUCT_INFO_BLOCK_ORDER'] as $blockName)
                    @switch ($blockName)
                        @case ('props')
                            @if (!empty($arResult['DISPLAY_PROPERTIES']) || $arResult['SHOW_OFFERS_PROPS'])
                                @if (!empty($arResult['DISPLAY_PROPERTIES']))
                                    @foreach ($arResult['DISPLAY_PROPERTIES'] as $property)
                                        <div class="{{ $block->elem('property') }}">
                                            <p class="{{ $block->elem('property-name') }}">{{ $property['NAME'] }}</p>
                                            <p class="{{ $block->elem('property-values') }}">
                                                {!! (is_array($property['DISPLAY_VALUE'])
                                                    ? implode(' / ', $property['DISPLAY_VALUE'])
                                                    : $property['DISPLAY_VALUE']) !!}
                                            </p>
                                        </div>
                                    @endforeach
                                @endif
                            @endif
                            @break
                    @endswitch
                @endforeach
            </div>
        </div>
    </div>
</div>
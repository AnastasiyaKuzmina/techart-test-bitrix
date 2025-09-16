<div class="{{ $block }} wrapper">

    <div class="{{ $block->elem('container') }} bx-catalog-element" id="{{ $itemIds['ID'] }}">
        <div class="{{ $block->elem('left-side') }}">
            <div class="product-item-detail-slider-container" id="{{$itemIds['BIG_SLIDER_ID']}}">
                <span class="product-item-detail-slider-close" data-entity="close-popup"></span>
                <div class="product-item-detail-slider-block" data-entity="images-slider-block">
                    <div class="product-item-detail-slider-images-container" data-entity="images-container">
                        <div class="{{ $block->elem('slider') }} product-item-detail-slider-image active" data-entity="image" data-id="0">
                            <img src="{{ $arResult['DETAIL_PICTURE']['SRC'] }}" alt="" itemprop="image" title="book_img">
                        </div>
                    </div>
                </div>
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
                        @case('price')
                            @if (!empty($price))
                                <div class="{{ $block->elem('price') }}" id="{{$itemIds['PRICE']}}">
                                    <p class="{{ $block->elem('price-value') }}">{!! $price['PRINT_RATIO_PRICE'] !!}</p>
                                </div>
                            @endif
                            @break
                        @case('buttons')
                            <div class="{{ $block->elem('buttons') }} product-item-info-container product-item-hidden" data-entity="buttons-block">
                                @if ($actualItem['CAN_BUY'])
                                    <div class="{{ $block->elem('button-container')->mod('basket') }} product-item-button-container" id="{{$itemIds['BASKET_ACTIONS']}}">
                                        <a class="{{ $block->elem('button-link')->mod('basket') }} btn btn-default {{$buttonSizeClass}}" id="{{ $itemIds['BUY_LINK'] }}" href="javascript:void(0)" rel="nofollow">
                                            {{ ($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET']) }}
                                        </a>
                                    </div>
                                @endif
                            </div>
                            @break
                    @endswitch
                @endforeach
            </div>
        </div>
    </div>
</div>
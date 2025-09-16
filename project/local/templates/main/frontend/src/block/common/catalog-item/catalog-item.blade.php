<div class="{{ $block }}">
    <div class="product-item">
        <a class="{{ $block->elem('link') }} product-item-image-wrapper" href="{!! $item['DETAIL_PAGE_URL'] !!}" title="{{$imgTitle}}" data-entity="image-wrapper">
            <img class="{{ $block->elem('image') }} product-item-image-original" src="{{ $item['PREVIEW_PICTURE']['SRC'] }}" alt="" id="{{$itemIds['PICT']}}">
            <img class="{{ $block->elem('image') }} product-item-image-alternative" src="{{ $item['PREVIEW_PICTURE']['SRC'] }}" alt="" id="{{$itemIds['SECOND_PICT']}}">
        </a>
        <p class="{{ $block->elem('title') }} product-item-title">{{ $item['NAME'] }}</p>
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
        @endif
    </div>
</div>
 
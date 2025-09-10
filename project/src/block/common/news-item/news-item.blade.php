<div class="{{ $block }}" id="{{ $itemId }}">
    <div class="{{ $block->elem('container') }}">
        <p class="{{ $block->elem('date') }}">{{ date('d.m.Y', strtotime($arItem['FIELDS']['TAGS'])) }}</p>
        <h2 class="{{ $block->elem('title') }}">{{ $arItem['NAME'] }}</h2>
        <p class="{{ $block->elem('description') }}">{{ strip_tags($arItem['PREVIEW_TEXT']) }}</p>
        <a class="{{ $block->elem('button-link') }}" href="{{ $arItem['DETAIL_PAGE_URL'] }}">
            <div class="{{ $block->elem('button-container') }}">
                <p class="{{ $block->elem('button-text') }}">Подробнее</p>
                <img class="{{ $block->elem('button-icon') }}" src="{{ \TAO::frontendUrl('img/icons/Arrow.svg') }}" data-active="{{ \TAO::frontendUrl('img/icons/WhiteArrow.svg') }}" alt="">
            </div>
        </a>
    </div>
</div>
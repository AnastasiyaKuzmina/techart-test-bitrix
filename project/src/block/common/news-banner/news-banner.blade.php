<div class="{{ $block }}">
    <div class="{{ $block->elem('block') }}" style="background-image:url('{{ $arResult['ITEMS'][0]['DETAIL_PICTURE']['SRC'] }}');">
        <div class="{{ $block->elem('text') }}">
            <h2 class="{{ $block->elem('header') }}">{{ $arResult['ITEMS'][0]['NAME'] }}</h2>
            <p class="{{ $block->elem('announce') }}">{{ strip_tags($arResult['ITEMS'][0]['PREVIEW_TEXT']) }}</p>
        </div>
    </div>
</div>

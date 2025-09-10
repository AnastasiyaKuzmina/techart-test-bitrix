<div class="{{ $block }} wrapper">
    <div class="{{ $block->elem('container') }}">
        @while($arResult["nStartPage"] <= $arResult["nEndPage"])
            <a class="{{ $block->elem('link') }}" href="/news{{ $arResult['theme'] }}/page-{{ $arResult['nStartPage'] }}/">
                <div class="{{ $block->elem('figure') }}" class="news__page" @if ($arResult['nStartPage'] == $arResult['NavPageNomer']) style="background-color: #841844;" @endif>
                    <p class="{{ $block->elem('number') }}" @if ($arResult['nStartPage'] == $arResult['NavPageNomer']) style="color: white;" @endif>{{ $arResult["nStartPage"]++ }}</p>
                </div>
            </a>
        @endwhile
        <a class="{{ $block->elem('link') }}" href="/news<?= $arResult["theme"] ?>/page-<?=$arResult['NavPageNomer'] + 1?>/">
            <div class="{{ $block->elem('figure')->mod('arrow') }}" @if ($arResult['NavPageNomer'] == $arResult['NavPageCount']) style="display: none;" @endif>
                <img class="{{ $block->elem('arrow') }}" src="{{ \TAO::frontendUrl('img/icons/PageArrow.svg') }}" alt="">
            </div>
        </a>
    </div>
</div>
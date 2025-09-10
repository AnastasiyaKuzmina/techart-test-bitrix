<div class="{{ $block }}">
    <div class="{{ $block->elem('container') }}">
        <div class="{{ $block->elem('info') }}">
            <p class="{{ $block->elem('date') }}">{{ date('d.m.Y', strtotime($arResult["FIELDS"]["TAGS"])) }}</p>
            <h2 class="{{ $block->elem('title') }}">{{ $arResult['PREVIEW_TEXT'] }}</h2>
            <p class="{{ $block->elem('description') }}">{{ $arResult['DETAIL_TEXT'] }}</p>
            <div class="{{ $block->elem('themes-container') }}">
                <p class="{{ $block->elem('theme') }}">
                    <?php $themes = $arResult["DISPLAY_PROPERTIES"]["THEMES"]["LINK_ELEMENT_VALUE"];
                    $themesLinks = array_map (function($id, $name) {
                        return "<a href=\"/news/theme-" . $id . "/\">" . $name . "</a>";
                    }, array_column($themes, "ID"), array_column($themes, "NAME"));
                    echo implode(', ', $themesLinks);
                    ?> 
                </p>
            </div>
            <a class="{{ $block->elem('button-link') }}" href="/news/">
                <div class="{{ $block->elem('button-container') }}">
                    <img class="{{ $block->elem('button-icon') }}" src="{{ \TAO::frontendUrl('img/icons/Arrow.svg') }}" data-active="{{ \TAO::frontendUrl('img/icons/WhiteArrow.svg') }}" alt="" id="buttonImg">
                    <p class="{{ $block->elem('button-text') }}" id="buttonText">Назад к новостям</p>
                </div>
            </a>
        </div>
        <div class="{{ $block->elem('image') }}" style="background-image:url('{{$arResult['DETAIL_PICTURE']['SRC']}}');"></div>
    </div>
</div>
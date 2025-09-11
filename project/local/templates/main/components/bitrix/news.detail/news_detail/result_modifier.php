<?php 
$themes = $arResult["DISPLAY_PROPERTIES"]["THEMES"]["LINK_ELEMENT_VALUE"];
$themesLinks = array_map (function($id, $name) {
    return "<a href=\"/news/theme-" . $id . "/\">" . $name . "</a>";
}, array_column($themes, "ID"), array_column($themes, "NAME"));
$arResult['THEMES'] = implode(', ', $themesLinks);

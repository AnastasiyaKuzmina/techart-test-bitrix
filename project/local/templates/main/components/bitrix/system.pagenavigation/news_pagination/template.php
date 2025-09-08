<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true); 
?>

<?php
$theme = "";

if (isset($_GET["theme"])) {
    $theme = "/theme-" . $_GET["theme"];
}
?>

<div class="news__navigation">
    <?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>
        <a href="/news<?= $theme; ?>/page-<?=$arResult["nStartPage"]?>/">
            <div class="news__page" <?php if ($arResult["nStartPage"] == $arResult['NavPageNomer']) { ?>style="background-color: #841844;"<?php } ?>>
                <p <?php if ($arResult["nStartPage"] == $arResult['NavPageNomer']) { ?>style="color: white;"<?php } ?>><?= $arResult["nStartPage"]; ?></p>
            </div>
        </a>
        <?$arResult["nStartPage"]++?>
    <?endwhile?>
    <a href="/news<?= $theme; ?>/page-<?=$arResult['NavPageNomer'] + 1?>/">
        <div class="news__arrow" <?php if ($arResult['NavPageNomer'] == $arResult['NavPageCount']) {?>style="display: none;"<?php } ?>>
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/PageArrow.svg" alt="">
        </div>
    </a>
</div>





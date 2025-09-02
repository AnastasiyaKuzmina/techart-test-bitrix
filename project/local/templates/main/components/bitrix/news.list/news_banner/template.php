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
<div class="image-part__block" style="background-image:url('<?php echo $arResult["ITEMS"][0]["DETAIL_PICTURE"]["SRC"]; ?>');">
    <div class="image-part__text">
        <h2><?php echo $arResult["ITEMS"][0]["NAME"]; ?></h2>
        <p><?php echo $arResult["ITEMS"][0]["PREVIEW_TEXT"]; ?></p>
    </div>
</div>

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
<div class="structure">
    <a class="structure__main" href="/news/list.php">Главная</a>
    <p class="structure__delimiter">/</p>
    <p class="structure__current"><?= $arResult["NAME"]; ?></p>
</div>
<div class="news">
    <div class="news__header">
        <h1><?= $arResult["NAME"]; ?></h1>
    </div>
    <div class="news__container">
        <div class="news__item">
            <div class="news__date">
                <p><?= date('d.m.Y', strtotime($arResult["FIELDS"]["TAGS"])); ?></p>
            </div>
            <div class="news__title">
                <h2><?= $arResult["PREVIEW_TEXT"]; ?></h2>
            </div>
            <div class="news__description">
                <p><?= $arResult["DETAIL_TEXT"]; ?></p>
            </div>
			<div class="news__themes">
				<?php foreach ($arResult["DISPLAY_PROPERTIES"]["THEMES"]["LINK_ELEMENT_VALUE"] as $arItem) : ?>
                    <a href="/news/list.php?theme=<?= $arItem["ID"]; ?>"><?= $arItem["NAME"]; ?></a>
				<?php endforeach; ?>
			</div>
            <a href="/news/list.php" class="news__link">
                <div class="news__button" id="button">
                    <div class="news__button-content">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/Arrow.svg" data-active="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/WhiteArrow.svg" alt="" id="buttonImg">
                        <p id="buttonText">Назад к новостям</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="news__image" style="background-image:url('<?= $arResult["DETAIL_PICTURE"]["SRC"]; ?>');">
        </div>
    </div>
</div>
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
<div class="news__container">
    <?php if (!empty($arResult["ITEMS"])) : ?>
        <?php foreach ($arResult["ITEMS"] as $arItem) : ?>
            <div class="news__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="news__date">
                    <p><?= date('d.m.Y', strtotime($arItem['FIELDS']['TAGS'])); ?></p>
                </div>
                <div class="news__title">
                    <h2><?= $arItem["NAME"]; ?></h2>
                </div>
                <div class="news__description">
                    <?= $arItem["PREVIEW_TEXT"]; ?>
                </div>
                <a href="<?= $arItem["DETAIL_PAGE_URL"]; ?>">
                    <div class="news__button">
                        <div class="news__button-content">
                            <p>Подробнее</p>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/Arrow.svg" data-active="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/WhiteArrow.svg" alt="">
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>
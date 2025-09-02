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
<div class="news__navigation">
    <?php for($p = 1; $p <= $arResult['NavPageCount']; $p++) :?>
    <a href="/list.php?PAGEN_1=<?php echo $p; ?>/">
        <div class="news__page" <?php if ($p == $arResult['NavPageNomer']) { ?>style="background-color: #841844;"<?php } ?>>
            <p <?php if ($p == $arResult['NavPageNomer']) { ?>style="color: white;"<?php } ?>><?php echo $p; ?></p>
        </div>
    </a>
    <?php endfor; ?>
    <a href="/list.php?PAGEN_1=<?php echo $arResult['NavPageNomer'] + 1; ?>/">
        <div class="news__arrow" <?php if ($arResult['NavPageNomer'] == $arResult['NavPageCount']) {?>style="display: none;"<?php } ?>>
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/PageArrow.svg" alt="">
        </div>
    </a>
</div>
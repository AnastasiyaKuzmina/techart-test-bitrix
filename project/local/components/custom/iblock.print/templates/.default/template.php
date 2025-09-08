<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="themes-list">
	<div class="themes-list__container">
		<?php foreach($arResult as $arItem): ?>
            <p class="themes-item"><?=$arItem["NAME"]?></p>
		<?php endforeach; ?>
	</div>
</div>

<?endif?>
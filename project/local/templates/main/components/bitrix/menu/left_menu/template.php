<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav class="left-menu">
	<div class="left-menu__container">
		<?php foreach($arResult as $arItem): ?>
			<?php if($arItem["SELECTED"]): ?>
				<a href="<?=$arItem["LINK"]?>" class="menu-item menu-selected"><?=$arItem["TEXT"]?></a>
			<?php else: ?>
				<a href="<?=$arItem["LINK"]?>" class="menu-item"><?=$arItem["TEXT"]?></a>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
</nav>

<?endif?>
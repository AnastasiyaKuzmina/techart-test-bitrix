<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav class="top-menu">
	<div class="top-menu__container">
		<?php foreach($arResult as $arItem): ?>
			<?php if ($arItem['DEPTH_LEVEL'] === 1): ?> 
				<?php if($arItem["SELECTED"]): ?>
					<a href="<?=$arItem["LINK"]?>" class="menu-item menu-selected"><?=$arItem["TEXT"]?></a>
				<?php else: ?>
					<a href="<?=$arItem["LINK"]?>" class="menu-item"><?=$arItem["TEXT"]?></a>
				<?php endif; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
</nav>

<?endif?>
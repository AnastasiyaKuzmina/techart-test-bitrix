<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

use Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array|null $price
 * @var float|int|null $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var string $discountPositionClass
 * @var string $labelPositionClass
 * @var CatalogSectionComponent $component
 */
?>

<a href="<?=$item['DETAIL_PAGE_URL']?>" title="<?=$imgTitle?>">
	<img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="">
	<?=$item['NAME']?>
</a>

<?
if (!empty($arParams['PRODUCT_BLOCKS_ORDER']))
{
	foreach ($arParams['PRODUCT_BLOCKS_ORDER'] as $blockName)
	{
		switch ($blockName)
		{
			case 'price': ?>
				<?=$price['PRINT_RATIO_PRICE'];?>
				<?
				break;

			case 'props':
				if (!$haveOffers)
				{
					if (!empty($item['DISPLAY_PROPERTIES']))
					{
						?>
						<dl>
							<?
							foreach ($item['DISPLAY_PROPERTIES'] as $code => $displayProperty)
							{
								?>
								<dt>
									<?=$displayProperty['NAME']?>
								</dt>
								<dd>
									<?=(is_array($displayProperty['DISPLAY_VALUE'])
										? implode(' / ', $displayProperty['DISPLAY_VALUE'])
										: $displayProperty['DISPLAY_VALUE'])?>
								</dd>
								<?
							}
							?>
						</dl>
						<?
					}
				}
				break;
		}
	}
}
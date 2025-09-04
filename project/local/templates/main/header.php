<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?$APPLICATION->ShowHead();?>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?$APPLICATION->ShowTitle();?></title>
	<?php
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/layout.css");
	?>
</head>
<body>
<div id="panel">
	<?$APPLICATION->ShowPanel();?>
</div>
<div class="wrapper">
	<div class="header">
		<div class="header__container">
			<div class="header__content">
				<img class="header__logo" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/logo.svg" alt="">
				<p>Галактический вестник</p>
			</div>
			<?$APPLICATION->IncludeComponent(
			"bitrix:menu", 
			"top_menu", 
			array(
				"ALLOW_MULTI_SELECT" => "N",
				"CHILD_MENU_TYPE" => "left",
				"DELAY" => "N",
				"MAX_LEVEL" => "2",
				"MENU_CACHE_GET_VARS" => array(
				),
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_TYPE" => "N",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"ROOT_MENU_TYPE" => "top",
				"USE_EXT" => "Y",
				"COMPONENT_TEMPLATE" => "top_menu"
			),
			false
			);?>
		</div>
		<?php $APPLICATION->IncludeComponent(
			"bitrix:menu", 
			"left_menu", 
			array(
				"ALLOW_MULTI_SELECT" => "N",
				"CHILD_MENU_TYPE" => "left",
				"DELAY" => "N",
				"MAX_LEVEL" => "2",
				"MENU_CACHE_GET_VARS" => array(
				),
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_TYPE" => "N",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"ROOT_MENU_TYPE" => "left",
				"USE_EXT" => "Y",
				"COMPONENT_TEMPLATE" => "left_menu"
			),
			false
		);?>
	<hr class="banner-hr">
	</div>
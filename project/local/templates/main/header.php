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
	    <div class="header__content">
			<img class="header__logo" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/icons/logo.svg" alt="">
			<p>Галактический вестник</p>
	    </div>
	    <hr>
	</div>					
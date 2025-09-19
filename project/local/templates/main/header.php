<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

\TAO::frontendCss('index');
\TAO::frontendJs('index');
?>
<?php
ob_start();
$APPLICATION->IncludeComponent(
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
);
$headerTopMenu = ob_get_clean();

ob_start();
$APPLICATION->IncludeComponent(
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
);
$headerLeftMenu = ob_get_clean(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?$APPLICATION->ShowHead();?>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://api-maps.yandex.ru/v3/?apikey=7ab09b24-8796-40e1-81d6-c128f5d6e198&lang=ru_RU" type="text/javascript"></script>
</head>
<body>
<div id="panel">
	<? $APPLICATION->ShowPanel();?>
</div>
<?=
\TAO::frontend()->renderBlock(
    'common/header', [
		'user' => $USER,
		'sessionId' => bitrix_sessid_get(),
		'topMenu' => $headerTopMenu,
		'leftMenu' => $headerLeftMenu,
		'routeName' => parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
		]
)
?>
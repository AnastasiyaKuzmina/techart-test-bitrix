<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "Главная");
$APPLICATION->SetTitle("Главная");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.register", 
	"news_register", 
	array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array(
			0 => "EMAIL",
			1 => "NAME",
			2 => "LAST_NAME",
		),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array(
			0 => "EMAIL",
			1 => "NAME",
			2 => "LAST_NAME",
		),
		"SUCCESS_PAGE" => "/",
		"USER_PROPERTY" => array(
		),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y",
		"COMPONENT_TEMPLATE" => "news_register"
	),
	false
);?>
 <br>
 <?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
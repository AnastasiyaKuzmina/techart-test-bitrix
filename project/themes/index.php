<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "Темы новостей");
$APPLICATION->SetTitle("Темы новостей");
?>
<h1><?$APPLICATION->ShowTitle()?></h1>
<?$APPLICATION->IncludeComponent(
	"custom:iblock.print", 
	".default", 
	array(
		"IBLOCK_ID" => "3",
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "news"
	),
	false
);
?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
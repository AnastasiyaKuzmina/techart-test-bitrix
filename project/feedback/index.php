<?
use Bitrix\Main\Page\Asset;
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "Обратная связь");
$APPLICATION->SetTitle("Обратная связь");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/feedback/style.css"); 
?><h1><?$APPLICATION->ShowTitle()?></h1>
<?$APPLICATION->IncludeComponent(
	"custom:main.feedback", 
	"news_feedback", 
	array(
		"EMAIL_TO" => "anastasiya.kuzmina.0202@mail.ru",
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => "news_feedback",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "3"
	),
	false
);?><br><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
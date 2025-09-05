<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "Главная");
$APPLICATION->SetTitle("Главная");
?>
<?$APPLICATION->IncludeComponent("bitrix:main.register", "news_register", Array(
	"AUTH" => "Y",	// Автоматически авторизовать пользователей
		"REQUIRED_FIELDS" => array(	// Поля, обязательные для заполнения
			0 => "EMAIL",
		),
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_FIELDS" => array(	// Поля, которые показывать в форме
			0 => "EMAIL",
		),
		"SUCCESS_PAGE" => "/",	// Страница окончания регистрации
		"USER_PROPERTY" => "",	// Показывать доп. свойства
		"USER_PROPERTY_NAME" => "",	// Название блока пользовательских свойств
		"USE_BACKURL" => "Y",	// Отправлять пользователя по обратной ссылке, если она есть
		"COMPONENT_TEMPLATE" => "news_register"
	),
	false
);?>
 <br>
 <?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
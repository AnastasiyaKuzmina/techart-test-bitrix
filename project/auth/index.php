<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0) 
	LocalRedirect($backurl);

$APPLICATION->SetTitle("Авторизация");
?>

<?$APPLICATION->IncludeComponent("bitrix:main.auth.form", "news_auth", Array(
	"AUTH_FORGOT_PASSWORD_URL" => "",	// Страница для восстановления пароля
	"AUTH_REGISTER_URL" => "/auth/registration.php",	// Страница для регистрации
	"AUTH_SUCCESS_URL" => "/",	// Страница после успешной авторизации
	"COMPONENT_TEMPLATE" => "news_auth"
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
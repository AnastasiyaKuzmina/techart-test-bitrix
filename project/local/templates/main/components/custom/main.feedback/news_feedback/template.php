<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
use Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs('bitrix/js/main/core/core.js');
Asset::getInstance()->addJs('bitrix/js/main/core/core_ajax.js');
CJSCore::Init(array('ajax', 'window', 'fx', 'popup'));
?>

<?=
\TAO::frontend()->renderBlock(
    'forms/forms-form', [
		'renders' => $arResult["RENDERS"],
		]
);
?>

<script>
	var messages = {
		REQUIRED_ERROR_NAME: '<?=GetMessageJS('MF_REQ_NAME')?>',
		REQUIRED_ERROR_EMAIL: '<?=GetMessageJS('MF_REQ_EMAIL')?>',
		REQUIRED_ERROR_PHONE: '<?=GetMessageJS('MF_REQ_PHONE')?>',
		REQUIRED_ERROR_THEME: '<?=GetMessageJS('MF_REQ_THEME')?>',
		REQUIRED_ERROR_MESSAGE: '<?=GetMessageJS('MF_REQ_MESSAGE')?>',
		REQUIRED_ERROR_AGREEMENT: 'Подтвердите ознакомление с условиями.',
		REQUIRED_ERROR_GROUP: 'Введите почту или номер телефона',
	};
</script>

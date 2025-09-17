<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "О нас");
$APPLICATION->SetTitle("О нас");
?> 
<?=
\TAO::frontend()->renderBlock(
    'common/title', [
		'title' =>  $APPLICATION->GetTitle()
		]
)
?>
<?=
\TAO::frontend()->renderBlock(
    'common/map', []
)
?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
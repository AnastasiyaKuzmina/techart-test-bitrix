<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<?php
if(empty($arResult))
	return "";

return \TAO::frontend()->renderBlock(
    'common/news-breadcrumb', [
		'titles' => array_column($arResult, 'TITLE'),
		'links' => array_column($arResult, 'LINK')
		]
	);
?>
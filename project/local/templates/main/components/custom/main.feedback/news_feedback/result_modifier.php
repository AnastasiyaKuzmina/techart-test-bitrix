<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if (!CModule::IncludeModule('iblock')) {
    return;
}

$IBLOCK_ID = $arParams["IBLOCK_ID"];

$themes = [];
$arSelect = Array("NAME");
$arFilter = Array("IBLOCK_ID"=>$IBLOCK_ID, "ACTIVE"=>"Y");
$result = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);

while($element = $result->GetNextElement())
{
	$arFields = $element->GetFields();
	$themes[] = ['NAME' => $arFields['NAME']];
}  

$arResult["THEMES"] = $themes;

$arResult["RENDERS"][] = \TAO::frontend()->renderBlock(
    'forms/forms-fill-input', [
		'name' => "NAME",
		'type' => "text",
		'requiredFields' => $arParams["REQUIRED_FIELDS"],
		'arResult' => $arResult,
		]
);

$arResult["RENDERS"][] = \TAO::frontend()->renderBlock(
    'forms/forms-fill-input', [
		'name' => "EMAIL",
		'type' => "email",
		'requiredFields' => $arParams["REQUIRED_FIELDS"],
		'arResult' => $arResult,
		]
);

$arResult["RENDERS"][] = \TAO::frontend()->renderBlock(
    'forms/forms-fill-select', [
		'name' => "THEME",
		'requiredFields' => $arParams["REQUIRED_FIELDS"],
		'arResult' => $arResult,
		]
);

$arResult["RENDERS"][] = \TAO::frontend()->renderBlock(
    'forms/forms-fill-textarea', [
		'name' => "MESSAGE",
		'requiredFields' => $arParams["REQUIRED_FIELDS"],
		'arResult' => $arResult,
		]
);

$arResult["RENDERS"][] = \TAO::frontend()->renderBlock(
    'forms/forms-fill-button', [
		'name' => "SUBMIT",
		]
);
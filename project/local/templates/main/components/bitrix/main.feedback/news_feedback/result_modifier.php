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
		'isRequired' => empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"]),
		'arResult' => $arResult,
		]
);

$arResult["RENDERS"][] = \TAO::frontend()->renderBlock(
    'forms/forms-fill-input', [
		'name' => "EMAIL",
		'type' => "email",
		'group' => 'group',
		'isRequired' => empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"]),
		'arResult' => $arResult,
		]
);

$arResult["RENDERS"][] = \TAO::frontend()->renderBlock(
    'forms/forms-fill-input', [
		'name' => "PHONE",
		'type' => "tel",
		'group' => 'group',
		'isRequired' => empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"]),
		'arResult' => $arResult,
		]
);

$arResult["RENDERS"][] = \TAO::frontend()->renderBlock(
    'forms/forms-fill-select', [
		'name' => "THEME",
		'isRequired' => empty($arParams["REQUIRED_FIELDS"]) || in_array("THEME", $arParams["REQUIRED_FIELDS"]),
		'arResult' => $arResult,
		]
);

$arResult["RENDERS"][] = \TAO::frontend()->renderBlock(
    'forms/forms-fill-textarea', [
		'name' => "MESSAGE",
		'isRequired' => empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"]),
		'arResult' => $arResult,
		]
);

$arResult["RENDERS"][] = \TAO::frontend()->renderBlock(
    'forms/forms-fill-checkbox', [
		'name' => "AGREEMENT",
		'text' => "Ознакомлен с условиями",
		]
);

$arResult["RENDERS"][] = \TAO::frontend()->renderBlock(
    'forms/forms-fill-button', [
		'name' => "SUBMIT",
		'arResult' => $arResult,
		]
);
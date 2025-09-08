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
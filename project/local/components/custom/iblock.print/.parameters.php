<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
if (!CModule::IncludeModule('iblock')) {
    return;
}

$arIBlockType = CIBlockParameters::GetIBlockTypes();
$arInfoBlocks = array();
$arFilter = array('ACTIVE' => 'Y');

if (!empty($arCurrentValues['IBLOCK_TYPE'])) {
    $arFilter['TYPE'] = $arCurrentValues['IBLOCK_TYPE'];
}

$rsIBlock = CIBlock::GetList(
    array('SORT' => 'ASC'),
    $arFilter
);

while($iblock = $rsIBlock->Fetch()) {
    $arInfoBlocks[$iblock['ID']] = '['.$iblock['ID'].'] '.$iblock['NAME'];
}

$arComponentParameters = [
    'GROUPS' => [
        'IBLOCK_PARAMS' => [
            'NAME' => 'Параметры инфоблока',
        ],
    ],
    'PARAMETERS' => [
        'IBLOCK_TYPE' => [
            'NAME' => 'Выберите тип инфоблока',
            'TYPE' => 'LIST',
            'VALUES' => $arIBlockType,
            'PARENT' => 'IBLOCK_PARAMS',
            'REFRESH' => 'Y',
        ],
        'IBLOCK_ID' => [
            'NAME' => 'Выберите инфоблок',
            'TYPE' => 'LIST',
            'VALUES' => $arInfoBlocks,
            'PARENT' => 'IBLOCK_PARAMS',
        ]
    ],
];
?>
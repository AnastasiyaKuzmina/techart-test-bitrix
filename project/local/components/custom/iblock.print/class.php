<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

if (!CModule::IncludeModule('iblock')) {
    return;
}

class IBlockPrintComponent extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        $arParams['IBLOCK_ID'] ??= 0;
        
        return $arParams;
    }

    public function executeComponent()
    {
        if ($this->startResultCache())
        {
            $this->initResult();
            
            if (empty($this->arResult))
            {
                $this->abortResultCache();
                return;
            }
            
            $this->includeComponentTemplate();
        }
    }

    private function initResult()
    {
        $iblockId = (int)$this->arParams['IBLOCK_ID'];

        if ($iblockId < 1)
        {
            ShowError('Инфоблок не найден');
            return;
        }

        $arSelect = Array("NAME");
        $arFilter = Array("IBLOCK_ID"=>$iblockId, "ACTIVE"=>"Y");
        $result = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);

        if (empty($result))
        {
            ShowError('Инфоблок не содержит элементов');
            return;
        }

        while($element = $result->GetNextElement())
        {
            $arFields = $element->GetFields();
            $this->arResult[] = [
                'NAME' => $arFields['NAME']
            ];
        }  
    }
}
?>
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

<?php
    $offices = [
        "office1" => [
            "Офис в Туле", 
            "300041, г. Тула, ул. Ф. Смирнова ул., д. 28, оф. 601-602, 701, 703-707, 712", 
            "Тел. / Факс: (4872) 250-450, 57-05-01",
            "[37.584685, 54.200802]"
        ],
        "office2" => [
            "Офис в Москве", 
            "115230, г. Москва, Варшавское шоссе, д. 47, к. 4, оф. 1224 (12 этаж)", 
            "Тел. / Факс: (495) 933-62-10",
            "[37.630133, 55.679242]"
        ],
    ]
?>

<?=
\TAO::frontend()->renderBlock(
    'common/offices', [
        'offices' => $offices,
    ]
)
?>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
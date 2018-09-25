<?php
/**
 * Created by PhpStorm.
 * User: irusnn
 * Date: 20.09.2018
 * Time: 16:25
 */
?>
<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

if(!empty($arParams['SKU_PROPS']["TSVET"]['VALUES']))
{
    $arResult['HLBLOCK_VALUES']["TSVET"] = array();
    foreach ($arParams['SKU_PROPS']["TSVET"]['VALUES'] as $key_v=>$value){
        $XMLID = $value['XML_ID'];
        CModule::IncludeModule("highloadblock");

        $hlblock = HL\HighloadBlockTable::getById(5)->fetch();

        $entity = HL\HighloadBlockTable::compileEntity($hlblock);
        $entity_data_class = $entity->getDataClass();

        $rsProp = $entity_data_class::getList(Array(
            "select"   => Array('*'),
            "filter"   => Array('=UF_XML_ID' => $XMLID),
        ));

        while($arProp = $rsProp->Fetch())
        {
            $arResult['HLBLOCK_VALUES']["TSVET"][$arProp['UF_XML_ID']] = $arProp;
        }
    }
}
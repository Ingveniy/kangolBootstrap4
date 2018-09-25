<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

foreach ($arResult['CAT_PRICES'] as $CAT_PRICE) {
    $arResult['JS_CATPRICE'][$CAT_PRICE['ID']]= $CAT_PRICE;
    
}

if(!empty($arResult['SKU_PROPS']["TSVET"]['VALUES']))
{
    $arResult['HLBLOCK_VALUES']["TSVET"] = array();
    foreach ($arResult['SKU_PROPS']["TSVET"]['VALUES'] as $key_v=>$value){
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
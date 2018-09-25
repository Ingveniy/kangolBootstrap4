<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */
$colorsClass = array("MOUTARDE" => "beige_color", "SURGE" => "blue_color", "BLACK/GOLD" => "black_color", "STORM" => "dark_blue_color", "WHITE" => "dark_blue_color", "NAVY" => "dark_blue_color",
    "DARK BLUE" => "dark_blue_color", "FORRESTER" => "blue_color", "BLACK" => "white_color", "CAMO" => "dark_blue_color", "SEERSUCKER STRIPE" => "dark_blue_color",
    "LINEN MARL" => "dark_blue_color", "HOUNSTOOTH CHECK" => "green_color", "PRINCE PLAID" => "black_color", "INDIGO WASH" => "black_color", "BLACK WASH" => "black_color",
    "NATURAL" => "green_color", "ALGAE" => "multicolor_color", "PATCHWORK" => "multicolor_color", "QUARTZ" => "beige_color", "BISCUIT" => "beige_color", "OAK" => "multicolor_color",
    "GREY" => "multicolor_color", "MARINE" => "multicolor_color", "GOLDIE" => "yellow_color", "INDIGO" => "dark_blue_color", "BROWN" => "beige_color", "TAN" => "dark_blue_color",
    "WHITE/BLACK" => "dark_blue_color", "BLACK/GOLDIE" => "dark_blue_color", "SKYDIVE" => "black_color", "BLACK/WHITE" => "beige_color", "CLAY" => "beige_color",
    "CHARCOAL/QUARTZ" => "beige_color", "SMOG" => "black_color", "SKY" => "black_color", "KHAKI" => "black_color", "BEIGE" => "black_color", "DENIM" => "beige_color",
    "FLANNEL" => "beige_color", "OFF WHITE/BLACK" => "green_color", "DARK BLUE/ULTRAMARINE" => "green_color", "BLACK/OFF WHITE" => "beige_color", "SILT/SAFETY" => "beige_color",
    "COAL" => "green_color", "CREAM" => "green_color", "LIGHT FLANNEL" => "dark_blue_color", "LILAS" => "dark_blue_color", "MOREL" => "green_color", "DARK FLANNEL" => "dark_blue_color",
    "RED/OFF WHITE" => "beige_color", "NAVY/OFF WHITE" => "beige_color", "FLANNEL/OFF WHITE" => "beige_color", "DEEP" => "black_color", "BATTLE" => "black_color", "SILT" => "black_color",
    "SILT CHECK" => "multicolor_color", "BURGUNDY" => "dark_blue_color", "DARK GREY" => "dark_blue_color", "ULTRAMARINE" => "black_color", "NAVY CHECK" => "pink_color",
    "PHTHALO" => "pink_color", "WAFFLE MARL" => "pink_color", "TUCK STITCH" => "black_color", "SQUARE DOT" => "black_color", "BROWN MARL" => "yellow_color", "GREY PLAID" => "yellow_color",
    "NAVY/VERT" => "yellow_color", "BLACK/CONCRETE" => "yellow_color", "GREY MARL" => "brown_color", "ATLANTIS" => "grey_color", "TERRACOTTA" => "dark_blue_color",
    "NIMES" => "dark_blue_color", "CONCRETE" => "dark_blue_color", "LODEN" => "black_color", "HUNTER MIX" => "multicolor_color", "BRONZE" => "multicolor_color",
    "TOBACCO" => "dark_blue_color", "BOUCLE STRIPE" => "dark_blue_color", "TURIN PLAID" => "dark_blue_color", "VINO MARL" => "brown_color", "NIGHTWATCH PLAID" => "brown_color",
    "DENIM MARL" => "brown_color", "BLACK MARL" => "dark_blue_color", "NAVY/FLANNEL" => "dark_blue_color", "ETHER/DEEP" => "brown_color", "BLACK/WOOD" => "brown_color",
    "NAVY/WHITE" => "green_color", "FLANNEL/MOUTARDE" => "green_color", "BLACK/FLANNEL" => "green_color", "VINO" => "dark_blue_color", "MINI CHECK" => "dark_blue_color",
    "LATTICE CHECK" => "multicolor_color", "LAUREL" => "multicolor_color", "ROJO" => "multicolor_color", "AMERICANO" => "pink_color", "PHTHALLO/AMARILLO" => "pink_color",
    "MICRO GINGHAM" => "blue_color", "NATURAL PINSTRIPE" => "blue_color", "HONEY" => "pink_color", "CHARCOAL" => "pink_color", "SCARLET" => "grey_color", "SLATE GREY FELT" => "grey_color",
    "GREY/CHARCOAL" => "grey_color", "BLACK/BEIGE" => "black_color", "LAVENDRE" => "black_color", "COGNAC" => "black_color", "NAVY/PUTTY" => "white_color", "HONEY/COGNAC" => "white_color",
    "WHITE/NAVY" => "black_color", "RIVER" => "multicolor_color", "AMBER" => "multicolor_color", "CANVAS HERRINGBONE" => "multicolor_color", "ETHER" => "grey_color",
    "PRUSIAN" => "grey_color", "BLACK FELT" => "black_color", "MIDNIGHT" => "orange_color", "WINE" => "orange_color", "GOLD" => "orange_color", "NAVY PLAID" => "grey_color",
    "PURPLE" => "black_color", "BLUE" => "black_color", "BLACK MIX" => "black_color", "SLATE GREY" => "multicolor_color", "MOUSE" => "multicolor_color", "NU" => "multicolor_color",
    "MALACHITE" => "", "INK" => "multicolor_color", "MANDARIN" => "multicolor_color", "FUCHSINE" => "multicolor_color", "SERGEANT" => "multicolor_color", "SAFETY" => "multicolor_color",
    "CALCITE" => "multicolor_color", "AMARILLO" => "multicolor_color", "BLACK/RED" => "multicolor_color", "NAVY/NUGGET" => "beige_color", "CHARCOAL/BLACK" => "multicolor_color",
    "CARDINAL" => "multicolor_color", "DUSK/WHITE" => "dark_blue_color", "BLACK/TARUM" => "dark_blue_color", "WHITE/NU" => "dark_blue_color", "INK/MALACHITE" => "beige_color",
    "BLACK/SERGEANT" => "beige_color", "TARUM" => "beige_color", "MORSE STRIPE BLACK" => "beige_color", "PISTACHIO" => "dark_blue_color", "MORSE STRIPE WHITE" => "dark_blue_color",
    "ARGENT" => "black_color", "SOLAR" => "black_color", "HARRIS TWEED" => "black_color", "MUSTARD" => "multicolor_color", "RIOJA" => "multicolor_color", "WOOD" => "multicolor_color",
    "URCHIN" => "dark_blue_color", "CABLE JACQ" => "dark_blue_color", "HERRINGBONE CHECK" => "beige_color", "CAMO HERRINGBONE" => "beige_color", "TERRIER CHECK" => "dark_blue_color",
    "SPACE MARL" => "dark_blue_color", "BLACK/ROJO" => "beige_color", "BLACK/MARINE" => "beige_color", "VERT" => "beige_color", "ULTRA BLUE" => "beige_color", "CLARET" => "beige_color",
    "DOUGH" => "black_color", "CAMO WHITE" => "black_color", "CAMO DOUGH" => "black_color", "ARCTIC" => "dark_blue_color", "CLIFF" => "dark_blue_color", "PHLOX" => "beige_color",
    "DARK BROWN" => "beige_color", "GREIGE" => "beige_color", "GREEN" => "beige_color", "LIGHT BLUE" => "brown_color", "PUTTY" => "brown_color", "RIVIERA" => "brown_color",
    "WALNUT" => "beige_color", "MONARCH" => "grey_color", "NUDO" => "grey_color", "ESPRESSO" => "white_color", "CAMEL" => "grey_color", "RED" => "blue_color", "TOXIC" => "orange_color",
    "MASTERS GREEN" => "dark_blue_color", "ROYALE" => "beige_color", "PERSICA" => "black_color", "DK. GREY" => "brown_color", "ROSA" => "brown_color", "SURF" => "beige_color",
    "CLUB JAQUARD MARINE" => "black_color", "CERULEAN" => "multicolor_color", "MAJOR" => "dark_blue_color", "BRAZIL" => "dark_blue_color", "ENGLAND" => "beige_color",
    "SPAIN" => "white_color", "USA" => "white_color", "LOZENGE JACQUARD ROSA" => "white_color", "LOZENGE JACQUARD WHITE" => "dark_blue_color", "SLJ JACQUARD WHITE/NAVY" => "dark_blue_color", "PARAGON JACQUARD LEMON" => "dark_blue_color", "PRUNE" => "dark_blue_color", "EMPRESS" => "black_color", "KALE" => "black_color", "KIRBY PLAID" => "multicolor_color", "EDGCOTE MARL" => "multicolor_color", "PLYMOUTH CHECK" => "multicolor_color", "DOVE" => "multicolor_color", "EMERALD" => "multicolor_color", "LEMON" => "yellow_color", "TANGERINE/MARINE" => "multicolor_color", "AMAZON" => "grey_color", "EGGPLANT" => "green_color", "SAND" => "green_color", "NATURAL JACQUARD" => "green_color", "NAVY JACQUARD" => "green_color", "FISHBONE UMBER" => "black_color", "CHECKERS BLACK" => "black_color", "CHECKER TOBACCO" => "white_color", "FISHBONE BLACK" => "white_color", "CHEVIOT TOBACCO" => "white_color", "DK.KHAKI" => "white_color", "" => "dark_blue_color", "TOBACCO BASKET CHECK" => "dark_blue_color", "FLANNEL MARL" => "dark_blue_color", "BLACK TWILL" => "dark_blue_color", "HT BLUE" => "black_color", "BLUE SEERSUCKER" => "black_color", "GREY STRIPE" => "black_color", "MICRO CHECK" => "black_color", "KILLINGTON PLAID" => "white_color", "SUBTLE CHECK" => "beige_color", "RUSSET PLAID" => "black_color", "BLACK/GREY" => "dark_blue_color", "WHITE/RIVER" => "black_color", "SPRIG" => "black_color", "CLAY MIX" => "black_color", "NATURAL MIX" => "black_color", "LG ARGYLE BURGUNDY" => "grey_color", "HERRINGBONE STRIPE MUSTARD" => "grey_color", "SLJ JACQUARD BLK" => "grey_color", "NAVY HERRINGBONE" => "grey_color", "SUMTER STRIPE" => "grey_color", "VELVET CHECK" => "grey_color", "DARK CYAN" => "grey_color", "SUTTON CHECK" => "grey_color", "SELBY PLAID" => "white_color", "GT" => "white_color", "HOLBORN CHECK" => "grey_color", "BIRDIE CHECK" => "black_color", "ARGYLE JACQUARD LT BLUE" => "black_color", "BOCCA PLAID" => "purple_color", "PIETRO HERRINGBONE" => "purple_color", "TREVISO PLAID" => "purple_color", "BOLD HERRINGBONE" => "grey_color", "FOLIAGE" => "brown_color", "SYCAMORE" => "brown_color", "SLJ JACQUARD LEMON" => "brown_color", "CLUB JACQUARD NAVY" => "brown_color", "SKY BLUE" => "grey_color", "TEAL" => "grey_color", "GRASS" => "grey_color", "BLUE/GREY" => "grey_color", "BLUE/RED" => "black_color", "NAVY/GOLD" => "red_color", "RED/BLUE" => "red_color", "VIRIDIAN" => "red_color", "VIRDIS" => "red_color", "UMBER" => "white_color", "ROCK" => "white_color", "SPRUCE" => "white_color", "FLAX" => "white_color", "SABLE" => "dark_blue_color", "AZUL" => "dark_blue_color", "SUNBURST" => "dark_blue_color", "TOPAZ" => "dark_blue_color", "DUSK" => "grey_color", "LG ARGYLE NAVY" => "grey_color", "DAYLIGHT" => "grey_color");


$this->setFrameMode(true);
$this->addExternalCss('/bitrix/css/main/bootstrap.css');

$templateLibrary = array('popup', 'fx');
$currencyList = '';

if (!empty($arResult['CURRENCIES']))
{
	$templateLibrary[] = 'currency';
	$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}

$templateData = array(
	'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
	'TEMPLATE_LIBRARY' => $templateLibrary,
	'CURRENCIES' => $currencyList,
	'ITEM' => array(
		'ID' => $arResult['ID'],
		'IBLOCK_ID' => $arResult['IBLOCK_ID'],
		'OFFERS_SELECTED' => $arResult['OFFERS_SELECTED'],
		'JS_OFFERS' => $arResult['JS_OFFERS']
	)
);
unset($currencyList, $templateLibrary);

$mainId = $this->GetEditAreaId($arResult['ID']);
$itemIds = array(
    'ID' => $mainId,
    'PICT' => $mainId.'_pict',
    'DISCOUNT_PICT_ID' => $mainId.'_dsc_pict',
    'STICKER_ID' => $mainId.'_sticker',
    'BIG_SLIDER_ID' => $mainId.'_big_slider',
    'BIG_IMG_CONT_ID' => $mainId.'_bigimg_cont',
    'SLIDER_CONT_ID' => $mainId.'_slider_cont',
    'SLIDER_LIST' => $mainId.'_slider_list',
    'SLIDER_LEFT' => $mainId.'_slider_left',
    'SLIDER_RIGHT' => $mainId.'_slider_right',
    'OLD_PRICE' => $mainId.'_old_price',
//    'PRICE' => $mainId.'_price',
    'PRICE_ID' => $mainId.'_price',
    'DISCOUNT_PRICE' => $mainId.'_price_discount',
    'SLIDER_CONT_OF_ID' => $mainId.'_slider_cont_',
    'SLIDER_LIST_OF_ID' => $mainId.'_slider_list_',
    'SLIDER_LEFT_OF_ID' => $mainId.'_slider_left_',
    'SLIDER_RIGHT_OF_ID' => $mainId.'_slider_right_',
    'QUANTITY' => $mainId.'_quantity',
    'QUANTITY_DOWN' => $mainId.'_quant_down',
    'QUANTITY_UP' => $mainId.'_quant_up',
    'QUANTITY_MEASURE' => $mainId.'_quant_measure',
    'QUANTITY_LIMIT' => $mainId.'_quant_limit',
    'BASIS_PRICE' => $mainId.'_basis_price',
    'BUY_LINK' => $mainId.'_buy_link',
    'ADD_BASKET_LINK' => $mainId.'_add_basket_link',
//    'BASKET_ACTIONS' => $mainId.'_basket_actions',
    'BASKET_ACTIONS_ID' => $mainId.'_basket_actions',
    'NOT_AVAILABLE_MESS' => $mainId.'_not_avail',
    'COMPARE_LINK' => $mainId.'_compare_link',
    'PROP' => $mainId.'_prop_',
    'TREE_ID' => $mainId.'_skudiv',
    'DISPLAY_PROP_DIV' => $mainId.'_sku_prop',
    'OFFER_GROUP' => $mainId.'_set_group_',
    'BASKET_PROP_DIV' => $mainId.'_basket_prop',
);
$obName = $templateData['JS_OBJ'] = 'ob'.preg_replace('/[^a-zA-Z0-9_]/', 'x', $mainId);
$name = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
	: $arResult['NAME'];
$title = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE']
	: $arResult['NAME'];
$alt = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT']
	: $arResult['NAME'];

$haveOffers = !empty($arResult['OFFERS']);
if ($haveOffers)
{
	$actualItem = isset($arResult['OFFERS'][$arResult['OFFERS_SELECTED']])
		? $arResult['OFFERS'][$arResult['OFFERS_SELECTED']]
		: reset($arResult['OFFERS']);
	$showSliderControls = false;

	foreach ($arResult['OFFERS'] as $offer)
	{
		if ($offer['MORE_PHOTO_COUNT'] > 1)
		{
			$showSliderControls = true;
			break;
		}
	}
}
else
{
	$actualItem = $arResult;
	$showSliderControls = $arResult['MORE_PHOTO_COUNT'] > 1;
}

$skuProps = array();
$price = $actualItem['ITEM_PRICES'][$actualItem['ITEM_PRICE_SELECTED']];
$measureRatio = $actualItem['ITEM_MEASURE_RATIOS'][$actualItem['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'];
$showDiscount = $price['PERCENT'] > 0;

$showDescription = !empty($arResult['PREVIEW_TEXT']) || !empty($arResult['DETAIL_TEXT']);
$showBuyBtn = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION']);
$buyButtonClassName = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showAddBtn = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION']);
$showButtonClassName = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showSubscribe = $arParams['PRODUCT_SUBSCRIPTION'] === 'Y' && ($arResult['CATALOG_SUBSCRIBE'] === 'Y' || $haveOffers);

$arParams['MESS_BTN_BUY'] = $arParams['MESS_BTN_BUY'] ?: Loc::getMessage('CT_BCE_CATALOG_BUY');
$arParams['MESS_BTN_ADD_TO_BASKET'] = $arParams['MESS_BTN_ADD_TO_BASKET'] ?: Loc::getMessage('CT_BCE_CATALOG_ADD');
$arParams['MESS_NOT_AVAILABLE'] = $arParams['MESS_NOT_AVAILABLE'] ?: Loc::getMessage('CT_BCE_CATALOG_NOT_AVAILABLE');
$arParams['MESS_BTN_COMPARE'] = $arParams['MESS_BTN_COMPARE'] ?: Loc::getMessage('CT_BCE_CATALOG_COMPARE');
$arParams['MESS_PRICE_RANGES_TITLE'] = $arParams['MESS_PRICE_RANGES_TITLE'] ?: Loc::getMessage('CT_BCE_CATALOG_PRICE_RANGES_TITLE');
$arParams['MESS_DESCRIPTION_TAB'] = $arParams['MESS_DESCRIPTION_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_DESCRIPTION_TAB');
$arParams['MESS_PROPERTIES_TAB'] = $arParams['MESS_PROPERTIES_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_PROPERTIES_TAB');
$arParams['MESS_COMMENTS_TAB'] = $arParams['MESS_COMMENTS_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_COMMENTS_TAB');
$arParams['MESS_SHOW_MAX_QUANTITY'] = $arParams['MESS_SHOW_MAX_QUANTITY'] ?: Loc::getMessage('CT_BCE_CATALOG_SHOW_MAX_QUANTITY');
$arParams['MESS_RELATIVE_QUANTITY_MANY'] = $arParams['MESS_RELATIVE_QUANTITY_MANY'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_MANY');
$arParams['MESS_RELATIVE_QUANTITY_FEW'] = $arParams['MESS_RELATIVE_QUANTITY_FEW'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_FEW');

$positionClassMap = array(
	'left' => 'product-item-label-left',
	'center' => 'product-item-label-center',
	'right' => 'product-item-label-right',
	'bottom' => 'product-item-label-bottom',
	'middle' => 'product-item-label-middle',
	'top' => 'product-item-label-top'
);

$discountPositionClass = 'product-item-label-big';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION']))
{
	foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos)
	{
		$discountPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$labelPositionClass = 'product-item-label-big';
if (!empty($arParams['LABEL_PROP_POSITION']))
{
	foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos)
	{
		$labelPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}
?>

  <div class="section30 bx_item_detail bx_blue" id="<? echo $itemIds['ID']; ?>">
    <div class="container">
    	<? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "template1", array(
		    "START_FROM" => 0,
		    "PATH" => "",
		    "SITE_ID" => SITE_ID
		)); ?>
      <div class="section-30-content w-clearfix">
        <h3 class="heading-2 _2">2-Tone Recycled Tropic 504</h3>
        <div class="sec30-left-column">

                    <div class="product-item-detail-slider-container" id="<?=$itemIds['BIG_SLIDER_ID']?>">
                        <span class="product-item-detail-slider-close" data-entity="close-popup"></span>
                        <div class="product-item-detail-slider-block
						<?=($arParams['IMAGE_RESOLUTION'] === '1by1' ? 'product-item-detail-slider-block-square' : '')?>"
                             data-entity="images-slider-block">
                            <span class="product-item-detail-slider-left" data-entity="slider-control-left" style="display: none;"></span>
                            <span class="product-item-detail-slider-right" data-entity="slider-control-right" style="display: none;"></span>
                            <div class="product-item-label-text <?=$labelPositionClass?>" id="<?=$itemIds['STICKER_ID']?>"
                                <?=(!$arResult['LABEL'] ? 'style="display: none;"' : '' )?>>
                                <?
                                if ($arResult['LABEL'] && !empty($arResult['LABEL_ARRAY_VALUE']))
                                {
                                    foreach ($arResult['LABEL_ARRAY_VALUE'] as $code => $value)
                                    {
                                        ?>
                                        <div<?=(!isset($arParams['LABEL_PROP_MOBILE'][$code]) ? ' class="hidden-xs"' : '')?>>
                                            <span title="<?=$value?>"><?=$value?></span>
                                        </div>
                                        <?
                                    }
                                }
                                ?>
                            </div>
                            <?
                            if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y')
                            {
                                if ($haveOffers)
                                {
                                    ?>
                                    <div class="product-item-label-ring <?=$discountPositionClass?>" id="<?=$itemIds['DISCOUNT_PERCENT_ID']?>"
                                         style="display: none;">
                                    </div>
                                    <?
                                }
                                else
                                {
                                    if ($price['DISCOUNT'] > 0)
                                    {
                                        ?>
                                        <div class="product-item-label-ring <?=$discountPositionClass?>" id="<?=$itemIds['DISCOUNT_PERCENT_ID']?>"
                                             title="<?=-$price['PERCENT']?>%">
                                            <span><?=-$price['PERCENT']?>%</span>
                                        </div>
                                        <?
                                    }
                                }
                            }
                            ?>
                            <div class="product-item-detail-slider-images-container" data-entity="images-container">
                                <?
                                if (!empty($actualItem['MORE_PHOTO']))
                                {
                                    foreach ($actualItem['MORE_PHOTO'] as $key => $photo)
                                    {
                                        ?>
                                        <div class="product-item-detail-slider-image<?=($key == 0 ? ' active' : '')?>" data-entity="image" data-id="<?=$photo['ID']?>">
                                            <img src="<?=$photo['SRC']?>" alt="<?=$alt?>" title="<?=$title?>"<?=($key == 0 ? ' itemprop="image"' : '')?>>
                                        </div>
                                        <?
                                    }
                                }

                                if ($arParams['SLIDER_PROGRESS'] === 'Y')
                                {
                                    ?>
                                    <div class="product-item-detail-slider-progress-bar" data-entity="slider-progress-bar" style="width: 0;"></div>
                                    <?
                                }
                                ?>
                            </div>
                        </div>
                        <?
                        if ($showSliderControls)
                        {
                            if ($haveOffers)
                            {
                                foreach ($arResult['OFFERS'] as $keyOffer => $offer)
                                {
                                    if (!isset($offer['MORE_PHOTO_COUNT']) || $offer['MORE_PHOTO_COUNT'] <= 0)
                                        continue;

                                    $strVisible = $arResult['OFFERS_SELECTED'] == $keyOffer ? '' : 'none';
                                    ?>
                                    <div class="product-item-detail-slider-controls-block" id="<?=$itemIds['SLIDER_CONT_OF_ID'].$offer['ID']?>" style="display: <?=$strVisible?>;">
                                        <?
                                        foreach ($offer['MORE_PHOTO'] as $keyPhoto => $photo)
                                        {
                                            ?>
                                            <div class="product-item-detail-slider-controls-image<?=($keyPhoto == 0 ? ' active' : '')?>"
                                                 data-entity="slider-control" data-value="<?=$offer['ID'].'_'.$photo['ID']?>">
                                                <img src="<?=$photo['SRC']?>">
                                            </div>
                                            <?
                                        }
                                        ?>
                                    </div>
                                    <?
                                }
                            }
                            else
                            {
                                ?>
                                <div class="product-item-detail-slider-controls-block" id="<?=$itemIds['SLIDER_CONT_ID']?>">
                                    <?
                                    if (!empty($actualItem['MORE_PHOTO']))
                                    {
                                        foreach ($actualItem['MORE_PHOTO'] as $key => $photo)
                                        {
                                            ?>
                                            <div class="product-item-detail-slider-controls-image<?=($key == 0 ? ' active' : '')?>"
                                                 data-entity="slider-control" data-value="<?=$photo['ID']?>">
                                                <img src="<?=$photo['SRC']?>">
                                            </div>
                                            <?
                                        }
                                    }
                                    ?>
                                </div>
                                <?
                            }
                        }
                        ?>
                    </div>
                </div>


        <div class="sec30-right-column" ">
          <h3 class="heading-2"><?=$name?></h3>
          <? $z=1;
//          foreach ($arParams['PRODUCT_INFO_BLOCK_ORDER'] as $blockName) {
          		if ($haveOffers && !empty($arResult['OFFERS_PROP'])) {
          		    ?>
          <div id="<?=$itemIds['TREE_ID']?>">
          <?
          			foreach ($arResult['SKU_PROPS'] as $skuProperty) {
          				if (!isset($arResult['OFFERS_PROP'][$skuProperty['CODE']]))
							continue;
						$propertyId = $skuProperty['ID'];
						$skuProps[] = array(
							'ID' => $propertyId,
							'SHOW_MODE' => $skuProperty['SHOW_MODE'],
							'VALUES' => $skuProperty['VALUES'],
							'VALUES_COUNT' => $skuProperty['VALUES_COUNT']
						);

						if ($skuProperty['CODE'] == "RAZMER" && $z!=3 && $z!= 4) { ?>
							<div id="<? echo $itemIds['PROP'].$skuProperty['ID']; ?>_cont" class="razmer <?=$z?>">
					            <div class="sec30-right-col-heging">Размер:
					              <br/>
					            </div>
					            <div class="s-xxl-link" data-entity="sku-line-block">
					              <ul id="<? echo $itemIds['PROP'].$skuProperty['ID']; ?>_list" class="s-xxl">
					              	<? foreach ($skuProperty['VALUES'] as &$value) {
										$value['NAME'] = htmlspecialcharsbx($value['NAME']); ?>
						                <li class="s-xxl-one-link w-inline-block" data-treevalue="<? echo $skuProperty['ID'].'_'.$value['ID']; ?>" data-onevalue="<? echo $value['ID']; ?>">
						                  <div class="text-block-7"><?=$value['NAME']?></div>
						                </li>
						            <? } ?>
					              </ul>
					              <a href="#" class="link">Как определить размер кепки?</a>
					            </div>
					        </div>
					<?	}
					if ($skuProperty['CODE'] == "TSVET" && $z!=3 && $z!= 4) { ?>
                        <??>
                        <?php //print_r($skuProperty);?>
							<div id="<? echo $itemIds['PROP'].$skuProperty['ID']; ?>_cont" class="sec30-right-col-colors <?=$z?>">
					            <div class="text-block-8"><?=htmlspecialcharsEx($skuProperty['NAME'])?></div>
					            <div data-animation="slide" data-duration="500" data-infinite="1" class="slider w-slider">
					              <div class="w-slider-mask" data-entity="sku-line-block">
					              	<ul id="<? echo $itemIds['PROP'].$skuProperty['ID']; ?>_list" class="slider_tsvet">

					              	<? 	$i=1;
					              		foreach ($skuProperty['VALUES'] as &$value) {
						              		$value['NAME'] = htmlspecialcharsbx($value['NAME']);

                                            if ($skuProperty['SHOW_MODE'] === 'PICT')
                                            {
                                                $style=($value['PICT']['ID']!='0') ? "background-image: url('".$value['PICT']['SRC']."')":'background-color:'.$arResult['HLBLOCK_VALUES']['TSVET'][$value['XML_ID']]['UF_BG_RGB'];
                                                ?>
                                                <li class="color_element_li" title="<?=$value['NAME']?>"
                                                    data-treevalue="<?=$propertyId?>_<?=$value['ID']?>"
                                                    data-onevalue="<?=$value['ID']?>"
                                                    data-delay="0"
                                                    style=""
                                                >
                                                    <div class="color_element" style="<?=$style?>"></div>
                                                </li>
                                                <?
                                            }else {
                                                if (isset($colorsClass[$value['NAME']]))
                                                    $skuColorClass = $colorsClass[$value['NAME']];
                                                ?>
                                                <li class="link-block-2 w-inline-block <?= $skuColorClass ?>"
                                                    data-treevalue="<? echo $skuProperty['ID'] . '_' . $value['ID']; ?>"
                                                    data-onevalue="<? echo $value['ID']; ?>">
                                                    <div class="one-color" data-color-id="<?= $value['ID'] ?>"></div>
                                                </li>
                                                <? if ($i % 11 == 0) {
                                                    echo "</div><div class='w-slide'>";
                                                }
                                                $i++;
                                            }
						              	} ?>

                                    </ul>
                                      <script type="application/javascript">
                                          $(document).ready(function(){
                                              $('.slider_tsvet').slick({
                                                  dots: false,
                                                  infinite: false,
                                                  slidesToShow: 9,
                                                  slidesToScroll: 9,
                                                  // centerMode: true,
                                                  variableWidth: true,
                                                  // variableWidth: true,
                                                  prevArrow: $('.left-arrow'),
                                                  nextArrow: $('.right-arrow'),
                                          });
                                          });
                                      </script>
					              </div>
				              	<? if (count($skuProperty['VALUES']) > 9) { ?>
					              <div class="left-arrow w-slider-arrow-left">
					                <img src="/bitrix/templates/kangol_new/components/bitrix/catalog.element/.default/images/5b48656e33b04e03bd46b051_arow20lft.png" width="4" class="image-7" />
					              </div>
					              <div class="right-arrow w-slider-arrow-right">
					                <img src="/bitrix/templates/kangol_new/components/bitrix/catalog.element/.default/images/5b48656eb9d11419dfb1b917_arow20rht.png" width="4" class="image-8" />
					              </div>
				          		<? } ?>
<!--					              <div class="slide-nav w-slider-nav w-round">-->
<!--					              </div>-->
					            </div>
					          </div>
					<?	}
					$z++;
					}
				}
				?>
              </div>
              <?
			//}
			?>


          <div class="shop-moskow">
            <div class="sec30-right-col-heging">Доступно в магазинах Москвы: </div>
              <?$APPLICATION->IncludeComponent(
                  "bitrix:catalog.store.amount",
                  "cart",
                  Array(
                      "STORES" => array(),
                      //"ELEMENT_ID" => $arResult['OFFERS'][$arResult['OFFERS_SELECTED']]['ID'],
                      "ELEMENT_ID" => $arResult['ID'],
                      "ELEMENT_CODE" => "",
                      "OFFER_ID" => $arResult['OFFERS'][$arResult['OFFERS_SELECTED']]['ID'],
                      "STORE_PATH" => "/store/store_detail.php",
                      "CACHE_TYPE" => "A",
                      "CACHE_TIME" => "36000",
                      "MAIN_TITLE" => "Наличие товара на складах",
                      "USER_FIELDS" => array("",""),
                      "FIELDS" => array("TITLE","ADDRESS","PHONE","SCHEDULE",""),
                      "SHOW_EMPTY_STORE" => "Y",
                      "USE_MIN_AMOUNT" => "Y",
                      "SHOW_GENERAL_STORE_INFORMATION" => "N",
                      "MIN_AMOUNT" => "0",
                      "FAST_BUY"=>$arResult['ID'],
                  )
              );?>


          </div>
          <div class="price">
            <div class="two-price">
                <pre style="display: none"><?=var_dump($arResult); ?></pre>
<!--              <div class="text-block-23">--><?//=$arResult['OFFERS'][$arResult['OFFERS_SELECTED']]['ITEM_PRICES'][0]['BASE_PRICE'];?>
              <div class="text-block-23" id="<?=$itemIds['PRICE_ID']?>">

                  <?=$price['UNROUND_BASE_PRICE']?>
<!--                  --><?//=$arResult['OFFERS'][$arResult['OFFERS_SELECTED']]['ITEM_PRICES'][0]['BASE_PRICE'];?>
<!--                <span class="text-span-2">руб</span>-->
                <span class="text-span-2"><?=$offerPrice['CURRENCY']?></span>
                <span class="text-span-3">(Розничная цена)</span>
              </div>
              <!--<div class="text-block-23 _2">10 550
                <span class="text-span-2">руб</span>
                <span class="text-span-3">(Оптовая цена)</span>
              </div>-->
            </div>
            <div class="btn-link" id="<?=$itemIds['BASKET_ACTIONS_ID']?>" style="display: <?=($actualItem['CAN_BUY'] ? '' : 'none')?>;">
              <a href="javascript:void(0);" class="ibadd2basket link-3 w-button" id="<?=$itemIds['ADD_BASKET_LINK']?>"><?=$arParams['MESS_BTN_ADD_TO_BASKET']?></a>
              <a href="#" class="link-5">В наличии в 4 магазинах</a>
            </div>
              <button data-id="<?=$arResult['ID']?>" class="bx_big bx_bt_button h2o_add_favor">
                  <img src="/bitrix/templates/kangol_new/components/bitrix/catalog.element/.default/images/5b484214b9d11414bbb19ac4_Vector.png" width="35" class="image-17" />
              </button>

          </div>
          <div data-duration-in="300" data-duration-out="100" class="w-tabs">
            <div class="tabs-menu-2 w-tab-menu">
              <a data-w-tab="Tab 5" class="tab-link-tab-5 w-inline-block w-tab-link w--current">
                <div class="text-block-17">описание</div>
              </a>
              <a data-w-tab="Tab 2" class="tab-link-tab-2-2 w-inline-block w-tab-link">
                <div class="text-block-14">Подробнее</div>
              </a>
              <a data-w-tab="Tab 3" class="tab-link-tab-3-2 w-inline-block w-tab-link">
                <div class="text-block-15">блог</div>
              </a>
              <a data-w-tab="Tab 4" class="tab-link-tab-4-2 w-inline-block w-tab-link">
                <div class="text-block-16">доставка и оплата</div>
              </a>
            </div>
            <div class="w-tab-content">
              <div data-w-tab="Tab 5" class="tab-pane-tab-5 w-tab-pane w--tab-active">
                <div class="tab5-menu-wrapper">
                    <?php foreach ($arResult['PROPERTIES'] as $key => $prop):?>
                        <?php if ($key == 'SEASON' && $prop['VALUE_ENUM_ID'][0] == '8826'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-27.svg" class="image-11 new" />
                                <div class="text-block-22"><?=$prop['VALUE'][0];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'SEASON' && $prop['VALUE_ENUM_ID'][0] == '8827'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-58.svg" class="image-11 new" />
                                <div class="text-block-22"><?=$prop['VALUE'][0];?></div>
                            </a>
                        <?php endif;?>

                        <?php if ($key == 'STRANA_PROISKHOZHDENIYA' && $prop['VALUE_ENUM_ID'] == '7428'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/us.svg" class="image-11 new" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'STRANA_PROISKHOZHDENIYA' && $prop['VALUE_ENUM_ID'] == '7432'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/brit.svg" class="image-11 new" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'STRANA_PROISKHOZHDENIYA' && $prop['VALUE_ENUM_ID'] == '7433'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/vlitaly_flag.svg" class="image-11 new" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>

                        <?php if ($key == 'MATERIAL_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7441'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-18.svg" class="image-11 new" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'MATERIAL_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7442'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-33.svg" class="image-11 new" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'MATERIAL_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7443'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-19.svg" class="image-11 new" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'MATERIAL_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7445'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-30.svg" class="image-11 new" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'MATERIAL_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7446'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-50.svg" class="image-11 new" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'MATERIAL_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7447'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-16.svg" class="image-11 new" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'MATERIAL_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7444'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-24.svg" class="image-11 new" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>

                        <?php if ($key == 'PROPS' && $prop['VALUE_ENUM_ID'] == '8819'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-17.svg" class="image-11 new" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'PROPS' && $prop['VALUE_ENUM_ID'] == '8824'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-60.svg" class="image-11 new" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'PROPS' && $prop['VALUE_ENUM_ID'] == '8823'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-63.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'PROPS' && $prop['VALUE_ENUM_ID'] == '8822'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-44.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'PROPS' && $prop['VALUE_ENUM_ID'] == '8820'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-57.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'PROPS' && $prop['VALUE_ENUM_ID'] == '8821'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-56.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'PROPS' && $prop['VALUE_ENUM_ID'] == '8825'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-40.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>

                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7811'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-31.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7803'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-49.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7809'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-47.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7814'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-29.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7816'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-48.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7806'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-34.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7804'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-21.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7805'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-20.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7801'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-37.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7800'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-36.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7810'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-28.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7820'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-55.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7813'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-51.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7807'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-54.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7815'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-52.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7812'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-26.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7802'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/vl_lar.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7818'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-62.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7817'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/vl_pov.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                        <?php if ($key == 'FORMA_GOLOVNOGO_UBORA' && $prop['VALUE_ENUM_ID'] == '7819'): ?>
                            <a href="#" class="link-block-10 w-inline-block">
                                <img src="/bitrix/templates/kangol_new/components/kombox/filter/ajax_new/images/Caps-60.svg" class="image-11" />
                                <div class="text-block-22"><?=$prop['VALUE'];?></div>
                            </a>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
                  <p class="paragraph-3">
                    <?=$arResult['DETAIL_TEXT'];?>
                  </p>
                  <br/>
                </p>
              </div>
              <div data-w-tab="Tab 2" class="w-tab-pane">
                <div class="table">
                    <?php $count = 1;?>
                    <?php foreach ($arResult['PROPERTIES'] as $key => $prop):?>
                        <?php if(($key == 'CML2_ARTICLE' && $prop['VALUE']) || ($key == 'STRANA_PROISKHOZHDENIYA' && $prop['VALUE']) || ($key == 'SOSTAV' && $prop['VALUE'])):?>
                            <div class="table-one-line <?=($count%2 == 0) ? '_2' : '';?>">
                                <div class="text-block-18"><?=$prop['NAME'];?></div>
                                <?php if (is_array($prop['VALUE'])):?>
                                    <?php foreach ($prop['VALUE'] as $key_prop => $val):?>
                                        <div class="text-block-18 _2"><?=$val;?></div>
                                    <?php endforeach;?>
                                <?php else:?>
                                    <div class="text-block-18 _2"><?=$prop['VALUE'];?></div>
                                <?php endif;?>
                            </div>
                            <?php $count++;?>
                        <?php endif;?>
                    <?php endforeach;?>
                    <div class="table-one-line <?=($count%2 == 0) ? '_2' : '';?>">
                        <div class="text-block-18">Уход</div>
                        <div class="text-block-18 _2">Химчистка</div>
                    </div>
                </div>
              </div>
              <div data-w-tab="Tab 3" class="w-tab-pane">
                  <?$APPLICATION->IncludeComponent(
                      "bitrix:news.list",
                      "catalog.element.tab",
                      Array(
                          "ACTIVE_DATE_FORMAT" => "d.m.Y",
                          "ADD_SECTIONS_CHAIN" => "N",
                          "AJAX_MODE" => "N",
                          "AJAX_OPTION_ADDITIONAL" => "",
                          "AJAX_OPTION_HISTORY" => "N",
                          "AJAX_OPTION_JUMP" => "N",
                          "AJAX_OPTION_STYLE" => "Y",
                          "CACHE_FILTER" => "N",
                          "CACHE_GROUPS" => "Y",
                          "CACHE_TIME" => "36000000",
                          "CACHE_TYPE" => "A",
                          "CHECK_DATES" => "Y",
                          "COMPONENT_TEMPLATE" => "catalog.element.tab",
                          "DETAIL_URL" => "",
                          "DISPLAY_BOTTOM_PAGER" => "N",
                          "DISPLAY_DATE" => "N",
                          "DISPLAY_NAME" => "Y",
                          "DISPLAY_PICTURE" => "Y",
                          "DISPLAY_PREVIEW_TEXT" => "Y",
                          "DISPLAY_TOP_PAGER" => "N",
                          "FIELD_CODE" => array(0=>"",1=>"",),
                          "FILTER_NAME" => "",
                          "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                          "IBLOCK_ID" => "1",
                          "IBLOCK_TYPE" => "news",
                          "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                          "INCLUDE_SUBSECTIONS" => "Y",
                          "MESSAGE_404" => "",
                          "NEWS_COUNT" => "3",
                          "PAGER_BASE_LINK_ENABLE" => "N",
                          "PAGER_DESC_NUMBERING" => "N",
                          "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                          "PAGER_SHOW_ALL" => "N",
                          "PAGER_SHOW_ALWAYS" => "N",
                          "PAGER_TEMPLATE" => ".default",
                          "PAGER_TITLE" => "Новости",
                          "PARENT_SECTION" => "",
                          "PARENT_SECTION_CODE" => "",
                          "PREVIEW_TRUNCATE_LEN" => "",
                          "PROPERTY_CODE" => array(0=>"KATEG",1=>"COMMMENT",2=>"LIKES",3=>"VIEW",4=>"",),
                          "SET_BROWSER_TITLE" => "N",
                          "SET_LAST_MODIFIED" => "N",
                          "SET_META_DESCRIPTION" => "N",
                          "SET_META_KEYWORDS" => "N",
                          "SET_STATUS_404" => "N",
                          "SET_TITLE" => "N",
                          "SHOW_404" => "N",
                          "SORT_BY1" => "ACTIVE_FROM",
                          "SORT_BY2" => "SORT",
                          "SORT_ORDER1" => "DESC",
                          "SORT_ORDER2" => "ASC",
                          "STRICT_SECTION_CHECK" => "N"
                      )
                  );?>
<!--                <div class="news">-->
<!--                  <div class="one-news">-->
<!--                    <img src="/bitrix/templates/kangol_new/components/bitrix/catalog.element/.default/images/5b48839495056d4bfb726ed9_D094D0BCD0B8D182D180D0B8D0B8CC86D0B5D0B3D0BED180D0BED0B2.jpg" class="image-10" />-->
<!--                    <div class="news-text-block">-->
<!--                      <div class="text-block-19">Интервью с Дмитрием Егоровым</div>-->
<!--                      <p class="paragraph-4">История вопроса Многое, что кажется нам естественной частью картины мира, на самом деле появилось ...</p>-->
<!--                      <div class="bottom-line">-->
<!--                        <div class="text-block-20">Интервью-->
<!--                          <br/>-->
<!--                        </div>-->
<!--                        <div class="digits">-->
<!--                          <a href="#" class="link-4">765</a>-->
<!--                          <a href="#" class="link-4 _2">566</a>-->
<!--                          <a href="#" class="link-4 _3">145</a>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                  <div class="one-news">-->
<!--                    <img src="/bitrix/templates/kangol_new/components/bitrix/catalog.element/.default/images/5b4883948d2f84404ef327e4_Group.jpg" class="image-10" />-->
<!--                    <div class="news-text-block">-->
<!--                      <div class="text-block-19">Видеолукбук Kangol в Санкт-Петербурге</div>-->
<!--                      <p class="paragraph-4">История вопроса Многое, что кажется нам естественной частью картины мира, на самом деле появилось ...</p>-->
<!--                      <div class="bottom-line">-->
<!--                        <div class="text-block-20">Интервью-->
<!--                          <br/>-->
<!--                        </div>-->
<!--                        <div class="digits">-->
<!--                          <a href="#" class="link-4">765</a>-->
<!--                          <a href="#" class="link-4 _2">566</a>-->
<!--                          <a href="#" class="link-4 _3">145</a>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                  <div class="one-news">-->
<!--                    <img src="/bitrix/templates/kangol_new/components/bitrix/catalog.element/.default/images/5b4883949918eae070ad9853_Group202.1.jpg" class="image-10" />-->
<!--                    <div class="news-text-block">-->
<!--                      <div class="text-block-19">Хронология нашего участия на Faces &amp; Laces</div>-->
<!--                      <p class="paragraph-4">История вопроса Многое, что кажется нам естественной частью картины мира, на самом деле появилось ...</p>-->
<!--                      <div class="bottom-line">-->
<!--                        <div class="text-block-20">Интервью-->
<!--                          <br/>-->
<!--                        </div>-->
<!--                        <div class="digits">-->
<!--                          <a href="#" class="link-4">765</a>-->
<!--                          <a href="#" class="link-4 _2">566</a>-->
<!--                          <a href="#" class="link-4 _3">145</a>-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
              </div>
              <div data-w-tab="Tab 4" class="w-tab-pane">
                <div class="delivery">
                  <div class="delivery-one-line">
                    <div class="text-block-21">доставка</div>
                    <p class="paragraph-5">Мы доставим товар любым удобным для вас способом или же вы можете забрать свой товар в нашем магазине или на складе бесплатно. Курьером по Москве, Курьером в регионы, Почтой по территории РФ, Службами доставки в СНГ - выбирать вам, свяжитесь с нами для уточнения сроков доставки.</p>
                  </div>
                  <div class="delivery-one-line">
                    <div class="text-block-21">Оплата</div>
                    <p class="paragraph-5">Мы принимаем к оплате большенство возможных способов оплаты. Вы можете оплатить товар картами Visa, MasterCard, а так же электроными деньгами (WebMoney, QIWI, YANDEX.Деньги). Так же вы можете оплатить товар лично в магазине или же наличными курьеру. Вы можете оплатить заказ наложенным платежем при получении на почте.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <meta itemprop="name" content="<?=$name?>" />
    <meta itemprop="category" content="<?=$arResult['CATEGORY_PATH']?>" />
<?
if ($haveOffers)
{
    foreach ($arResult['JS_OFFERS'] as $offer)
    {
        $currentOffersList = array();

        if (!empty($offer['TREE']) && is_array($offer['TREE']))
        {
            foreach ($offer['TREE'] as $propName => $skuId)
            {
                $propId = (int)substr($propName, 5);

                foreach ($skuProps as $prop)
                {
                    if ($prop['ID'] == $propId)
                    {
                        foreach ($prop['VALUES'] as $propId => $propValue)
                        {
                            if ($propId == $skuId)
                            {
                                $currentOffersList[] = $propValue['NAME'];
                                break;
                            }
                        }
                    }
                }
            }
        }

        $offerPrice = $offer['ITEM_PRICES'][$offer['ITEM_PRICE_SELECTED']];
        ?>
        <span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
				<meta itemprop="sku" content="<?=htmlspecialcharsbx(implode('/', $currentOffersList))?>" />
				<meta itemprop="price" content="<?=$offerPrice['RATIO_PRICE']?>" />
				<meta itemprop="priceCurrency" content="<?=$offerPrice['CURRENCY']?>" />
				<link itemprop="availability" href="http://schema.org/<?=($offer['CAN_BUY'] ? 'InStock' : 'OutOfStock')?>" />
			</span>
        <?
    }

    unset($offerPrice, $currentOffersList);
}
else
{
    ?>
    <span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
			<meta itemprop="price" content="<?=$price['RATIO_PRICE']?>" />
			<meta itemprop="priceCurrency" content="<?=$price['CURRENCY']?>" />
			<link itemprop="availability" href="http://schema.org/<?=($actualItem['CAN_BUY'] ? 'InStock' : 'OutOfStock')?>" />
		</span>
    <?
}
?>
    </div>
<?
if ($haveOffers)
{
    $offerIds = array();
    $offerCodes = array();

    $useRatio = $arParams['USE_RATIO_IN_RANGES'] === 'Y';

    foreach ($arResult['JS_OFFERS'] as $ind => &$jsOffer)
    {
        $offerIds[] = (int)$jsOffer['ID'];
        $offerCodes[] = $jsOffer['CODE'];

        $fullOffer = $arResult['OFFERS'][$ind];
        $measureName = $fullOffer['ITEM_MEASURE']['TITLE'];

        $strAllProps = '';
        $strMainProps = '';
        $strPriceRangesRatio = '';
        $strPriceRanges = '';

        if ($arResult['SHOW_OFFERS_PROPS'])
        {
            if (!empty($jsOffer['DISPLAY_PROPERTIES']))
            {
                foreach ($jsOffer['DISPLAY_PROPERTIES'] as $property)
                {
                    $current = '<dt>'.$property['NAME'].'</dt><dd>'.(
                        is_array($property['VALUE'])
                            ? implode(' / ', $property['VALUE'])
                            : $property['VALUE']
                        ).'</dd>';
                    $strAllProps .= $current;

                    if (isset($arParams['MAIN_BLOCK_OFFERS_PROPERTY_CODE'][$property['CODE']]))
                    {
                        $strMainProps .= $current;
                    }
                }

                unset($current);
            }
        }

        if ($arParams['USE_PRICE_COUNT'] && count($jsOffer['ITEM_QUANTITY_RANGES']) > 1)
        {
            $strPriceRangesRatio = '('.Loc::getMessage(
                    'CT_BCE_CATALOG_RATIO_PRICE',
                    array('#RATIO#' => ($useRatio
                            ? $fullOffer['ITEM_MEASURE_RATIOS'][$fullOffer['ITEM_MEASURE_RATIO_SELECTED']]['RATIO']
                            : '1'
                        ).' '.$measureName)
                ).')';

            foreach ($jsOffer['ITEM_QUANTITY_RANGES'] as $range)
            {
                if ($range['HASH'] !== 'ZERO-INF')
                {
                    $itemPrice = false;

                    foreach ($jsOffer['ITEM_PRICES'] as $itemPrice)
                    {
                        if ($itemPrice['QUANTITY_HASH'] === $range['HASH'])
                        {
                            break;
                        }
                    }

                    if ($itemPrice)
                    {
                        $strPriceRanges .= '<dt>'.Loc::getMessage(
                                'CT_BCE_CATALOG_RANGE_FROM',
                                array('#FROM#' => $range['SORT_FROM'].' '.$measureName)
                            ).' ';

                        if (is_infinite($range['SORT_TO']))
                        {
                            $strPriceRanges .= Loc::getMessage('CT_BCE_CATALOG_RANGE_MORE');
                        }
                        else
                        {
                            $strPriceRanges .= Loc::getMessage(
                                'CT_BCE_CATALOG_RANGE_TO',
                                array('#TO#' => $range['SORT_TO'].' '.$measureName)
                            );
                        }

                        $strPriceRanges .= '</dt><dd>'.($useRatio ? $itemPrice['PRINT_RATIO_PRICE'] : $itemPrice['PRINT_PRICE']).'</dd>';
                    }
                }
            }

            unset($range, $itemPrice);
        }

        $jsOffer['DISPLAY_PROPERTIES'] = $strAllProps;
        $jsOffer['DISPLAY_PROPERTIES_MAIN_BLOCK'] = $strMainProps;
        $jsOffer['PRICE_RANGES_RATIO_HTML'] = $strPriceRangesRatio;
        $jsOffer['PRICE_RANGES_HTML'] = $strPriceRanges;
    }

    $templateData['OFFER_IDS'] = $offerIds;
    $templateData['OFFER_CODES'] = $offerCodes;
    unset($jsOffer, $strAllProps, $strMainProps, $strPriceRanges, $strPriceRangesRatio, $useRatio);

    $jsParams = array(
        'CONFIG' => array(
            'USE_CATALOG' => $arResult['CATALOG'],
            'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
            'SHOW_PRICE' => true,
            'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'] === 'Y',
            'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'] === 'Y',
            'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
            'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
            'SHOW_SKU_PROPS' => $arResult['SHOW_OFFERS_PROPS'],
            'OFFER_GROUP' => $arResult['OFFER_GROUP'],
            'MAIN_PICTURE_MODE' => $arParams['DETAIL_PICTURE_MODE'],
            'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
            'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'] === 'Y',
            'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
            'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
            'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
            'USE_STICKERS' => true,
            'USE_SUBSCRIBE' => $showSubscribe,
            'SHOW_SLIDER' => $arParams['SHOW_SLIDER'],
            'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
            'ALT' => $alt,
            'TITLE' => $title,
            'MAGNIFIER_ZOOM_PERCENT' => 200,
            'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
            'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
            'BRAND_PROPERTY' => !empty($arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']])
                ? $arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']]['DISPLAY_VALUE']
                : null
        ),
        'JS_CAT_PRICE'=>$arResult['JS_CATPRICE'],
        'PRODUCT_TYPE' => $arResult['CATALOG_TYPE'],
        'VISUAL' => $itemIds,
        'DEFAULT_PICTURE' => array(
            'PREVIEW_PICTURE' => $arResult['DEFAULT_PICTURE'],
            'DETAIL_PICTURE' => $arResult['DEFAULT_PICTURE']
        ),
        'PRODUCT' => array(
            'ID' => $arResult['ID'],
            'ACTIVE' => $arResult['ACTIVE'],
            'NAME' => $arResult['~NAME'],
            'CATEGORY' => $arResult['CATEGORY_PATH']
        ),
        'BASKET' => array(
            'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
            'BASKET_URL' => $arParams['BASKET_URL'],
            'SKU_PROPS' => $arResult['OFFERS_PROP_CODES'],
            'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
            'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
        ),
        'OFFERS' => $arResult['JS_OFFERS'],
        'OFFER_SELECTED' => $arResult['OFFERS_SELECTED'],
        'TREE_PROPS' => $skuProps
    );
}
else
{
    $emptyProductProperties = empty($arResult['PRODUCT_PROPERTIES']);
    if ($arParams['ADD_PROPERTIES_TO_BASKET'] === 'Y' && !$emptyProductProperties)
    {
        ?>
        <div id="<?=$itemIds['BASKET_PROP_DIV']?>" style="display: none;">
            <?
            if (!empty($arResult['PRODUCT_PROPERTIES_FILL']))
            {
                foreach ($arResult['PRODUCT_PROPERTIES_FILL'] as $propId => $propInfo)
                {
                    ?>
                    <input type="hidden" name="<?=$arParams['PRODUCT_PROPS_VARIABLE']?>[<?=$propId?>]" value="<?=htmlspecialcharsbx($propInfo['ID'])?>">
                    <?
                    unset($arResult['PRODUCT_PROPERTIES'][$propId]);
                }
            }

            $emptyProductProperties = empty($arResult['PRODUCT_PROPERTIES']);
            if (!$emptyProductProperties)
            {
                ?>
                <table>
                    <?
                    foreach ($arResult['PRODUCT_PROPERTIES'] as $propId => $propInfo)
                    {
                        ?>
                        <tr>
                            <td><?=$arResult['PROPERTIES'][$propId]['NAME']?></td>
                            <td>
                                <?
                                if (
                                    $arResult['PROPERTIES'][$propId]['PROPERTY_TYPE'] === 'L'
                                    && $arResult['PROPERTIES'][$propId]['LIST_TYPE'] === 'C'
                                )
                                {
                                    foreach ($propInfo['VALUES'] as $valueId => $value)
                                    {
                                        ?>
                                        <label>
                                            <input type="radio" name="<?=$arParams['PRODUCT_PROPS_VARIABLE']?>[<?=$propId?>]"
                                                   value="<?=$valueId?>" <?=($valueId == $propInfo['SELECTED'] ? '"checked"' : '')?>>
                                            <?=$value?>
                                        </label>
                                        <br>
                                        <?
                                    }
                                }
                                else
                                {
                                    ?>
                                    <select name="<?=$arParams['PRODUCT_PROPS_VARIABLE']?>[<?=$propId?>]">
                                        <?
                                        foreach ($propInfo['VALUES'] as $valueId => $value)
                                        {
                                            ?>
                                            <option value="<?=$valueId?>" <?=($valueId == $propInfo['SELECTED'] ? '"selected"' : '')?>>
                                                <?=$value?>
                                            </option>
                                            <?
                                        }
                                        ?>
                                    </select>
                                    <?
                                }
                                ?>
                            </td>
                        </tr>
                        <?
                    }
                    ?>
                </table>
                <?
            }
            ?>
        </div>
        <?
    }

    $jsParams = array(
        'CONFIG' => array(
            'USE_CATALOG' => $arResult['CATALOG'],
            'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
            'SHOW_PRICE' => !empty($arResult['ITEM_PRICES']),
            'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'] === 'Y',
            'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'] === 'Y',
            'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
            'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
            'MAIN_PICTURE_MODE' => $arParams['DETAIL_PICTURE_MODE'],
            'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
            'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'] === 'Y',
            'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
            'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
            'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
            'USE_STICKERS' => true,
            'USE_SUBSCRIBE' => $showSubscribe,
            'SHOW_SLIDER' => $arParams['SHOW_SLIDER'],
            'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
            'ALT' => $alt,
            'TITLE' => $title,
            'MAGNIFIER_ZOOM_PERCENT' => 200,
            'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
            'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
            'BRAND_PROPERTY' => !empty($arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']])
                ? $arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']]['DISPLAY_VALUE']
                : null
        ),
        'JS_CAT_PRICE'=>$arResult['JS_CATPRICE'],
        'VISUAL' => $itemIds,
        'PRODUCT_TYPE' => $arResult['CATALOG_TYPE'],
        'PRODUCT' => array(
            'ID' => $arResult['ID'],
            'ACTIVE' => $arResult['ACTIVE'],
            'PICT' => reset($arResult['MORE_PHOTO']),
            'NAME' => $arResult['~NAME'],
            'SUBSCRIPTION' => true,
            'ITEM_PRICE_MODE' => $arResult['ITEM_PRICE_MODE'],
            'ITEM_PRICES' => $arResult['ITEM_PRICES'],
            'ITEM_PRICE_SELECTED' => $arResult['ITEM_PRICE_SELECTED'],
            'ITEM_QUANTITY_RANGES' => $arResult['ITEM_QUANTITY_RANGES'],
            'ITEM_QUANTITY_RANGE_SELECTED' => $arResult['ITEM_QUANTITY_RANGE_SELECTED'],
            'ITEM_MEASURE_RATIOS' => $arResult['ITEM_MEASURE_RATIOS'],
            'ITEM_MEASURE_RATIO_SELECTED' => $arResult['ITEM_MEASURE_RATIO_SELECTED'],
            'SLIDER_COUNT' => $arResult['MORE_PHOTO_COUNT'],
            'SLIDER' => $arResult['MORE_PHOTO'],
            'CAN_BUY' => $arResult['CAN_BUY'],
            'CHECK_QUANTITY' => $arResult['CHECK_QUANTITY'],
            'QUANTITY_FLOAT' => is_float($arResult['ITEM_MEASURE_RATIOS'][$arResult['ITEM_MEASURE_RATIO_SELECTED']]['RATIO']),
            'MAX_QUANTITY' => $arResult['CATALOG_QUANTITY'],
            'STEP_QUANTITY' => $arResult['ITEM_MEASURE_RATIOS'][$arResult['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'],
            'CATEGORY' => $arResult['CATEGORY_PATH']
        ),
        'BASKET' => array(
            'ADD_PROPS' => $arParams['ADD_PROPERTIES_TO_BASKET'] === 'Y',
            'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
            'PROPS' => $arParams['PRODUCT_PROPS_VARIABLE'],
            'EMPTY_PROPS' => $emptyProductProperties,
            'BASKET_URL' => $arParams['BASKET_URL'],
            'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
            'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
        )
    );
    unset($emptyProductProperties);
}

if ($arParams['DISPLAY_COMPARE'])
{
    $jsParams['COMPARE'] = array(
        'COMPARE_URL_TEMPLATE' => $arResult['~COMPARE_URL_TEMPLATE'],
        'COMPARE_DELETE_URL_TEMPLATE' => $arResult['~COMPARE_DELETE_URL_TEMPLATE'],
        'COMPARE_PATH' => $arParams['COMPARE_PATH']
    );
}
?>
<script>
	BX.message({
		ECONOMY_INFO_MESSAGE: '<?=GetMessageJS('CT_BCE_CATALOG_ECONOMY_INFO2')?>',
		TITLE_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_TITLE_ERROR')?>',
		TITLE_BASKET_PROPS: '<?=GetMessageJS('CT_BCE_CATALOG_TITLE_BASKET_PROPS')?>',
		BASKET_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_BASKET_UNKNOWN_ERROR')?>',
		BTN_SEND_PROPS: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_SEND_PROPS')?>',
		BTN_MESSAGE_BASKET_REDIRECT: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_BASKET_REDIRECT')?>',
		BTN_MESSAGE_CLOSE: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE')?>',
		BTN_MESSAGE_CLOSE_POPUP: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE_POPUP')?>',
		TITLE_SUCCESSFUL: '<?=GetMessageJS('CT_BCE_CATALOG_ADD_TO_BASKET_OK')?>',
		COMPARE_MESSAGE_OK: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_OK')?>',
		COMPARE_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_UNKNOWN_ERROR')?>',
		COMPARE_TITLE: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_TITLE')?>',
		BTN_MESSAGE_COMPARE_REDIRECT: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_COMPARE_REDIRECT')?>',
		PRODUCT_GIFT_LABEL: '<?=GetMessageJS('CT_BCE_CATALOG_PRODUCT_GIFT_LABEL')?>',
		PRICE_TOTAL_PREFIX: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_PRICE_TOTAL_PREFIX')?>',
		RELATIVE_QUANTITY_MANY: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_MANY'])?>',
		RELATIVE_QUANTITY_FEW: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_FEW'])?>',
		SITE_ID: '<?=$component->getSiteId()?>'
	});

	var <?=$obName?> = new JCCatalogElement(<?=CUtil::PhpToJSObject($jsParams, false, true)?>);
</script>

<?
unset($actualItem, $itemIds, $jsParams);?>
<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<pre style="display: none"><?= var_dump($arResult); ?></pre>
<?php foreach ($arResult['STORES'] as $store):?>
    <?php if ($store['ID'] != 3):?>
        <div class="tverskay">
            <div class="moskow-map">
                <img src="/bitrix/templates/kangol_new/components/bitrix/catalog.element/.default/images/5b486a64c57559384ed79d5a_maps-and-flags.png" width="10" class="image-9" />
                <a href="#" class="link-block w-inline-block">
                    <div class="text-block-9"><?=$store['NAME']?></div>
                    <div class="text-block-10"><?=$store['ADDRESS']?></div>
                </a>
            </div>
            <div class="div-block-3">
                <?php if($store['REAL_AMOUNT'] > 0):?>
                    <div class="nalichie">
                        <div class="div-block-2"></div>
                        <div class="text-block-11">Есть в наличии</div>
                    </div>
                <?php else: ?>
                    <div class="nalichie _2">
                        <div class="div-block-2 _2"></div>
                        <div class="text-block-11 _2">Нет в наличии</div>
                    </div>
                <?php endif;?>

                <div class="bron">
                    <?php if($store['REAL_AMOUNT'] > 0):?>
<!--                        <a href="#" class="link-2" data-ix="popup-form">Забронировать</a>-->
                        <?$APPLICATION->IncludeComponent(
	"tarakud:sale.order.oneclick", 
	"catalog.element",
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"CONFIRM_ORDER" => "Спасибо. Ваш заказ принят.",
		"DELIVERY" => "3",
		"DELIVERY_LIST_SHOW" => "N",
		"DELIVERY_SHOW" => "N",
		"EVENT_MESSAGE_ID" => array(
		),
		"HIDE_BUTTON" => "N",
		"IBLOCK_ID" => "23",
		"IBLOCK_TYPE" => "catalog",
		"IMAGE_HEIGHT" => "130",
		"IMAGE_WIDTH" => "130",
		"IS_JQUERY" => "Y",
		"NAME_SHOW" => "N",
		"OFFERS_PROPERTY_CODE" => array(
			0 => "TSVET",
			1 => "RAZMER",
			2 => "",
		),
		"OFFERS_SHOW" => "list",
		"ORDER_PRODUCT" => "2",
		"ORDER_STATUS" => "XX",
		"PAYSYSTEM" => "1",
		"PAYSYSTEM_LIST_SHOW" => "N",
		"PERSONAL_DATA" => "Y",
		"PERSONAL_DATA_URL" => "/processing/",
		"PERSON_TYPE" => "1",
		"PERSON_TYPE_PROPS" => array(
			0 => "0",
		),
		"PRICE_CODE" => "Типовое соглашение с клиентами",
		"PRODUCT_ID" => $arParams["FAST_BUY"],
		"PRODUCT_NAME" => "",
		"PRODUCT_PRICE" => "100",
		"PRODUCT_URL" => "",
		"PRODUCT_WEIGHT" => "0",
		"TITLE_POPUP" => "Оформление заказа в один клик",
		"USE_CAPTCHA" => "N",
		"USE_COMMENT" => "Y",
		"USE_COUNT" => "N",
		"USE_USER" => "N",
        "BUTTON_TEXT"=>"Забронировать"
	),
	false
);?>
                    <?php elseif($arResult['OFFICE_QUANTITY'] > 0): ?>
<!--                        <a href="#" class="link-2">Заказать самовывоз</a>-->
                        <?$APPLICATION->IncludeComponent(
                            "tarakud:sale.order.oneclick",
                            "catalog.element",
                            Array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "CONFIRM_ORDER" => "Спасибо. Ваш заказ принят.",
                                "DELIVERY" => "3",
                                "DELIVERY_LIST_SHOW" => "N",
                                "DELIVERY_SHOW" => "N",
                                "EVENT_MESSAGE_ID" => array(),
                                "HIDE_BUTTON" => "N",
                                "IBLOCK_ID" => "23",
                                "IBLOCK_TYPE" => "catalog",
                                "IMAGE_HEIGHT" => "130",
                                "IMAGE_WIDTH" => "130",
                                "IS_JQUERY" => "Y",
                                "NAME_SHOW" => "N",
                                "OFFERS_PROPERTY_CODE" => array(0=>"TSVET",1=>"RAZMER",2=>"",),
                                "OFFERS_SHOW" => "list",
                                "ORDER_PRODUCT" => "2",
                                "ORDER_STATUS" => "XX",
                                "PAYSYSTEM" => "1",
                                "PAYSYSTEM_LIST_SHOW" => "N",
                                "PERSONAL_DATA" => "Y",
                                "PERSONAL_DATA_URL" => "/processing/",
                                "PERSON_TYPE" => "1",
                                "PERSON_TYPE_PROPS" => array(0=>"0",),
                                "PRICE_CODE" => "Типовое соглашение с клиентами",
                                "PRODUCT_ID" => $arParams['FAST_BUY'],
                                "PRODUCT_NAME" => "",
                                "PRODUCT_PRICE" => "100",
                                "PRODUCT_URL" => "",
                                "PRODUCT_WEIGHT" => "0",
                                "TITLE_POPUP" => "Оформление заказа в один клик",
                                "USE_CAPTCHA" => "N",
                                "USE_COMMENT" => "Y",
                                "USE_COUNT" => "N",
                                "USE_USER" => "N",
                                "BUTTON_TEXT"=>"Заказать самовывоз"
                            )
                        );?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    <?php endif;?>
<?php endforeach;?>

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if(method_exists($this, 'setFrameMode')) 
	$this->setFrameMode(true);
	
if(count($arResult['ELEMENTS']) > 1 && $arResult["ITEMS_COUNT_SHOW"]):
$arParams['MESSAGE_ALIGN'] = isset($arParams['MESSAGE_ALIGN']) ? $arParams['MESSAGE_ALIGN'] : 'LEFT';
$arParams['MESSAGE_TIME'] = intval($arParams['MESSAGE_TIME']) >= 0 ? intval($arParams['MESSAGE_TIME']) : 5;

include($_SERVER["DOCUMENT_ROOT"].$templateFolder."/functions.php");
include($_SERVER["DOCUMENT_ROOT"].$templateFolder."/choice.php");

CJSCore::Init(array("ajax", "popup"));
$APPLICATION->AddHeadScript("/bitrix/js/kombox/filter/jquery.filter.js");
$APPLICATION->AddHeadScript("/bitrix/js/kombox/filter/ion.rangeSlider.js");
$APPLICATION->AddHeadScript("/bitrix/js/kombox/filter/jquery.cookie.js");
$APPLICATION->SetAdditionalCSS("/bitrix/js/selecter/jquery.fs.selecter.css");
// $APPLICATION->AddHeadScript("http://demo.webcareer.ru/2015/02/selecter/js/jquery-1.11.1.min.js");

$currentUrl = $APPLICATION->GetCurPage();

?>

<div class="bar_filter">
	<div id="toggles">
	  <input type="checkbox" name="checkbox1" id="checkbox1" class="ios-toggle" <?=($_REQUEST['HEAD'] == 'Y') ? 'checked' : ''?>/>
	  <label for="checkbox1" class="checkbox-label" data-off="Стандарт" data-on="На голове"></label>
	</div>
	<script>

		$('.ios-toggle').on('click', function(){
			if($(this).is(':checked')){
				//alert("На голове");
                document.location.href = '<?=$currentUrl?>' + '?HEAD=Y';
			} else {
                document.location.href = '<?=$currentUrl?>';
            }
		});</script>
	<div class="toggle-filter">Фильтр</div>
	<select name="sort" id="sort">
		<option value="<?=$arResult["SECTION_PAGE_URL"]?>">Сортировать</option>
		<option value="<?=$arResult["SECTION_PAGE_URL"]?>?sort=name&method=asc" <?if ($_GET["sort"] == "name"):?> checked="true" <?endif;?> >По названию</option>
		<option value="<?=$arResult["SECTION_PAGE_URL"]?>?sort=catalog_PRICE_1&method=asc" <?if ($_GET["sort"] == "catalog_PRICE_1"):?> checked="true" <?endif;?>>По цене</option>
		<option value="<?=$arResult["SECTION_PAGE_URL"]?>?sort=timestamp_x&method=asc" <?if ($_GET["sort"] == "timestamp_x"):?> checked="true" <?endif;?>>Новые поступления </option>
	</select>
</div>

<div class="kombox-filter dropdown-filter-container" id="kombox-filter">
	<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get"<?if($arResult['IS_SEF']):?> data-sef="yes"<?endif;?>>
		<?foreach($arResult["HIDDEN"] as $arItem):?>
			<input
				type="hidden"
				name="<?echo $arItem["CONTROL_NAME"]?>"
				id="<?echo $arItem["CONTROL_ID"]?>"
				value="<?echo $arItem["HTML_VALUE"]?>"
			/>
		<?endforeach;?>
		<div class="dropdown-filter-content">
            <div class="w-row">
		<? $cnt_i = 1;
		foreach($arResult["ITEMS"] as $arItem):
            //print_r($arItem["VALUES"]);
            $in = false;
            foreach ($arItem["VALUES"] as $key => $val) {
                if (in_array($key,array(7432,7428,7433))) $in = true;
		    }
            if(!($arItem["ID"] == 396 && !$in)):
                $showProperty = false;
                if($arItem["SETTINGS"]["VIEW"] == "SLIDER")
                {
                    if(isset($arItem["VALUES"]["MIN"]["VALUE"]) && isset($arItem["VALUES"]["MAX"]["VALUE"]) && $arItem["VALUES"]["MAX"]["VALUE"] > $arItem["VALUES"]["MIN"]["VALUE"])
                        $showProperty = true;
                }
                elseif(!empty($arItem["VALUES"]) && !isset($arItem["PRICE"]))
                {
                    $showProperty = true;
                }
                ?>
                <?if($showProperty):?>
                    <?php if(strpos($currentUrl, 'katalog') !== false && $arItem["ID"] == 407) continue;?>
                    <div class="w-col w-col-3 w-col-stack lvl1<?if($arItem["CLOSED"]):?> kombox-closed<?endif;?> props_<?=$arItem["ID"];?>" data-id="<?echo $arItem["CODE_ALT"].'-'.$arItem["ID"]?>">
                        <div class="filter-block">
                            <h4 class="filter-block__head"><span class="kombox-filter-property-name"><?echo ($arItem["NAME"] == 'форма головного убора' ? 'силуэт' : $arItem["NAME"])?></span></h4>
                            <?komboxShowField($arItem);?>
                        </div>
                    </div>
                    <? if ($cnt_i % 4 == 0) { echo "</div><div class='w-row'>"; }$cnt_i++;?>

                <?endif;?>
            <?php endif;?>
		<?endforeach;?>
		</div>
		<input type="submit" id="set_filter" value="<?=GetMessage("KOMBOX_CMP_FILTER_SET_FILTER")?>" />
		<a href="<?=$arResult["DELETE_URL"]?>" class="kombox-del-filter<?if(!$arResult["SET_FILTER"]):?> disabled<?endif;?>"><?=GetMessage("KOMBOX_CMP_FILTER_DEL_FILTER")?></a>
		<div class="modef" id="modef" style="display:none">
			<div class="modef-wrap">
				<?echo GetMessage("KOMBOX_CMP_FILTER_FILTER_COUNT", array("#ELEMENT_COUNT#" => '<span id="modef_num">'.intval($arResult["ELEMENT_COUNT"]).'</span>'));?>
				<a href="<?echo $arResult["FILTER_URL"]?>"><?echo GetMessage("KOMBOX_CMP_FILTER_FILTER_SHOW")?></a>
				<span class="ecke"></span>
			</div>
		</div>
	</form>
	<div class="kombox-loading"></div>
	<a href="#" class="dropdown__close-button w-inline-block">
        <div class="close-button__text">Скрыть фильтр</div>
        <img src="<?=$templateFolder?>/images/5b462ae0c598b3af1f9f24bb_icon-carret-up.svg" class="close-button__icon" />
      </a>
</div>
<div id="mouse_loading_icon" style="display:none;"><img src="<?=$this->GetFolder()?>/images/mouse_loader.gif" alt="mouse_loading_icon" /></div>
</div>
<script>
	$(function(){
		komboxFilterJsInit();
		$('#kombox-filter').komboxAjaxSmartFilter({
			ajaxURL: '<?echo CUtil::JSEscape($arResult["FORM_ACTION"])?>',
			urlDelete: '<?echo CUtil::JSEscape($arResult["DELETE_URL"])?>',
			align: '<?echo $arParams['MESSAGE_ALIGN']?>',
			modeftimeout: <?echo $arParams['MESSAGE_TIME']?>
		});
		$(".toggle-filter").click(function() {
			$("#kombox-filter").slideToggle(0);
		});
		$(".close-button__text").click(function() {
			$("#kombox-filter").slideToggle(0);
		});
		
	});

	$(document).ready(function() {
		$("#sort").selecter();
		$("#sort").change(function() {
			location = $(this).val();
		});

	});
	
</script>


<? endif;?>
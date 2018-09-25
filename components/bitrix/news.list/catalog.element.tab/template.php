<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);
?>
<div class="news">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="one-news"  id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
                <img
                        class="image-10"
                        width="151px"
                        src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                        alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                        title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                />
        <?endif?>
        <div class="news-text-block">
            <div class="text-block-19"><?=$arItem["NAME"]?></div>
            <p class="paragraph-4"><?=$arItem["PREVIEW_TEXT"]?></p>
            <div class="bottom-line">
                <div class="text-block-20"><?=$arItem["DISPLAY_PROPERTIES"]['KATEG']['~VALUE']?>
                    <br/>
                </div>
                <div class="digits">
                    <a href="#" class="link-4"><?=$arItem["DISPLAY_PROPERTIES"]['VIEW']['~VALUE']?></a>
                    <a href="#" class="link-4 _2"><?=$arItem["DISPLAY_PROPERTIES"]['LIKES']['~VALUE']?></a>
                    <a href="#" class="link-4 _3"><?=$arItem["DISPLAY_PROPERTIES"]['COMMMENT']['~VALUE']?></a>
                </div>
            </div>
        </div>
    </div>
<?endforeach;?>
</div>

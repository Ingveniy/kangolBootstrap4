<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
{
	$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}

$strReturn .= '<div class="kroshki" itemprop="http://schema.org/breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<img src="/bitrix/templates/kangol_new/components/bitrix/catalog.element/.default/images/5b462af6a2e12d0719531b90_right-arrow.svg" width="7.5" class="image-12" />' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= ''.$arrow.'
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" class="kroshki-link" itemprop="url">
					'.$title.'
				</a>
				<meta itemprop="position" content="'.($index + 1).'" />';
	}
	else
	{
		$strReturn .= ''.$arrow.'
				<span itemprop="name">'.$title.'</span>
				<meta itemprop="position" content="'.($index + 1).'" />';
	}
}
$strReturn .= '<div style="clear:both"></div></div>';

return $strReturn;

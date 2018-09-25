<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
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

?>

<div class="product-item">
	<a class="product-item-image-wrapper" href="<?=$item['DETAIL_PAGE_URL']?>" title="<?=$imgTitle?>"
		data-entity="image-wrapper">
		<span class="product-item-image-slider-slide-container slide" id="<?=$itemIds['PICT_SLIDER']?>"
			<?=($showSlider ? '' : 'style="display: none;"')?>
			data-slider-interval="<?=$arParams['SLIDER_INTERVAL']?>" data-slider-wrap="true">
			<?
			if ($showSlider)
			{
				foreach ($morePhoto as $key => &$photo)
				{
					$renderImage = CFile::ResizeImageGet($photo["ID"], Array("width" => 500, "height" => 500), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, false);
					?>
					<span class="product-item-image-slide item <?=($key == 0 ? 'active' : '')?>"
						style="background-image: url('<?=$renderImage['src']?>');">
					</span>
					<?
				}
			}

			$renderImage = CFile::ResizeImageGet($item['PREVIEW_PICTURE'], Array("width" => 500, "height" => 500), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, false);
			?>
		</span>
		<span class="product-item-image-original" id="<?=$itemIds['PICT']?>"
			style="background-image: url('<?=$renderImage['src']?>'); <?=($showSlider ? 'display: none;' : '')?>">
		</span>
		<?
		if ($item['SECOND_PICT'])
		{
			$bgImage = !empty($item['PREVIEW_PICTURE_SECOND']) ? $item['PREVIEW_PICTURE_SECOND']['SRC'] : $item['PREVIEW_PICTURE']['SRC'];
			?>
			<span class="product-item-image-alternative" id="<?=$itemIds['SECOND_PICT']?>"
				style="background-image: url('<?=$bgImage?>'); <?=($showSlider ? 'display: none;' : '')?>">
			</span>
			<?
		}

		if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y')
		{
			?>
			<div class="product-item-label-ring <?=$discountPositionClass?>" id="<?=$itemIds['DSC_PERC']?>"
				<?=($price['PERCENT'] > 0 ? '' : 'style="display: none;"')?>>
				<span><?=-$price['PERCENT']?>%</span>
			</div>
			<?
		}

		if ($item['LABEL'])
		{
			?>
			<div class="product-item-label-text <?=$labelPositionClass?>" id="<?=$itemIds['STICKER_ID']?>">
				<?
				if (!empty($item['LABEL_ARRAY_VALUE']))
				{
					foreach ($item['LABEL_ARRAY_VALUE'] as $code => $value)
					{
						?>
						<div<?=(!isset($item['LABEL_PROP_MOBILE'][$code]) ? ' class="hidden-xs"' : '')?>>
							<span title="<?=$value?>"><?=$value?></span>
						</div>
						<?
					}
				}
				?>
			</div>
			<?
		}
		?>
		<div class="product-item-image-slider-control-container" id="<?=$itemIds['PICT_SLIDER']?>_indicator" <?=($showSlider ? '' : 'style="display: none;"')?>>
			<?
			if ($showSlider)
			{
				foreach ($morePhoto as $key => $photo)
				{
					?>
					<div class="product-item-image-slider-control<?=($key == 0 ? ' active' : '')?>" data-go-to="<?=$key?>"></div>
					<?
				}
			}
			?>
		</div>
		<?
		if ($arParams['SLIDER_PROGRESS'] === 'Y')
		{
			?>
			<div class="product-item-image-slider-progress-bar-container">
				<div class="product-item-image-slider-progress-bar" id="<?=$itemIds['PICT_SLIDER']?>_progress_bar" style="width: 0;"></div>
			</div>
			<?
		}
		?>
	</a>
	<div class="product-card__like-box"></div>
	<div class="product-item-title">
		<a href="<?=$item['DETAIL_PAGE_URL']?>" title="<?=$productTitle?>"><?=$productTitle?></a>
	</div>
	<?
	if (!empty($arParams['PRODUCT_BLOCKS_ORDER']))
	{
		foreach ($arParams['PRODUCT_BLOCKS_ORDER'] as $blockName)
		{
			switch ($blockName)
			{
				case 'price': ?>
					<div class="product-item-info-container product-item-price-container" data-entity="price-block">
						<?
						if ($arParams['SHOW_OLD_PRICE'] === 'Y')
						{
							?>
							<span class="product-item-price-old" id="<?=$itemIds['PRICE_OLD']?>"
								<?=($price['RATIO_PRICE'] >= $price['RATIO_BASE_PRICE'] ? 'style="display: none;"' : '')?>>
								<?=$price['PRINT_RATIO_BASE_PRICE']?>
							</span>&nbsp;
							<?
						}
						?>
						<span class="product-item-price-current" id="<?=$itemIds['PRICE']?>">
							<?
							if (!empty($price))
							{
								if ($arParams['PRODUCT_DISPLAY_MODE'] === 'N' && $haveOffers)
								{
									echo Loc::getMessage(
										'CT_BCI_TPL_MESS_PRICE_SIMPLE_MODE',
										array(
											'#PRICE#' => $price['PRINT_RATIO_PRICE'],
											'#VALUE#' => $measureRatio,
											'#UNIT#' => $minOffer['ITEM_MEASURE']['TITLE']
										)
									);
								}
								else
								{
									echo $price['PRINT_RATIO_PRICE'];
								}
							}
							?>
						</span>
					</div>
					<?
					break;

				case 'quantityLimit':
					if ($arParams['SHOW_MAX_QUANTITY'] !== 'N')
					{
						if ($haveOffers)
						{
							if ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y')
							{
								?>
								<div class="product-item-info-container product-item-hidden" id="<?=$itemIds['QUANTITY_LIMIT']?>"
									style="display: none;" data-entity="quantity-limit-block">
									<div class="product-item-info-container-title">
										<?=$arParams['MESS_SHOW_MAX_QUANTITY']?>:
										<span class="product-item-quantity" data-entity="quantity-limit-value"></span>
									</div>
								</div>
								<?
							}
						}
						else
						{
							if (
								$measureRatio
								&& (float)$actualItem['CATALOG_QUANTITY'] > 0
								&& $actualItem['CATALOG_QUANTITY_TRACE'] === 'Y'
								&& $actualItem['CATALOG_CAN_BUY_ZERO'] === 'N'
							)
							{
								?>
								<div class="product-item-info-container product-item-hidden" id="<?=$itemIds['QUANTITY_LIMIT']?>">
									<div class="product-item-info-container-title">
										<?=$arParams['MESS_SHOW_MAX_QUANTITY']?>:
										<span class="product-item-quantity">
											<?
											if ($arParams['SHOW_MAX_QUANTITY'] === 'M')
											{
												if ((float)$actualItem['CATALOG_QUANTITY'] / $measureRatio >= $arParams['RELATIVE_QUANTITY_FACTOR'])
												{
													echo $arParams['MESS_RELATIVE_QUANTITY_MANY'];
												}
												else
												{
													echo $arParams['MESS_RELATIVE_QUANTITY_FEW'];
												}
											}
											else
											{
												echo $actualItem['CATALOG_QUANTITY'].' '.$actualItem['ITEM_MEASURE']['TITLE'];
											}
											?>
										</span>
									</div>
								</div>
								<?
							}
						}
					}

					break;

				case 'quantity':
					if (!$haveOffers)
					{
						if ($actualItem['CAN_BUY'] && $arParams['USE_PRODUCT_QUANTITY'])
						{
							?>
							<div class="product-item-info-container product-item-hidden" data-entity="quantity-block">
								<div class="product-item-amount">
									<div class="product-item-amount-field-container">
										<span class="product-item-amount-field-btn-minus no-select" id="<?=$itemIds['QUANTITY_DOWN']?>"></span>
										<input class="product-item-amount-field" id="<?=$itemIds['QUANTITY']?>" type="number"
											name="<?=$arParams['PRODUCT_QUANTITY_VARIABLE']?>"
											value="<?=$measureRatio?>">
										<span class="product-item-amount-field-btn-plus no-select" id="<?=$itemIds['QUANTITY_UP']?>"></span>
										<span class="product-item-amount-description-container">
											<span id="<?=$itemIds['QUANTITY_MEASURE']?>">
												<?=$actualItem['ITEM_MEASURE']['TITLE']?>
											</span>
											<span id="<?=$itemIds['PRICE_TOTAL']?>"></span>
										</span>
									</div>
								</div>
							</div>
							<?
						}
					}
					elseif ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y')
					{
						if ($arParams['USE_PRODUCT_QUANTITY'])
						{
							?>
							<div class="product-item-info-container product-item-hidden" data-entity="quantity-block">
								<div class="product-item-amount">
									<div class="product-item-amount-field-container">
										<span class="product-item-amount-field-btn-minus no-select" id="<?=$itemIds['QUANTITY_DOWN']?>"></span>
										<input class="product-item-amount-field" id="<?=$itemIds['QUANTITY']?>" type="number"
											name="<?=$arParams['PRODUCT_QUANTITY_VARIABLE']?>"
											value="<?=$measureRatio?>">
										<span class="product-item-amount-field-btn-plus no-select" id="<?=$itemIds['QUANTITY_UP']?>"></span>
										<span class="product-item-amount-description-container">
											<span id="<?=$itemIds['QUANTITY_MEASURE']?>"><?=$actualItem['ITEM_MEASURE']['TITLE']?></span>
											<span id="<?=$itemIds['PRICE_TOTAL']?>"></span>
										</span>
									</div>
								</div>
							</div>
							<?
						}
					}

					break;

				case 'props':
					if (!$haveOffers)
					{
						if (!empty($item['DISPLAY_PROPERTIES']))
						{
							?>
							<div class="product-item-info-container product-item-hidden" data-entity="props-block">
								<dl class="product-item-properties">
									<?
									foreach ($item['DISPLAY_PROPERTIES'] as $code => $displayProperty)
									{
										?>
										<dt<?=(!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' class="hidden-xs"' : '')?>>
											<?=$displayProperty['NAME']?>
										</dt>
										<dd<?=(!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' class="hidden-xs"' : '')?>>
											<?=(is_array($displayProperty['DISPLAY_VALUE'])
												? implode(' / ', $displayProperty['DISPLAY_VALUE'])
												: $displayProperty['DISPLAY_VALUE'])?>
										</dd>
										<?
									}
									?>
								</dl>
							</div>
							<?
						}

						if ($arParams['ADD_PROPERTIES_TO_BASKET'] === 'Y' && !empty($item['PRODUCT_PROPERTIES']))
						{
							?>
							<div id="<?=$itemIds['BASKET_PROP_DIV']?>" style="display: none;">
								<?
								if (!empty($item['PRODUCT_PROPERTIES_FILL']))
								{
									foreach ($item['PRODUCT_PROPERTIES_FILL'] as $propID => $propInfo)
									{
										?>
										<input type="hidden" name="<?=$arParams['PRODUCT_PROPS_VARIABLE']?>[<?=$propID?>]"
											value="<?=htmlspecialcharsbx($propInfo['ID'])?>">
										<?
										unset($item['PRODUCT_PROPERTIES'][$propID]);
									}
								}

								if (!empty($item['PRODUCT_PROPERTIES']))
								{
									?>
									<table>
										<?
										foreach ($item['PRODUCT_PROPERTIES'] as $propID => $propInfo)
										{
											?>
											<tr>
												<td><?=$item['PROPERTIES'][$propID]['NAME']?></td>
												<td>
													<?
													if (
														$item['PROPERTIES'][$propID]['PROPERTY_TYPE'] === 'L'
														&& $item['PROPERTIES'][$propID]['LIST_TYPE'] === 'C'
													)
													{
														foreach ($propInfo['VALUES'] as $valueID => $value)
														{
															?>
															<label>
																<? $checked = $valueID === $propInfo['SELECTED'] ? 'checked' : ''; ?>
																<input type="radio" name="<?=$arParams['PRODUCT_PROPS_VARIABLE']?>[<?=$propID?>]"
																	value="<?=$valueID?>" <?=$checked?>>
																<?=$value?>
															</label>
															<br />
															<?
														}
													}
													else
													{
														?>
														<select name="<?=$arParams['PRODUCT_PROPS_VARIABLE']?>[<?=$propID?>]">
															<?
															foreach ($propInfo['VALUES'] as $valueID => $value)
															{
																$selected = $valueID === $propInfo['SELECTED'] ? 'selected' : '';
																?>
																<option value="<?=$valueID?>" <?=$selected?>>
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
					}
					else
					{
						$showProductProps = !empty($item['DISPLAY_PROPERTIES']);
						$showOfferProps = $arParams['PRODUCT_DISPLAY_MODE'] === 'Y' && $item['OFFERS_PROPS_DISPLAY'];

						if ($showProductProps || $showOfferProps)
						{
							?>
							<div class="product-item-info-container product-item-hidden" data-entity="props-block">
								<dl class="product-item-properties">
									<?
									if ($showProductProps)
									{
										foreach ($item['DISPLAY_PROPERTIES'] as $code => $displayProperty)
										{
											?>
											<dt<?=(!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' class="hidden-xs"' : '')?>>
												<?=$displayProperty['NAME']?>
											</dt>
											<dd<?=(!isset($item['PROPERTY_CODE_MOBILE'][$code]) ? ' class="hidden-xs"' : '')?>>
												<?=(is_array($displayProperty['DISPLAY_VALUE'])
													? implode(' / ', $displayProperty['DISPLAY_VALUE'])
													: $displayProperty['DISPLAY_VALUE'])?>
											</dd>
											<?
										}
									}

									if ($showOfferProps)
									{
										?>
										<span id="<?=$itemIds['DISPLAY_PROP_DIV']?>" style="display: none;"></span>
										<?
									}
									?>
								</dl>
							</div>
							<?
						}
					}

					break;

				case 'sku':
					if ($arParams['PRODUCT_DISPLAY_MODE'] === 'Y' && $haveOffers && !empty($item['OFFERS_PROP']))
					{
						?>
						<div id="<?=$itemIds['PROP_DIV']?>">
							<?
							foreach ($arParams['SKU_PROPS'] as $skuProperty)
							{
								$propertyId = $skuProperty['ID'];
								$skuProperty['NAME'] = htmlspecialcharsbx($skuProperty['NAME']);
								if (!isset($item['SKU_TREE_VALUES'][$propertyId]))
									continue;
								?>
								<div class="product-item-info-container product-item-hidden" data-entity="sku-block">
									<div class="product-item-scu-container" data-entity="sku-line-block">
										<!-- <?=$skuProperty['NAME']?> -->
										<div class="product-item-scu-block">
											<div class="product-item-scu-list own_slider">
												<?php if($propertyId == 444){?>
													<a href="javascript:" class="prev_item prev_arrow<?=$item['ID'].'_'.$propertyId;?>">Prev</a>
													<a href="javascript:" class="next_item next_arrow<?=$item['ID'].'_'.$propertyId;?>">Next</a>
												<?php } ?>
												<ul class="prop_<?=$propertyId;?>_list_block product-item-scu-item-list regular slider_tsvet_<?=$item['ID'].'_'.$propertyId;?>">
													<?
													foreach ($skuProperty['VALUES'] as $value)
													{
														$skuColorClass = str_replace('/', ' ',mb_strtolower($value['NAME']));
														if(isset($colorsClass[$value['NAME']]))
															$skuColorClass = $colorsClass[$value['NAME']];
														if (!isset($item['SKU_TREE_VALUES'][$propertyId][$value['ID']]))
															continue;

														$value['NAME'] = htmlspecialcharsbx($value['NAME']);

														if ($skuProperty['SHOW_MODE'] === 'PICT')
														{
                                                            $style=($value['PICT']['ID']!='0') ? "background-image: url('".$value['PICT']['SRC']."')":'background-color:'.$arResult['HLBLOCK_VALUES']['TSVET'][$value['XML_ID']]['UF_BG_RGB'];
//														    $renderImage = CFile::ResizeImageGet($value['PICT']['ID'], Array("width" => 350, "height" => 350), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, false);
															?>
<!--															<li class="slide product-item-scu-item-color-container --><?//=$skuColorClass;?><!--" title="--><?//=$value['NAME']?><!--"-->
															<li class="slide product-item-scu-item-color-container" title="<?=$value['NAME']?>"
																data-treevalue="<?=$propertyId?>_<?=$value['ID']?>" data-onevalue="<?=$value['ID']?>">
																<div class="product-item-scu-item-color-block">
																	<div class="product-item-scu-item-color" title="<?=$value['NAME']?>"
																		style="<?=$style?>">
																	</div>
																</div>
															</li>
															<?
														}
														else
														{
															?>
															<li class="slide product-item-scu-item-text-container <?=$skuColorClass;?>" title="<?=$value['NAME']?>"
																data-treevalue="<?=$propertyId?>_<?=$value['ID']?>" data-onevalue="<?=$value['ID']?>">
																<div class="product-item-scu-item-text-block">
																	<div class="product-item-scu-item-text"><?=$value['NAME']?></div>
																</div>
															</li>
															<?
														}
													}
													?>
												</ul>
                                                <script type="application/javascript">
                                                    $(document).ready(function(){
                                                        $('.slider_tsvet_<?=$item['ID'].'_'.$propertyId?>').slick({
                                                            dots: false,
                                                            infinite: false,
                                                            slidesToShow: 8,
                                                            slidesToScroll: 8,
                                                            // centerMode: true,
                                                            variableWidth: true,
                                                            // variableWidth: true,
                                                            prevArrow: $('.prev_arrow<?=$item['ID'].'_'.$propertyId;?>'),
                                                            nextArrow: $('.next_arrow<?=$item['ID'].'_'.$propertyId;?>'),
                                                        });
                                                    });
                                                </script>

												<div style="clear: both;"></div>
											</div>
										</div>
									</div>
								</div>
								<?
							}
							?>
						</div>
						<?
						foreach ($arParams['SKU_PROPS'] as $skuProperty)
						{
							if (!isset($item['OFFERS_PROP'][$skuProperty['CODE']]))
								continue;

							$skuProps[] = array(
								'ID' => $skuProperty['ID'],
								'SHOW_MODE' => $skuProperty['SHOW_MODE'],
								'VALUES' => $skuProperty['VALUES'],
								'VALUES_COUNT' => $skuProperty['VALUES_COUNT']
							);
						}

						unset($skuProperty, $value);

						if ($item['OFFERS_PROPS_DISPLAY'])
						{
							foreach ($item['JS_OFFERS'] as $keyOffer => $jsOffer)
							{
								$strProps = '';

								if (!empty($jsOffer['DISPLAY_PROPERTIES']))
								{
									foreach ($jsOffer['DISPLAY_PROPERTIES'] as $displayProperty)
									{
										$strProps .= '<dt>'.$displayProperty['NAME'].'</dt><dd>'
											.(is_array($displayProperty['VALUE'])
												? implode(' / ', $displayProperty['VALUE'])
												: $displayProperty['VALUE'])
											.'</dd>';
									}
								}

								$item['JS_OFFERS'][$keyOffer]['DISPLAY_PROPERTIES'] = $strProps;
							}
							unset($jsOffer, $strProps);
						}
					}

					break;
			}
		}
	}

	if (
		$arParams['DISPLAY_COMPARE']
		&& (!$haveOffers || $arParams['PRODUCT_DISPLAY_MODE'] === 'Y')
	)
	{
		?>
		<div class="product-item-compare-container">
			<div class="product-item-compare">
				<div class="checkbox">
					<label id="<?=$itemIds['COMPARE_LINK']?>">
						<input type="checkbox" data-entity="compare-checkbox">
						<span data-entity="compare-title"><?=$arParams['MESS_BTN_COMPARE']?></span>
					</label>
				</div>
			</div>
		</div>
		<?
	}
	?>
</div>


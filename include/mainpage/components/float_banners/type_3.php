<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?$APPLICATION->IncludeComponent(
	"aspro:com.banners.max", 
	"float_banners2", 
	array(
		"IBLOCK_TYPE" => "aspro_max_adv",
		"IBLOCK_ID" => "68",
		"TYPE_BANNERS_IBLOCK_ID" => "56",
		"SET_BANNER_TYPE_FROM_THEME" => "N",
		"NEWS_COUNT" => "4",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "ASC",
		"PROPERTY_CODE" => array(
			0 => "URL",
			1 => "TOP_TEXT",
			2 => "TOP_IMG",
		),
		"CHECK_DATES" => "Y",
		"SIZE_IN_ROW" => "4",
		"BG_POSITION" => "center",
		"BG_BLOCK_POSITION" => "top",
		"CACHE_GROUPS" => "N",
		"SECTION_ITEM_CODE" => "float_banners_type_2",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"BANNER_TYPE_THEME" => "BANNER_IMG_WIDE"
	),
	false
);?>
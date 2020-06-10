<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?$APPLICATION->IncludeComponent(
	"aspro:com.banners.max", 
	"float_banners", 
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
		),
		"CHECK_DATES" => "Y",
		"TYPE_BLOCK" => "type2",
		"BG_POSITION" => "center",
		"SECTION_ITEM_CODE" => "float_banners_type_1",
		"CACHE_GROUPS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"BANNER_TYPE_THEME" => "BANNER_IMG_WIDE"
	),
	false
);?>
<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?$APPLICATION->IncludeComponent(
	"aspro:com.banners.max", 
	"only_img", 
	array(
		"IBLOCK_TYPE" => "aspro_max_adv",
		"IBLOCK_ID" => "62",
		"TYPE_BANNERS_IBLOCK_ID" => "56",
		"SET_BANNER_TYPE_FROM_THEME" => "N",
		"NEWS_COUNT" => "2",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "ASC",
		"PROPERTY_CODE" => array(
			0 => "URL",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"SIZE_IN_ROW" => "2",
		"WIDE" => "N",
		"NO_MARGIN" => "N",
		"BG_POSITION" => "center",
		"CACHE_GROUPS" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"BANNER_TYPE_THEME" => "BANNER_IMG_TYPE2"
	),
	false
);?>
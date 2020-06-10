<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"",
	Array(
		"API_KEY" => "",
		"CONTROLS" => array("ZOOM","TYPECONTROL","SCALELINE"),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.77432427482114;s:10:\"yandex_lon\";d:37.67743437519157;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.679637;s:3:\"LAT\";d:55.776259;s:4:\"TEXT\";s:9:\"MamasGang\";}}}",
		"MAP_HEIGHT" => "100%",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DRAGGING"),
		"USE_REGION_DATA" => "Y"
	)
);?>
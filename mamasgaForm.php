<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("viewed_show", "Y");
$APPLICATION->SetTitle("Mamasgang");
?>
<? /*
<?$APPLICATION->IncludeComponent("bitrix:form.result.new","popup",Array(
        "SEF_MODE" => "Y",
        "WEB_FORM_ID" => "23",
        "LIST_URL" => "result_list.php",
        "EDIT_URL" => "result_edit.php",
        "SUCCESS_URL" => "",
        "CHAIN_ITEM_TEXT" => "",
        "CHAIN_ITEM_LINK" => "",
        "IGNORE_CUSTOM_TEMPLATE" => "Y",
        "USE_EXTENDED_ERRORS" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "SEF_FOLDER" => "/",
        "VARIABLE_ALIASES" => Array(
)
    )
);?>
 */?>
    <button class="btn  btn-transparent-border-color white  animate-load has-ripple" data-event="jqm" data-param-form_id="TESTDRIVE" data-name="contacts">
        тест драйв
    </button>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
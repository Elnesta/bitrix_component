<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?><?$APPLICATION->IncludeComponent(
	"system:elements.list",
	"",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COUNT" => "0",
		"IBLOCK_CODE" => "",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "test",
		"SHOW_NAV" => "Y",
		"SORT_DIRECTION1" => "ASC",
		"SORT_DIRECTION2" => "ASC",
		"SORT_FIELD1" => "ACTIVE_FROM",
		"SORT_FIELD2" => "ID"
	)
);?>
<p>
</p>
<p>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
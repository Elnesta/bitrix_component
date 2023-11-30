<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>


<?$APPLICATION->IncludeComponent(
	"system:elements.list", 
	".default", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COUNT" => "6",
		"IBLOCK_CODE" => "",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "test",
		"SHOW_NAV" => "Y",
		"SORT_DIRECTION1" => "ASC",
		"SORT_DIRECTION2" => "ASC",
		"SORT_FIELD1" => $_GET["sort"] ,
		"SORT_FIELD2" => "ID",
		"COMPONENT_TEMPLATE" => ".default",
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
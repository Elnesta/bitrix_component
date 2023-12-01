<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
<?
use Bitrix\Main\Localization\Loc as Loc;
Loc::loadMessages(__FILE__);
$this->setFrameMode(true);
?>

<? 
			if ($_GET["sort"] == "id")
			{
					$arParams["SORT_FIELD1"] = "ID";
					$idSort="asortvibor";
					$title="";
					$noSort="";
			}
			 
			if ($_GET["sort"] == "title")
			{
					$arParams["SORT_FIELD1"] = "NAME";
					$idSort="";
					$title="asortvibor";
					$noSort="";
			}
			
			if ($_GET["sort"] == "nosort")
			{
					$arParams["SORT_FIELD1"] = "ACTIVE_FROM";
					$idSort="";
					$title="";
					$noSort="asortvibor";
			}
?>


<div class="interactive-wrap">
	<div class="sort-wrap"><span>Сортировать по: </span>
		<a class="<? echo ($_GET["sort"] == "ID") ? "active" : '' ?>" href="<? echo $APPLICATION->GetCurPageParam("sort=ID",array("sort"), false)?>" >индексу</a> |
		<a class="<? echo ($_GET["sort"] == "NAME") ? "active" : '' ?>" href="<? echo $APPLICATION->GetCurPageParam("sort=NAME",array("sort"), false)?>" >заголовку</a> |
		<a class="<? echo ($_GET["sort"] == "ACTIVE_FROM") ? "active" : '' ?>" href="<? echo $APPLICATION->GetCurPageParam("sort=ACTIVE_FROM",array("sort"), false)?>" >без сортировки</a>
	</div>
	<div class="filter-wrap"><span>Фильтр: </span>
		<a class="<? echo ($_GET["filter"] == "IMPORT") ? "active" : '' ?>" href="<? echo $APPLICATION->GetCurPageParam("filter=IMPORT",array("filter"), false) ?>" >важное</a> |
		<a class="<? echo ($_GET["filter"] == "NEW") ? "active" : '' ?>" href="<? echo $APPLICATION->GetCurPageParam("filter=NEW",array("filter"), false)?>" >новое</a> |
		<a class="<? echo ($_GET["filter"] == "ALL") ? "active" : '' ?>" href="<? echo $APPLICATION->GetCurPageParam("filter=ALL",array("filter"), false)?>" >все</a>
	</div>
</div>


<? if (count($arResult['ITEMS'])):?>
<h2><?=Loc::getMessage('ELEMENTS_LIST_TEMPLATE_TITLE');?></h2>
<div class="catalog-wrap">
<? foreach ($arResult['ITEMS'] as $item):?>
<div class='catalog-card'>
<div class='catalog-top'>
  <div class="card_img--wrapper">
    <div class="card-img">
      <img src="<? echo($item['PREVIEW_PICTURE']);?>" alt="">
    </div>
  </div>
	</div>
	<div class='catalog-bottom'>
  <a href="<?=$item['URL'];?>">
    <?=$item['NAME'];?>
  </a>

<?=$item['TEXT'];?></div>
</div>
<? endforeach;?>
</div>
<?=$arResult['NAV_STRING'];?>
<? endif;?>
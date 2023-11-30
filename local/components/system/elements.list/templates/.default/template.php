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

<?php
printf('<span>Сортировать по: </span>
<a href="%s" >индексу</a> |
<a href="%s" >заголовку</a> |
<a href="%s" >без сортировки</a>',
$APPLICATION->GetCurPageParam("sort=ID",array("sort"), false),
$APPLICATION->GetCurPageParam("sort=NAME",array("sort"), false),
$APPLICATION->GetCurPageParam("sort=ACTIVE_FROM",array("sort"), false)
);
 
?>

<?php
printf('<span>Фильтр: </span>
<a href="%s" >важное</a> |
<a href="%s" >новое</a> |
<a href="%s" >все</a>',
$APPLICATION->GetCurPageParam("filter=IMPORT",array("filter"), false),
$APPLICATION->GetCurPageParam("filter=NEW",array("filter"), false),
$APPLICATION->GetCurPageParam("filter=ALL",array("filter"), false)
);
 
?>

<? if (count($arResult['ITEMS'])):?>
<h2><?var_dump($_GET["filter"]) ?><?=Loc::getMessage('ELEMENTS_LIST_TEMPLATE_TITLE');?></h2>
<div class="catalog-wrap">
<? foreach ($arResult['ITEMS'] as $item):?>
<div class='catalog-card'>
<div class='catalog-top'>
  <div class="card_img--wrapper">
    <div class="card-img">
      <img src="<? echo($item['PREVIEW_PICTURE']);?>" alt="">
    </div>
  </div>
  <a href="<?=$item['URL'];?>">
    <?=$item['NAME'];?>
  </a>
</div>
<div class='catalog-bottom'><?=$item['TEXT'];?></div>
</div>
<? endforeach;?>
</div>
<?=$arResult['NAV_STRING'];?>
<? endif;?>
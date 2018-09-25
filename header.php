<!DOCTYPE html>
<html xml:lang="ru" lang="ru">

<head>

    <? $APPLICATION->AddHeadString('<meta http-equiv="X-UA-Compatible" content="IE=edge"/>', true) ?>
    <? $APPLICATION->AddHeadString('<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">', true) ?>
    <? $APPLICATION->AddHeadString('<link rel="shortcut icon" type="image/x-icon" href="'.SITE_TEMPLATE_PATH.'/images/favicon.ico"/>', true) ?>
    <? $APPLICATION->AddHeadString('<link rel="apple-touch-icon" href="'.SITE_TEMPLATE_PATH.'/images/apple-touch-icon.png">', true) ?>
    <? $APPLICATION->AddHeadString('<link rel="icon" type="image/png" sizes="192x192" href="'.SITE_TEMPLATE_PATH.'/images/android-chrome-192.png">', true) ?>
    <? $APPLICATION->AddHeadString('<meta name="msapplication-config" content="'.SITE_TEMPLATE_PATH.'/images/browserconfig.xml">', true) ?>


    <? $APPLICATION->ShowHead(); ?>

    <? $APPLICATION->AddHeadString('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>', true) ?>
    <? $APPLICATION->AddHeadString('<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>', true) ?>
    <? $APPLICATION->AddHeadString('<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">', true) ?>

    <?
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/css/bootstrap-reboot.min.css", true);
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/css/bootstrap.min.css", true);

    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/css/style1.css", true); /*глобальный шаблон- шапка и подвал*/
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/assets/css/main1.css", true); /*главная, каталог, внутряки */

    ?>
    <title>
        <? $APPLICATION->ShowTitle() ?>
    </title>

</head>

<body>

<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>

<?  if ($curPage == SITE_DIR . "index.php") {
    $APPLICATION->IncludeComponent("bitrix:eshop.banner", "", array());} ?>
<?
$APPLICATION->IncludeComponent(
    "h2o:favorites.add",
    "",
    Array(),
    false
);
?>


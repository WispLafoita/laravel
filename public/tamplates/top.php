<?php session_start();
require_once ('config/config.php');
require_once ('functions/functions.php');
?>

<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Borisov</title>
    <meta name="description" content="">
    <meta name="keywords" content="Магазин по продаже игровой валюты и аккаунтов">
    <link rel="stylesheet" href="media/css/style.css">
    <link rel="stylesheet" href="media/bootstrap/css/bootstrap.min.css">
	<script src="media/js/jquery-3.3.1.min.js"></script>
	<script src="media/js/main.js"></script>
</head>

<body>
    <div class="header">
        <img src="media/img/logo1.png" width="200" height="222" alt="Борисов" id="logo" />
        <h1 class="logotext">Fust<span>Trade</span></h1>
<?php
if ($_SESSION ['user_id']){
?>
<a href ="cart.php" class="popup">Корзина</a>
<a href ="cabinet.php" class="popup">Кабинет</a>
<a href ="logout.php" class="popup">Выход</a>
<?php
}else{
?>
<a href ="reg.php" class="popup">Регистрация</a>
<a href ="login.php" class="popup">Вход</a>
<?php
}
?>
<form action="search.php" method="get">
	<input type="search" name="name"/>
	<button type="submit" class="btn btn-info">Найти</button>
</form>
    </div>
    <nav class="menutop">
        <a href="/products.php">Главная</a>
        <a href="#">Форум</a>
        <a href="/index.php?url=partner" data-url="media/img/partner.jpg" data-title="Постовщикам">Поставщикам</a>
        <a href="/index.php?url=faq" data-url="media/img/faq.jpg" data-title="Вопросы">Вопросы/FAQ</a>
        <a href="/index.php?url=contakts" data-url="media/img/contakts.jpg" data-title="Контакты">Контакты</a>
    </nav>
    <div class="col-md-2">
        <a href="" class="btn btn-block btn-primary">Lineage2</a>
        <a href="" class="btn btn-block btn-primary">Warcraft</a>
        <a href="" class="btn btn-block btn-primary">AION</a>
        <a href="" class="btn btn-block btn-primary">Black Desert</a>

    </div>
<div class="col-md-8">

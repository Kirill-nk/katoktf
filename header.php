<?php /* header.php — шапка сайта. Подключается на всех страницах через include */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){
        m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=113985894', 'ym');

    ym(113985894, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", referrer: document.referrer, url: location.href, accurateTrackBounce:true, trackLinks:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/113985894" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<META NAME='AUTHOR' CONTENT='Kirill_Plotskiy'>
<META NAME='DESCRIPTION' CONTENT='Каток в Новокузнецке. Ледовый каток в Новокузнецке, катание'>
<META NAME='KEYWORDS' CONTENT='katok-tf.ru, www.katok-tf.ru, http://katok-tf.ru, каток в Новокузнецке, ледовый каток в Новокузнецке, катание на коньках Новокузнецк'>
<META NAME='COPYRIGHT' CONTENT='Copyright (c) 2026 by WWW.KATOK-TF.RU'>
<META http-equiv='cache-control' content='no-cache'>
<META http-equiv='pragma' content='no-cache'>
<META http-equiv='Content-Language' content='ru'>
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<title>Каток в Новокузнецке</title>
<link rel="icon" type="image/png" href="/favicon.png" />
<link rel="apple-touch-icon" href="/favicon.png" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="maincontent">
	<div id="head"></div>
	
	<!-- Бургер-кнопка (только для мобильных) -->
	<button class="burger" id="burgerBtn" aria-label="Открыть меню" aria-expanded="false" aria-controls="mainMenu">
		<span></span>
		<span></span>
		<span></span>
	</button>
	
	<nav class="menu" id="mainMenu">
		<ul>
            <?php $page = basename($_SERVER['PHP_SELF']); /* Получаем имя текущего файла */ ?>
            
			<!--Главная-->
			<li class="<?= ($page == 'index.php') ? 'abc' : '' ?>">
                <a href="index.php">Главная</a>
            </li>
            
			<!--Как добраться-->
			<li class="<?= ($page == 'road.php') ? 'abc' : '' ?>">
                <a href="road.php">Как добраться</a>
            </li>
            
			<!--Галерея-->
			<li class="<?= ($page == 'galery.php') ? 'abc' : '' ?>">
                <a href="galery.php">Галерея</a>
            </li>
            
			<!--Правила катания-->
			<li class="<?= ($page == 'rules.php') ? 'abc' : '' ?>">
                <a href="rules.php">Правила</a>
            </li>
            
			<!--Заточка-->
			<li class="<?= ($page == 'sharp.php') ? 'abc' : '' ?>">
                <a href="sharp.php">Заточка</a>
            </li>
            
			<!--Контакты-->
			<li class="<?= ($page == 'contacts.php') ? 'abc' : '' ?>">
                <a href="contacts.php">Контакты</a>
            </li>
		</ul>
	</nav>	
	
	<!-- Затемнение фона под выезжающим меню-->
	<div class="menu-overlay" id="menuOverlay"></div>
	
	<script>
	document.addEventListener('DOMContentLoaded', function () {
		var burger  = document.getElementById('burgerBtn');
		var menu    = document.getElementById('mainMenu');
		var overlay = document.getElementById('menuOverlay');
		
		function toggleMenu() {
			var isOpen = menu.classList.toggle('open');
			burger.classList.toggle('active', isOpen);
			overlay.classList.toggle('open');
			burger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
			document.body.style.overflow = isOpen ? 'hidden' : '';
		}
		
		burger.addEventListener('click', toggleMenu);
		overlay.addEventListener('click', toggleMenu);
		
	//Закрывать меню при клике на пункт (перед переходом)
	var links = menu.querySelectorAll('a');
	for (var i = 0; i < links.length; i++) {
		links[i].addEventListener('click', function () {
			if (menu.classList.contains('open')) toggleMenu();
		});
	}
	
	//Закрытие по escape
	document.addEventListener('keydown', function (e) {
		if (e.key === 'Escape' && menu.classList.contains('open')) toggleMenu();
		});
	});
	
	</script>
		
	
	<main class="content">
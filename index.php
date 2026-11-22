<?php /* index.php — главная страница. Только контент */ ?>
<?php include 'header.php'; /* подключаем шапку */ ?>

<!-- === ОСНОВНОЙ ТЕКСТ ГЛАВНОЙ === -->
<div class="today-block">
Сегодня:
<?php
// Вывод текущей даты на русском
$today = getdate();
$months = array("января","февраля","март","апреля","май","июня","июля","август","сентября","октября","ноября","декабря");
$month = $months[$today['mon']-1];
$mday = $today['mday'];
$year = $today['year'];
echo "$mday $month $year";
echo "г.";
?>
</div>
<br><br>

<!-- Блок объявления -->
<div class="announcement-block">
  <h3 class="notice-title">Уважаемые посетители!</h3>
  <p class="notice-text">Подготовка к зимнему сезону 2026-2027 уже началась.</p>
</div>


<!-- Слайдер для ПК (листается свайпом) -->
<div id="home-display" class="stepcarousel">
    <div class="slides clearfix">
        <div class="slide"><img src="slider/главн_katok.jpg" alt="Каток на Запсибе" /></div>
        <div class="slide"><img src="slider/30_katok.jpg" alt="Каток на Запсибе" /></div>
        <div class="slide"><img src="slider/31_katok.jpg" alt="Каток на Запсибе" /></div>
        <div class="slide"><img src="slider/32_katok.jpg" alt="Каток на Запсибе" /></div>
        <div class="slide"><img src="slider/12_katok.jpg" alt="Каток на Запсибе" /></div>
        <div class="slide"><img src="slider/13_katok.jpg" alt="Каток на Запсибе" /></div>
        <div class="slide"><img src="slider/17_katok.jpg" alt="Каток на Запсибе" /></div>
        <div class="slide"><img src="slider/19_katok.jpg" alt="Каток на Запсибе" /></div>
        <div class="slide"><img src="slider/1_katok.jpg" alt="Каток на Запсибе" /></div>
        <div class="slide"><img src="slider/2_katok.jpg" alt="Каток на Запсибе" /></div>
        <div class="slide"><img src="slider/24_katok.jpg" alt="Каток на Запсибе" /></div>
    </div>
</div>

<!-- Мобильная галерея (вместо слайдера) -->
<div class="mobile-gallery">
    <img src="glavn1.jpeg" alt="Каток на Запсибе" />
    <img src="slider/02.jpeg" alt="Каток на Запсибе" />
    <img src="slider/03.jpeg" alt="Каток на Запсибе" />
    <img src="slider/04.jpeg" alt="Каток на Запсибе" />
</div>

<br>

<!-- VK-виджет сообщества -->
<div id="vk123" align="Center">
<script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 3, width: "400", color1: 'C8FAFC'}, 104732119);
</script>
</div>

<!-- Отступ внизу контента -->
<div class="spacer-220"></div>

<?php include 'footer.php'; /* подключаем подвал */ ?>
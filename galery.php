<?php /* galery.php — страница «Галерея». Только контент */ ?>
<?php include 'header.php'; /* подключаем шапку */ ?>

<h2>Галерея</h2>

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
 
<p><a href="index.php">На главную</a></p>
<div class="spacer-220"></div>

<?php include 'footer.php'; /* подключаем подвал */ ?>
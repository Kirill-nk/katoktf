<?php include 'header.php'; /* Подключаем шапку */ ?>


<div style="text-align: left; padding: 0 15px;">
    <p>Для проезда на каток жмите кнопку:</p>
    
    <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 15px; margin-bottom: 20px;">
        <!-- Кнопка Яндекс Навигатор -->
        <a href="https://yandex.ru/maps/?rtext=~53.832613,87.169904&rtt=auto" target="_blank" style="display: inline-block; background: #1a3b6d; color: #fff; padding: 12px 20px; text-decoration: none; border-radius: 5px; font-weight: bold;">
            📍 Яндекс Навигатор
        </a>
        
        <!-- Кнопка 2ГИС -->
        <a href="https://2gis.ru/directions/tab/car/to/87.169904%2C53.832613" target="_blank" style="display: inline-block; background: #008000; color: #fff; padding: 12px 20px; text-decoration: none; border-radius: 5px; font-weight: bold;">
            📍 2ГИС
        </a>
    </div>
</div>

<!-- Карта 1 -->
<div class="map-responsive">
    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=9CtzkDz2I7QtcJZKpz1Pa8RLyWFC0aC8&width=100%25&height=450&lang=ru_RU&sourceType=constructor"></script>
</div>


<br>

<!-- Карта 2 -->
<div class="map-responsive">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A652c30eae9832acc6c4b2b9d5a58cd4d236420eb52c09e8132df93250a0809b6&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
</div>

<a href="index.php" class=zag>На главную</a></div><br>

<?php include 'footer.php'; /* Подключаем подвал */ ?>
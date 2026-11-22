<?php /* footer.php — подвал сайта. Закрывает main и #maincontent из header.php */ ?>
	</main>

	<!-- LiveInternet counter -->
	<a href="https://www.liveinternet.ru/click" target="_blank">
		<img id="licntBC73" width="88" height="31" style="border:0" 
		title="LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня"
		src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7"
		alt=""/></a>
	<script>(function(d,s){d.getElementById("licntBC73").src=
		"https://counter.yadro.ru/hit?t17.6;r"+escape(d.referrer)+
		((typeof(s)=="undefined")?"":";s"+s.width+"*"+s.height+"*"+
		(s.colorDepth?s.colorDepth:s.pixelDepth))+";u"+escape(d.URL)+
		";h"+escape(d.title.substring(0,150))+";"+Math.random()})
		(document,screen)</script>
	<!-- /LiveInternet -->

	<footer>
		<table width="100%">
			<tr>
				<td bgcolor="#6699ff" align="center">
					Наши координаты: г. Новокузнецк, Заводской район, площадь Общественных мероприятий<br>
					<a href="mailto:katok-tf@yandex.ru">katok-tf@yandex.ru</a>, тел. 8-905-911-9777
				</td>
			</tr>
		</table>
	</footer>
</div><!-- /#maincontent -->

<!--свайп-->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var slider = document.getElementById('home-display');
    
    if (!slider) return;

    var isDown = false;
    var startX;
    var scrollLeft;
    var isDragging = false; // ВОТ ОНА - переменная, которой вам не хватало

    // 1. Отключаем стандартное перетаскивание картинок
    var images = slider.querySelectorAll('img');
    for (var i = 0; i < images.length; i++) {
        images[i].addEventListener('dragstart', function(e) {
            e.preventDefault();
        });
    }

    // 2. Нажатие мыши
    slider.addEventListener('mousedown', function(e) {
        isDown = true;
        isDragging = false; // Сбрасываем флаг, так как мы только нажали
        slider.style.scrollSnapType = 'none'; 
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });

    // 3. Отпускание мыши
    slider.addEventListener('mouseleave', endDrag);
    slider.addEventListener('mouseup', endDrag);

    function endDrag() {
        if (!isDown) return;
        isDown = false;
        slider.style.scrollSnapType = 'x mandatory';

        if (isDragging) {
            var slides = slider.querySelectorAll('.slide');
            if (slides.length === 0) return;
            
            var slideWidth = slides[0].offsetWidth + 10;
            var index = Math.round(slider.scrollLeft / slideWidth);
            index = Math.max(0, Math.min(index, slides.length - 1));

            slides[index].scrollIntoView({
                behavior: 'smooth',
                block: 'nearest',
                inline: 'center'
            });
        }
    }

    // 4. Движение мыши
    slider.addEventListener('mousemove', function(e) {
        if (!isDown) return;
        e.preventDefault();
        var x = e.pageX - slider.offsetLeft;
        var walk = (x - startX) * 1.5; 
        
        // Если сдвинули больше 5 пикселей, значит это свайп, а не клик
        if (Math.abs(walk) > 5) {
            isDragging = true;
        }
        
        slider.scrollLeft = scrollLeft - walk;
    });
	
    // 4.5. Динамическая смена курсора (рука на главном, палец на боковых)
    function updateCursor() {
        var slides = slider.querySelectorAll('.slide');
        
        // Берем точные координаты центра контейнера на экране
        var sliderRect = slider.getBoundingClientRect();
        var sliderCenterX = sliderRect.left + (sliderRect.width / 2);

        for (var k = 0; k < slides.length; k++) {
            // Берем точные координаты центра каждого слайда на экране
            var slideRect = slides[k].getBoundingClientRect();
            var slideCenterX = slideRect.left + (slideRect.width / 2);
            
            // Если центры совпадают с точностью до 5 пикселей — это главное фото
            if (Math.abs(sliderCenterX - slideCenterX) < 5) {
                slides[k].classList.add('centered');
            } else {
                slides[k].classList.remove('centered');
            }
        }
    }

    // Вызываем функцию при прокрутке и один раз при загрузке
    slider.addEventListener('scroll', updateCursor);
    setTimeout(updateCursor, 100); 
    // 5. КЛИК ПО СЛАЙДУ
    var slides = slider.querySelectorAll('.slide');
    for (var j = 0; j < slides.length; j++) {
        slides[j].addEventListener('click', function(e) {
            // Если мышь двигалась, блокируем клик
            if (isDragging) {
                e.preventDefault();
                e.stopPropagation();
                return;
            }

            // Если это был просто клик (без движения), плавно прокручиваем к нему
            this.scrollIntoView({
                behavior: 'smooth',
                block: 'nearest',
                inline: 'center'
            });
        });
    }
});
</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Объявление</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <x-header></x-header>
    <div class="container">
        <div class="post-main">
            <div class="post-main-left">
                <div class="post-main-left-slider">
                    <h2>Дом 82 м² на участке 6,3 сот.</h2>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="/images/hom.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="/images/hom.jpg" alt=""></div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="post-main-left-desc">
                    <h2>Описание</h2>
                    <p>Пpедлагaeм к пpoдaже шикарный дом в д. Блoхинo !!!! От надежнoго зaстpoйщикa !!! Гoтoвый к пpoживанию!!! ЗАЕЗЖАЙ И ЖИBИ !!!
                        Прохoдит по !!!Ceльской ипoтeкe!!! Ceмейной ипотeке, Гoсподдeржке!!! Дoм рaсполoжeн в живописнoм мecтe в прeкpасной природнoй зоне, рядoм c домoм лeс, озерo!!!</p>
                </div>
                <div class="post-main-left-address">
                    <h2>Расположение</h2>
                    <p>Республика Башкортостан, Иглинский р-н, Акбердинский сельсовет, д. Блохино, Гранитная ул.</p>
                </div>
            </div>
            <div class="post-main-right">
                <div class="post-main-right-cost">
                    <p class="post-main-right-cost-title">Цена:</p>
                    <p>5200000₽</p>
                    <p class="post-main-right-cost-title">Рейтинг:</p>
                    <p>4.8</p>
                    <p class="post-main-right-cost-title">Продавец:</p>
                    <button>Написать продавцу</button>
                    <button>Позвонить продавцу</button>
                    <div>
                        <button>В избранное</button>
                        <button>Пожаловаться</button>
                    </div>
                </div>
                <div class="post-main-right-about">
                    <h2>О доме</h2>
                    <p>Количество комнат</p>
                    <p>Площадь дома: 82 м²</p>
                    <p>Площадь участка: 6.3 сот.</p>
                    <p>Этажей в доме: 1</p>
                    <p>Ремонт: косметический</p>
                    <p>Ремонт: косметический</p>
                    <p>Ремонт: косметический</p>
                    <p>Площадь дома: 82 м²</p>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
    <script>
        var swiper = new Swiper(".mySwiper", {
          cssMode: true,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          pagination: {
            el: ".swiper-pagination",
          },
          mousewheel: true,
          keyboard: true,
        });
      </script>
</body>
</html>
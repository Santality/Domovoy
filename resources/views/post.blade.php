<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Объявление</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.svg">
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
                    <h2>{{$details->title}}</h2>
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
                    <h2 class="post-main-right-cost-title">Описание</h2>
                    <p>
                        @if($details->description)
                        {{$deatails->description}}
                        @else
                        Пустота...
                        @endif
                    </p>
                    <h2 class="post-main-right-cost-title">Расположение</h2>
                    <p>{{$details->address}}</p>
                </div>
            </div>
            <div class="post-main-right">
                <div class="post-main-right-cost">
                    <p class="post-main-right-cost-title">Цена:</p>
                    <p class="post-main-right-cost-text">{{$details->cost}} ₽</p>
                    <p class="post-main-right-cost-title">Продавец:</p>
                    <a href="" class="post-main-right-seller">
                        <img class="me-1" src="/images/profile.svg" alt="profile.svg">
                    </a>
                    <button class="post-up-button">Позвонить продавцу</button>
                    <div class="d-flex justify-content-between">
                        <button class="post-down-button-left">
                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 4.45398C10.8007 1.84004 7.12572 1.03223 4.37017 3.4258C1.61461 5.81938 1.22666 9.82129 3.39062 12.6522C5.18981 15.0059 10.6348 19.97 12.4193 21.5768C12.6189 21.7565 12.7188 21.8464 12.8353 21.8817C12.9368 21.9125 13.048 21.9125 13.1497 21.8817C13.2662 21.8464 13.3659 21.7565 13.5657 21.5768C15.3502 19.97 20.7951 15.0059 22.5943 12.6522C24.7583 9.82129 24.4177 5.7942 21.6147 3.4258C18.8118 1.0574 15.1993 1.84004 13 4.45398Z" stroke="#3DB072" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            В избранное
                        </button>
                        <button class="post-down-button-right">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.391 5.97645C21.3179 4.13803 19.8623 2.68243 18.0238 1.60938C16.185 0.536388 14.1777 0 12.0004 0C9.82322 0 7.81553 0.536388 5.97684 1.60938C4.13825 2.68227 2.68265 4.13787 1.60955 5.97645C0.536388 7.81515 0 9.82306 0 12C0 14.177 0.536552 16.1847 1.60938 18.0235C2.68243 19.8615 4.13803 21.3175 5.97662 22.3907C7.81531 23.4636 9.82306 24.0001 12.0001 24.0001C14.1772 24.0001 16.1852 23.4636 18.0238 22.3907C19.8622 21.3179 21.3178 19.8619 22.3908 18.0235C23.4636 16.1847 23.9999 14.1768 23.9999 12C24 9.82306 23.4636 7.81487 22.391 5.97645ZM14.0005 19.4843C14.0005 19.6304 13.9533 19.7525 13.8597 19.8514C13.766 19.9502 13.6514 19.9997 13.5158 19.9997H10.5158C10.3805 19.9997 10.2606 19.9476 10.1565 19.8435C10.0523 19.7394 10.0003 19.6195 10.0003 19.4843V16.5158C10.0003 16.3802 10.0523 16.2603 10.1565 16.1562C10.2606 16.0521 10.3805 16.0001 10.5158 16.0001H13.5158C13.6514 16.0001 13.7664 16.0498 13.8597 16.1483C13.9533 16.2477 14.0005 16.3697 14.0005 16.5158V19.4843ZM13.9691 14.1095C13.9586 14.2136 13.9041 14.3048 13.8054 14.3829C13.7062 14.4609 13.584 14.4998 13.4383 14.4998H10.5474C10.4015 14.4998 10.2765 14.4609 10.1724 14.3829C10.0682 14.3048 10.016 14.2136 10.016 14.1095L9.75044 4.40615C9.75044 4.28093 9.80243 4.1874 9.90652 4.12484C10.0108 4.0416 10.1358 3.99985 10.2816 3.99985H13.7196C13.8655 3.99985 13.9904 4.04144 14.0945 4.12484C14.1987 4.1874 14.2504 4.28115 14.2504 4.40615L13.9691 14.1095Z" fill="#3DB072"/>
                            </svg>
                            Пожаловаться
                        </button>
                    </div>
                </div>
                <div class="post-main-right-about">
                    <h2 class="post-main-right-cost-title mb-2">О доме</h2>
                    <p class="post-main-right-about-desc">Тип объекта:
                    </p>
                    <p class="post-main-right-about-desc">Количество комнат:
                    </p>
                    <p class="post-main-right-about-desc">Общая площадь:
                    </p>
                    <p class="post-main-right-about-desc">Жилая площадь:
                    </p>
                    <p class="post-main-right-about-desc">Высота потолков:
                    </p>
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

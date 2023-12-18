<!DOCTYPE html>
<html lang="ru">
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
    <div class="wrapper">
    <x-header></x-header>
    <div class="container main-block">
        <div class="post-main">
            <div class="post-main-left">
                <div class="post-main-left-slider">
                    <h2>{{$details->title}}</h2>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @forelse ($details->photo as $photo)
                            <div class="swiper-slide"><img src="/storage/img/{{$photo->title_photo}}" alt="{{$photo->title_photo}}"></div>
                            @empty
                            <div class="swiper-slide"><img src="/images/default_post_photo.jpg" alt="default.jpg"></div>
                            @endforelse
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
                        {{$details->description}}
                        @else
                        Не указано
                        @endif
                    </p>
                    <h2 class="post-main-right-cost-title">Расположение</h2>
                    <p>{{$details->address}}</p>
                </div>
            </div>
            <div class="post-main-right">
                <div class="post-main-right-cost">
                    @if ($details->status == 1)
                    <h2 style="color:#3DB072;" class="status-post-page">Объявление {{$details->title_status}}</h2>
                    @else
                    <h2 style="color: red;" class="status-post-page">Объявление {{$details->title_status}}</h2>
                    @endif
                    <p class="post-main-right-cost-title">Цена:</p>
                    <p class="post-main-right-cost-text">
                        @if ($details->type == 1)
                        {{$details->cost}} ₽ в месяц
                        @else
                        {{$details->cost}} ₽
                        @endif
                    </p>
                    <p class="post-main-right-cost-title">Продавец:</p>
                    <a href="/seller/{{$details->seller}}" class="post-main-right-seller">
                        <img class="me-1" src="/storage/img/{{$details->seller_image}}" alt="profile.svg">{{$details->seller_firstname}}
                    </a>
                    <div class="dropdown">
                        <button class="post-up-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Позвонить продавцу
                        </button>
                        <ul class="dropdown-menu">
                          <li>Номер телефона: {{$details->seller_phone}}</li>
                        </ul>
                    </div>
                </div>
                <div class="post-main-right-about">
                    <h2 class="post-main-right-cost-title mb-2">О доме</h2>
                    <p class="post-main-right-about-desc">Тип объекта:
                        {{$details->estate}}
                    </p>
                    <p class="post-main-right-about-desc">Количество комнат:
                        {{$details->room}}
                    </p>
                    <p class="post-main-right-about-desc">Общая площадь:
                        {{$details->all_area}} м²
                    </p>
                    @if ($details->living_area)
                    <p class="post-main-right-about-desc">Жилая площадь: {{$details->living_area}} м²</p>
                    @endif
                    @if ($details->floor)
                    <p class="post-main-right-about-desc">Этаж: {{$details->floor}} этаж</p>
                    @endif
                    @if ($details->number)
                    <p class="post-main-right-about-desc">Номер квартиры: {{$details->floor}} квартира</p>
                    @endif
                    @if ($details->height)
                    <p class="post-main-right-about-desc">Высота потолков: {{$details->height}} м</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
    </div>
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

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
    <x-header></x-header>
    <div class="container">
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
                    <p class="post-main-right-cost-text">{{$details->cost}} ₽</p>
                    <p class="post-main-right-cost-title">Продавец:</p>
                    <a href="" class="post-main-right-seller">
                        <img class="me-1" src="/images/profile.svg" alt="profile.svg">{{$details->seller_firstname}}
                    </a>
                    <div class="dropdown">
                        <button class="post-up-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Позвонить продавцу
                        </button>
                        <ul class="dropdown-menu">
                          <li>Номер телефона: {{$details->seller_phone}}</li>
                        </ul>
                    </div>
                    @auth
                    <div class="d-flex justify-content-between">
                        <a href="/addFavourits/{{$details->id}}" style="text-decoration: none" class="post-down-button-left">
                            <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 4.45398C10.8007 1.84004 7.12572 1.03223 4.37017 3.4258C1.61461 5.81938 1.22666 9.82129 3.39062 12.6522C5.18981 15.0059 10.6348 19.97 12.4193 21.5768C12.6189 21.7565 12.7188 21.8464 12.8353 21.8817C12.9368 21.9125 13.048 21.9125 13.1497 21.8817C13.2662 21.8464 13.3659 21.7565 13.5657 21.5768C15.3502 19.97 20.7951 15.0059 22.5943 12.6522C24.7583 9.82129 24.4177 5.7942 21.6147 3.4258C18.8118 1.0574 15.1993 1.84004 13 4.45398Z" stroke="#3DB072" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            В избранное
                        </a>
                    </div>
                    @endauth
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

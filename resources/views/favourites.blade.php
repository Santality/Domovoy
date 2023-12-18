<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Избранные объявления</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <x-header></x-header>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3">
            @foreach ($lists as $list)
            <div class="col">
                  <div class="cstm-card-index catalog-card-cstm">
                    <a href="/post">@forelse ($list->photo as $photo)
                      <img src="/storage/img/{{$photo->title_photo}}" alt="{{$photo->title_photo}}">
                      @break
                      @empty
                      <img src="/images/default_post_photo.jpg" alt="default_post_photo.jpg">
                      @endforelse
                      </a>
                    <a href="/post"><p class="cstm-card-index-title">{{$list->title}}</p></a>
                    <a href="/post"><p class="cstm-card-index-cost">{{$list->cost}} ₽</p></a>
                    <a href="/post"><p class="cstm-card-index-address">{{$list->address}}</p></a>
                  </div>
            </div>
            @endforeach
          </div>
          {{ $lists->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>
    <x-footer></x-footer>
</body>
</html>

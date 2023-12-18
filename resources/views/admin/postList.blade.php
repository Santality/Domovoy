<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Панель администратора</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="wrapper">
    <x-admin-header></x-admin-header>
    <div class="container main-block mt-4">
        <h2 class="mb-3">Объявления</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
            @forelse ($postList as $list)
            <div class="col">
                    <div class="cstm-card-admin">
                    <a href="/post/{{$list->id}}">@forelse ($list->photo as $photo)
                        <img src="/storage/img/{{$photo->title_photo}}" alt="{{$photo->title_photo}}">
                        @break
                        @empty
                        <img src="/images/default_post_photo.jpg" alt="default_post_photo.jpg">
                        @endforelse
                        </a>
                    <a class="cstm-card-index-title" href="/post/{{$list->id}}">{{$list->title}}</a>
                    <a class="cstm-card-index-cost" href="/post/{{$list->id}}">{{$list->cost}} ₽</a>
                    <a class="cstm-card-index-address" href="/post/{{$list->id}}">{{$list->address}}</a>
                    <div class="links-block-admin">
                        <a class="delete-href-profile" href="/postList/delete/{{$list->id}}">Удалить</a>
                    </div>
                    </div>
            </div>
            @empty
            <h2 style="font-size: 20px" class="mb-3">Пусто...</h2>
            @endforelse
            {{ $postList->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>
    <x-footer></x-footer>
    </div>
</body>
</html>

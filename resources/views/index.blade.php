<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domovoy</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="wrapper">
    <x-header></x-header>
    <div class="container main-block">
        <h1 class="main-text">DOMOVOY</h1>
        <h1 class="main-second-text">Объявления об продаже и аренде недвижимости</h1>
        <div class="main-block-text">
            <div class="main-block-text-desc">
                <img src="/images/Chield_check.svg" alt="Chield_check.svg">
                <p>Мы стремимся обеспечить максимальный уровень безопасности и прозрачности сделок на платформе</p>
            </div>
            <div class="main-block-text-desc">
                <img src="/images/happy.svg" alt="happy.svg">
                <p>Огромное количество пользователей осталось довольными после совершения сделок на нашей платформе</p>
            </div>
            <img class="main-block-big-logo" src="/images/biglogo.svg" alt="biglogo.svg">
        </div>
        <h1 class="main-title-new">Последние объявления</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
            @forelse ($posts as $post)
                <div class="col">
                    <div class="cstm-card-index">
                        <a href="/post/{{$post->id}}">
                            @forelse($post->photo as $photo)
                            <img src="/storage/img/{{$photo->title_photo}}" alt="{{$photo->title_photo}}">
                            @break
                            @empty
                            <img src="/images/default_post_photo.jpg" alt="default_post_photo.jpg">
                            @endforelse
                        </a>
                        <a class="cstm-card-index-title" href="/post/{{$post->id}}">{{$post->title}}</a>
                        <a class="cstm-card-index-cost" href="/post/{{$post->id}}">{{$post->cost}} ₽</a>
                        <a class="cstm-card-index-address" href="/post/{{$post->id}}">{{$post->address}}</a>
                    </div>
                </div>
            @empty
                <h2>Тут ничего нет...</h2>
            @endforelse
        </div>
        {{ $posts->withQueryString()->links('pagination::bootstrap-5') }}
    </div>
    <x-footer></x-footer>
    </div>
</body>
</html>

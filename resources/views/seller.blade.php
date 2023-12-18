<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Продавец {{$seller->firstname}}</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="wrapper">
    <x-header></x-header>
    <div class="container main-block">
        <div class="profile-bg-block mt-4 mb-3">
            <div class="profile-bg-block-inside">
                <div class="text-center">
                    <img id="imagePreview" src="/storage/img/{{$seller->photo}}" alt="profilePhoto.png">
                    <p>{{$seller->lastname}} {{$seller->firstname}}</p>
                </div>
            </div>
        </div>
        <h2>Объявления продавца</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
            @forelse ($userPosts as $post)
                <div class="col">
                    <div class="cstm-card-user">
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
                        <a  class="cstm-card-index-address" href="/post/{{$post->id}}">{{$post->address}}</a>
                    </div>
                </div>
            @empty
                <h2 class="profile-title-posts">Тут ничего нет...</h2>
            @endforelse
        </div>
        {{ $userPosts->withQueryString()->links('pagination::bootstrap-5') }}
    </div>
    <x-footer></x-footer>
    </div>
</body>
</html>

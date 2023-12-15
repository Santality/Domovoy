<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Профиль</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="/script/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <x-header></x-header>
    <div class="container">
        <div class="profile-bg-block mt-4 mb-3">
            <div class="profile-bg-block-inside">
                <img id="imagePreview" src="/storage/img/{{Auth::user()->photo}}" alt="profilePhoto.png">
                <p>{{Auth::user()->lastname}} {{Auth::user()->firstname}}</p>
            </div>
        </div>
        <form action="/profile/update" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="profile-personal-info mb-3">
            <h2>Личные данные</h2>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 g-3">
                <div class="col">
                    <label for="lastnameProfile" class="form-label cstm-label-modal">Фамилия</label>
                    <input type="text" value="{{Auth::user()->lastname}}" class="modal-cstm-input" id="lastnameProfile" name="lastname">
                    @error('lastname')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="firstnameProfile" class="form-label cstm-label-modal">Имя</label>
                    <input type="text" value="{{Auth::user()->firstname}}" class="modal-cstm-input" id="firstnameProfile" name="firstname">
                    @error('firstname')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="phoneProfile" class="form-label cstm-label-modal">Телефон</label>
                    <input type="text" value="{{Auth::user()->phone}}" class="modal-cstm-input" id="phoneProfile" name="phone">
                    @error('phone')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="emailProfile" class="form-label cstm-label-modal">Почта</label>
                    <input type="email" value="{{Auth::user()->email}}" class="modal-cstm-input" id="emailProfile" name="email">
                    @error('email')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="passwordProfile" class="form-label cstm-label-modal">Пароль</label>
                    <input type="password" placeholder="Введите новый пароль" class="modal-cstm-input" id="passwordProfile" name="password">
                    @error('password')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="photoProfile" class="form-label cstm-label-modal">Фото</label>
                    <label for="photoProfile" class="label-file-profile">
                        <input type="file" class="input-file-profile" id="photoProfile" name="photo">
                        <span id="fileInfo">Выберите файл</span>
                    </label>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center mt-3">
                <button type="submit" class="modal-cstm-btn">Изменить</button>
            </div>
        </div>
        </form>
        <h2>Мои объявления</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
            @forelse ($userPosts as $post)
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
                        <a href="/post/{{$post->id}}"><p class="cstm-card-index-title">{{$post->title}}<p></a>
                        <a href="/post/{{$post->id}}"><p class="cstm-card-index-cost">{{$post->cost}} ₽</p></a>
                        <a href="/post/{{$post->id}}"><p class="cstm-card-index-address">{{$post->address}}</p></a>
                    </div>
                </div>
            @empty
                <h2>Тут ничего нет</h2>
            @endforelse
        </div>
        {{ $userPosts->withQueryString()->links('pagination::bootstrap-5') }}
    </div>
    <x-footer></x-footer>
    <script>
        $(document).ready(function () {
            $("#photoProfile").change(function () {
                var file = this.files[0];
                if (file && file.type.startsWith("image/")) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#imagePreview").attr("src", e.target.result);
                    $("#fileInfo").text(file.name);
                };
                reader.readAsDataURL(file);
                }
            });
        });
    </script>
</body>
</html>

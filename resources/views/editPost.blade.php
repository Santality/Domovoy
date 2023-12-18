<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактирование объявления</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="wrapper">
    <x-header></x-header>
    <div class="container main-block">
        <h2 class="mt-3 mb-3">Редактирование объявления</h2>
        <form action="/post_update" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="c-post-left-block">
                    <h2>Основная информация</h2>
                    <input type="hidden" name="id" value="{{$postInfo->id}}">
                    <div class="mb-2">
                        <label for="title" class="form-label cstm-label-c-post">Название</label>
                        <input type="text" required class="c-post-cstm-input" id="title" name="title" value="{{$postInfo->title}}">
                        @error('title')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="cost" class="form-label cstm-label-c-post">Цена</label>
                        <input type="text" required class="c-post-cstm-input" id="cost" name="cost" value="{{$postInfo->cost}}">
                        @error('cost')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="address" class="form-label cstm-label-c-post">Адрес</label>
                        <input type="text" required class="c-post-cstm-input" id="address" name="address" value="{{$postInfo->address}}">
                        @error('address')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="all_area" class="form-label cstm-label-c-post">Общая площадь</label>
                        <input type="text" required class="c-post-cstm-input" id="all_area" name="all_area" value="{{$postInfo->all_area}}">
                        @error('all_area')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mb-3">
                <div class="c-post-right-block">
                    <h2>Подробная информация</h2>
                    <div class="mb-2">
                        <label class="form-label cstm-label-c-post" for="photo">Фото</label>
                        <label for="photo" class="c-post-cstm-input">
                            <input class="input_file" id="photo" name="photo[]" type="file" multiple>
                            <span id="photo-fake">Выберите фото</span>
                        </label>
                    </div>
                    <div class="mb-2">
                        <label for="floor" class="form-label cstm-label-c-post">Этаж</label>
                        <input type="text" class="c-post-cstm-input" id="floor" name="floor" @if($postInfo->floor)value="{{$postInfo->floor}}"@endif>
                        @error('floor')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="number" class="form-label cstm-label-c-post">Номер квартиры</label>
                        <input type="text" class="c-post-cstm-input" id="number" name="number" @if($postInfo->number)value="{{$postInfo->number}}"@endif>
                        @error('number')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="living_area" class="form-label cstm-label-c-post">Жилая площадь</label>
                        <input type="text" class="c-post-cstm-input" id="living_area" name="living_area" @if($postInfo->living_area)value="{{$postInfo->living_area}}"@endif>
                        @error('living_area')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="height" class="form-label cstm-label-c-post">Высота потолков</label>
                        <input type="text" class="c-post-cstm-input" id="height" name="height" @if($postInfo->height)value="{{$postInfo->height}}"@endif>
                        @error('height')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="description" class="form-label cstm-label-c-post">Описание</label>
                        <textarea maxlength="255" name="description" id="description" class="c-post-cstm-textarea" rows="4">@if($postInfo->description){{$postInfo->description}}@endif</textarea>
                        @error('description')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center"><button class="post-create-add-post" type="submit">Изменить</button></div>
        </div>
        </form>
    </div>
    <x-footer></x-footer>
    </div>
    <script>
        document.getElementById("photo").addEventListener("change", function() {
            var fileInput = this;
            var spanElement = document.getElementById("photo-fake");
            if (fileInput.files && fileInput.files.length > 0) {
                spanElement.textContent = "Выбрано файлов: " + fileInput.files.length;
            } else {
                spanElement.textContent = "Выберите фото";
            }
        });
    </script>
</body>
</html>

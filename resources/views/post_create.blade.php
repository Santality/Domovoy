<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создание объявления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <x-header></x-header>
    <div class="container">
        <h2 class="mt-3 mb-3">Новое объявление</h2>
        <form action="">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="c-post-left-block">
                    <h2>Основная информация</h2>
                    <div class="row mb-2">
                        <div class="col-4"><p>Тип сделки</p></div>
                        <div class="col-8">
                            <div class="form-check">                      
                                <input type="radio" class="form-check-input cstm-checkbox" id="c-sell" required name="type">
                                <label class="form-check-label" for="c-sell">Продажа</label>
                            </div>
                            <div class="form-check">                      
                                <input type="radio" class="form-check-input cstm-checkbox" id="c-rent" name="type">
                                <label class="form-check-label" for="c-rent">Аренда</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4"><p>Объект</p></div>
                        <div class="col-8">
                            <div class="form-check">                      
                                <input type="radio" class="form-check-input cstm-checkbox" id="c-home" required name="object">
                                <label class="form-check-label" for="c-home">Дом</label>
                            </div>
                            <div class="form-check">                      
                                <input type="radio" class="form-check-input cstm-checkbox" id="c-area" name="object">
                                <label class="form-check-label" for="c-area">Участок</label>
                            </div>
                            <div class="form-check">                      
                                <input type="radio" class="form-check-input cstm-checkbox" id="c-flat" name="object">
                                <label class="form-check-label" for="c-flat">Квартира</label>
                            </div>
                            <div class="form-check">                      
                                <input type="radio" class="form-check-input cstm-checkbox" id="c-room" name="object">
                                <label class="form-check-label" for="c-room">Комната</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="title" class="form-label cstm-label-c-post">Название</label>
                        <input type="text" required class="c-post-cstm-input" id="title" name="title">
                    </div>      
                    <div class="mb-2">
                        <label for="cost" class="form-label cstm-label-c-post">Цена</label>
                        <input type="text" required class="c-post-cstm-input" id="cost" name="cost">
                    </div>
                    <div class="mb-2">
                        <label for="address" class="form-label cstm-label-c-post">Адрес</label>
                        <input type="text" required class="c-post-cstm-input" id="address" name="address">
                    </div>
                    <div class="mb-2">
                        <label for="all_area" class="form-label cstm-label-c-post">Общая площадь</label>
                        <input type="text" required class="c-post-cstm-input" id="all_area" name="all_area">
                    </div>
                </div>
            </div>
            <div class="col-md-8 mb-3">
                <div class="c-post-right-block">
                    <h2>Подробная информация</h2>
                    <div class="mb-2">
                        <label for="floor" class="form-label cstm-label-c-post">Этаж</label>
                        <input type="text" class="c-post-cstm-input" id="floor" name="floor">
                    </div>
                    <div class="mb-2">
                        <label for="number" class="form-label cstm-label-c-post">Номер квартиры</label>
                        <input type="text" class="c-post-cstm-input" id="number" name="number">
                    </div>
                    <div class="mb-2">
                        <label for="living_area" class="form-label cstm-label-c-post">Жилая площадь</label>
                        <input type="text" class="c-post-cstm-input" id="living_area" name="living_area">
                    </div>
                    <div class="mb-2">
                        <label for="height" class="form-label cstm-label-c-post">Высота потолков</label>
                        <input type="text" class="c-post-cstm-input" id="height" name="height">
                    </div>
                    <div class="mb-2">
                        <label for="description" class="form-label cstm-label-c-post">Описание</label>
                        <textarea maxlength="255" placeholder="Максимум 255 символов" name="description" id="description" class="c-post-cstm-textarea" rows="4"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit">s</button>     
        </div>
        </form>
    </div>
    <x-footer></x-footer>
</body>
</html>
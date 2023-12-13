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
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <x-header></x-header>
    <div class="container">
        <div class="profile-bg-block mt-4 mb-3">
            <div class="profile-bg-block-inside">
                <img src="/images/default.png" alt="default.png">
                <p>Арслан Гилязетдинов</p>
            </div>
        </div>
        <div class="profile-personal-info mb-3">
            <h2>Личные данные</h2>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 g-3">
                <div class="col">
                    <label for="lastnameProfile" class="form-label cstm-label-modal">Фамилия</label>
                    <input type="text" class="modal-cstm-input" id="lastnameProfile" name="lastnameProfile">
                </div>
                <div class="col">
                    <label for="firstnameProfile" class="form-label cstm-label-modal">Имя</label>
                    <input type="text" class="modal-cstm-input" id="firstnameProfile" name="firstnameProfile">
                </div>
                <div class="col">
                    <label for="phoneProfile" class="form-label cstm-label-modal">Телефон</label>
                    <input type="text" class="modal-cstm-input" id="phoneProfile" name="phoneProfile">
                </div>
                <div class="col">
                    <label for="emailProfile" class="form-label cstm-label-modal">Почта</label>
                    <input type="email" class="modal-cstm-input" id="emailProfile" name="emailProfile">
                </div>
                <div class="col">
                    <label for="passwordProfile" class="form-label cstm-label-modal">Пароль</label>
                    <input type="password" class="modal-cstm-input" id="passwordProfile" name="passwordProfile">
                </div>
                <div class="col">
                    <label for="photoProfile" class="form-label cstm-label-modal">Фото</label>
                    <input type="file" class="modal-cstm-input" id="photoProfile" name="photoProfile">
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center mt-3">
                <button type="submit" class="modal-cstm-btn">Изменить</button>
            </div>
        </div>
        <h2>Объявления</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
            <div class="col">
                <div class="cstm-card-index">
                    <a href="/post"><img src="/images/hom.jpg" alt=""></a>
                    <a href="/post"><p>Дом 82 м² на участке 6,3 сот.</p></a>
                    <a href="/post"><p class="cstm-card-index-cost">5200000 ₽</p></a>
                    <a href="/post"><p>д. Блохино</p></a>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>
</html>

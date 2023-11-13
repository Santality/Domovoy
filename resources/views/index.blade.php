<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domovoy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    @extends('layouts.navbar')
    <div class="container">
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
        <h1 class="main-title-new">Новые объявления</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
            <div class="col">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Каталог</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <x-header></x-header>
    <div class="container">
        <h2 class="mt-3 mb-3">Каталог</h2>
        <div class="d-flex justify-content-between row row-cols-1 row-cols-md-2">
            <div class="col-md-3">
                <div class="catalog-filter-block">
                    <h2 class="catalog-filter-block-title">Тип</h2>
                    <h2 class="catalog-filter-block-title">Недвижимость</h2>
                    <h2 class="catalog-filter-block-title">Количество комнат</h2>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3">
                    <div class="col">
                          <div class="cstm-card-index">
                            <a href="/post"><img src="/images/hom.jpg" alt=""></a>
                            <a href="/post"><p>Дом 82 м² на участке 6,3 сот.</p></a>
                            <a href="/post"><p class="cstm-card-index-cost">5200000 ₽</p></a>
                            <a href="/post"><p>д. Блохино</p></a>
                          </div>
                    </div>
                    <div class="col">
                        <div class="cstm-card-index">
                          <a href="/post"><img src="/images/hom.jpg" alt=""></a>
                          <a href="/post"><p>Дом 82 м² на участке 6,3 сот.</p></a>
                          <a href="/post"><p class="cstm-card-index-cost">5200000 ₽</p></a>
                          <a href="/post"><p>д. Блохино</p></a>
                        </div>
                  </div>
                  <div class="col">
                    <div class="cstm-card-index">
                      <a href="/post"><img src="/images/hom.jpg" alt=""></a>
                      <a href="/post"><p>Дом 82 м² на участке 6,3 сот.</p></a>
                      <a href="/post"><p class="cstm-card-index-cost">5200000 ₽</p></a>
                      <a href="/post"><p>д. Блохино</p></a>
                    </div>
              </div>
              <div class="col">
                <div class="cstm-card-index">
                  <a href="/post"><img src="/images/hom.jpg" alt=""></a>
                  <a href="/post"><p>Дом 82 м² на участке 6,3 сот.</p></a>
                  <a href="/post"><p class="cstm-card-index-cost">5200000 ₽</p></a>
                  <a href="/post"><p>д. Блохино</p></a>
                </div>
          </div>
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
        </div>
    </div>
    <x-footer></x-footer>
</body>
</html>
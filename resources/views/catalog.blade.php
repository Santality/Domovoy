<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Каталог</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="wrapper">
    <x-header></x-header>
    <div class="container main-block">
        <h2 class="mt-3 mb-3">Каталог</h2>
        <div class="d-flex justify-content-between row row-cols-1 row-cols-md-2">
          <div class="col-md-3 mb-3">
                <form action="/catalog/filter" method="POST">
                @csrf
                <div class="catalog-filter-block">
                    <h2 class="catalog-filter-block-title">Сортировка</h2>
                    <div class="form-check">
                        <input type="radio" name='sort' value="1" class="form-check-input cstm-checkbox" id="filterSortOld">
                        <label class="form-check-label" for="filterSortOld">По дате (старые)</label>
                    </div>
                    <div class="form-check">
                      <input type="radio" name='sort' value="2" class="form-check-input cstm-checkbox" id="filterSortNew">
                      <label class="form-check-label" for="filterSortNew">По дате (новые)</label>
                    </div>
                    <h2 class="catalog-filter-block-title">Тип</h2>
                    @foreach ($types as $type)
                    <div class="form-check">
                        <input type="checkbox" name='type[]' value="{{$type->id}}" class="form-check-input cstm-checkbox" id="filterType{{$type->id}}">
                        <label class="form-check-label" for="filterType{{$type->id}}">{{$type->title_type}}</label>
                    </div>
                    @endforeach
                    <h2 class="catalog-filter-block-title">Недвижимость</h2>
                    @foreach ($estates as $estate)
                    <div class="form-check">
                        <input type="checkbox" name='estate[]' value="{{$estate->id}}" class="form-check-input cstm-checkbox" id="filterEstate{{$estate->id}}">
                        <label class="form-check-label" for="filterEstate{{$estate->id}}">{{$estate->title_estate}}</label>
                    </div>
                    @endforeach
                    <h2 class="catalog-filter-block-title">Количество комнат</h2>
                    @foreach ($rooms as $room)
                    <div class="form-check">
                        <input type="checkbox" name='room[]' value="{{$room->id}}" class="form-check-input cstm-checkbox" id="filterRoom{{$room->id}}">
                        <label class="form-check-label" for="filterRoom{{$room->id}}">{{$room->title_room}}</label>
                    </div>
                    @endforeach
                    <button class="filter-btn-cstm" type="submit">Применить</button>
                </div>
                </form>
          </div>
          <div class="col-md-9">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3">
              @foreach ($catalogList as $list)
              <div class="col">
                    <div class="cstm-card-index">
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
                    </div>
              </div>
              @endforeach
            </div>
            {{ $catalogList->withQueryString()->links('pagination::bootstrap-5') }}
          </div>
        </div>
    </div>
    <x-footer></x-footer>
    </div>
</body>
</html>

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
        <div class="admin-users-list">
            <h2 class="mb-3">Список пользователей сайта</h2>
            <div class="tables-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Телефон</th>
                    <th>Почта</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($userList as $users)
                        <tr>
                            <td>{{$users->id}}</td>
                            <td>{{$users->firstname}}</td>
                            <td>{{$users->lastname}}</td>
                            <td>{{$users->phone}}</td>
                            <td>{{$users->email}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            {{ $userList->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>
    <x-footer></x-footer>
    </div>
</body>
</html>

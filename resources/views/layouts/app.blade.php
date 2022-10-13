<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous" defer></script>
    <title>@yield('title')</title>
</head>
<body class="container">
<header>
    <nav class="mt-3 mb-3">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Главная страница</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('apartments.create')}}">Создать карточку квартиры</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('programs.create')}}">Создать карточку программы ипотеки</a>
            </li>
        </ul>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer>

</footer>
</body>
</html>

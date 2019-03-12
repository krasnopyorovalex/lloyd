<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes"/>
    <title>@yield('title', 'Мебель для гостиниц')</title>
    <meta name="description" content="@yield('description', '')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#eee">
    @stack('og')
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/all.css') }}"/>
    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
    <link rel="canonical" href="@yield('canonical', request()->url())"/>
    <meta name="robots" content="noindex, nofollow" />
</head>
<body>
    <div class="page">
        <header>

            <div class="header-wrapper center767">
                <ul class="info-list">
                    <li class="fa fa-phone"><a href="tel:+79789098254">+7 (978) 909 82 54</a></li>
                    <li class="fa fa-envelope"><a href="mailto:ceo@russpeccoat.ru">ceo@russpeccoat.ru</a></li>
                    <li class="fa fa-map-marker">
                        <address>г. Симферополь, ул. Балаклавская, 68</address>
                    </li>
                </ul>
            </div>

            <div id="stuck_container" class="stuck_container">

                <div class="navbar-header">
                    <img class="brand_img" src="{{ asset('images/logo.png') }}" alt=""/>
                </div>
                <nav class="navbar navbar-default navbar-static-top navbar-right" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
                    @includeWhen($menu->get('menu_header'), 'layouts.menus.header', ['menu' => $menu])
                </nav>
                {{--<div class="sform text-right">--}}
                    {{--<a class="search-form_toggle" href="index.html#"></a>--}}
                {{--</div>--}}
                {{--<div class="search-form">--}}
                    {{--<form id="search" action="#" method="GET" accept-charset="utf-8">--}}
                        {{--<label class="search-form_label" for="in">--}}
                            {{--<input id="in" class="search-form_input" type="text" name="s"--}}
                                   {{--placeholder="Type your search term here..."/>--}}
                            {{--<span class="search-form_liveout"></span>--}}
                        {{--</label>--}}
                        {{--<button type="submit" class="search-form_submit fa-search"></button>--}}
                    {{--</form>--}}
                {{--</div>--}}
            </div>

        </header>

        @yield('content')

        <footer>
            <div class="container text-center">
                <div class="copyright">© Русспецкоут, 2019 г. | Все права защищены</div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

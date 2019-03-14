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
    <link rel="stylesheet" href="{{ mix('css/all.css') }}"/>
    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
    <link rel="canonical" href="@yield('canonical', request()->url())"/>
    <meta name="robots" content="noindex, nofollow" />
</head>
<body>
    <div class="page">
        <header>

            <div class="header-wrapper center767">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="info-list">
                                <li class="fa fa-phone"><a href="tel:+79789098254">+7 (978) 909 82 54</a></li>
                                <li class="fa fa-envelope"><a href="mailto:ceo@russpeccoat.ru">ceo@russpeccoat.ru</a></li>
                                <li class="fa fa-map-marker">
                                    <address>г. Симферополь, ул. Балаклавская, 68</address>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div id="stuck_container" class="stuck_container">
                <div class="container">
                    <div class="row align-items-center header__menu">
                        <div class="col-md-3">
                            <div class="navbar-header">
                                <a href="/">
                                    <img class="brand_img" src="{{ asset('images/logo.png') }}" alt=""/>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <nav class="navbar navbar-default navbar-static-top center" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
                                @includeWhen($menu->get('menu_header'), 'layouts.menus.header')
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        @yield('content')

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <ul class="contacts">
                            <li class="fa fa-map-marker">295048, Республика Крым, г. Симферополь, ул. Балаклавская, 68</li>
                            <li class="fa fa-phone"><a href="tel:+79789098254">+7 (978) 909 82 54</a></li>
                            <li class="fa fa-phone"><a href="tel:+79787092009">+7 (978) 709 20 09</a></li>
                            <li class="fa fa-envelope"><a href="mailto:ceo@russpeccoat.ru">ceo@russpeccoat.ru</a></li>
                            <li class="fa fa-envelope"><a href="mailto:info@russpeccoat.ru">info@russpeccoat.ru</a></li>
                        </ul>
                    </div>
                    <div class="col-md-5 text-right">
                        @includeWhen($menu->get('menu_header'), 'layouts.menus.footer')
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyright">© Русспецкоут, {{ date('Y') }} г. | Все права защищены</div>
                    </div>
                    <div class="col-md-6">
                        <div class="develop">
                            <div class="develop__link">
                                <a href="https://krasber.ru" rel="nofollow" target="_blank">
                                    Создание, продвижение и <br>техподдержка сайтов
                                </a>
                            </div>
                            <div class="develop__logo">
                                <a href="https://krasber.ru" target="_blank" rel="nofollow">
                                    <img src="{{ asset('images/logo_green.svg') }}" alt="Веб-студия Красбер">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

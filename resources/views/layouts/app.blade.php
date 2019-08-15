<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', '- Бикор Техно - специализированная лакокрасочная компания')</title>
    <meta name="description" content="@yield('description', '')">
    <meta name="google" content="notranslate">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#eee">
    @stack('og')
    <link rel="stylesheet" href="{{ mix('css/all.css') }}"/>
    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
    <link rel="canonical" href="@yield('canonical', request()->url())"/>
</head>
<body>
    <div class="page">
        <header>

            <div class="header-wrapper center767">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="info-list">
                                <li class="fa fa-phone"><a href="tel:+79185652142">+7 (918) 565-21-42</a></li>
                                <li class="fa fa-envelope"><a href="mailto:info@bikor-tech.ru">info@bikor-tech.ru</a></li>
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
                            <li class="fa fa-phone"><a href="tel:+79185652142">+7 (918) 565-21-42</a></li>
                            <li class="fa fa-envelope"><a href="mailto:info@bikor-tech.ru">info@bikor-tech.ru</a></li>
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
                        <div class="copyright">© БИКОР-ТЕХНО, {{ date('Y') }} Г. | ВСЕ ПРАВА ЗАЩИЩЕНЫ</div>
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

    <button class="scroll-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </button>

    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

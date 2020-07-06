@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)
@push('og')
    <meta property="og:title" content="{{ $page->title }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->getUri() }}">
    <meta property="og:image" content="{{ asset($page->image ? $page->image->path : 'images/logo.png') }}">
    <meta property="og:description" content="{{ $page->description }}">
    <meta property="og:site_name" content="Компания LLC CERNEL INDASTRIS GROUP">
    <meta property="og:locale" content="ru_RU">
@endpush

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('page.show') }}">Главная</a></li>
                    <li>{{ $page->name }}</li>
                </ul>
            </div>
        </div>
    </div>

    <main>
        <section class="well2 bg-light page__content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>{{ $page->name }}</h1>
                        {!! $page->text !!}

                        <ul class="contact-list row">
                            <li class="col-md-4 col-sm-6 col-xs-12">
                                <div class="fa fa-envelope"></div>
                                <a href="mailto:lloydcg.uk@gmail.com">
                                    <span>lloydcg.uk@gmail.com</span>
                                </a>
                                <a href="mailto:certiscapgroup@hotmail.com">
                                    <span>certiscapgroup@hotmail.com</span>
                                </a>
                                <a href="mailto:cernelgroup@te.net.ua">
                                    <span>cernelgroup@te.net.ua</span>
                                </a>
                            </li>
                            <li class="col-md-4 col-sm-6 col-xs-12">
                                <div class="fa fa-mobile"></div>
                                <div class="phone-item">
                                    <a href="tel:+359876092441">+35 987 609 24 41</a>
                                    <img src="{{ asset('images/viber.svg') }}" alt="">
                                </div>
                                <div class="phone-item">
                                    <a href="tel:+79681934546">+7 968 193 45 46</a>
                                    <img src="{{ asset('images/whatsapp.svg') }}" alt="">
                                </div>
                                <div class="phone-item">
                                    <a href="tel:+35799047495">+3 579 904 74 95</a>
                                    <img src="{{ asset('images/whatsapp.svg') }}" alt="">
                                </div>
                                <div class="phone-item">
                                    <a href="tel:+79680735408">+7 968 073 54 08</a>
                                    <img src="{{ asset('images/telegram.svg') }}" alt="">
                                </div>
                                <div class="phone-item">
                                    <a href="tel:+74951115932">+7 495 111 59 32</a>
                                    <span>Fax</span>
                                </div>
                            </li>
                            <li class="col-md-4 col-sm-12 col-xs-12">
                                <div class="fa fa-map-marker"></div>
                                <address>КИПР, г.ЛИМАССОЛ, УЛ.ERESSOU 1 MESA GEITONIA. 4002</address>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="contacts-map">
        <iframe src="https://www.google.com/maps/d/embed?mid=1zKnG4d9GHuKPNZ2WLWu04WGhBLipm9IX" width="100%" height="480" frameborder="0"></iframe>
    </div>
@endsection

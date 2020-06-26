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

    <main>
        @includeWhen($page->slider, 'layouts.sections.slider', ['slider' => $page->slider])
        <section>
            <div class="container">
                <div class="custom-wrapper">
                    <div class="custom-box wow fadeInLeft">
                        <h2 class="text-primary company-name">Группа компаний CERTIS CAPITAL GROUP LTD<br><span>На рынке агропроизводства с 2013 года</span></h2>
                        <p>Занимается экспортом сельхозпродукции с государств СНГ таких как : пшеницы, ячменя, рапса, подсолнечника, кукурузы, а также импортом семян с Канады, Америки, Англии, Голландии.</p>
                    </div>
                    <div class="button-wrap wow fadeInRight">
                        <a class="btn2 btn2__color_mod" href="{{ route('page.show', ['alias' => 'o-kompanii']) }}">О нас</a>
                        <a class="btn2" href="{{ route('catalog.show', ['alias' => 'traktora']) }}">Узнать больше</a>
                    </div>
                </div>
            </div>
        </section>

        @include('layouts.sections.catalog')
        @includeWhen($icons, 'layouts.sections.icons')

        <section class="well2 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        {!! $page->text !!}
                    </div>
                </div>
            </div>
        </section>

        <section class="well2 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/d/embed?mid=1zKnG4d9GHuKPNZ2WLWu04WGhBLipm9IX" width="100%" height="475"></iframe>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="contacts__block">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        Адрес:</td>
                                    <td>
                                        Республика Кипр., г. Лимассол,  ул. Eressou 1
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>E-mail:</p>
                                    </td>
                                    <td>
                                        <p>
                                            <b><a href="mailto:lloydcg.uk@gmail.com">lloydcg.uk@gmail.com</a></b>
                                        </p>
                                        <p>
                                            <b><a href="mailto:certiscapgroup@hotmail.com">certiscapgroup@hotmail.com</a></b>
                                        </p>
                                        <p>
                                            <b><a href="mailto:сernelgroup@te.net.ua">сernelgroup@te.net.ua</a></b>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Телефоны:</p>
                                    </td>
                                    <td>
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
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection

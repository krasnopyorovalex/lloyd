@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)
@push('og')
<meta property="og:title" content="{{ $page->title }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->getUri() }}">
    <meta property="og:image" content="{{ asset($page->image ? $page->image->path : 'img/logo.png') }}">
    <meta property="og:description" content="{{ $page->description }}">
    <meta property="og:site_name" content="Специализированная лакокрасочная компания Русспецкоут">
    <meta property="og:locale" content="ru_RU">
@endpush

@section('content')

    <main>
        @includeWhen($page->slider, 'layouts.sections.slider', ['slider' => $page->slider])
        <section>
            <div class="container">
                <div class="custom-wrapper">
                    <div class="custom-box wow fadeInLeft">
                        <h2 class="text-primary">Hello and welcome! <br>
                            <span>Meet the largest independent mining company</span></h2>
                        <p>Русспецкоут® – это специализированная лакокрасочная компания, которая в своей деятельности ориентируется прежде всего на потребности клиентов. Сплоченная команда профессионалов способна решить любые задачи по антикоррозионной защите промышленных и инфраструктурных объектов, транспорта, продукции предприятий машиностроения и других сфер хозяйственной деятельности, где требуются надежные и технологичные решения.</p>
                    </div>
                    <div class="button-wrap wow fadeInRight">
                        <a class="btn2 btn2__color_mod" href="{{ route('page.show', ['alias' => 'o-kompanii']) }}">О нас</a>
                        <a class="btn2" href="{{ route('page.show', ['alias' => 'service']) }}">Узнать больше</a>
                    </div>
                </div>
            </div>
        </section>

        @includeWhen($producers, 'layouts.sections.producers')
        @includeWhen($icons, 'layouts.sections.icons')
        @includeWhen($projectsInMain, 'layouts.sections.projects')

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
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3b147f7596759db090962a344a4e0d09b2d2648ebf77a135e5f3c01a640def33&amp;source=constructor" width="100%" height="475" frameborder="0"></iframe>
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
                                        295048, Республика Крым,<br>
                                        г. Симферополь,<br>
                                        ул. Балаклавская, 68</td>
                                </tr>
                                <tr>
                                    <td>
                                        Телефон</td>
                                    <td>
                                        <a href="tel:+79789098254">+7 (978) 909 82 54</a><br>
                                        <a href="tel:+79787092009">+7 (978) 709 20 09</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            E-mail:</p>
                                    </td>
                                    <td>
                                        <p>
                                            <b><a href="mailto:ceo@russpeccoat.ru">ceo@russpeccoat.ru</a></b><br>
                                            <b><a href="mailto:info@russpeccoat.ru">info@russpeccoat.ru</a></b></p>
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

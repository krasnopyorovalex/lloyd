@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)
@push('og')
<meta property="og:title" content="{{ $page->title }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->getUri() }}">
    <meta property="og:image" content="{{ asset($page->image ? $page->image->path : 'img/logo.png') }}">
    <meta property="og:description" content="{{ $page->description }}">
    <meta property="og:site_name" content="Специализированная лакокрасочная компания - Бикор Техно">
    <meta property="og:locale" content="ru_RU">
@endpush

@section('content')

    <main>
        @includeWhen($page->slider, 'layouts.sections.slider', ['slider' => $page->slider])
        <section>
            <div class="container">
                <div class="custom-wrapper">
                    <div class="custom-box wow fadeInLeft">
                        <h2 class="text-primary">ООО «Бикор-техно»<br><span>Антикоррозионная защита от профессионалов для профессионалов</span></h2>
                        <p>Коррозия – это серьезный враг инфраструктуры и промышленности. Эффективная борьба с коррозией возможна при умелом применении современных решений, которые обеспечивают максимальный срок службы конструкций и сооружений при оптимальных затратах на антикоррозионную защиту.</p>
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
                                        <a href="tel:+79185652142">+7 (918) 565-21-42</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            E-mail:</p>
                                    </td>
                                    <td>
                                        <p>
                                            <b><a href="mailto:info@bikor-tech.ru">info@bikor-tech.ru</a></b>
                                        </p>
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

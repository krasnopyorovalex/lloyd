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
                    </div>
                </div>
            </div>
        </section>
    </main>

    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3b147f7596759db090962a344a4e0d09b2d2648ebf77a135e5f3c01a640def33&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe>
@endsection

@extends('layouts.app')

@section('title', $article->name . ' | Certis Capital Group LTD')
@section('description', 'Предлагаем вам подробнее ознакомиться с нашей статьей: ' . $article->name . '. Если вам нужна консультация по семена, то звоните нам: +7 968 193 45 46.')
@push('og')
    <meta property="og:title" content="{{ $article->name }} | Certis Capital Group LTD">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->getUri() }}">
    <meta property="og:image" content="{{ asset($article->image ? $article->image->path : 'images/logo.png') }}">
    <meta property="og:description" content="Предлагаем вам подробнее ознакомиться с нашей статьей: {{ $article->name }}. Если вам нужна консультация по семена, то звоните нам: +7 968 193 45 46.">
    <meta property="og:site_name" content="Компания LLC CERNEL INDASTRIS GROUP">
    <meta property="og:locale" content="ru_RU">
@endpush

@section('content')

    <section class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul>
                        <li><a href="{{ route('page.show') }}">Главная</a></li>
                        <li><a href="{{ route('page.show',['alias' => 'articles']) }}">Статьи</a></li>
                        <li>{{ $article->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 flex-start">
                    <div class="content page__content">
                        <h1>{{ $article->name }}</h1>
                        <time itemprop="datePublished" datetime="{{ $article->published_at->format('c') }}" class="article-date">
                            {{ $article->published_at->formatLocalized('%d %b %Y') }} г.
                        </time>
                        @if($article->image)
                        <img src="{{ asset($article->image->path) }}" alt="{{ $article->image->alt }}" title="{{ $article->image->title }}" class="responsive article-image">
                        @endif
                        {!! $article->text !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

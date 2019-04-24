@extends('layouts.app')

@section('title', $project->title)
@section('description', $project->description)
@push('og')
    <meta property="og:title" content="{{ $project->title }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->getUri() }}">
    <meta property="og:image" content="{{ asset($project->image ? $project->image->path : 'img/logo.png') }}">
    <meta property="og:description" content="{{ $project->description }}">
    <meta property="og:site_name" content="Специализированная лакокрасочная компания Русспецкоут">
    <meta property="og:locale" content="ru_RU">
@endpush

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('page.show') }}">Главная</a></li>
                    <li><a href="{{ route('page.show', ['alias' => 'projects']) }}">Проекты</a></li>
                    <li>{{ $project->name }}</li>
                </ul>
            </div>
        </div>
    </div>

    <main>
        <section class="well2 bg-light page__content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>{{ $project->name }}</h1>
                        {!! $project->text !!}
                        <div class="box__image">
                            <p>
                                <img src="{{ asset('images/tube6.JPG') }}" class="big__img" alt="">
                            </p>
                            <p>
                                <img src="{{ asset('images/tube3.JPG') }}" class="small__img" alt="">
                                <img src="{{ asset('images/tube2.JPG') }}" class="small__img" alt="">
                            </p>
                            <p>
                                <img src="{{ asset('images/tube4.jpg') }}" class="big__img" alt="">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection

@extends('layouts.app')

@section('title', $producer->title)
@section('description', $producer->description)
@push('og')
    <meta property="og:title" content="{{ $producer->title }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->getUri() }}">
    <meta property="og:image" content="{{ asset($producer->image ? $producer->image->path : 'img/logo.png') }}">
    <meta property="og:description" content="{{ $producer->description }}">
    <meta property="og:site_name" content="Вилла «SANY»">
    <meta property="og:locale" content="ru_RU">
@endpush

@section('content')

    <main>
        <section class="well2 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        {!! $producer->text !!}
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection

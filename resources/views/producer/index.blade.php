@extends('layouts.app')

@section('title', $producer->title)
@section('description', $producer->description)
@push('og')
    <meta property="og:title" content="{{ $producer->title }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->getUri() }}">
    <meta property="og:image" content="{{ asset($producer->image ? $producer->image->path : 'img/logo.png') }}">
    <meta property="og:description" content="{{ $producer->description }}">
    <meta property="og:site_name" content="Специализированная лакокрасочная компания Русспецкоут">
    <meta property="og:locale" content="ru_RU">
@endpush

@section('content')

    <main>
        <section class="well2 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tabs-left">
                            <li class="active"><a href="#about" data-toggle="tab">О поставщике</a></li>
                            <li><a href="#projects" data-toggle="tab">Проекты поставщика</a></li>
                            <li><a href="#production" data-toggle="tab">Продукция</a></li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="about">Home Tab.</div>
                            <div class="tab-pane" id="projects">Profile Tab.</div>
                            <div class="tab-pane" id="production">Messages Tab.</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!! $producer->text !!}
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection

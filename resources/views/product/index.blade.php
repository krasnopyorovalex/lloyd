@extends('layouts.app')

@section('title', $product->title)
@section('description', $product->description)
@push('og')
    <meta property="og:title" content="{{ $product->title }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->getUri() }}">
    <meta property="og:image" content="{{ asset($product->image ? $product->image->path : 'images/logo.png') }}">
    <meta property="og:description" content="{{ $product->description }}">
    <meta property="og:site_name" content='Компания LLC "CERNEL INDASTRIS GROUP" -официальный представитель LLOYDCG в Украине'>
    <meta property="og:locale" content="ru_RU">
@endpush

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumbs">
                    <li><a href="{{ route('page.show') }}">Главная</a></li>
                    <li><a href="{{ route('page.show', ['alias' => 'catalog']) }}">Каталог</a></li>
                    <li><a href="{{ route('catalog.show', ['alias' => $product->catalog->alias]) }}">{{ $product->catalog->name }}</a></li>
                    <li>{{ $product->name }}</li>
                </ul>
            </div>
        </div>
    </div>

    <main>
        <section class="well2 bg-light page__content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>{{ $product->name }}</h1>

                        <div class="row">
                            <div class="col-md-6">
                                @if(count($product->images))
                                <div class="owl-carousel owl-theme product-gallery">
                                    @foreach($product->images as $image)
                                    <div class="item" itemscope itemtype="http://schema.org/ImageObject">
                                        <img src="{{ $image->getPath() }}" alt="{{ $image->alt }}" title="{{ $image->title }}" itemprop="contentUrl">
                                    </div>
                                    @endforeach
                                </div>
                                <div class="owl-theme owl-carousel thumbs-gallery">
                                    @foreach($product->images as $image)
                                        <div class="item">
                                            <img src="{{ $image->getThumb() }}" alt="{{ $image->alt }}" title="{{ $image->title }}" data-index="{{ $loop->index }}">
                                        </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                @if($product->price)
                                <div class="product-price">
                                    <div class="product-price-label">Цена:</div>
                                    <div class="product-price-value">{{ format_as_price($product->price) }}</div>
                                </div>
                                @endif
                                <form action="{{ route('send.product.form') }}" method="post" class="product-form" id="product-form">
                                    @csrf
                                    <div class="product-form-title">Запросить договор</div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Ваше имя" autocomplete="off" required minlength="3">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" placeholder="Ваш телефон" autocomplete="off" required minlength="3">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Ваш Email" autocomplete="off" required minlength="3">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="info" rows="3" placeholder="Комментарий"></textarea>
                                    </div>
                                    <div class="form-group submit">
                                        <button type="submit" class="btn btn-default">Отправить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="product-text">
                            {!! $product->text !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection

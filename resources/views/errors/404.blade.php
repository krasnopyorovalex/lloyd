@extends('layouts.app')

@section('title', '404 - Страница не найдена')
@section('description', '404 - Страница не найдена')
@section('keywords', '404 - Страница не найдена')

@section('content')

    <main>
        <section class="well2 bg-light not__found">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="not__found-box">
                            <img src="{{ asset('images/error.svg') }}" alt="страница не найдена">
                        </div>
                        <a href="{{ route('page.show') }}" class="btn">Перейти на главную</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection

@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.icons.index') }}">Иконки</a></li>
    <li class="active">Форма добавления иконки</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма добавления иконки</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.icons.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @input(['name' => 'name', 'label' => 'Название'])
                @selectLink(['name' => 'link', 'label' => 'Ссылка'])
                @imageInput(['name' => 'image', 'type' => 'file', 'label' => 'Выберите изображение на компьютере'])

                @submit_btn()
            </form>

        </div>
    </div>
@endsection

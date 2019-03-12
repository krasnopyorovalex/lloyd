@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.producers.index') }}">Поставщики</a></li>
    <li class="active">Форма добавления поставщика</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма добавления поставщика</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.producers.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                @input(['name' => 'name', 'label' => 'Название'])
                @input(['name' => 'title', 'label' => 'Title'])
                @input(['name' => 'description', 'label' => 'Description'])
                @input(['name' => 'alias', 'label' => 'Alias'])

                @imageInput(['name' => 'image', 'type' => 'file', 'label' => 'Выберите изображение на компьютере'])
                @imageInput(['name' => 'icon', 'type' => 'file', 'label' => 'Иконка поставщика'])
                @textarea(['name' => 'preview', 'label' => 'Превью для главной', 'id' => 'editor-full2'])
                @textarea(['name' => 'text', 'label' => 'Текст'])

                @submit_btn()
            </form>

        </div>
    </div>
@push('scripts')
<script src="{{ asset('dashboard/ckeditor/ckeditor.js') }}"></script>
@endpush
@endsection

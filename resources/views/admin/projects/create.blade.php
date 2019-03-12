@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.projects.index') }}">Проекты</a></li>
    <li class="active">Форма добавления проекта</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма добавления проекта</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-8">
                        @input(['name' => 'name', 'label' => 'Название'])
                        @input(['name' => 'title', 'label' => 'Title'])
                        @input(['name' => 'description', 'label' => 'Description'])
                        @input(['name' => 'alias', 'label' => 'Alias'])
                    </div>
                    <div class="col-md-4">
                        @select(['name' => 'producer_id', 'label' => 'Поставщик', 'items' => $producers])
                        @select(['name' => 'industry_id', 'label' => 'Отрасль', 'items' => $industries])

                        @imageInput(['name' => 'image', 'type' => 'file', 'label' => 'Выберите изображение на компьютере'])
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        @textarea(['name' => 'preview', 'label' => 'Превью', 'id' => 'editor-full2'])
                        @textarea(['name' => 'text', 'label' => 'Текст'])
                        @checkbox(['name' => 'in_main', 'label' => 'Отображать на главной?', 'isChecked' => true])

                        @submit_btn()
                    </div>
                </div>
            </form>

        </div>
    </div>
@push('scripts')
<script src="{{ asset('dashboard/ckeditor/ckeditor.js') }}"></script>
@endpush
@endsection

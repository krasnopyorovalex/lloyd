@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.projects.index') }}">Проекты</a></li>
    <li class="active">Форма редактирования проекта</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма редактирования проекта</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.projects.update', ['id' => $project->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
                        <li><a href="#image" data-toggle="tab">Изображение для соцсетей</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="main">

                            <div class="row">
                                <div class="col-md-9">
                                    @input(['name' => 'name', 'label' => 'Название', 'entity' => $project])
                                    @input(['name' => 'title', 'label' => 'Title', 'entity' => $project])
                                    @input(['name' => 'description', 'label' => 'Description', 'entity' => $project])

                                    @input(['name' => 'alias', 'label' => 'Alias', 'entity' => $project])
                                </div>
                                <div class="col-md-3">
                                    @select(['name' => 'producer_id', 'label' => 'Поставщик', 'items' => $producers, 'entity' => $project])
                                    @select(['name' => 'industry_id', 'label' => 'Отрасль', 'items' => $industries, 'entity' => $project])
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    @textarea(['name' => 'preview', 'label' => 'Превью', 'entity' => $project, 'id' => 'editor-full2'])
                                    @textarea(['name' => 'text', 'label' => 'Текст', 'entity' => $project])
                                    @checkbox(['name' => 'in_main', 'label' => 'Отображать на главной?', 'entity' => $project])
                                    @submit_btn()
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="image">
                            @if ($project->image)
                                <div class="panel panel-flat border-blue border-xs" id="image__box">
                                    <div class="panel-body">
                                        <img src="{{ asset($project->image->path) }}" alt="" class="upload__image">

                                        <div class="btn-group btn__actions">
                                            <button data-toggle="modal" data-target="#modal_info" type="button" class="btn btn-primary btn-labeled btn-sm"><b><i class="icon-pencil4"></i></b> Атрибуты</button>

                                            <button type="button" data-href="{{ route('admin.images.destroy', ['id' => $project->image->id]) }}" class="btn delete__img btn-danger btn-labeled btn-labeled-right btn-sm">Удалить <b><i class="icon-trash"></i></b></button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @imageInput(['name' => 'image', 'type' => 'file', 'entity' => $project, 'label' => 'Выберите изображение на компьютере'])
                            @submit_btn()
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    @if ($project->image)
        @include('layouts.partials._image_attributes_popup', ['image' => $project->image])
    @endif

@push('scripts')
<script src="{{ asset('dashboard/ckeditor/ckeditor.js') }}"></script>
@endpush
@endsection

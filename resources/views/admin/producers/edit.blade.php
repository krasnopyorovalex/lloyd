@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.producers.index') }}">Поставщики</a></li>
    <li class="active">Форма редактирования поставщика</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма редактирования поставщика</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.producers.update', ['id' => $producer->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
                        <li><a href="#image" data-toggle="tab">Изображение</a></li>
                        <li><a href="#tab" data-toggle="tab">Продукция</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="main">

                            <div class="row">
                                <div class="col-md-12">
                                    @input(['name' => 'name', 'label' => 'Название', 'entity' => $producer])
                                    @input(['name' => 'title', 'label' => 'Title', 'entity' => $producer])
                                    @input(['name' => 'description', 'label' => 'Description', 'entity' => $producer])

                                    @input(['name' => 'alias', 'label' => 'Alias', 'entity' => $producer])
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    @textarea(['name' => 'preview', 'label' => 'Превью для главной', 'id' => 'editor-full2', 'entity' => $producer])
                                    @textarea(['name' => 'about', 'label' => 'Текст для вкладки - О поставщике', 'id' => 'editor-full3', 'entity' => $producer])
                                    @textarea(['name' => 'text', 'label' => 'Текст', 'entity' => $producer])
                                    @submit_btn()
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="image">
                            <div class="row">
                                <div class="col-md-6">
                                    @if ($producer->icon)
                                        <div class="panel panel-flat border-blue border-xs" id="image__box">
                                            <div class="panel-body">
                                                <img src="{{ asset($producer->icon) }}" class="upload__image">
                                            </div>
                                        </div>
                                    @endif
                                    @imageInput(['name' => 'icon', 'type' => 'file', 'entity' => $producer, 'label' => 'Иконка поставщика'])
                                </div>
                                <div class="col-md-6">
                                    @if ($producer->image)
                                        <div class="panel panel-flat border-blue border-xs" id="image__box">
                                            <div class="panel-body">
                                                <img src="{{ asset($producer->image->path) }}" alt="" class="upload__image">

                                                <div class="btn-group btn__actions">
                                                    <button data-toggle="modal" data-target="#modal_info" type="button" class="btn btn-primary btn-labeled btn-sm"><b><i class="icon-pencil4"></i></b> Атрибуты</button>

                                                    <button type="button" data-href="{{ route('admin.images.destroy', ['id' => $producer->image->id]) }}" class="btn delete__img btn-danger btn-labeled btn-labeled-right btn-sm">Удалить <b><i class="icon-trash"></i></b></button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @imageInput(['name' => 'image', 'type' => 'file', 'entity' => $producer, 'label' => 'Выберите изображение на компьютере'])
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    @submit_btn()
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="tabs">Прикрепить продукцию</label>
                                        <select class="form-control border-blue border-xs select-search" multiple="multiple" id="tabs" name="tabs[]" data-width="100%">
                                            @foreach($tabs as $tab)
                                                <option value="{{ $tab->id }}" {{ in_array($tab->id, $relatedTabs) ? 'selected' : '' }}>{{ $tab->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    @submit_btn()
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </div>
    @if ($producer->image)
        @include('layouts.partials._image_attributes_popup', ['image' => $producer->image])
    @endif

@push('scripts')
<script src="{{ asset('dashboard/ckeditor/ckeditor.js') }}"></script>
@endpush
@endsection

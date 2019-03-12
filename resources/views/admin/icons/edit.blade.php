@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.icons.index') }}">Иконки</a></li>
    <li class="active">Форма редактирования иконки</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма редактирования иконки</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.icons.update', ['id' => $icon->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="main">

                            <div class="row">
                                <div class="col-md-7">
                                    @selectLink(['name' => 'link', 'entity' => $icon, 'label' => 'Ссылка'])
                                    @input(['name' => 'name', 'label' => 'Название', 'entity' => $icon])
                                </div>
                                <div class="col-md-5">
                                    @if ($icon->image)
                                        <div class="panel panel-flat border-blue border-xs" id="image__box">
                                            <div class="panel-body">
                                                <img src="{{ asset($icon->image->path) }}" alt="" class="upload__image">

                                                <div class="btn-group btn__actions">
                                                    <button data-toggle="modal" data-target="#modal_info" type="button" class="btn btn-primary btn-labeled btn-sm"><b><i class="icon-pencil4"></i></b> Атрибуты</button>

                                                    <button type="button" data-href="{{ route('admin.images.destroy', ['id' => $icon->image->id]) }}" class="btn delete__img btn-danger btn-labeled btn-labeled-right btn-sm">Удалить <b><i class="icon-trash"></i></b></button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @imageInput(['name' => 'image', 'type' => 'file', 'entity' => $icon, 'label' => 'Выберите изображение на компьютере'])
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
    @if ($icon->image)
        @include('layouts.partials._image_attributes_popup', ['image' => $icon->image])
    @endif

@push('scripts')
<script src="{{ asset('dashboard/ckeditor/ckeditor.js') }}"></script>
@endpush
@endsection

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
                @input(['name' => 'name_little', 'label' => 'Короткое название бренда'])
                @input(['name' => 'title', 'label' => 'Title'])
                @input(['name' => 'description', 'label' => 'Description'])
                @input(['name' => 'alias', 'label' => 'Alias'])

                @imageInput(['name' => 'image', 'type' => 'file', 'label' => 'Выберите изображение на компьютере'])
                @imageInput(['name' => 'icon', 'type' => 'file', 'label' => 'Иконка поставщика'])

                <div class="form-group">
                    <label for="tabs">Прикрепить продукцию</label>
                    <select class="form-control border-blue border-xs select-search" multiple="multiple" id="tabs" name="tabs[]" data-width="100%">
                        @foreach($tabs as $tab)
                            <option value="{{ $tab->id }}">{{ $tab->name }}</option>
                        @endforeach
                    </select>
                </div>

                @textarea(['name' => 'preview', 'label' => 'Превью для главной', 'id' => 'editor-full2'])
                @textarea(['name' => 'about', 'label' => 'Текст для вкладки - О поставщике', 'id' => 'editor-full3'])
                @textarea(['name' => 'text', 'label' => 'Текст'])

                @submit_btn()
            </form>

        </div>
    </div>
@push('scripts')
<script src="{{ asset('dashboard/ckeditor/ckeditor.js') }}"></script>
@endpush
@endsection

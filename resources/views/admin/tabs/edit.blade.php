@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.tabs.index') }}">Табы для вида продукции</a></li>
    <li class="active">Форма редактирования вида продукции</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма редактирования вида продукции</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.tabs.update', ['id' => $tab->id]) }}" method="post">
                @csrf
                @method('put')

                @input(['name' => 'name', 'label' => 'Название', 'entity' => $tab])
                @textarea(['name' => 'text', 'label' => 'Описание', 'entity' => $tab])

                @submit_btn()

            </form>

        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('dashboard/ckeditor/ckeditor.js') }}"></script>
    @endpush
@endsection

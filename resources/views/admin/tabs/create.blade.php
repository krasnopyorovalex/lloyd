@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.tabs.index') }}">Виды продукции</a></li>
    <li class="active">Форма добавления вида продукции</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма добавления вида продукции</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.tabs.store') }}" method="post">
                @csrf
                @input(['name' => 'name', 'label' => 'Название'])
                @textarea(['name' => 'text', 'label' => 'Описание'])

                @submit_btn()
            </form>

        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('dashboard/ckeditor/ckeditor.js') }}"></script>
    @endpush
@endsection

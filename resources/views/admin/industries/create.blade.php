@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.industries.index') }}">Отрасли</a></li>
    <li class="active">Форма добавления отрасли</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма добавления отрасли</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.industries.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @input(['name' => 'name', 'label' => 'Название'])

                @submit_btn()
            </form>

        </div>
    </div>
@endsection

@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.industries.index') }}">Отрасли</a></li>
    <li class="active">Форма редактирования отрасли</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма редактирования отрасли</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.industries.update', ['id' => $industry->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="main">

                            <div class="row">
                                <div class="col-md-12">
                                    @input(['name' => 'name', 'label' => 'Название', 'entity' => $industry])

                                    @submit_btn()
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection

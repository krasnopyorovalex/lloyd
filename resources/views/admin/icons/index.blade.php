@extends('layouts.admin')

@section('breadcrumb')
    <li class="active">Иконки</li>
@endsection

@section('content')

    <a href="{{ route('admin.icons.create') }}" type="button" class="btn bg-primary">
        Добавить
        <i class="icon-stack-plus position-right"></i>
    </a>

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr class="border-solid">
                <th>#</th>
                <th>Название</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($icons as $icon)
                <tr>
                    <td><span class="label label-primary">{{ $loop->iteration }}</span></td>
                    <td>{{ $icon->name }}</td>
                    <td>
                        <div>
                            <a href="{{ route('admin.icons.edit', $icon) }}"><i class="icon-pencil7"></i></a>
                            <form method="POST" action="{{ route('admin.icons.destroy', $icon) }}" class="form__delete">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="last__btn" data-alias="{{ $icon->alias }}">
                                    <i class="icon-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

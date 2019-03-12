@extends('layouts.admin')

@section('breadcrumb')
    <li class="active">Поставщики</li>
@endsection

@section('content')

    <a href="{{ route('admin.producers.create') }}" type="button" class="btn bg-primary">
        Добавить
        <i class="icon-stack-plus position-right"></i>
    </a>

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr class="border-solid">
                <th>#</th>
                <th>Название</th>
                <th>Alias</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($producers as $producer)
                <tr>
                    <td><span class="label label-primary">{{ $loop->iteration }}</span></td>
                    <td>{{ $producer->name }}</td>
                    <td>{{ $producer->alias }}</td>
                    <td>
                        <div>
                            <a href="{{ route('admin.producers.edit', $producer) }}"><i class="icon-pencil7"></i></a>
                            <form method="POST" action="{{ route('admin.producers.destroy', $producer) }}" class="form__delete">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="last__btn" data-alias="{{ $producer->alias }}">
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

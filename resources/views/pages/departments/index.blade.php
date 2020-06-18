@extends('layout.app')
@section('content')
    <div class="mt-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="/" class="btn btn-outline-info w-100"><strong>Назад</strong></a>
                </div>
                <div class="col-6">
                    <a href="{{route('departments.create')}}" class="btn btn-outline-info w-100"><strong>Создать
                            Отдел</strong></a>
                </div>
            </div>
            <div class="mt-3">
                <h1>Отделы</h1>
                @if(count($departments) > 0)
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название отдела</th>
                        <th scope="col">Количество сотрудников</th>
                        <th scope="col">Максимальная з.п.</th>
                        <th scope="col">Управление</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($departments as $key=>$value)
                        <tr>
                            <th scope="row">{{$key + 1}}</th>
                            <td>{{$value->name}}</td>
                            <td>{{count($value->members)}}</td>
                            <td>{{$value->members->max('salary') ? $value->members->max('salary') : 'В отделе нету сотрудников'}}</td>
                            <td class="row">
                                <div class="col-6">
                                    <a href="{{route('departments.edit', $value->id)}}"
                                       class="btn btn-warning">Редактировать</a>
                                </div>
                                <div class="col-6">
                                    <form method="post" action="{{route('departments.destroy', $value->id)}}" style="width: 35px">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">Удалить</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                    <div class="text-center">
                        <h3>Создайте первый отдел...</h3>
                    </div>
                @endif
            </div>

        </div>
    </div>
@endsection

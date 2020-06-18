@extends('layout.app')
@section('content')
    <div class="mt-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="/" class="btn btn-outline-info w-100"><strong>Назад</strong></a>
                </div>
                <div class="col-6">
                    <a href="{{route('members.create')}}" class="btn btn-outline-info w-100"><strong>Создать
                            сотрудника</strong></a>
                </div>
            </div>
            <div class="mt-3">
                <h1>Сотрудники</h1>
                @if(count($members) > 0)
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Фамилия</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Отчество</th>
                        <th scope="col">Пол</th>
                        <th scope="col">Зарплата</th>
                        <th scope="col">Управление</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($members as $key=>$value)
                        <tr>
                            <th scope="row">{{$key + 1}}</th>
                            <td>{{$value->last_name}}</td>
                            <td>{{$value->first_name}}</td>
                            <td>{{$value->middle_name}}</td>
                            <td>{{$value->gender}}</td>
                            <td>{{$value->salary}}</td>
                            <td class="row">
                                <div class="col-6">
                                    <a href="{{route('members.edit', $value->id)}}"
                                       class="btn btn-warning">Редактировать</a>
                                </div>
                               <div class="col-6">
                                   <form method="post" action="{{route('members.destroy', $value->id)}}" style="width: 0">
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
                        <h3>Создайте первого сотрудника...</h3>
                    </div>
                @endif
            </div>

        </div>
    </div>
@endsection

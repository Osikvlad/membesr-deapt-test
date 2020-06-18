@extends('layout.app')
@section('content')
    <div class="mt-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="{{route('members.index')}}" class="btn btn-outline-info w-100"><strong>Назад</strong></a>
                </div>
                <div class="col-6">
                    <a href="/" class="btn btn-outline-info w-100"><strong>На главную</strong></a>
                </div>
            </div>
            <div class="mt-3">
                <h1>Создание сотрудника</h1>
                <form class="text-left" method="post" action="{{route('members.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Имя</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Имя"
                               name="first_name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Фамилия</label>
                        <input type="text" class="form-control" placeholder="Фамилия" name="last_name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Отчество</label>
                        <input type="text" class="form-control" placeholder="Отчество" name="middle_name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Пол</label>
                        <select class="form-control" name="gender">
                            <option value="">Не выбрано</option>
                            <option>Мужчина</option>
                            <option>Женщина</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Заработная плата</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername2"
                                   placeholder="Заработная плата" name="salary">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Отдел</label>
                        <select class="selectpicker form-control" multiple data-live-search="true" name="departments[]" id="departments">
                            @foreach($departments as $department)
                            <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-success w-100 mt-3">Создать</button>
                </form>
            </div>
        </div>
    </div>
@endsection

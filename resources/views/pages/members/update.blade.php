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
                <h1>Редактирование сотрудника</h1>
                <form class="text-left" method="post" action="{{route('members.update', $member->id)}}" name="submit-form" onsubmit="return validate()">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Имя</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Имя"
                               name="first_name" value="{{$member->first_name}}">
                        <div id="invalid_first_name" class="invalid d-none mt-2">Поле имя не может быть пустым.</div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Фамилия</label>
                        <input type="text" class="form-control" placeholder="Фамилия" name="last_name"
                               value="{{$member->last_name}}">
                        <div id="invalid_last_name" class="invalid d-none mt-2">Поле фамилия не может быть пустым.</div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Отчество</label>
                        <input type="text" class="form-control" placeholder="Отчество" name="middle_name"
                               value="{{$member->middle_name}}">
                        <div id="invalid_middle_name" class="invalid d-none mt-2">Поле отчество не может быть пустым.</div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Пол</label>
                        <select class="form-control" name="gender">
                            @if($member->gender == "Мужчина")
                                <option selected>Мужчина</option>
                            @else
                                <option>Мужчина</option>
                            @endif
                            @if($member->gender == "Женщина")
                                <option selected>Женщина</option>
                            @else
                                <option>Женщина</option>
                            @endif
                        </select>
                        <div id="invalid_gender_name" class="invalid d-none mt-2">Необходимо выбрать пол.</div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Заработная плата</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername2"
                                   placeholder="Заработная плата" name="salary" value="{{$member->salary}}" pattern="\d+(\.\d{2})?">
                        </div>
                        <div style="flex-wrap: wrap; opacity: 0.6;">Формат заработной платы 1111.11 или 1111</div>
                        <div id="invalid_salary_name" class="invalid d-none mt-2">Поле заработная плата не может быть пустым.</div>
                    </div>
                    <div class="form-group">
                        <label>Отдел</label>

                        <select class="selectpicker form-control" multiple data-live-search="true" name="departments[]"
                                id="departments">
                            @foreach($departments as $department)
                                @if($department->members->find($member->id))
                                    <option value="{{$department->id}}" selected>{{$department->name}}</option>
                                @else
                                    <option value="{{$department->id}}">{{$department->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        <div id="invalid_department_name" class="invalid d-none mt-2">Необходимо выбрать отдел.</div>
                    </div>
                    <button type="submit" class="btn btn-outline-success w-100 mt-3">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
@endsection

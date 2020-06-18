@extends('layout.app')
@section('content')
    <div class="mt-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="{{route('departments.index')}}" class="btn btn-outline-info w-100"><strong>Назад</strong></a>
                </div>
                <div class="col-6">
                    <a href="/" class="btn btn-outline-info w-100"><strong>На главную</strong></a>
                </div>
            </div>
            <div class="mt-3">
                <h1>Создание отдела</h1>
                <form class="text-left" method="post" action="{{route('departments.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Название отдела</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Название отдела" name="name">
                    </div>
                    <button type="submit" class="btn btn-outline-success w-100 mt-3">Создать</button>
                </form>
            </div>
        </div>
    </div>
@endsection

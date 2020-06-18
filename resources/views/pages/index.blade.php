@extends('layout.app')
@section('content')
    <div class="mt-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="{{route('members.index')}}" class="btn btn-outline-info w-100"><strong>Сотрудники</strong></a>
                </div>
                <div class="col-6">
                    <a href="{{route('departments.index')}}" class="btn btn-outline-info w-100"><strong>Отделы</strong></a>
                </div>
                <div class="my-3 col-12">
                    <h1>Сетка</h1>
                    @if((count($members) && count($departments)) > 0)
                    <table class="w-100 main-table">
                        <tr>
                            <th class="table-bg"></th>
                            @foreach($departments as $department)
                            <th class="table-bg">{{$department->name}}</th>
                            @endforeach
                        </tr>
                        @foreach($members as $member)
                        <tr>
                            <td class="table-bg">{{$member->first_name}} {{$member->last_name}}</td>
                            @foreach($departments as $key=>$value)
                                @if($member->departments->find($value->id))
                                    <td>✓</td>
                                @else
                                    <td></td>
                                @endif
                            @endforeach
                        </tr>
                        @endforeach
                    </table>
                    @else
                        <div class="text-center">
                            <h3>Таблица пустая, сделайте первую запись...</h3>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

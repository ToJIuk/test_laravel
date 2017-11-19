@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                Сортировать
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">По порядку</a></li>
                <li><a href="#">По ФИО</a></li>
                <li><a href="#">По зарплате</a></li>
                <li><a href="#">По дате зачисления</a></li>
                <li><a href="#">По должности</a></li>
            </ul>
        </div>
        <br><br>
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>ФИО</th>
                <th>Должность</th>
                <th>Зарплата, грн</th>
                <th>Дата зачисления</th>
            </tr>
            </thead>
            <tbody>
            @foreach($test_table as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->full_name}}</td>
                    <td>{{$item->position}}</td>
                    <td>{{$item->salary}}</td>
                    <td>{{$item->date}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $test_table->links() }}
    </div>
@endsection

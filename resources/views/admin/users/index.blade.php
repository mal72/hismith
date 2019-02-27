@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ФИО</th>
                            <th>Количество книг</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td><a href="{{route('users.edit', $user)}}">{{$user->fullname}}</a></td>
                            <td>{{$user->bookcount}}</td>
                        </tr>
                    @endforeach    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
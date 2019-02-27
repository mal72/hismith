@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Название</th>
                            <th>Автор</th>
                            <th>Стоимсоть</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td><a href="{{route('books.edit', $book)}}">{{$book->name}}</a></td>
                            <td>{{$book->user->fullname}}</td>
                            <td>{{$book->price}}</td>
                        </tr>
                    @endforeach    
                    </tbody>
                </table>
            </div>
            <div class="text-right">
                <a href="{{route('books.create')}}" class="btn btn-primary">Добавить</a>
            </div>
        </div>
    </div>
@endsection
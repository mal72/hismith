@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
            <form id="form" action="{{route('books.update', $book)}}" method="post">
            {{method_field('put')}}
            {{csrf_field()}}
            @include('admin.books.partials.form')
            </form>
            </div>
            <div class="text-right">
            <button type="submit" form="form" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
@endsection
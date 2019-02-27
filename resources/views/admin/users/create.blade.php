@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
            <form action="{{route('users.store')}}" id="form" method="post">
            {{csrf_field()}}
            @include('admin.users.partials.form')
            </form>
            </div>
            <div class="text-right">
                <button type="submit" form="form" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
@endsection
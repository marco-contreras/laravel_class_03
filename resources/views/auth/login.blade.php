@extends('layout')


@section('content')

    <form method="POST" action="/login">
        {{ csrf_field() }}
        <label for="email">
            <input class="form-control" type="email" name="email" placeholder="email@email.com">
        </label>
        <label for="password">
            <input class="form-control" type="password" name="password" placeholder="**********">
        </label>

        <input class="btn btn-primary" type="submit">
    </form>
@stop
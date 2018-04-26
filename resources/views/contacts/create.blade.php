@extends('layout')

@section('content')
    <h1>Agregar nuevo contacto</h1>

    <form method="POST" action="{{ route('contacts.store') }}">
        {{ csrf_field() }}

        <label for="name">
            Name:
            <input type="text" name="name">
        </label><br>

        <label for="lastName">
            Last Name:
            <input type="text" name="last_name">
        </label><br>

        <label for="nickname">
            Nickname:
            <input type="text" name="nickname">
        </label><br>

        <label for="ralationship">
            Relationship:
            <input type="text" name="relationship">
        </label><br>

        <label for="cellphone">
            Cellphone:
            <input type="number" name="cellphone">
        </label><br>

        <label for="email">
            Email:
            <input type="text" name="email">
        </label><br><br>

        <input type="submit" value="Crear">
    </form>
@stop
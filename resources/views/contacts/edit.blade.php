@extends('layout')

@section('content')
    <h1>Editar contacto</h1>

    <form method="POST" action="{{ route('contacts.update', $contact->id) }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label for="name">
            Name:
            <input type="text" name="name" value="{{ $contact->name }}">
        </label><br>

        <label for="lastName">
            Last Name:
            <input type="text" name="last_name" value="{{ $contact->last_name }}">
        </label><br>

        <label for="nickname">
            Nickname:
            <input type="text" name="nickname" value="{{ $contact->nickname }}">
        </label><br>

        <label for="ralationship">
            Relationship:
            <input type="text" name="relationship" value="{{ $contact->relationship }}">
        </label><br>

        <label for="cellphone">
            Cellphone:
            <input type="number" name="cellphone" value="{{ $contact->cellphone }}">
        </label><br>

        <label for="email">
            Email:
            <input type="text" name="email" value="{{ $contact->email }}">
        </label><br><br>

        <input type="submit" value="Actualizar">
    </form>

    <br><br>

    <a href="{{ route('contacts.index') }}">Regresar</a>
@stop
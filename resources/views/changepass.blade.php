@extends('doughnuts.main_donut')
@section('title','Bonjour')
@section('content')

    <form method="POST" action="{{ route("updatepass") }}">
        <div class="input-field center">
            <input id="first_name" type="number" class="validate center" name="id" required>
            <label for="first_name" class="pink-text text-darken-1">Id</label>
        </div>
        <div class="input-field center">
            <input id="password" type="password" class="validate center" name="password" required>
            <label for="password" class="pink-text text-darken-1">Mot de passe a mettre</label>
        </div>
        <input type="hidden" name="_token" value={{ csrf_token() }}>
        <div class="modal-footer yellow lighten-5">
            <button type="submit" class="waves-effect waves-green right btn brown darken-3">Valider</button>
        </div>
    </form>

    @endsection

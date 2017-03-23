@extends('doughnuts/main_donut')
@section('content')
    <h1 class="titre center">Liste des étudiants</h1>
    <div class="white-text">
@include('doughnuts.studentslist')
    </div>
    @endsection
@extends('users.doughnuts.main_donut')
@section('title','Bonjour')
@section('content')
    <div class="center">
        <img src="../img/Yannick.png" class="center circle responsive-img donnutyan">
            <form class="center">
                <div class="row">
                    <div class="input-field col l4 m4 s4 push-l4 push-s4 push-m4 center">
                        <input  id="first_name" type="text" class="validate center white-text" value="{{$user['nom']}}" disabled>
                        <label class="white-text center" for="first_name">Nom</label>
                    </div>
                </div>
                <div class="row">
                        <div class="input-field col l4 m4 s4 push-l4 push-s4 push-m4 center">
                            <input  id="first_name" type="text" class="validate center white-text" value="{{$user['prenom']}}" disabled>
                            <label class="white-text center" for="first_name">Nom</label>
                        </div>
                </div>
                    <div class="row">
                            <div class="input-field col l4 m4 s4 push-l4 push-s4 push-m4 center">
                                <input  id="first_name" type="text" class="validate center white-text" value="{{$user['email']}}" disabled>
                                <label class="white-text center" for="first_name">Nom</label>
                            </div>
                    </div>
            </form>

    </div>

    @endsection
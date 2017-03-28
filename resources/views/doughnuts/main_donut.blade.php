<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
</head>

<main>
    <nav class="transparent">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo"><img src="img/DoughnutsRose.svg" alt="donutmarron" class="responsive-img image-nav left valign">Doughnote</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down navbar-fixed">
            @if(Auth::check())
                    <li><a href="{{route("listeEtudiant")}}">Liste Etudiants</a></li>
                @if(Auth::user()->isRole('admin'))
                        <li><a href="{{route("deconnexion")}}">Bonjour admin</a></li>
                    </ul>
                @elseif(Auth::user()->isRole('prof'))
                        <li><a href="{{route("deconnexion")}}">Bonjour prof</a></li>
                    </ul>

                @else
                        <li><a href="{{route("deconnexion")}}">Bonjour éléve</a></li>
                    </ul>
                @endif
            @else
                <ul class="right hide-on-med-and-down navbar-fixed">
                    <li><a href="#modal1">Se connecter</a></li>
                </ul>
                <ul class="side-nav yellow lighten-5" id="mobile-demo">
                    <li><a href="#modal1">Se connecter</a></li>
                </ul>

            @endif
        </div>
    </nav>


    <!-- Modal Structure -->
    <div id="modal1" class="modal yellow lighten-5">
        <div class="container">
            <div class="modal-content">
                <p class="flow-text center titre">Se connecter</p>
                <form method="POST" action="{{ route("connexion") }}">
                    <div class="input-field center">
                        <input id="first_name" type="text" class="validate center" name="login" required>
                        <label for="first_name" class="pink-text text-darken-1">Nom d'utilisateur</label>
                    </div>
                    <div class="input-field center">
                        <input id="password" type="password" class="validate center" name="password" required>
                        <label for="password" class="pink-text text-darken-1">Mot de passe</label>
                    </div>
                    <input type="hidden" name="_token" value={{ csrf_token() }}>
                    <div class="modal-footer yellow lighten-5">
                        <button type="submit" class="waves-effect waves-green right btn brown darken-3">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="preloader-background">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-yellow-only">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

</main>


<footer class="page-footer amber darken-1">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Doughnote</h5>
                <p class="grey-text text-lighten-4">Site de notes et de commentaires de classe</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Liens</h5>
                <ul>
                    <li><a href="#modal1">Se connecter</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2017 Copyright Doughtnuts
        </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script>
        $( document ).ready(function(){
            $('.modal').modal()
            $(".button-collapse").sideNav();
            $('.preloader-background').delay(1700).fadeOut('slow');

            @yield('modal')

            $('.preloader-wrapper')
                .delay(1700)
                .fadeOut();
        });
    </script>

</footer>
</html>
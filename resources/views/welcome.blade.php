@extends('doughnuts.main_donut')
@section('title','Bonjour')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col l6 s12 m6">
                <h2 class="center titre">Présentation du projet</h2>
                <p class="flow-text yellow-text text-lighten-5 center">Cupcake ipsum dolor sit amet muffin sweet roll. Chocolate jujubes macaroon. Brownie candy brownie cupcake sugar plum. Oat cake gummies muffin ice cream candy marzipan candy canes candy. Sweet roll gingerbread gummies sugar plum tiramisu ice cream ice cream. Powder oat cake marshmallow chocolate cake cake lemon drops. Gummies dessert oat cake. Ice cream donut jujubes. Pudding tiramisu bear claw chupa chups. Cupcake bear claw candy canes. Pudding cake candy sweet tart. Carrot cake sesame snaps oat cake. Cupcake ice cream chocolate cake lemon drops sweet jujubes bonbon macaroon. Donut liquorice lemon drops bear claw.
                    Dessert muffin liquorice gingerbread. Croissant tart soufflé. Chocolate bar chocolate bear claw chupa chups biscuit powder brownie fruitcake. Gummies pie donut icing tart cake. Pie tootsie roll oat cake bear claw icing halvah croissant apple pie. Caramels apple pie sesame snaps. Sweet roll candy pastry ice cream gummies cupcake candy canes. Jelly beans sugar plum macaroon ice cream tiramisu donut. Wafer liquorice dessert cake marzipan sugar plum muffin oat cake. Candy bear claw soufflé tart dragée dragée soufflé dessert powder. Cookie lollipop cookie wafer jelly-o pudding gummies cake caramels. Powder dragée pie. Candy canes lollipop wafer ice cream.
                    Chocolate bar marshmallow lemon drops sugar plum. Gingerbread tiramisu dragée sesame snaps cheesecake topping. Jelly gummi bears caramels. Muffin carrot cake biscuit cookie. Jujubes donut donut chupa chups marshmallow sesame snaps chupa chups sweet roll. Tootsie roll dessert gummies bonbon jelly beans bonbon jelly-o halvah danish. Dragée oat cake lollipop marshmallow donut dragée jujubes. Pastry sugar plum icing pastry caramels dessert donut ice cream halvah. Soufflé marzipan fruitcake apple pie macaroon tiramisu. Cupcake candy canes sweet. Topping caramels gingerbread topping jujubes. Pie jujubes cake gummi bears liquorice caramels marshmallow.
                    Croissant jelly-o caramels cake apple pie apple pie cake caramels caramels. Pudding cookie bonbon tart cheesecake dessert lemon drops muffin. Lollipop gingerbread jelly beans jujubes biscuit icing. Biscuit tiramisu lemon drops apple pie powder oat cake lemon drops. Ice cream chocolate lollipop. Topping cookie tiramisu lollipop macaroon chocolate cake jelly. Lollipop soufflé jelly-o toffee tootsie roll jelly dragée cupcake cake. Chocolate carrot cake chocolate bar candy lollipop pie gummies chocolate. Bonbon caramels marshmallow. Marzipan chocolate bar liquorice lemon drops chocolate cake. Macaroon sweet tiramisu biscuit danish cake biscuit caramels. Candy marzipan jujubes sweet. Chocolate cake chocolate cotton candy bear claw tart topping. Powder sweet roll ice cream sweet jelly dessert.
                    Marzipan cupcake pastry gummi bears dessert bonbon. Bear claw pudding oat cake bear claw pastry brownie oat cake toffee dragée. Topping cheesecake sweet sesame snaps. Apple pie macaroon jelly muffin macaroon chocolate cake. Caramels cookie jujubes pastry tart cheesecake. Soufflé danish cake cake gummi bears halvah chocolate cookie caramels. Apple pie sesame snaps gingerbread gummi bears donut carrot cake icing. Cake jelly beans croissant sesame snaps sweet roll topping tootsie roll chocolate bar. Gummi bears jelly-o ice cream. Cotton candy dragée sweet wafer sugar plum ice cream sugar plum candy canes. Tootsie roll sesame snaps muffin cotton candy ice cream. Candy croissant wafer marshmallow sweet.</p>
            </div>
            <br>
            <div class="col l6 s12 m6">
                    <div class="card yellow lighten-5">
                        <div class="pink darken-1">
                            <div class="valign-wrapper">
                                <img src="img/DoughnutsJaune.svg" alt="donutmarron" class="responsive-img image left valign">
                                <div class="container">
                            <span class="card-title valign center yellow-text text-lighten-5 titre-card">Commentaires</span>
                                </div>
                            </div>
                        </div>
                    <div class="card-content grey-text text-darken-3">
@include('doughnuts.comments')
                    </div>
                    </div>
            </div>
            <div class="col l6 s12 m6">
                <div class="card yellow lighten-5">
                    <div class="brown darken-3">
                        <div class="valign-wrapper">
                            <img src="img/DoughnutsBleu.svg" alt="donutmarron" class="responsive-img image left valign">
                            <div class="container">
                                <span class="card-title valign center yellow-text text-lighten-5 titre-card">Tops</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-content grey-text text-darken-3">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="css/404.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
</head>

<body>
<img src="img/DoughnutsJaune.svg" alt="donut bleu" class="img-side left">
<img src="img/DoughnutsJaune.svg" alt="donut bleu" class="img-side right">
<div class="center">
<h1 class="center white-text">Erreur 404</h1>
        <img src="img/Yannick.png" alt="donut chien" class="img" id="yannick">
    <p class="flow-text white-text">You shall note pass</p>
</div>
<img src="img/DoughnutsJaune.svg" alt="donut bleu" class="img-side left">
<img src="img/DoughnutsJaune.svg" alt="donut bleu" class="img-side right">
</body>

<footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script>
        var looper;
        var degrees = 0;
        function rotateAnimation(el,speed){
            var elem = document.getElementById(el);
            if(navigator.userAgent.match("Chrome")){
                elem.style.WebkitTransform = "rotate("+degrees+"deg)";
            } else if(navigator.userAgent.match("Firefox")){
                elem.style.MozTransform = "rotate("+degrees+"deg)";
            } else if(navigator.userAgent.match("MSIE")){
                elem.style.msTransform = "rotate("+degrees+"deg)";
            } else if(navigator.userAgent.match("Opera")){
                elem.style.OTransform = "rotate("+degrees+"deg)";
            } else {
                elem.style.transform = "rotate("+degrees+"deg)";
            }
            looper = setTimeout('rotateAnimation(\''+el+'\','+speed+')',speed);
            degrees++;
            if(degrees > 359){
                degrees = 1;
            }
            document.getElementById("status").innerHTML = "rotate("+degrees+"deg)";
        }
    </script>
    <script>rotateAnimation("yannick",10);</script>
</footer>
</html>
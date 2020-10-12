</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Adivinanza</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
        .card{
            background: #CCEECC;
            border-bottom-left-radius: 50%;
            border: darkgreen 1px solid;
        }
        .content{
            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-top-left-radius: 80%;
            border-top-right-radius:80%;
        }
        #separadorInferior{
            width: 100%;
            height: 100px;
            margin-left: 0px;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
            background: #3B5686;
        }
        .navbar{
            background: #3B5686;
        }
        #separadorDePagina{
            background:  #FDFD96;
            border: yellow 8px double;
        }
        p{
            margin-left:15%;
            margin-right: 15%;
            text-align: justify;
            font-style: italic;
        }
        .btn {
            background: #FDFD96;
            border: gold 1px solid;
        }
        #fondo{
            border-bottom-left-radius:50%;
            border-top-right-radius: 50%;
        }
    </style>
</head>
<body style="background: #3B5686;">
<!-- navbar -->
<nav class="navbar navbar-expand-sm navbar-dark " >
    <div class="container-fluid">
        <a class="navbar-brand" href="http://learningkids.test/pantallaPrincipal">
            <img src="https://i.ibb.co/ssT01Hv/1b45fd32-691c-4a6d-84e4-aa2b5e2c6833-200x200.png" width="100">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="http://learningkids.test/pantallaPrincipal">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Español</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Matematicas</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Ciencias Naturales</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Ciencias Sociales</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Registrarse</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Inicio de sesion</a></li>

            </ul>
        </div>
    </div>
</nav>

<!-- iamgen -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="background: #D8E2F3" id="fondo" >
            <img src="https://i.ibb.co/PDx7Lhq/unnamed-removebg-preview.png" width="500" class=" mx-auto d-block"/>
        </div>
    </div>
</div>


<!-- descrpcion -->
<div id="separadorDePagina" class="container-fluid" >
    <div class="row">
        <div class="mx-auto d-block">
            <img src="https://i.ibb.co/D7KgKLp/hinj-removebg-preview.png" width="340" height="250" class="mx-auto d-block"/>
            <h2 class="text-center"><em>
                    ¿Que son las adivinanzas?
            </h2></em>

            <p class="">
                <strong><em>
                        <br>Una adivinanza es una pregunta ingeniosa que se presenta como un juego de palabras en un enunciado,
                        por lo general en forma de rima y plantea un componente educativo. Muchas adivinanzas infantiles
                        cortas tienen el objetivo de transmitir un concepto como pueden ser las de animales o las de frutas y otros objetos.<br>
                    </em></strong> </p>
        </div>
    </div>
</div>
<!-- titulo -->
<div  class="row" style="background: #D8E2F3">
    <div class="col-md-12">
        <h3 align="center">
            <br><em>Tipos de Adivinanzas </em><br><br>
        </h3>
    </div>
</div>
</div>
</div>


<!-- tarjetas tipos de adivinanzas -->
<div class="container-fluid">
    <div class="row"  style="background: #D8E2F3 ">
        <!-- tarjeta 1 -->
        <div class="col-md-4 pb-5" >
            <div class="card"  style="width: 18rem;" >
                <img src="https://i.ibb.co/j8qn5bF/bhg.jpg" class="card mx-auto d-block" height="150" width="220">
                <div class="card-body">
                    <h5 class="card-title" align="center">Adivinanzas de<br> animales</h5>
                    <a href="http://learningkids.test/tiposAdivinanzas?#" class="btn">Leer</a>
                </div>
            </div>
        </div>
        <!-- tarjeta2 -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/dKXqK3Z/maxresdefault-1.jpg" class="card mx-auto d-block" height="150" width="220">
                <div class="card-body">
                    <h5 class="card-title" align="center">Adivinanzas de<br>frutas</h5>
                    <a href="http://learningkids.test/adivinanzaFruta" class="btn">Leer</a>
                </div>
            </div>
        </div>
        <!-- tarjeta3 -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card mx-auto d-block" height="160" width="220">
                <div class="card-body">
                    <h5 class="card-title" align="center">Adivinanzas de<br> numeros</h5>
                    <a href="http://learningkids.test/adivinanzaNumeros" class="btn">Leer</a>
                </div>
            </div>
        </div>


        <!-- Contenedor2 y tarjeta4 -->
        <div class="container-fluid">
            <div class="row" style="background: #D8E2F3">
                <div  class="col-md-6 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="https://i.ibb.co/hdgRwK2/icon.webp" class="card mx-auto d-block" height="150" width="220">
                        <div class="card-body">
                            <h5 class="card-title" align="center">Adivinanzas de<br> transportes</h5>
                            <a href="http://learningkids.test/adivinanzaTransporte" class="btn">Leer</a>
                        </div>
                    </div>
                </div>
                <!-- tarjeta5 -->

                <div class="col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img src="https://i.ibb.co/Hpb4517/jghi.jpg" class="card mx-auto d-block" height="150" width="220">
                        <div class="card-body">
                            <h5 class="card-title" align="center">Adivinanzas<br> cortas</h5>
                            <a href="http://learningkids.test/adivinanzaCorta" class="btn">Leer</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- separador -->
        <div id="separadorInferior">
            <div class="content">
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Adivinanzas de transporte</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .navbar{
            background:#3B5686;
        }
        body{
            background: #CCDDCC;
        }
        .card{
            background:aliceblue;
            border:navy 5px  solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        #separadorInferior .content{
            width: 110%;
            height: 100px;
            margin-left: -5px;
            background: #3B5686;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }
        #tar1{
            background: #CCEECC;
            border:darkgreen 5px solid;
        }
        #tar2{
            background: #f1DAFF;
            border: fuchsia 5px solid;
        }
        #tar3{
            background: #FFEECC;
            border: darkorange 5px solid;
        }
        .btn {
            background: #FDFD96;
            border: gold 1px solid;
        }
        #color{
            color: navy;
        }
    </style>
</head>
<body>
<script language="JavaScript">
    function pulsa() {
        document.getElementById("demo").innerHTML = "<h2>La Rana</h2>";
        document.getElementById("demo1").innerHTML = "<h2>El Raton</h2>";
        document.getElementById("demo2").innerHTML = "<h2>La Luciernaga</h2>";
        document.getElementById("demo3").innerHTML = "<h2>El Cangrejo</h2>";
        document.getElementById("demo4").innerHTML = "<h2>El Pollito</h2>";
        document.getElementById("demo5").innerHTML = "<h2>El Camaleon</h2>";
        document.getElementById("demo6").innerHTML = "<h2>La Abeja</h2>";
        document.getElementById("demo7").innerHTML = "<h2>La Mariposa</h2>";
        document.getElementById("demo8").innerHTML = "<h2>El Pinguino</h2>";
    }
</script>
<nav class="navbar navbar-expand-sm navbar-dark " id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://i.ibb.co/ssT01Hv/1b45fd32-691c-4a6d-84e4-aa2b5e2c6833-200x200.png" alt="" width="100">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <!-- href me lleva a la pantalla principal -->
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

<!-- contenedor del gif-->
<div class="container-fluid" id="h">
    <div class="row ">
        <div class="col-md-4 " >
            <img class="mx-auto d-block" src="https://i.ibb.co/s5yCnjB/99528630-removebg-preview-1.png" width="250" />
            <!-- Btn respuestas -->
            <form>
                <button id="rbtn" onclick="pulsa()">Respuestas</button>
            </form>
        </div>
        <div class="col-md-8 " >
            <h2 id="color"><em><br>Adivinanzas de Transportes</em></h2>
            <p><em><br>
                    Las adivinanzas de transportes son una forma entretenida y educativa para pasar el rato con los niños. Reta
                    tu mente y pon a prueba tus conocimientos acerca de los medios de transporte respondiendo estos divertidos acertijos.
                </em></p>
        </div>
    </div>
</div>


<!-- contenedor de las tarjetas -->
<div class="container-fluid  center-block pl-5" >
    <div  class="row m-5" >
        <div class="col-md-4">
            <!-- tarjeta 1 -->
            <div id="tar1" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" id="demo"></h5>
                    <p class="card-text">Por un camino de hierro voy corriendo muy veloz, doy un fuerte silbido cuando llego a la estación. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/1vbiSRW6j3Be3CJOeyO23aQENpCAYDiwM/preview"  width="200" height="80"></iframe>
                    <a href="#" class="btn">Escuchar</a>
                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" id="demo1"></h5>
                    <p class="card-text">Llevo a la familia y a su equipaje. Paso todas las noches en el garaje. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/1vbiSRW6j3Be3CJOeyO23aQENpCAYDiwM/preview"  width="200" height="80"></iframe>
                    <a href="#" class="btn">Escuchar</a>
                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" id="demo2"></h5>
                    <p class="card-text">Soy pájaro sin nido con las alas de metal, las ruedas tengo de goma y los ojitos de cristal.</p>
                    <iframe src="https://drive.google.com/file/d/1vbiSRW6j3Be3CJOeyO23aQENpCAYDiwM/preview"  width="200" height="80"></iframe>
                    <a href="#" class="btn ">Escuchar</a>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- contenedor 2 -->
<div class="container-fluid   center-block pl-5  " >
    <div class="row m-5" >
        <div class="col-md-4">
            <!-- tarjeta 1 -->
            <div id="tar1" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"id="demo3"></h5>
                    <p class="card-text">Encima de la cabeza gira mi gran abanico y en la punta de la cola gira otro pequeñito.</p>
                    <iframe src="https://drive.google.com/file/d/1vbiSRW6j3Be3CJOeyO23aQENpCAYDiwM/preview"  width="200" height="80"></iframe>
                    <a href="#" class="btn">Escuchar</a>
                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4  ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png"  class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"id="demo4"></h5>
                    <p class="card-text">Tengo seis ruedas y a veces más. Llevo la carga donde deba llegar. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/1vbiSRW6j3Be3CJOeyO23aQENpCAYDiwM/preview"  width="200" height="80"></iframe>
                    <a href="#" class="btn">Escuchar</a>
                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"id="demo5"></h5>
                    <p class="card-text">Camino sobre las olas y tengo vestidos blancos. Si el viento me empuja fuerte mucho más rápido ando.</p>
                    <iframe src="https://drive.google.com/file/d/1vbiSRW6j3Be3CJOeyO23aQENpCAYDiwM/preview"  width="200" height="80"></iframe>
                    <a href="#" class="btn">Escuchar</a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- contenedor3 -->
<div class="container-fluid  center-block pl-5" >
    <div class="row m-5" >
        <div class="col-md-4">
            <!-- tarjeta 7 -->
            <div id="tar1" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" id="demo6"></h5>
                    <p class="card-text">Si por el mar quieres viajar,¿dónde te vas a montar?</p>
                    <iframe src="https://drive.google.com/file/d/1vbiSRW6j3Be3CJOeyO23aQENpCAYDiwM/preview"  width="200" height="80"></iframe>
                    <a href="#" class="btn">Escuchar</a>
                </div>
            </div>
        </div>
        <!-- tarjeta 8 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"id="demo7"></h5>
                    <p class="card-text">Mi misión es transportar y en la parada debo parar. Vengo de muchos colores, pero si te llevo a la escuela, mi color es amarillo.</p>
                    <iframe src="https://drive.google.com/file/d/1vbiSRW6j3Be3CJOeyO23aQENpCAYDiwM/preview"  width="200" height="80"></iframe>
                    <a href="#" class="btn">Escuchar</a>
                </div>
            </div>
        </div>
        <!-- tarjetas9 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/pKc2Q0X/ilu2895-removebg-preview.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" id="demo8"></h5>
                    <p class="card-text">Vehículo soy, hago muchísimo ruido, pero sólo dos viajan conmigo.</p>
                    <iframe src="https://drive.google.com/file/d/1vbiSRW6j3Be3CJOeyO23aQENpCAYDiwM/preview"  width="200" height="80"></iframe>
                    <a href="#" class="btn">Escuchar</a>
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

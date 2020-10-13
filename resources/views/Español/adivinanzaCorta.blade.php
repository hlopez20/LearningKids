<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Adivinanzas cortas</title>
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
        .btn {
            background: #FDFD96;
            border: gold 1px solid;
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
        #banderin{
            background: url("https://i.ibb.co/jfW9Wfr/estrella-removebg-preview.png");
            margin-top: auto;
            height: 300px;
        }
        #color{
            color: navy;
        }
    </style>
</head>
<body>

<script>
    function pulsa() {
        document.getElementById("demo").innerHTML = "<h2>1- El Bombillo</h2>";
        document.getElementById("demo1").innerHTML = "<h2>2- La Sal</h2>";
        document.getElementById("demo2").innerHTML = "<h2>3- El Ajo</h2>";
        document.getElementById("demo3").innerHTML = "<h2>4- El Girasol</h2>";
        document.getElementById("demo4").innerHTML = "<h2>5- La Letra L</h2>";
        document.getElementById("demo5").innerHTML = "<h2>6- La Espuma</h2>";
        document.getElementById("demo6").innerHTML = "<h2>7- La Botella</h2>";
        document.getElementById("demo7").innerHTML = "<h2>8- El Gato </h2>";
        document.getElementById("demo8").innerHTML = "<h2>9- La Cuchara</h2>";
    }
</script>




<nav class="navbar navbar-expand-sm navbar-dark " id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://learningkids.test/pantallaPrincipal">
            <img src="https://i.ibb.co/ssT01Hv/1b45fd32-691c-4a6d-84e4-aa2b5e2c6833-200x200.png" alt="" width="100">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <!-- href me lleva a la pantalla principal -->
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="http://learningkids.test/pantallaPrincipal">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="http://learningkids.test/pantallaEspa%C3%B1ol">Español</a></li>
                <li class="nav-item"><a class="nav-link" href="http://learningkids.test/pantallaClaseMat">Matematicas</a></li>
                <li class="nav-item"><a class="nav-link" href="http://learningkids.test/cienciasNaturales">Ciencias Naturales</a></li>
                <li class="nav-item"><a class="nav-link" href="http://learningkids.test/cienciasSociales">Ciencias Sociales</a></li>
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

        </div>
        <div class="col-md-8 " >
            <h2 id="color"><em><br>Adivinanzas Cortas!</em></h2>
            <p><em><br>
                    Las adivinanzas cortas ayudan al niño a pensar y ejercitar la mente de forma entretenida. Debido a que, se muestran como un divertido juego para el pequeño. Aprovecha los acertijos y realiza actividades didácticas y alegres.
                </em></p>
            <p id="color"><em><strong>Las respuestas estan al final.</strong></em></p>
        </div>
    </div>
</div>


<!-- contenedor de las tarjetas -->
<div class="container-fluid  center-block pl-5" >
    <div  class="row m-5" >
        <div class="col-md-4">
            <!-- tarjeta 1 -->
            <div id="tar1" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">1- Es pequeña como una pera, pero alumbra la casa entera. ¿Qué es?</p>
                    <iframe src="https://drive.google.com/file/d/11SXZ2RRv9fQT8To781ab20hDJllHYL7V/preview" width="200" height="80"></iframe>
                    <a href="#"></a>


                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">2- La han sacado del mar, es blanca y también salada. La encuentras en la ensalada. ¿Qué es?</p>
                    <iframe src="https://drive.google.com/file/d/1STd8UKWmh61chq8BguHx0JPSF84p9uaY/preview" width="200" height="80"></iframe>
                    <a href="#"></a>

                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">3- Tiene dientes, pero no puede comer. ¿Qué es?</p>
                    <iframe src="https://drive.google.com/file/d/1smUobulAXe8PcOVEkTiuOu6iNXT4r4mx/preview" width="200" height="80"></iframe>
                    <a href="#" ></a>
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
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">4- Bonita flor que gira buscando el sol. ¿Qué es?</p>
                    <iframe src="https://drive.google.com/file/d/18xeyAnRu3bYRt5vKU9_ZWsYv7GGgBZQ3/preview" width="200" height="80"></iframe>
                    <a href="#" ></a>
                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4  ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">5- Una letra alta y delgada es. La luna y el sol la llevan, pero en el aire no la ves. ¿Qué es?</p>
                    <iframe src="https://drive.google.com/file/d/1eQqdBBCJDMNxnzzsYgC-vIdLEKVipFxQ/preview" width="200" height="80"></iframe>
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">6- Es puma y no es animal; vuela y flota. ¿Qué será?</p>
                    <iframe src="https://drive.google.com/file/d/1b1Zn0fndjj-0JG3kTCi2uCLNqVGzTgt0/preview" width="200" height="80"></iframe>
                    <a href="#"></a>
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
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">7- Tiene cuello, pero no cabeza. ¿Sabes qué es?</p>
                    <iframe src="https://drive.google.com/file/d/1tIZdr5THQ0X8HmUPDD8-nysAKJk0mYY9/preview" width="200" height="80"></iframe>
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <!-- tarjeta 8 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">8- Tiene patas y bigotes. Caza ratones y araña, pero no es araña. ¿Quién es?</p>
                    <iframe src="https://drive.google.com/file/d/1sQvzGBMvSkis2HeZualyckIBOA1OFyc6/preview" width="200" height="80"></iframe>
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <!-- tarjetas9 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/0sTwb87/la-gota-que-queria-s.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">9- Sube llena y baja vacía. Si no se da prisa, la sopa se enfría. ¿Qué es?</p>
                    <iframe src="https://drive.google.com/file/d/1tts5n9ocmkyH27plL0Hai2E08NVn49g8/preview" width="200" height="80"></iframe>
                    <a href="#"></a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- contenedor de Respuestas-->
<div class="container-fluid" id="h">
    <div class="row ">
        <div class="col-md-4"><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/5Rdp7jk/pil-removebg-preview.png" width="250" />
            <!-- Btn respuestas -->
            <a class="btn" onclick="pulsa()">Ver Respuestas</a>
            <iframe src="https://drive.google.com/file/d/1jgNM4u6jzRBDMi5i3i-S-XUeyD3p7FOS/preview" width="200" height="80"></iframe>
        </div>
        <div class="col-md-8 " >
            <h2 id="color"><em><br>Respuestas adivinanzas Cortas:</em></h2>
            <p id="demo"></p>
            <p id="demo1"></p>
            <p id="demo2"></p>
            <p id="demo3"></p>
            <p id="demo4"></p>
            <p id="demo5"></p>
            <p id="demo6"></p>
            <p id="demo7"></p>
            <p id="demo8"></p>
            <p id="demo9"></p>

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

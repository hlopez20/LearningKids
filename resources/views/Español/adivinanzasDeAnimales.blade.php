<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Adivinanzas de animales</title>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .navbar{
            background:#3B5686;
        }
        body{
            background: #CCDDCC;
        }
        .btn {
            background: #FDFD96;
            border: gold 1px solid;
        }
        .card{
            background:aliceblue;
            border:navy 5px  solid;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
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
        #separadorInferior .content{
            width: 110%;
            height: 100px;
            margin-left: -5px;
            background: #3B5686;
            border-top-left-radius: 50%;
            border-top-right-radius:50%;
        }
        #color{
            color: navy;
        }
    </style>
</head>
<body>

<script language="JavaScript">
    function pulsa() {
        document.getElementById("demo").innerHTML = "<h2>1- La Rana</h2>";
        document.getElementById("demo1").innerHTML = "<h2>2- El Ratón</h2>";
        document.getElementById("demo2").innerHTML = "<h2>3- La Luciérnaga</h2>";
        document.getElementById("demo3").innerHTML = "<h2>4- El Cangrejo</h2>";
        document.getElementById("demo4").innerHTML = "<h2>5- El Pollito</h2>";
        document.getElementById("demo5").innerHTML = "<h2>6- El Camaleón</h2>";
        document.getElementById("demo6").innerHTML = "<h2>7- La Abeja</h2>";
        document.getElementById("demo7").innerHTML = "<h2>8- La Mariposa</h2>";
        document.getElementById("demo8").innerHTML = "<h2>9- El Pingüino</h2>";
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
        <div class="col-md-4"><br>
            <img class="mx-auto d-block" src="https://i.ibb.co/s5yCnjB/99528630-removebg-preview-1.png" width="250" />

        </div>
        <div class="col-md-8 " >
            <h2 id="color"><em><br>Adivinanzas de Animales!</em></h2>
            <p><em><br>
                    Las adivinanzas de animales ayudan al niño a pensar y ejercitar la mente de forma entretenida. Debido a que, se muestran como un divertido juego para el pequeño. Aprovecha los acertijos y realiza actividades didácticas y alegres donde el niño aprenda los nombres y características de cada animal.
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
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">1- Canto en la orilla, vivo en el agua, no soy pescado ni cigarra. ¿Quién soy?<BR><BR></p>
                    <iframe src="https://drive.google.com/file/d/19-tFLoTm3uw65XlywSB_SsYtSrW1etSk/preview" width="200" height="80"></iframe>
                    <a href="#" ></a>
                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">2- El roer es mi trabajo, el queso mi aperitivo y el gato siempre será mi más temido enemigo. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/1CbfcuCcZFIHvrRX4ba3iZM4kZTUJ0k3J/preview" width="200" height="80"></iframe>
                    <a href="#" ></a>
                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">3- Soy un trocito de luz en la noche. De día me escondo en la hierba. Parezco una esmeralda que el viento se lleva. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/12Fb2evZcg-k2V1PLhgIiAnpcNGyeHm5c/preview" width="200" height="80"></iframe>
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
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">4- Dos pinzas tengo y hacia atrás camino, de mar o de río en el agua vivo. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/1TdeSFeiAswCCUVwEqT5tlvVrNob-LbYe/preview" width="200" height="80"></iframe>
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4  ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">5- Madre me labró una casa sin puertas y sin ventanas, y cuando quiero salir rompo antes la muralla. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/1lEO67mQOkXdL3gP-wiJYjWUFfDfVQ2e1/preview" width="200" height="80"></iframe>
                    <a href="#" ></a>
                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">6- No es cama ni es león, y desaparece en cualquier rincón. ¿Quién es?</p>
                    <iframe src="https://drive.google.com/file/d/1ETy7TZ3e-pHvtev14xrZ7jzTaSqdC7h_/preview" width="200" height="80"></iframe>
                    <a href="#" ></a>
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
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">7- Vuelo entre las flores, vivo en una colmena, fabrico miel y también cera. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/1S4oOF_1pkiBtCZgAIk_2R6LRWpdMFdUE/preview" width="200" height="80"></iframe>
                    <a href="#" ></a>
                </div>
            </div>
        </div>
        <!-- tarjeta 8 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">8- Soy un insecto que vuela entre las flores, tengo dos alitas de muchos colores. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/1sdSahRaSWSjzxOugkGdWs31GJv7c1xje/preview" width="200" height="80"></iframe>
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <!-- tarjetas9 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/9WGwYQw/animales.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">9- Viste de chaleco blanco y negro tiene su pecho. Es un ave que no vuela, pero sabe nadar derecho. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/1XvggfhCce1hVOnz3eA6zcHrubZMnpZc2/preview" width="200" height="80"></iframe>
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
            <iframe src="https://drive.google.com/file/d/1dYpMkeksLLPVwEhVbFFcUaHs4XT2Srv9/preview" width="200" height="80"></iframe>
        </div>
        <div class="col-md-8 " >
            <h2 id="color"><em><br>Respuestas adivinanzas de Animales:</em></h2>
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

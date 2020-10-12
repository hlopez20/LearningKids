<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">


    <title>Adivinanzas de numeros</title>
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
        #color{
            color: navy;
        }
    </style>
</head>
<body>

<script language="JavaScript">
    function pulsa() {
        document.getElementById("demo").innerHTML = "<h2>1- El número 10</h2>";
        document.getElementById("demo1").innerHTML = "<h2>2- El número 7</h2>";
        document.getElementById("demo2").innerHTML = "<h2>3- El número 6</h2>";
        document.getElementById("demo3").innerHTML = "<h2>4- El número 3</h2>";
        document.getElementById("demo4").innerHTML = "<h2>5- El número 20</h2>";
        document.getElementById("demo5").innerHTML = "<h2>6- El número 1</h2>";
        document.getElementById("demo6").innerHTML = "<h2>7- El número 1</h2>";
        document.getElementById("demo7").innerHTML = "<h2>8- El número 2</h2>";
        document.getElementById("demo8").innerHTML = "<h2>9- El número 5</h2>";
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

<!-- contenedor de ?-->
<div class="container-fluid" id="h">
    <div class="row ">
        <div class="col-md-4 " >
            <img class="mx-auto d-block" src="https://i.ibb.co/s5yCnjB/99528630-removebg-preview-1.png" width="250" />

        </div>
        <div class="col-md-8 " >
            <h2 id="color"><em><br>Adivinanzas de Números!</em></h2>
            <p><em><br>
                    Las adivinanzas de números son la forma más entretenida y educativa para pasar el rato con los niños. Ya que, por medio de ellas, aprenden los números, estimulan su capacidad de pensar y se sieten animados con ganas de seguir aumentando sus conocimientos.
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
                <img src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">1- Un bastón alargado tiene un balón redondito como su compañero, si sumas 5 y 5 sabrás a quién me refiero. ¿Qué número es?</p>
                    <iframe src="https://drive.google.com/file/d/1f3T80CRVHb4WKBvvNAOHsvEVpJoHB7w1/preview" width="200" height="80"></iframe>
                    <a href="#" ></a>
                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img  src="https://i.ibb.co/MpMC7mk/descarga-1.jpg"  class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">2- Si quieres saber quién soy, espera a que llueva. Contando los colores del arcoíris tendrás la prueba. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/1RWrltT3Y2DvWvo9k8q2gTAyrcZHKzkBm/preview" width="200" height="80"></iframe>
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">3- Puesto de una manera paso a ser un número par, pero paso a ser otro si la vuelta me das. ¿Qué número es?</p>
                    <iframe src="https://drive.google.com/file/d/1FTJgz10tMR_AvFlrq0_mkyJil3YFyn69/preview" width="200" height="80"></iframe>
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
                <img src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">4- Soy uno más que dos y tengo forma de serpiente, pero no la que más miente. ¿Cuál número soy?</p>
                    <iframe src="https://drive.google.com/file/d/1AB2_FDRlcblI-o1ONd0L8vnHEHnt39PS/preview" width="200" height="80"></iframe>
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <!-- tarjeta 2 -->
        <div class="col-md-4  ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">5- Cuenta los dedos de tu mano y también los de uno de tus pies y sabrás que número es. ¿Quién soy?</p>
                    <iframe src="https://drive.google.com/file/d/12eFlWnTzpltXg9ozM1e4K8kV-An__-Ty/preview" width="200" height="80"></iframe>
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <!-- tarjetas3 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">6- Si quieres contar, por mí tienes que empezar. ¿Cuál número soy?</p>
                    <iframe src="https://drive.google.com/file/d/1TWBXRW_gWm68puQQOWgLrgpBAxLHlpox/preview" width="200" height="80"></iframe>
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
                <img src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">7- De muchos hijos que somos, el primero yo nací, pero soy el menor de todos. ¿Cómo puede ser así? ¿sabes cuál número soy?</p>
                    <iframe src="https://drive.google.com/file/d/1Vm0RMnMtPaa6WLYJP4rH69hjEnAdBxr0/preview" width="200" height="80"></iframe>
                    <a href="#"></a>
                </div>
            </div>
        </div>
        <!-- tarjeta 8 -->
        <div class="col-md-4 ">
            <div id="tar2" class="card" style="width: 18rem;">
                <img  src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">8- Soy más de uno sin llegar a tres y llego a cuatro cuando dos me des. ¿Cuál número soy?</p>
                    <iframe src="https://drive.google.com/file/d/15WoSXUuMPxeBUwySyM0DszkiGZnyx4G9/preview" width="200" height="80"></iframe>
                    <a href="#" ></a>
                </div>
            </div>
        </div>
        <!-- tarjetas9 -->
        <div class="col-md-4">
            <div id="tar3" class="card" style="width: 18rem;">
                <img src="https://i.ibb.co/MpMC7mk/descarga-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">9- ¿Qué número tiene el mismo número de letras que el valor que expresa? Quién soy?</p>
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
            <iframe src="https://drive.google.com/file/d/1_dUoM20BOXLcJ68-smYqmUVIBA_rdl_-/preview" width="200" height="80"></iframe>
        </div>
        <div class="col-md-8 " >
            <h2 id="color"><em><br>Respuestas adivinanzas de Números:</em></h2>
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

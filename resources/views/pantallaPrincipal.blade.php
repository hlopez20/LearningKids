<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Learning Kids</title>


    <style>
        #ribbon{
            background-color: rgb(219, 26, 26);
            background-image: repeating-linear-gradient(45deg, transparent, transparent 25px, rgba(131, 21, 21, 0.5) 25px, rgba(131, 21, 21, 0.5)40px);
        }
        #ribbon::after{

            background-color: transparent;
            display: block;
            height: 20px;
            width: 50%;
            margin: 0 auto;
            position: relative;
            left: auto;
            margin-top: -40px;


        }

        #bienvenida{
            background-color: rgb(219,26,26);
            position: relative;
            margin-top: -20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }
        #bienvenida img{
            position: relative;
            margin-top: -50px;
        }
        #separadorInferior{
            width: 100%;
            overflow: hidden;
            position: relative;
            z-index: 2;
        }
        #separadorInferior .content{

            width: 110%;
            height: 100px;
            margin-left: -5px;
           border-bottom-right-radius: 50%;
            border-top-left-radius:50% ;
        }
        #banderin{
            background: rgb(255,255,255);
            background: url("https://i.ibb.co/xm0J45z/banderin-guirnalda28-1024x250-removebg-preview.png"), linear-gradient(0deg, rgba(255,255,255,1)0%,rgba(99,196,255,1)57%);
            background-repeat: repeat-x;
            background-size:60%;
            margin-top: -20px;

        }
        #image{
            margin-top: 250px;


        }
        h3{
            text-align: center;
            font: oblique bold 140% cursive ;

        }
        pre{
            margin-left: 320px;
            margin-top:-180px;
            text-align: justify;

        }
        p{
            text-align: justify;

        }




    </style>

</head>
<body>


<!-- NAVRBAR-->
<nav class="navbar navbar-expand-sm navbar-dark bg-info" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://i.ibb.co/ssT01Hv/1b45fd32-691c-4a6d-84e4-aa2b5e2c6833-200x200.png" alt="" width="100">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="http://learningkids.test/pantallaEspa%C3%B1ol">Español</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Matematicas</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Ciencias Naturales</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Ciencias Sociales</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Registrarse</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Inicio de sesion</a></li>

            </ul>
        </div>
    </div>
</nav>



<!-- CARROUSEL-->

<div class="carousel slide" id="mainSlider" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://i.ibb.co/GVMghJM/cartoon-children-playing-around-books-vector.jpg"  class="d-block w-100">

        </div>

        <div class="carousel-item">
            <img src="https://prioritariosvina.files.wordpress.com/2015/07/nic3b1os.jpg" class="d-block w-100">

        </div>
        <div class="carousel-item">
            <img src="https://i.ibb.co/mcdqZXk/cartoon-children-on-stack-of-books-vector.jpg"  class="d-block w-100">
        </div>
    </div>
</div>




<!-- RIBBON -->
<div id="ribbon" class="container-fluid">
    <div id="bienvenida" class="container w-50 pl-5">
        <div class="row align-items-center">
            <div class="col-sm p-3">
                <img src="https://i.ibb.co/dLWLThm/ninos-felices-escuela-bloques-alfabeto-29190-5022-removebg-preview.png"  class="w-100 mx-auto d-block" >
            </div>
            <div class="col-sm p-3 text-white text-center">
                <h4>Bienvenidos a <br>Learling Kids</h4>
            </div>
        </div>
    </div>
</div>

<!-- Separador-->
<div id="separadorDePagina" class="container-fluid bg-warning" >
    <div class="row">
        <div class="col-md-4">
            <img alt="Bootstrap Image Preview"  src="https://i.ibb.co/BsZbtb6/tigatelu151000413-removebg-preview.png"  height="300" class="mx-auto d-block pt-1 pb-3"/>
        </div>
        <div class="col-md-4">

            <p>
                Es una forma divertida y gratuita para que tus hijos aprenden,
                refuercen y/o desarrollen habilidades sobrecuatro materias básicas
                (matemáticas, español,ciencias naturales y ciencias sociales). Todo
                el contenido acercade educación básica preescolar recopilado en una
                sola plataformacon el objetivo de lograr una mayor facilitación de
                enseñanza y aprendizaje para sus niños. Este espacioes una herramienta
                útil para reforzar el conocimiento no solo de nuestros niños sino también
                permite una mayor didáctica si eres educador o maestro es por ello que
                la información deesta pagina web esta abierta para todo tipo de usuario
            </p>

        </div>
        <div class="col-md-4">
            <img alt="Bootstrap Image Preview"  src="https://i.ibb.co/Xbj7nKj/tigatelu151000415-removebg-preview.png" height="300" class="mx-auto d-block pt-1 pb-4"/>
        </div>
    </div>
</div>
</div>


<!-- GAMES-->
<div id="banderin">



    <div class="container-l">
        <div class="row">
            <div class="col-md-6">
                 <a href="http://learningkids.test/pantallaEspa%C3%B1ol">
                <img  id="image" alt="Bootstrap Image Preview"  src="https://i.ibb.co/JBBRmNQ/414-4146851-marco-legal-en-los-modelos-pedaggicos-by-tatiana-removebg-preview-1.png"  class=" img-fluid  img-thumbnail  mx-auto d-block bg-info rounded-circle" width="150"/>
                <h3>Español</h3>
                 </a>
            </div>
            <div class="col-md-6">
                <a href="http://learningkids.test/pantallaClaseMat">
                <img id="image" alt="Bootstrap Image Preview" src="https://i.ibb.co/BKDtyyD/png-transparent-abacus-mathematics-computer-icons-tutor-mathematics-orange-abaco-mathematics-thumbna.png"  class=" img-fluid  img-thumbnail  mx-auto d-block bg-danger rounded-circle" width="150"  />
                <h3>Matematicas</h3>
                    </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="https://i.ibb.co/XjTcymC/dibujos-animados-ninos-felices-18591-59819-removebg-preview.png" class="img-fluid  mx-auto d-block " width="450"  />

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <a href="http://learningkids.test/cienciasNaturales">
                <img alt="Bootstrap Image Preview" src="https://i.ibb.co/JtktKHb/ciencias-naturales-removebg-preview.png" class=" img-fluid  img-thumbnail  mx-auto d-block bg-success rounded-circle" width="150" />
                <h3>Ciencias Naturales</h3>
                </a>
            </div>
            <div class="col-md-6">
                <a href="http://learningkids.test/cienciasSociales">
                <img src="https://i.ibb.co/3Cvms5x/kisspng-social-studies-clip-art-classroom-clipart-5b5696970d53c2-5022800115324013030546-removebg-pre.png"  class=" img-fluid  img-thumbnail  mx-auto d-block bg-warning rounded-circle" width="150"/>
                <h3>Ciencias Sociales</h3>
                    </a>
            </div>
        </div>

        <!-- SEPARADOR AMIIBOS-->



        <div id="separadorInferior">
            <div class="content bg-success">

            </div>
        </div>








        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>

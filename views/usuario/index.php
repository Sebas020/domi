<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DomiOriente</title>

  <style>
   @font-face {
    font-family: Movavi;
    src: url('vendor/fonts/Movavi Grotesque Black.ttf');
  }
  .establecimientos div div div div div div div div img{
    width: 7em;
  }
  .establecimientos div div div div div div div div p{
    font-size: 1.2em;
  }
  .establecimientos div div div div div div .row{
    background-image: radial-gradient(#DFC298 50%, #B59260);
    padding-top:5px;
    padding-bottom:5px;
    margin-top: 20px;
    border-radius: 8px;
  }
  .establecimientos {
    background-color: #ddd;
  }
  @media(min-width:990px) {

    .establecimientos{
      background:url('img/Establecimientos.png');
      background-position: center;
      background-size:100% auto;
      background-repeat: no-repeat;color: #6b251b;
      font-family: open sans;
    }
    .establecimientos div div div div div div{
      padding: 0px;
    }
    .establecimientos-1{
     padding-top: 12em;
   }
   .establecimientos div div div div div{
    background-color: transparent;
  }
  .establecimientos div div div div div div .row{
    background-image: none;
    padding:0px
    margin:0px;
    border-radius: none;
  }
}
</style>


<link rel="stylesheet" href="<?=base_url?>assets/bootstrap/dist/css/bootstrap.min.css" />
  <script src="<?=base_url?>assets/js/jquery.min.js"></script>
  <script src="<?=base_url?>helpers/main.js"></script>
  <script src="<?=base_url?>assets/bootstrap/dist/js/bootstrap.min.js"></script>

</head>

<!---------------------------------comienza cuerpo -------------------------------------->

<body id="page-top" >
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container bg-transparent">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">DomiOriente</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Acerca de nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#tiendas">TIENDAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contactenos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--------------------aqui comienza el jumbotron---------------------------------->

  <div id="carouselExampleIndicators" class="carousel slide mt-5 mt-lg-0" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="img"><img class="d-block img-fluid" src="img/slide index_1.png" alt="First slide"></div>
      </div>
      <div class="carousel-item">
        <div class="img"><img class="d-block img-fluid" src="img/slide_2.png" alt="Second slide"></div>
      </div>
      <div class="carousel-item">
        <div class="img"><img class="d-block img-fluid" src="img/slide index_1.png" alt="Third slide"></div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


<!--<a class="btn btn-default btn-xl js-scroll-trigger" href="#about" style="
position: absolute;
right: 45%;
top: 550px;
background-image: url('img/flecha.png');
width: 60px;
height:60px;
background-position:center; 
background-repeat:no-repeat;"></a>-->




<!------------------termina jumbotron-------------------------------------------->


<!--<section class="bg-light" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading text-black">Tenemos lo que necesitas!</h2>
        <hr class="dark my-4">
        <p class="text-black mb-4">Elije entre una de nuestros aliados y descubre todo lo que tienen por ofrecerte</p>
      </div>
    </div>
  </div>
</section>-->

<section id="tiendas" class="bg-dark text-white">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 text-center">
        <div class="service-box mt-5 mx-auto">
          <i class="fa fa-4x fa-cutlery text-primary mb-3 sr-icons b"></i>
          <h3 class="mb-3">Comidas Variadas</h3>
          <p class=" mb-0">Nuestros clientes es lo que más nos importa</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 text-center">
        <div class="service-box mt-5 mx-auto">
          <i class="fa fa-4x fa-clock-o text-primary mb-3 sr-icons"></i>
          <h3 class="mb-3">Rapido</h3>
          <p class=" mb-0">Solamente a un click de distancia y en su puerta estará</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 text-center">
        <div class="service-box mt-5 mx-auto">
          <i class="fa fa-4x fa-usd text-primary mb-3 sr-icons"></i>
          <h3 class="mb-3">barato</h3>
          <p class=" mb-0">Para que ustedes siempre obtengan lo mejor, al precio mas asequible</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-------------------------------------Section apoyo--------------------------> 

<section class="bg-light text-black">
  <div class="container text-center">
    <h2 class="mb-4">Visitanos y no dudes en probar nuestro gran servicio</h2>
    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#portfolio">Ordena Ahora!</a>
  </div>
</section>

<!-------------------------------inicia section tiendas--------------------------------->

<div class="container-fluid establecimientos">
  <div class="row">
    <!--Tabla establecimientos-->
    <div class="col-12 col-lg-8">
      <div class="container-fluid">
        <div class="row establecimientos-1">
          <div class="d-none d-lg-block col-lg-1"></div>
          <!-------------------------Establecimiento 1------------------------>
          <div class="col-12 col-xs-12 col-lg-3">
            <div class="container-fluid">
              <div class="row">
                <div class="col-6 col-lg-7">
                  <img src="img/team/burguer.png">
                </div>
                <div class="col-6 col-lg-5">
                  <p style="font-weight: bold;">Juka</p>
                  <p style="font-size: 0.7em; ">Lorem ipsum dolor sit amet, consectetur </p>
                </div>
              </div>
            </div>
          </div>
          <!-------------------------Establecimiento 2------------------------>
          <div class="col-12 col-lg-4">
            <div class="container-fluid">
              <div class="row" >
                <div class="col-6 col-lg-7 pl-lg-5">
                  <img src="img/team/brochetas.png">
                </div>
                <div class="col-6 col-lg-5">
                  <p style="font-weight: bold;">Alas Brochetas</p>
                  <p style="font-size: 0.7em; ">Lorem ipsum dolor sit amet, consectetur </p>
                </div>
              </div>
            </div>
          </div>
          <!-------------------------Establecimiento 3------------------------>
          <div class="col-12 col-lg-4">
            <div class="container-fluid">
              <div class="row" >
                <div class="col-6 col-lg-6 pl-lg-4">
                  <img src="img/team/cachorros.png">
                </div>
                <div class="col-6 col-lg-6 pr-lg-4">
                  <p style="font-weight: bold;">Los Cachorros</p>
                  <p style="font-size: 0.7em; ">Lorem ipsum dolor sit amet, consectetur </p>
                </div>
              </div>
            </div>
          </div>
          <!-------------------------------------Separador tabla------------------------------------>
        </div>
        <div class="row pt-lg-3">
          <div class="col-lg-1"></div>
          <!-------------------------Establecimiento 4------------------------>
          <div class="col-lg-3">
            <div class="container-fluid">
              <div class="row" >
                <div class="col-6 col-lg-7">
                  <img src="img/team/Astorias.png">
                </div>
                <div class="col-6 col-lg-5">
                  <p style="font-weight: bold;">Astorias</p>
                  <p style="font-size: 0.7em; ">Lorem ipsum dolor sit amet, consectetur </p>
                </div>
              </div>
            </div>
          </div>
          <!-------------------------Establecimiento 5------------------------>
          <div class="col-lg-4">
            <div class="container-fluid">
              <div class="row" >
                <div class="col-6 col-lg-7 pl-lg-5">
                  <img src="img/team/barberhouse.png">
                </div>
                <div class="col-6 col-lg-5">
                  <p style="font-weight: bold;">Barber House</p>
                  <p style="font-size: 0.7em; ">Lorem ipsum dolor sit amet, consectetur </p>
                </div>
              </div>
            </div>
          </div>
          <!-------------------------Establecimiento 6------------------------>
          <div class="col-lg-4">
            <div class="container-fluid">
              <div class="row">
                <div class="col-6 col-lg-6 pl-lg-4">
                  <img src="img/team/burguer.png">
                </div>
                <div class="col-6 col-lg-6 pr-lg-4">
                  <p style="font-weight: bold;">Los Derretidos</p>
                  <p style="font-size: 0.7em; ">Lorem ipsum dolor sit amet, consectetur </p>
                </div>
              </div>
            </div>
          </div>
          <!-------------------------Titulo ver más------------------------>
        </div>
        <div class="row" style="margin-top: 1.5em;">
         <div class="col-lg-9"></div>
         <div class="col-lg-3" align="right">
          <a href="" style="color: #333;font-size: 1.3em;">Ver más ►</a>
        </div>
      </div>
    </div>
  </div>
  <!-----------------------------Finaliza tabla establecimientos---------------------------->
  <div class="d-none d-lg-block col-lg-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <img src="img/team/cachorros.png" style="width: 20em;margin-left:5em;" alt="">
        </div>
        <div class="col-lg-12 pl-5" align="left">
          <p style="color:white;font-family: Movavi;font-size: 3em;padding-top: 1.5em;letter-spacing: -0.1em;padding-left: 1.8em">Los Cachorros</p>
          <h3 style="color:white;font-weight: bold;letter-spacing: -0.1em;padding-left: 5.5em;">Crr 31 # 32 - 05</h3>
          <h3 style="color:white;font-weight: bold;letter-spacing: -0.1em;padding-left: 5.5em;">@loscachorros</h3>
          <h3 style="color:white;font-weight: bold;letter-spacing: -0.1em;padding-left: 5.5em;">3192934969</h3>

        </div>
      </div>
    </div>
  </div>
</div>
<br>
</div>

<!-- termina section tiendas-->

<section id="contact" class="pt-4 pb-1 bg-dark" style="color:white;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center">
        <h3 class="section-heading ">Mantengamonos en contacto!</h3>
        <hr class="my-2 ">
        <p>Todos sus opiniones son importantes para nosotros!</p>
        <a href="" class="btn btn-success mb-4 text-capitalize d-none">Escribanos Aquí</a>
      </div>
      <div class="col-lg-6 mx-auto text-center">
        <table class="mx-auto mt-2">
          <tr>
            <td><i class="fa fa-facebook fa-3x mx-3 mb-3 sr-contact"></i></td>
            <td><i class="fa fa-instagram fa-3x mx-3 mb-3 sr-contact"></i></td>
            <td><i class="fa fa-youtube fa-3x mx-3 mb-3 sr-contact"></i></td>
            <td><i class="fa fa-phone fa-3x mx-3 mb-3 sr-contact"></i></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>

</body>

</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Expomedia | Streams</title>
  </head>

  <body class="BodyBg">
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <?php @include('../includes/menu2.php'); ?>
          </div>
        </div>
        <div class="row">
          <div class="imgHeader col-sm-12"><img src="../assets/images/torneoHeader.png" alt="Ganadores-pasados-del-torneo-de-League-of-Legends"></div>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 titlePage">
          <h1>STREAMS</h1>
        </div>
      </div>
    </div>

    <!--Sección para mostrar los videos-->
    <section>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 newCol6">
          <div id= "carouselExampleSlidesOnly" class= "carousel  contenedor-Slide newWidthSlide" data-interval="0">
            <div id= "carouselExampleControls" class= "carousel" data-interval="0">
              <div class= "carousel-inner">
                <!--Primera linea-->
                <div class= "carousel-item active" data-interval="0">
                  <div class="video-responsive">
                    <iframe class="item active" src="https://www.youtube.com/embed/kziIrEOSBNI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
                <div class= "carousel-item">
                  <div class="video-responsive">
                    <iframe class="item active" src="https://www.youtube.com/embed/HqLu-nrH8zE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
                <div class= "carousel-item">
                  <div class="video-responsive">
                    <iframe class="item active" src="https://www.youtube.com/embed/95ghQs5AmNk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
                <div class= "carousel-item">
                  <div class="video-responsive">
                    <iframe class="item active" src="https://www.youtube.com/embed/L-YWi6Kmp-g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!--fin del col-6 -->
        <div class="col-sm-6 col-md-6 col-lg-6 newCol6">
          <div id="texto1">
            <h3 class="newMarginH3">Exposición de fotografía por John Wayne</h3>
            <p class="newP">
              El fotógrafo John Wayne ha ejercido su profesión durante muchos años, administra su propia empresa y ha impartido lecciones de fotografía en universidades.
            </p>
          </div>
          <div id="texto2" style="display:none;">
            <h3 class="newMarginH3">Taller sobre dibujo básico por Sebastian Brenes</h3>
            <p class="newP">
              Estudiante de la carrera de Informática y Tecnología Multimedia, influenciado por su padre (escultor) y madre (profesora de ballet), se dedicó a pulir sus habilidades en el dibujo.
            </p>
          </div>
          <div id="texto3" style="display:none;">
            <h3 class="newMarginH3">Taller sobre arduinos por John Wayne</h3>
            <p class="newP">
              Es un Database Manager, Scrum Master y Big Data: Web Mining costarricense/inglés, dedicado al desarrollo de software de análisis de datos aplicados y aprendizaje estadístico automático, y a empresas para la resolución de problemas en una pymes, mediana o grande empresa.
            </p>
          </div>
          <div id="texto4" style="display:none;">
            <h3 class="newMarginH3">Torneo de League of Legends (L.O.L)</h3>
            <p class="newP">
              Es un videojuego de género multiplayer online battle arena (MOBA) y deporte electrónico desarrollado por Riot Games para Microsoft Windows y OS X.
            </p>
          </div>
        </div><!--fin del col-6-->
      </div><!--fin del row-->

      <div class="container-fluid">
        <!--Primera linea-->
        <div class="row justify-content-center">
      		<div class="col-md-2 col-3 mr-auto newCol4">
            <a id="primero" onclick="info1()">
              <div data-target= "#carouselExampleControls" data-slide-to="0">
                <img class="img-fluid" src="../assets/images/streamsCharla.png" alt="">
              </div>
            </a>
      		</div>
          <div class="col-md-2 col-3 mr-auto newCol4">
            <a id="segundo" onclick="info2()">
              <div data-target= "#carouselExampleControls" data-slide-to="1">
                <img class="img-fluid" src="../assets/images/streamsTaller01.png" alt="">
              </div>
            </a>
          </div>
          <div class="col-md-2 col-3 mr-auto newCol4">
            <a id="tercero" onclick="info3()">
              <div data-target= "#carouselExampleControls" data-slide-to="2">
                <img class="img-fluid" src="../assets/images/streamsTaller02.png" alt="">
              </div>
            </a>
          </div>
          <div class="col-md-2 col-3 mr-auto newCol4">
            <a id="cuarto" onclick="info4()">
              <div data-target= "#carouselExampleControls" data-slide-to="3">
                <img class="img-fluid" src="../assets/images/streamsTorneo.png" alt="">
              </div>
            </a>
          </div>
    	  </div> <!--Fin del row-->
      </div>

    </section>

    <!--Sección para el link a los about de conferencistas-->
    <section>
      <div class="container-fluid">
        <h3 class="confTitulo">Conferencistas y capacitadores</h3>
        <!--Primera linea-->
        <div class="row">
      		<div class="col-md-3 col-6">
            <a id="primero" class="personaA newA" href="conferencistas-capacitadores.php">
              <img class="img-fluid" src="../assets/images/editPS03.jpg" alt="">
              <h3 class="newH3">John Wayne</h3>
            </a>
      		</div>
          <div class="col-md-3 col-6">
            <a id="segundo" class="personaA newA" href="conferencistas-capacitadores.php">
              <img class="img-fluid" src="../assets/images/editPS04.jpg" alt="">
              <h3 class="newH3">Clint Eastwood</h3>
            </a>
          </div>
          <div class="col-md-3 col-6">
            <a id="tercero" class="personaA newA" href="conferencistas-capacitadores.php">
              <img class="img-fluid" src="../assets/images/editPS01.jpg" alt="">
              <h3 class="newH3">Dayanna Jiménez</h3>
            </a>
          </div>
          <div class="col-md-3 col-6">
            <a id="cuarto" class="personaA newA" href="conferencistas-capacitadores.php">
              <img class="img-fluid" src="../assets/images/editPS02.jpg" alt="">
              <h3 class="newH3">Sebastián Brenes</h3>
            </a>
          </div>
    	  </div> <!--Fin del row-->
      </div><!--Fin container-->
    </section>

    <footer>
  		<div class="container-fluid">
  			<div class="row">
  				<div class="col-sm-12">
  					<?php @include('../includes/footer.php'); ?>
  				</div>
  			</div>
  	</footer>

    <script  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  	<script  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="../js/streams.js">

    </script>

  </body>

</html>

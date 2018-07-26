<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <title>Expomedia | Invitados</title>
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
  		<div class="col-sm-12 titlePage">
  			<h1>CONFERENCISTAS Y CAPACITADORES</h1>
  		</div>
	  </div>
  </div>

  <!--Section de los invitados con imagenes-->
  <section class="newSection">
    <div class="container-fluid">
      <!--Primera linea-->
      <div class="row">
    		<div class="col-sm newColSm">
          <a id="primero" onclick="info1()">
            <div data-target= "#carouselExampleControls" data-slide-to= "0" class="personaA" >
              <img class="img-fluid" src="../assets/images/editPS03.jpg" alt="">
              <h3 class="newH3">John Wayne</h3> 
            </div>
          </a>
    		</div>
        <div class="col-sm newColSm">
          <a id="segundo" onclick="info2()">
            <div data-target= "#carouselExampleControls" data-slide-to= "1" class="personaA">
              <img class="img-fluid" src="../assets/images/editPS04.jpg" alt="">
              <h3 class="newH3">Clint Eastwood</h3>
            </div>
          </a>
        </div>
        <div class="col-sm newColSm">
          <a id="tercero" onclick="info3()">
            <div data-target= "#carouselExampleControls" data-slide-to= "2" class="personaA">
              <img class="img-fluid" src="../assets/images/editPS01.jpg" alt="">
              <h3 class="newH3">Dayanna Jiménez</h3>
            </div>
          </a>
        </div>
        <div class="col-sm newColSm">
          <a id="cuarto" onclick="info4()">
            <div data-target= "#carouselExampleControls" data-slide-to= "3" class="personaA">
              <img class="img-fluid" src="../assets/images/editPS02.jpg" alt="">
              <h3 class="newH3">Sebastián Brenes</h3>
            </div>
          </a>
        </div>
  	  </div> <!--Fin del row-->
      <!--Segunda linea-->
      <div class="row">
        <div class="col-sm newColSm">
          <a id="quinto" onclick="info5()">
            <div data-target= "#carouselExampleControls" data-slide-to= "4" class="personaA">
              <img class="img-fluid" src="../assets/images/editPS05.jpg" alt="">
              <h3 class="newH3">Enrique Soto V.</h3>
            </div>
          </a>
        </div>
        <div class="col-sm newColSm">
          <a id="sexto" onclick="info6()">
            <div data-target= "#carouselExampleControls" data-slide-to= "5" class="personaA">
              <img class="img-fluid" src="../assets/images/editPS04.jpg" alt="">
              <h3 class="newH3">Andy Vásquez</h3>
            </div>
          </a>
        </div>
        <div class="col-sm newColSm">
          <a id="septimo" onclick="info7()">
            <div data-target= "#carouselExampleControls" data-slide-to= "6" class="personaA">
              <img class="img-fluid" src="../assets/images/editPS06.jpg" alt="">
              <h3 class="newH3">Lucas Mora C.</h3>
            </div>
          </a>
        </div>
        <div class="col-sm newColSm">
          <a id="octavo" onclick="info8()">
            <div data-target= "#carouselExampleControls" data-slide-to= "7" class="personaA">
              <img class="img-fluid" src="../assets/images/editPS06.jpg" alt="">
              <h3 class="newH3">Josefina Torres</h3>
            </div>
          </a>
        </div>
      </div><!--fin del row-->
      <!--Tercera linea-->
      <div class="row justify-content-center">
        <div class="col-sm-4 newColSm">
          <a id="noveno" onclick="info9()">
            <div data-target= "#carouselExampleControls" data-slide-to= "8" class="personaA">
              <img class="img-fluid" src="../assets/images/editPS01.jpg" alt="">
              <h3 class="newH3">Mónica Rodríguez S.</h3>
            </div>
          </a>
        </div>
      </div><!--fin del row-->
    </div><!--fin del container fluid-->
  </section>

  <!--Section con la información de los invitados-->
	<section class="newSection">
    <div class="row">
      <div class="col-md-6 marginCol6">
        <div id= "carouselExampleSlidesOnly" class= "carousel  contenedor-Slide" data-interval= "0">
          <div id= "carouselExampleControls" class= "carousel " data-interval= "0" >
            <div class= "carousel-inner">
              <!--Primera linea-->
              <div class= "carousel-item active" data-interval="0">
                <img class= "d-block w-100" src= "../assets/images/editPS03.jpg" alt= "First slide">
              </div>
              <div class= "carousel-item">
                <img class= "d-block w-100" src= "../assets/images/editPS04.jpg" alt= "Second slide">
              </div>
              <div class= "carousel-item">
                <img class= "d-block w-100" src= "../assets/images/editPS01.jpg" alt= "Third slide">
              </div>
              <div class= "carousel-item">
                <img class= "d-block w-100" src= "../assets/images/editPS02.jpg" alt= "First slide" >
              </div>
              <!--Segunda linea-->
              <div class= "carousel-item">
                <img class= "d-block w-100" src= "../assets/images/editPS05.jpg" alt= "Second slide" >
              </div>
              <div class= "carousel-item">
                <img class= "d-block w-100" src= "../assets/images/editPS04.jpg" alt= "Third slide" >
              </div>
              <div class= "carousel-item">
                <img class= "d-block w-100" src= "../assets/images/editPS06.jpg" alt= "First slide" >
              </div>
              <div class= "carousel-item">
                <img class= "d-block w-100" src= "../assets/images/editPS06.jpg" alt= "eighth slide" >
              </div>
              <!--Tercera linea-->
              <div class= "carousel-item">
                <img class= "d-block w-100" src= "../assets/images/editPS01.jpg" alt= "Third slide">
              </div>
            </div>
          </div>
        </div><!--carousel-->
      </div><!--fin del col-6-->
      <div class="col-md-6">
        <div class="contenedor-Txt">
          <div id="texto1">
            <h2 class="newH2">John Wayne - Conferencista</h2>
            <p>
              Diseñador Creativo, Fotógrafo Profesional y Productor Audiovisual costarricense/estadounidense. Ha incursionado en el área de la fotografía por más de 20 años y ha sido un fotógrafo independiente desde sus inicios.<br>
              En el año 2012 formó su propia academia JWA.CRC ®, en donde transmite de manera independiente sus conocimientos como fotógrafo profesional. Además, fue invitado especial para impartir clases y compartir sus conocimientos en universidades tanto estatales como privados en todo el país.
            </p>
            <a class="newA" href="https://universidades.cr/carreras/fotografia">Más información sobre el conferencista</a>
          </div>
          <div id="texto2" style="display:none;">
            <h2 class="newH2">Clint Eastwood - Conferencista</h2>
            <p>
              Es un Database Manager, Scrum Master y Big Data: Web Mining costarricense/inglés, dedicado al desarrollo de software de análisis de datos aplicados y aprendizaje estadístico automático (statistical machine learning) y a empresas para la resolución de problemas en una pymes, mediana o grande empresa.<br>
              También se centra en análisis avanzados, que incluyen análisis predictivos, análisis de redes sociales, análisis de texto y enfoques de análisis de big data. Creó su propia empresa en el 2013 y le brindado sus servicios a empresas como Corporación Pipasa, Florida Bebidas, Belcorp Costa Rica, entre otras.
            </p>
            <a class="newA" href="https://www.tec.ac.cr/fundatec/especializacion-big-data-specialist">Más información sobre el conferencista</a>
          </div>
          <div id="texto3" style="display:none;">
            <h2 class="newH2">Dayanna Jiménez - Conferencista</h2>
            <p>
              Cocreadora de la empresa de desarrollo de videojuegos Point Break, empresa dedicada a crear simuladores con tecnología de VR (virtual reality o realidad virtual) y juegos educativos sobre el manejo adecuado de los residuos sólidos, enseñanza sobre la contaminación sónica, enfermedades transmitidas por el mosquito Aedes aegypti (dengue, zika y chikungunya), en contra del matonismo (bullying), entre otros hacia el público meta dentro del rango de edad 7 a 15 años.
            </p>
            <a class="newA" href="http://flowlab.io/">Más información sobre la conferencista</a>
          </div>

          <div id="texto4" style="display:none;">
            <h2 class="newH2">Sebastian Brenes - Capacitador</h2>
            <p>
              Estudiante de la carrera de Informática y Tecnología Multimedia, influenciado por su padre (escultor) y madre (profesora de ballet) se dedicó a pulir sus habilidades en el dibujo. Tuvo la oportunidad de acompañar a su padre a hacer esculturas indígenas costarricense en Francia y fue invitado a dar un taller sobre dibujo en una Convención anual de anime japonés en Puntarenas y San José.
            </p>
            <a class="newA" href="https://www.facebook.com/sebastian.brenes.9">Más información sobre el capacitador</a>
          </div>

          <div id="texto5" style="display:none;">
            <h2 class="newH2">Enrique Soto V.- Capacitador</h2>
            <p>
              Es un Ingeniero de software costarricense, dedicado al desarrollo de planos para integrarlos en arduinos y raspberry pi. Comenzó como un hobby y poco a poco el conocimiento fue creciendo a tal punto que pasó de hablar sobre hardware libre a sus compañeros de trabajo a ser invitado a dar conferencias en eventos de la comunidad del software libre.
            </p>
            <a class="newA" href="https://www.hwlibre.com/">Más información sobre el capacitador</a>
          </div>

          <div id="texto6" style="display:none;">
            <h2 class="newH2">Andy Vásquez - Capacitador</h2>
            <p>
              Es un estudiante de Informática Empresarial de la Universidad de Costa Rica que se interesó como hobbie en trabajar con los arduinos porque al ser una plataforma de código abierto (open-source) basada en hardware y software podía crear prototipos flexibles y fáciles de usar para crear objetos o entornos interactivos.<br>
              Por el momento, no está trabajando en una empresa pero su nombre es conocido en la comunidad de Software Libre.
            </p>
            <a class="newA" href="https://www.facebook.com/groups/arduinocr/about/">Más información sobre el capacitador</a>
          </div>

          <div id="texto7" style="display:none;">
            <h2 class="newH2">Lucas Mora C. - Capacitador</h2>
            <p>
              Es un Máster Profesional en Computación e Informática y es egresado de la carrera de Computación con énfasis en Ingeniería de software de la Universidad de Costa Rica. Trabajó para Twitter en la parte del mantenimiento de la aplicación, Google y eventualmente creó una empresa con varios colegas de su anterior lugar de trabajo.<br>
              Se dedica a la creación de aplicativos para celular para empresas privadas, ha trabajado para instituciones públicas como asesor y en algunas ocasiones es profesor en varias universidades privadas de Costa Rica.
            </p>
            <a class="newA" href="https://www.xamarin.com">Más información sobre el capacitador</a>
          </div>

          <div id="texto8" style="display:none;">
            <h2 class="newH2">Josefina Torres - Capacitadora</h2>
            <p>
              Estudió en la Facultad de Bellas Artes como Diseñadora gráfica y trabajó para varias maquilas haciendo diseños para terceros. Eventualmente observó el potencial de las aplicaciones y estudió en varios cursos online de programación para acreditarse con el objetivo final de crear su propia empresa, Solar Baboon, de desarrollo de aplicaciones.<br>
              Al pasar de los años, la empresa también trabaja en el desarrollo de aplicaciones híbridas por las ventajas que a los usuarios y por su bajo costo de producción.
            </p>
            <a class="newA" href="https://aplicacionesmovil.com/tecnologia/desarrollo-de-aplicaciones-hibridas/">Más información sobre la capacitadora</a>
          </div>

          <div id="texto9" style="display:none;">
            <h2 class="newH2">Mónica Rodríguez S. - Capacitadora</h2>
            <p>
              Programadora egresada de la carrera de Ingeniería en Computación del Tecnológico de Costa Rica (TEC). Se dedica al frontend y backend del desarrollo de páginas web en la empresa Cisne Rojo ubicada en Alajuela. La empresa se dedica a la venta de servicios a instituciones estatales como la Municipalidad de Escazú, Instituto Nacional de la Mujer, Municipalidad de San Carlos, entre otros.
            </p>
            <a class="newA" href="https://developers.google.com/web/progressive-web-apps/">Más información sobre la capacitadora</a>
          </div>
        </div><!--fin contenedor-Txt-->
      </div><!--fin del col-6-->
    </div><!--fin del row-->


  </section>

 <!-- Footer -->
<?php @include('../includes/footer.php'); ?>
<!-- fin del footer -->

	<script  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="../js/conferen_capac.js"></script>
	<!-- <script>
	//script usado para cambiar el color de fondo del navbar
	$(window).scroll(function(){
		$(window).scroll(function(){
			if (screen.width > 768) {
				console.log('entró pc');
				if ($(this).scrollTop() > 500) {
					$('nav').addClass('rosa');
				}
				else {
					$('nav').removeClass('rosa');
				}
			}
			else{
				console.log("entró Responsive");
				if ($(this).scrollTop() > 150) {
					$('nav').addClass('rosa');
				}
				else {
					$('nav').removeClass('rosa');
				}
			}
		});
	});/*fin*/
</script> -->
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/styles.css">
	<title>ExpoMedia | Torneos</title>
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
  			<h1>TORNEOS</h1>
  		</div>
	</div>
  </div>
  
  <!-- Sección de los campeones -->
  <div class="container-fluid">
    <section>
    <div class="row">
      <div class="col-sm-12">
        <ul>
          <li class="trofeo"><img src="../assets/images/iconTrophy.png" alt="iconTrophy"></li>
          <li><h3>Campeones</h3></li>
        </ul>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-2 offset-lg-1 col-sm-6 col-md-3">
        <img src="../assets/images/torneoGanador01.png" alt="ganador01">
      </div>
      <div class="col-lg-2  col-sm-6 col-md-3">
        <p>
          TORNEO: <br>
          LEGUAGE OF LEGENDS<br>
          <br>
          NOMBRE DEL EQUIPO:<br>
          B.R.U.M.A.S
        </p>
      </div>

      <div class="col-lg-2 offset-lg-1 col-sm-6 col-md-3">
        <img src="../assets/images/torneoGanador02.png" alt="ganador02">
      </div>
      <div class="col-lg-2  col-sm-6 col-md-3">
        <p>
          TORNEO: <br>
          SUPER SMASH BROS WII U<br>
          <br>
          NOMBRE DEL GANADOR(A):<br>
          LUCÍA MORERA
        </p>
      </div>

    </div>
  </section>
  </div>
  
  <section>
    <!-- Metodo utilizado para cambiar un imagen con un select -->
    <select id="select" name="op-select">
      <option value="op0" selected>Escoge el torneo</option>
      <option value="op1">League of Legends</option>
      <option value="op2">Super Smash Bros</option>
    </select>
    <br><br>
    <!--
    <img id="imageToSwap" class="profile" src="img/torneoLoLGif.gif">
    -->
    <div class="op1 tournament">
        <ul class="round round-1">
          <li class="spacer"></li>
          <li class="game">
            <div class="player winner">
                ROJO ALPHA
            </div>
            <div class="player loser">
              BLACK DEATH
            </div>
          </li>
          <li class="spacer"></li>
          <li class="game">
            <div class="player loser">
              BLUE RAMUE
            </div>
            <div class="player winner">
              UNICORNEO DEL DESIERTO
            </div>
          </li>
          <li class="spacer"></li>
          <li class="game">
            <div class="player winner">
              BLUE HUNTERS
            </div>
            <div class="player loser">
              LOS MAMOLOS
            </div>
          </li>
          <li class="spacer"></li>
          <li class="game">
            <div class="player winner">
              B.R.U.M.A.S
            </div>
            <div class="player loser">
              EQUIPIO RUBÍ
            </div>
          </li>
          <li class="spacer"></li>
        </ul>
        <ul class="offset">
          <li class="spacer"></li>
          <li class="square"></li>
          <li class="spacer"></li>
          <li class="square"></li>
          <li class="spacer"></li>
        </ul>
        <ul class="offset">
          <li class="spacer"></li>
          <li class="line"></li>
          <li class="spacer"></li>
          <li class="line"></li>
          <li class="spacer"></li>
        </ul>
        <ul class="round round-2">
          <li class="spacer"></li>
          <li class="game">
            <div class="player winner">
              ROJO ALPHA
            </div>
            <div class="player loser">
              UNICORNEO DEL DESIERTO
            </div>
          </li>
          <li class="spacer"></li>
          <li class="game">
            <div class="player loser">
              BLUE HUNTERS
            </div>
            <div class="player winner">
              B.R.U.M.A.S
            </div>
          </li>
          <li class="spacer"></li>
        </ul>
        <ul class="offset">
          <li class="spacer"></li>
          <li class="square" style="height: 120px;"></li>
          <li class="spacer"></li>
        </ul>
        <ul class="offset">
          <li class="spacer"></li>
          <li class="line"></li>
          <li class="spacer"></li>
        </ul>
        <ul class="round round-3">
          <li class="spacer"></li>
          <li class="game">
            <div class="player loser">
              ROJO ALPHA
            </div>
            <div class="player winner">
              B.R.U.M.A.S
            </div>
          </li>
          <li class="spacer"></li>
        </ul>
    </div>
    <div class="op2 tournament">
        <ul class="round round-1">
          <li class="spacer"></li>
          <li class="game">
            <div class="player winner">
              VÍCTOR CABRERA
            </div>
            <div class="player loser">
              FRANCISCO FUENTES
            </div>
          </li>
          <li class="spacer"></li>
          <li class="game">
            <div class="player loser">
              CARLOS UGARTE
            </div>
            <div class="player winner">
              ISABEL CESPEDES
            </div>
          </li>
          <li class="spacer"></li>
          <li class="game">
            <div class="player winner">
              MÓNICA BATISTA
            </div>
            <div class="player loser">
              DOLORES IVARS
            </div>
          </li>
          <li class="spacer"></li>
          <li class="game">
            <div class="player winner">
              LUCÍA MORERA
            </div>
            <div class="player loser">
              EDUARDO BAENA
            </div>
          </li>
          <li class="spacer"></li>
        </ul>
        <ul class="offset">
          <li class="spacer"></li>
          <li class="square"></li>
          <li class="spacer"></li>
          <li class="square"></li>
          <li class="spacer"></li>
        </ul>
        <ul class="offset">
          <li class="spacer"></li>
          <li class="line"></li>
          <li class="spacer"></li>
          <li class="line"></li>
          <li class="spacer"></li>
        </ul>
        <ul class="round round-2">
          <li class="spacer"></li>
          <li class="game">
            <div class="player loser">
              VÍCTOR CABRERA
            </div>
            <div class="player winner">
              ISABEL CESPEDES
            </div>
          </li>
          <li class="spacer"></li>
          <li class="game">
            <div class="player loser">
              MÓNICA BATISTA
            </div>
            <div class="player winner">
              LUCÍA MORERA
            </div>
          </li>
          <li class="spacer"></li>
        </ul>
        <ul class="offset">
          <li class="spacer"></li>
          <li class="square" style="height: 120px;"></li>
          <li class="spacer"></li>
        </ul>
        <ul class="offset">
          <li class="spacer"></li>
          <li class="line"></li>
          <li class="spacer"></li>
        </ul>
        <ul class="round round-3">
          <li class="spacer"></li>
          <li class="game">
            <div class="player loser">
              ISABEL CESPEDES
            </div>
            <div class="player winner">
              LUCÍA MORERA
            </div>
          </li>
          <li class="spacer"></li>
        </ul>
    </div>
  </section>
  	
  


  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script>
      /*funcion para mostrar/esconder el div tournament con el select*/
  $(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".tournament").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".tournament").hide();
            }
        });
    }).change();
  });

  </script>
</body>
</html>
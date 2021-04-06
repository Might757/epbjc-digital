<?php
    session_start();
    include_once('database/dataAccess.php');
    $da = new dataAccess();  
?>
<!doctype php>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">
    <link href="bootstrap/css/homepage.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <title>EPBJC Digital</title>
  </head>
  <body>
    <div class="container-fluid">
    	<div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10"> 
            <div class="selectCourse">
                <h1 class="bigText">Se quiseres aceder ao conteúdo, por favor, <h1 class="bigTextS">seleciona o teu curso</h1></h1>
                <div class="custom-select-wrapper">
                  <div class="custom-select">
                      <div class="custom-select__trigger"><span style="opacity: 0.7">Selecionar curso...</span>
                          <div class="arrow"></div>
                      </div>
                      <div class="custom-options">
                        <span class="custom-option selected" data-value="default"></span>
                          <a href="PSI/psi.php"><span class="custom-option" data-value="GPSI" >Gestão e Programação de Sistemas Informáticos</span></a>
                          <a href="ASC/asc.php"><span class="custom-option" data-value="ASC">Animação Sociocultural(Turística, Desportiva e de Apoio à Infância)</span></a>
                          <a href="COM/com.php"><span class="custom-option" data-value="CMRPP">Comunicação, Marketing, Relações Públicas e Publicidade</span></a>
                          <a href="TIG/tig.php"><span class="custom-option" data-value="TIG">Técnico de Informática de Gestão</span></a>
                      </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <p class="textProfessor">É um professor?<a href="professorPage.php" class="aProfessor"> Clique aqui para inserir o seu código.</a></p>
        </div>
      </div>
      <div class="row"> 
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
          <img class="homeEpbjc"src="./img/epbjc-institucional.png"></img>
        </div>
        <div class="col-lg-4">
        </div>
      </div>
        <div class="loader-wrapper">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>
    </div>

    <script src="bootstrap/js/jquery.min.js" ></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/style.js" ></script>
    <script type="text/javascript">
      window.addEventListener("load", function () {
          const loader = document.querySelector(".loader-wrapper");
          loader.className += " hidden"; // class "loader hidden"
      });
    </script>
  </body>
</html>
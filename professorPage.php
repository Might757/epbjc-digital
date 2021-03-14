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
    <link href="bootstrap/css/professorPage.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <title>EPBJC Digital</title>
  </head>
  <body>
    <div class="container-fluid">
    	<div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10"> 
            <div style="margin-top:150px">
                <h1 class="bigText">Se quiser aceder ao conteúdo, por favor, <h1 class="bigTextS">insira o seu código</h1></h1>
                <form>
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Código do professor" id="professorCode">
                        <button class="btn btn-outline-secondary" type="submit" id="sendProfCode"><i class='bx bxs-send'></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-1">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <p class="textProfessor">É um aluno? <a href="index.php" class="aProfessor">Clique aqui para selecionar o seu curso.</a></p>
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
<?
//Validando se o usuario já fez login
require_once "validando_acesso.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" src="https://image.flaticon.com/icons/svg/2921/2921284.svg">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="style_home.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">

  <title>Menu</title>
</head>

<body>
  <div class="d-flex" id="wrapper">
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Seu Menu de Ideias</div>
      <div class="list-group list-group-flush">
        <a href="criar_ideia.php" class="list-group-item list-group-item-action bg-light">Criar Uma Ideia</a>
        <a href="consultar_ideia.php" class="list-group-item list-group-item-action bg-light">Ver Suas Ideias</a>
      </div>
    </div>
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom justify-content-between">
        <button class="btn btn-info" id="menu-toggle">User Menu</button>
         <ul class="navbar-nav">
          <li class="nav-item">
              <a href="logoff.php" class="nav-link">
              SAIR
              </a>
          </li>
      </ul>
      </nav>
      <div class="container-fluid">
        <p class="text-center display-1" >Sejá bem vindo! <br> <?=$_SESSION['nome']?></p>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
      </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
</body>

</html>
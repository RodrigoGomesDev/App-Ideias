<?php
  //Se o usuario não for autenticado, volte para página de login com um erro
  session_start();
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
    header('Location: index.php?login=error');
  }
?>
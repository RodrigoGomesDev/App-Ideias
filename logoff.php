<?php

session_start();
//Destruindo a sessão e voltando para a pagina de login
session_destroy();
header('Location: index.php');

?>
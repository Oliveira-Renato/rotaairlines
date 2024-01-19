<?php

$url = strtoupper($_GET['url']);

if ($url == 'CADASTROUSUARIO') {
  require_once 'view/cadastro.php';
} else if ($url == "REGISTER") {
  require_once "controller/UserController.php";
  $controller = new UserController();
  $controller->process('C'); // Correção: alterado de proccess para process
}
?>
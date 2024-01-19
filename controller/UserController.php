<?php
include_once("model/User.php");

class UserController
{

  public function process($action)
  {
    if ($action == 'C') {
      $newUser = new User();
      $newUser->setNomeUsuario($_POST['nomeUsuario']);
      $newUser->setEmail($_POST['email']);
      $newUser->setSenha($_POST['senha']);
      $newUser->setNumTel($_POST['numeroCelular']);
      $newUser->setDtaNasc($_POST['dataNasc']);
      $newUser->setPaisNasc($_POST['paisUsuario']);
      $newUser->setCpf($_POST['cpf']);
      $newUser->setSexo($_POST['sexo']);

      $newUser->registerUser();
    }
  }
}
?>
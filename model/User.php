<?php
include_once("model/Connection.php");

class User
{
  private $idUsuario;
  private $nomeUsuario;
  private $email;
  private $dtaNasc;
  private $paisNasc;
  private $numTel;
  private $cpf;
  private $senha;
  private $sexo;


  public function registerUser()
  {
    try {
      $conn = Connection::connecting();
    } catch (PDOException $e) {
      echo 'Connection failed!' . $e->getMessage();
    }
  }




  /**
   * @return mixed
   */
  public function getNomeUsuario()
  {
    return $this->nomeUsuario;
  }

  /**
   * @param mixed $nomeUsuario
   * @return  self
   */
  public function setNomeUsuario($nomeUsuario)
  {
    $this->nomeUsuario = $nomeUsuario;
    return $this;
  }

}














?>
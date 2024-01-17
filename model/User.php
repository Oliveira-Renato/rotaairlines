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
      $sql = $conn->prepare("INSERT INTO tabelausuario(nomeUsuario,:email,:dtaNasc, paisNasc, numTel, cpf, senha, sexo) VALUES (:nomeUsuario,:email,:dataNasc,:paisUsuario,:numeroCelular,:cpf,:senha,:sexo)");

      $sql->bind_param("nomeUsuario", $this->nomeUsuario);
      $sql->bind_param("email", $this->email);
      $sql->bind_param("dataNasc", $this->dtaNasc);
      $sql->bind_param("paisUsuario", $this->paisNasc);
      $sql->bind_param("numeroCelular", $this->numTel);
      $sql->bind_param("cpf", $this->cpf);
      $sql->bind_param("senha", $this->senha);
      $sql->bind_param("sexo", $this->sexo);

      $sql->execute();

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
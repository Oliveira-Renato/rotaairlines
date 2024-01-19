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
      $sql = $conn->prepare("INSERT INTO tabelausuario(nomeUsuario, email, dtaNasc, paisNasc, numTel, cpf, senha, sexo) VALUES (:nomeUsuario, :email, :dataNasc, :paisUsuario, :numeroCelular, :cpf, :senha, :sexo)");

      $sql->bindParam(":nomeUsuario", $this->nomeUsuario);
      $sql->bindParam(":email", $this->email);
      $sql->bindParam(":dataNasc", $this->dtaNasc);
      $sql->bindParam(":paisUsuario", $this->paisNasc);
      $sql->bindParam(":numeroCelular", $this->numTel);
      $sql->bindParam(":cpf", $this->cpf);
      $sql->bindParam(":senha", $this->senha);
      $sql->bindParam(":sexo", $this->sexo);

      $sql->execute();
    } catch (PDOException $e) {
      echo 'Connection failed!' . $e->getMessage();
    }
  }

  /**
   * user name
   * @return mixed
   */
  public function getNomeUsuario()
  {
    return $this->nomeUsuario;
  }

  /**
   * @param mixed $nomeUsuario
   * @return self
   */
  public function setNomeUsuario($nomeUsuario)
  {
    $this->nomeUsuario = $nomeUsuario;
    return $this;
  }

  /**
   * user email
   * @return mixed
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * @param mixed $email
   * @return self
   */
  public function setEmail($email)
  {
    $this->email = $email;
    return $this;
  }

  /**
   * user birth date
   * @return mixed
   */
  public function getDtaNasc()
  {
    return $this->dtaNasc;
  }

  /**
   * @param mixed $dtaNasc
   * @return self
   */
  public function setDtaNasc($dtaNasc)
  {
    $this->dtaNasc = $dtaNasc;
    return $this;
  }

  /**
   * user origin country
   * @return mixed
   */
  public function getPaisNasc()
  {
    return $this->paisNasc;
  }

  /**
   * @param mixed $paisNasc
   * @return self
   */
  public function setPaisNasc($paisNasc)
  {
    $this->paisNasc = $paisNasc;
    return $this;
  }

  /**
   * user mobile number
   * @return mixed
   */
  public function getNumTel()
  {
    return $this->numTel;
  }

  /**
   * @param mixed $numTel
   * @return self
   */
  public function setNumTel($numTel)
  {
    $this->numTel = $numTel;
    return $this;
  }

  /**
   * user cpf
   * @return mixed
   */
  public function getCpf()
  {
    return $this->cpf;
  }

  /**
   * @param mixed $cpf
   * @return self
   */
  public function setCpf($cpf)
  {
    $this->cpf = $cpf;
    return $this;
  }

  /**
   * user password
   * @return mixed
   */
  public function getSenha()
  {
    return $this->senha;
  }

  /**
   * @param mixed $senha
   * @return self
   */
  public function setSenha($senha)
  {
    $this->senha = $senha;
    return $this;
  }

  /**
   * user sexo
   * @return mixed
   */
  public function getSexo()
  {
    return $this->sexo;
  }

  /**
   * @param mixed $sexo
   * @return self
   */
  public function setSexo($sexo)
  {
    $this->sexo = $sexo;
    return $this;
  }


}














?>
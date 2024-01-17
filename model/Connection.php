<?php

//Classe Connection
class Connection
{
  public static function connecting()
  {
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
      $conn = new PDO("mysql:host=$servername;dbname=rotaairlines", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Success Connection!";
      return $conn;
    } catch (PDOException $e) {
      //throw $th;
      echo "Connection failed!" . $e->getMessage();
      return false;
    }
  }
}




?>
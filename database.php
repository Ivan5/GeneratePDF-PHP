<?php

class Database {
  private $dbHost = '127.0.0.1';
  private $dbName = 'escuela';
  private $username = 'root';
  private $password = '';
  private $charset = 'utf8mb4';


  function connect(){
    try {
      $conexion = "mysql:host=".$this->dbHost.";dbname=".$this->dbName;
      $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
      ];

      $pdo = new PDO($conexion,$this->username,$this->password,$options);
      return $pdo;
    } catch (PDOException $e) {
      print_r('Error de conexion: '.$e->getMessage());
    }
  }
}
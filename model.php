<?php
include_once 'database.php';

class Model extends Database {
  function getAll() {
    $persona = array();
    $persona['items'] = array();

    $query = $this->connect()->query('select * from persona');

    while($row = $query->fetch()){
      array_push($persona['items'], array(
        'id' => $row['id'],
        'clave' => $row['clave'],
        'nombre' => $row['nombre'],
        'domicilio' => $row['domicilio'],
        'telefono' => $row['telefono'],
        'correo' => $row['correo'],
        'nacimiento' => $row['nacimiento'],
        'genero'=> $row['genero']
      ));
    }

    return $persona;
  }
}
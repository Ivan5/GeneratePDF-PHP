<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once 'model.php';

$persona = new Model();
$lista = $persona->getAll();

//var_dump($lista);

$html = '
  <h1>Tabla de Alumnos</h1>
  <table>
    <tr>
      <td>ID</td><td>Clave</td><td>Nombre</td><td>Domicilio</td><td>Telefono</td><td>Correo</td><td>Nacimiento</td><td>Genero</td>
    </tr>
  
';

foreach($lista['items'] as $item){
  $html.='<tr>
            <td>'.$item['id'].'</td>
            <td>'.$item['clave'].'</td>
            <td>'.$item['nombre'].'</td>
            <td>'.$item['domicilio'].'</td>
            <td>'.$item['telefono'].'</td>
            <td>'.$item['correo'].'</td>
            <td>'.$item['nacimiento'].'</td>
            <td>'.$item['genero'].'</td>
          </tr>';
}
$html.='</table>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();

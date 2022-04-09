<?php
$mysqli = new mysqli("localhost","root","","Pyr");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Error interno al conectar con la base de datos.";
  exit();
}
?>
<?php
  # Llamada al Modelo
  require_once 'models/Person_Model.php';
  $person = new Person_Model();
  $data = $person -> get_people();
  echo '<pre>'; var_dump( $data ); echo '<pre>';
?>

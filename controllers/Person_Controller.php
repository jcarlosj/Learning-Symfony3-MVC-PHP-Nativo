<?php
  class Person_Controller {

    # Constructor
    public function __construct() {
      # Llamada al Modelo
      require_once 'models/Person_Model.php';
      $person = new Person_Model();
      $data = $person -> get_people();

      # Llamada a la Vista
      require_once 'views/people-view.phtml';  
    }
  }
?>

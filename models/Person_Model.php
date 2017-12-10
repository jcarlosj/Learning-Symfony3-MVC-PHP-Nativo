<?php
  class Person_Model {
    # Atributos
    private $db,
            $people;

    # Constructor
    public function __construct() {
      $this -> db = DataBase :: connect();
      $this -> people = array();
    }

    # Obtener todos los registros (Método)
    public function get_people() {
      $result_set = $this -> db -> query(
        'SELECT id, nombres, apellidos, edad FROM personas;'
      ) or die(
        $this -> db -> error.__LINE__
      );

      while( $row = $result_set -> fetch_assoc() ) {
        $this -> people[] = $row;
      }

      return $this -> people;
    }

  }
?>

<?php
  class DataBase {
    # Métodos
    public static function connect() {
      $connect = mysqli_connect( 'localhost', 'root', 'ECTZ029478', 'db_mvc-php-nativo' );
      $connect -> query( 'SET NAMES "utf8"' );

      if (!$connect) {
          echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
          echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
          echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
          exit;
      }

      echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
      echo "Información del host: " . mysqli_get_host_info($connect) . PHP_EOL;

      mysqli_close($connect);
    }
  }

  /* Prueba */
  $db = new DataBase();
  $db -> connect();
?>

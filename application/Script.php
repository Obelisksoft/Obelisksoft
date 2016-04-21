<?php
define('PATH_SEP',DS);
define('HOME',ROOT);
define('HOME_PATH', HOME . 'application' . PATH_SEP);
require_once HOME_PATH . 'Config.php';

$usuario=DB_USER;
$password=DB_PASS;

try{

    $conn = new PDO('mysql:host=localhost;dbname=myfile', $usuario, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

    echo "ERROR: " . $e->getMessage();

}

if (in_array('-v', $argv) || in_array('-V', $argv) || in_array('--version', $argv))
  {
    printf("ObeliskSoft version %s\n", APP_VERSION );
    exit(0);
  }

?>
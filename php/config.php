<?php
$servername = "192.168.1.5";
$username = "estagiario_sga";
$password="Spad3sgA#2021";
try {
  $conn = new PDO("mysql:host=$servername;dbname=gerald_estagio", $username,$password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "incluempleo";

$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_error){
    header('Content-Type: application/json');
    die(json_encode(["status" => "error", "mensaje" => "Error de conexión de la BD"]));
}

$conn->set_charset("utf8mb4");
?>
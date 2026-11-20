<?php

include '../config/conexion.php';
header('Content-Type: application/json');

$datos = json_decode(file_get_contents("php://input"), true);

if (!isset($datos['nombre'], $datos['email'], $datos['password'], $datos['rol'])) {
    echo json_encode(["status" => "error", "mensaje" => "Faltan datos obligatorios."]);
    exit;
}

$nombre = $datos['nombre'];
$email = $datos['email'];
$password = $datos['password'];
$rol = $datos['rol'];

if (!in_array($rol, ['usuario', 'empresa'])) {
    echo json_encode(["status" => "error", "mensaje" => "Tipo de cuenta inválido."]);
    exit;
}

$passwordHash = password_hash($password, PASSWORD_BCRYPT);

$stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, password, rol) VALUES (?,?,?,?);");
$stmt->bind_param("ssss", $nombre, $email, $passwordHash, $rol);

if ($stmt->execute()) {
    echo json_encode(["status" => "ok", "mensaje" => "Usuario registrado exitosamente."]);
} else {
    if ($conn->errno == 1062) {
        echo json_encode(["status" => "error", "mensaje" => "Este correo ya esta registrado."]);
    } else {
        echo json_encode(["status" => "error", "mensaje" => "Error al registrar: " . $conn->error]);
    }
}

exit();
?>
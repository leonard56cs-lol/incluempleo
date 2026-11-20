<?php
include '../config/conexion.php';
header('Content-Type: application/json');
session_start();

$datos = json_decode(file_get_contents("php://input"), true);

if (!isset($datos['email'], $datos['password'])) {
    echo json_encode(["status" => "error", "mensaje" => "Faltan datos."]);
    exit;
}

$email = $datos['email'];
$password = $datos['password'];


$stmt = $conn->prepare("SELECT id, nombre, password, rol FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 0) {
    echo json_encode(["status" => "error", "mensaje" => "Credenciales incorrectas."]);
    exit;
}

$usuario = $resultado->fetch_assoc();

if (password_verify($password, $usuario['password'])) {
    // Guardar en sesión
    $_SESSION['user_id'] = $usuario['id'];
    $_SESSION['user_nombre'] = $usuario['nombre'];
    $_SESSION['user_rol'] = $usuario['rol'];

    echo json_encode([
        "status" => "ok", 
        "mensaje" => "Login exitoso.",
        "rol" => $usuario['rol'],
        "nombre" => $usuario['nombre']
    ]);
} else {
    echo json_encode(["status" => "error", "mensaje" => "Contraseña incorrecta."]);
}

exit();
?>
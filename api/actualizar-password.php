<?php
include '../config/conexion.php';
header('Content-Type: application/json');

$datos = json_decode(file_get_contents("php://input"), true);

if (!isset($datos['token'], $datos['password'])) {
    echo json_encode(["status" => "error", "mensaje" => "Faltan datos."]);
    exit;
}

$token = $datos['token'];
$password = $datos['password'];

$stmt = $conn->prepare("SELECT usuario_id FROM reset_tokens WHERE token = ? AND expiracion > NOW()");
$stmt->bind_param("s", $token);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 0) {
    echo json_encode(["status" => "error", "mensaje" => "El token es inválido o ha expirado."]);
    exit;
}

$row = $resultado->fetch_assoc();
$usuario_id = $row['usuario_id'];

$passwordHash = password_hash($password, PASSWORD_BCRYPT);

$stmt2 = $conn->prepare("UPDATE usuarios SET password = ? WHERE id = ?");
$stmt2->bind_param("si", $passwordHash, $usuario_id);
$stmt2->execute();

$stmt3 = $conn->prepare("DELETE FROM reset_tokens WHERE token = ?");
$stmt3->bind_param("s", $token);
$stmt3->execute();

echo json_encode(["status" => "ok", "mensaje" => "Contraseña actualizada."]);
exit();
?>
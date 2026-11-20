<?php
include '../config/conexion.php';
header('Content-Type: application/json');

$datos = json_decode(file_get_contents("php://input"), true);

if (!isset($datos['email'])) {
    echo json_encode(["status" => "error", "mensaje" => "Falta el correo."]);
    exit;
}

$email = $datos['email'];

$stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 0) {
    echo json_encode(["status" => "error", "mensaje" => "El correo no está registrado."]);
    exit;
}

$usuario = $resultado->fetch_assoc();

$token = bin2hex(random_bytes(16)); 
$expiracion = date('Y-m-d H:i:s', strtotime('+1 hour')); // Expira en 1 hora

$stmt2 = $conn->prepare("INSERT INTO reset_tokens (usuario_id, token, expiracion) VALUES (?, ?, ?)");
$stmt2->bind_param("iss", $usuario['id'], $token, $expiracion);
$stmt2->execute();

$link = "reset.html?token=" . $token;
echo json_encode(["status" => "ok", "link" => $link]);

exit();
?>
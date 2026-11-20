<!-- includes/header.php -->
 <!DOCTYPE html>
 <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IncluEmpleo - Más oportunidades, sin barreras</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>

    <div class="accessibility-bar" role="toolbar" aria-label="Herrramientas de accesibilidad">
        <div class="container-bar">
            <span>Herrramientas de accesibilidad:</span>
            <button id="btn-contrast" aria-label="Activar alto contraste">🌗 Alto Contraste</button>
            <button id="btn-speak" aria-label="Activar lector de texto">🔊 Leer Texto</button>
        </div>
    </div>

    <header>
        <div class="logo">
            <h1>IncluEmpleo</h1>
            <p>Más oportunidades, sin barreras</p>
        </div>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IncluEmpleo - Más oportunidades, sin barreras</title>
    <link rel="stylesheet" href="css/styles.css"> 
</head>
<body>

<div class="accessibility-bar" role="toolbar" aria-label="Herramientas de accesibilidad">
    <!-- ... -->
</div>

<header>
    <div class="logo">
        <a href="index.php" style="text-decoration: none; color: inherit;">
            <h1>IncluEmpleo</h1>
            <p>Más oportunidades, sin barreras</p>
        </a>
    </div>
    
    <nav aria-label="Menú principal">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="vacantes.php">Vacantes</a></li>
            <li><a href="empresas.php">Empresas</a></li>
            <li><a href="ayuda.php">Ayuda</a></li>
            
            <?php if (isset($_SESSION['user_id'])): ?>
                <!-- MENÚ PARA USUARIOS LOGUEADOS -->
                <?php if ($_SESSION['user_rol'] === 'empresa'): ?>
                    <li><a href="dashboard-empresa.php" style="font-weight: bold; color: #ffeb3b;">Panel de Empresa</a></li>
                <?php else: ?>
                    <li><a href="perfil.php" style="font-weight: bold; color: #ffeb3b;">Mi Perfil</a></li>
                <?php endif; ?>
                <li><a href="api/logout.php" style="color: #ff9999;">Cerrar Sesión (<?php echo htmlspecialchars($_SESSION['user_nombre']); ?>)</a></li>           
            <?php else: ?>
                <li><a href="login.php">Iniciar Sesión</a></li>
                <li><a href="registro.html">Registrarse</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
<main>
    </header>
    </body>
 </html>
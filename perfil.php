<?php

include 'includes/proteger.php';
include 'includes/header.php'; 
?>

<main>
    <div class="form-container" style="max-width: 800px; text-align: center;">
        <h2 style="color: var(--color-primario);">Bienvenido a tu Perfil</h2>
        <p style="font-size: 1.2rem; margin-top: 1rem;">
            Hola, <strong><?php echo htmlspecialchars($_SESSION['user_nombre']); ?></strong>
        </p>
        <p>Rol actual: <strong style="color: var(--color-secundario);"><?php echo strtoupper($_SESSION['user_rol']); ?></strong></p>

        <div style="margin-top: 2rem; display: flex; justify-content: center; gap: 1rem;">
            <button class="btn" style="width: auto;">Mis Postulaciones</button>
            <a href="api/logout.php" class="btn" style="width: auto; background-color: #d32f2f;">Cerrar Sesión</a>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
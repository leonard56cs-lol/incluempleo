<?php
include 'includes/proteger.php'; // Protegemos la ruta
include 'includes/header.php'; 
?>

<main>
    <div class="form-container" style="max-width: 800px; text-align: center;">
        <h2 style="color: var(--color-primario);">Panel de Empresa</h2>
        <p style="font-size: 1.2rem; margin-top: 1rem;">
            Bienvenido, <strong><?php echo htmlspecialchars($_SESSION['user_nombre']); ?></strong>
        </p>
        <p>Desde aquí puedes gestionar tus vacantes.</p>

        <div style="margin-top: 2rem; display: flex; justify-content: center; gap: 1rem;">
            <button class="btn" style="width: auto;">Publicar Nueva Vacante</button>
            <a href="api/logout.php" class="btn" style="width: auto; background-color: #d32f2f;">Cerrar Sesión</a>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
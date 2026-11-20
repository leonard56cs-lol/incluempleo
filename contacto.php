<?php
include 'includes/header.php';
?>

<section style="max-width: 600px; margin: 0 auto; padding: 2rem;">
    <h2 style="color: var(--color-primario); text-align: center;">Contáctanos</h2>
    <p style="text-align: center; margin-bottom: 1.5rem;">¿Tienes dudas o sugerencias? Escribenos.</p>

    <form class="form-container" style="margin-top: 0;">
        <div class="form-group">
            <label for="nombre-contacto">Nombre:</label>
            <input type="text" id="nombre-contacto" required>
        </div>
        <div class="form-group">
            <label for="email-contacto">Correo:</label>
            <input type="email" id="email-contacto" required>
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" rows="4" style="width: 100%; padding: 0.75rem; border: 2px solid #ccc; border-radius: 4px; font-family: var(--fuente-base);" required></textarea>
        </div>
        <button type="submit" class="btn">Enviar Mensaje</button>
    </form>
</section>

<?php
include 'includes/footer.php'
?>
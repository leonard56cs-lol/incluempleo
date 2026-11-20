<?php
include 'includes/header.php';
?>

<section style="max-width: 800px; margin: 0 auto; padding: 2rem;">
    <h2 style="color: var(--color-primario); text-align: center;">Centro de Ayuda</h2>
    <p style="text-align: center; margin-bottom: 2rem;">Encuentra respuestas a las preguntas frecuentes sobre el uso de IncluEmpleo.</p>

    <details style="background: white; padding: 1rem; border-radius: 8px; margin-bottom: 1rem; box-shadow: 0 2px 5px rgba(0,0,0,0.1); cursor: pointer;">
        <summary style="font-weight: bold; color: var(--color-primario);">¿Cómo puedo registrarme como persona con discapacidad?</summary>
        <p style="margin-top: 1rem;">Dirígete a la sección "Registrarse", selecciona "Busco Empleo" y completa tus datos. El sistema te guiará paso a paso.</p>
    </details>

    <details style="background: white; padding: 1rem; border-radius: 8px; margin-bottom: 1rem; box-shadow: 0 2px 5px rgba(0,0,0,0.1); cursor: pointer;">
        <summary style="font-weight: bold; color: var(--color-primario);">¿Cómo publico una vacante si soy empresa?</summary>
        <p style="margin-top: 1rem;">Regístrate como "Empresa". Una vez dentro de tu panel, podrás publicar, editar y desactivar tus vacantes.</p>
    </details>

    <div style="text-align: center; margin-top: 2rem;">
        <p>¿No encuentras lo que buscas?</p>
        <a href="contacto.php" class="btn" style="width: auto; padding: 0.75rem 2rem;">Contáctanos</a>
    </div>
</section>

<?php
include 'includes/footer.php';
?>
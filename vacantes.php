<?php
include 'includes/header.php';
?>

<section style="text-align: center; padding: 2rem;">
    <h2 style="color: var(--color-primario);">Vacantes Disponibles</h2>
    <p>Aquí se mostrarán las oportunidades laborales inclusivas.</p>

    <div style="max-width: 600px; margin: 2rem auto;">
        <input type="text" placeholder="Buscar por puesto, empresa o ubicación..."
        style="width: 100%; padding: 0.75rem; border: 2px solid #ccc; border-radius: 4px;">

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 2rem; text-align: left;">
            <div style="background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: var(--color-primario);">Desarrollador Web Junior</h3>
                <p><strong>Empresa:</strong>TechInclusión S.A.</p>
                <p><strong>Ubicación:</strong>Remoto</p>
                <p>Buscamos un desarrollador con conocimientos en HTML, CSS y JavaScript. Espacio de trabajo adaptado.</p>
                <button class="btn" style="margin-top: 1rem;">Ver detalles</button>
            </div>
            <div style="background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 style="color: var(--color-primario);">Atención al Cliente</h3>
                <p><strong>Empresa:</strong>Comercio Justo</p>
                <p><strong>Ubicación:</strong>CDMX</p>
                <p>Horario flexible. Se ofrece capaciatción y adaptación del espacio para personas con discapacidad motora.</p>
                <button class="btn" style="margin-top: 1rem;">Ver detalles</button>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>
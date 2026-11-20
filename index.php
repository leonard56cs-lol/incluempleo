<?php
include 'includes/header.php';
?>

<?php if (isset($_SESSION['user_id'])): ?>
    <div style="background-color: #e3f2fd; padding: 1rem; text-align: center; border-radius: 8px; margin-bottom: 1rem; border-left: 5px solid var(--color-primario);">
        <h3 style="color: var(--color-primario); margin: 0;">
            ¡Hola de nuevo, <?php echo htmlspecialchars($_SESSION['user_nombre']); ?>! 👋
        </h3>
        <p style="margin: 0.5rem 0 0 0;">Nos alegra verte por aquí. ¿Buscamos una nueva oportunidad hoy?</p>
    </div>
<?php endif; ?>

<section class="hero" style="text-align: center; padding: 3rem 1rem;">
    <h2 style="color: var(--color-primario); font-size: 2rem; margin-bottom: 1rem;">
        Encuentra tu próxima oportunidad laboral
    </h2>
    <p style="font-size: 1.2rem; margin-bottom: 2rem;">
        Una bolsa de trabajo inclusiva diseñada para personas con discapacidad, adultos mayores,
        migrantes y jovenes en situación de vulnerabilidad.
    </p>

    <div style="max-width: 600px; margin: 0 auto; display: flex; gap: 10px;">
        <input type="text" placeholder="Buscar vacantes por palabra clave..."
        style="flex: 1; padding: 0.75rem; border: 2px solid #ccc; border-radius: 4px; font-size: 1rem;">
        <button class="btn" style="width: auto;">Buscar</button> 
    </div>
</section>

<section style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap:2rem; margin-top: 3rem;">
    <div style="background: white; padding: 1.5rem; border-radius: 8px; text-align: center; box-shadow: 0 2px 5px rgba(0,0,0,0,1);">
        <h3 style="color: var(--color-primario);">♿ Accesibilidad Garantizada</h3>
        <p>Interfaz diseñada para lectores de pantalla, navegación por teclado y alto contraste</p>
    </div>
    <div style="background: white; padding: 1.5rem; border-radius: 8px text-align: center; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <h3 style="color: var(--color-primario);">🤝 Inclusión Laboral</h3>
        <p>Empresas comprometidas con la equidad y la adaptación de espacios de trabajo.</p>
    </div>
    <div style="background: white; padding: 1.5rem; border-radius: 8px; text-align: center; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <h3 style="color: var(--color-primario);">🌍 Autonomía Económica</h3>
        <p>Herraminetas reales para la autosuficiencia de colectivos marginados.</p>
    </div>
</section>

<?php
include 'includes/footer.php';
?>

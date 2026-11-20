<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - IncluEmpleo</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <!-- Header simplificado para el formulario -->
    <header style="justify-content: center;">
        <div class="logo">
            <h1>IncluEmpleo</h1>
        </div>
    </header>

    <main>
        <div class="form-container">
            <h2>Iniciar Sesión</h2>
            
            <form id="formLogin" novalidate>
                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" name="email" required placeholder="ejemplo@correo.com">
                </div>

                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required minlength="6">
                </div>

                <button type="submit" class="btn">Entrar</button>
                
                <a href="recuperar.html" class="link-ayuda" style="margin-top: 1rem; font-weight: bold;">
                    ¿Olvidaste tu contraseña?
                </a>
                
                <hr style="margin: 1.5rem 0; border: 0; border-top: 1px solid #ccc;">
                
                <p style="text-align: center; font-size: 0.9rem;">¿No tienes cuenta?</p>
                <a href="registro.html" class="btn" style="background-color: transparent; color: var(--color-primario); border: 2px solid var(--color-primario);">
                    Crear una cuenta nueva
                </a>
            </form>
        </div>
    </main>

    <script>
document.getElementById('formLogin').addEventListener('submit', async (e) => {
    e.preventDefault();

    const datos = {
        email: document.getElementById('email').value,
        password: document.getElementById('password').value
    };

    try {
        const response = await fetch('api/login.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(datos)
        });

        const result = await response.json();

        if (result.status === 'ok') {
            alert('Bienvenido ' + result.nombre);
            if (result.rol === 'empresa') {
                window.location.href = 'dashboard-empresa.php';
            } else {
                window.location.href = 'index.php';
            }
        } else {
            alert('Error: ' + result.mensaje);
        }
    } catch (error) {
        console.error(error);
        alert('Error de conexión.');
    }
});
</script>
</body>
</html>
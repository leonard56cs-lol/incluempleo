# IncluEmpleo - Bolsa de Trabajo Inclusiva

Proyecto desarrollado para la asignatura de Desarrollo Web Profesional.

## Tecnologías utilizadas
*   PHP 8+
*   MySQL (phpMyAdmin)
*   HTML5, CSS3, JavaScript (Vanilla)

## Requisitos previos
*   Tener instalado XAMPP.
*   Iniciar los módulos Apache y MySQL.

## Instalación
1. Clonar este repositorio o descargar el ZIP.
2. Mover la carpeta del proyecto a `C:\xampp\htdocs\incluempleo`.
3. Abrir phpMyAdmin e importar el archivo `incluempleo.sql` (ubicado en la carpeta `/base_de_datos`) para crear la base de datos y las tablas.
4. Verificar que el archivo `config/conexion.php` tenga los datos correctos de conexión (por defecto `root` sin contraseña).
5. Abrir en el navegador: `http://localhost/incluempleo/index.php`

## Cuentas de prueba
*   **Usuario:** ana@test.com (Contraseña: la que hayas configurado)
*   **Empresa:** empresa@test.com (Contraseña: la que hayas configurado)

## Características implementadas
*   Autenticación por roles (Usuario/Empresa).
*   Manejo de multisesiones (PHP Sessions).
*   Recuperación de contraseñas (Tokens).
*   Protección de rutas (Middleware PHP).
*   Accesibilidad (Alto contraste y lector de voz).
*   Chatbot flotante.
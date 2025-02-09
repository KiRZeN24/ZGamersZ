# ZGamersZ - Web de Venta de Videojuegos

**ZGamersZ** es un caso práctico del **Certificado de Profesionalidad en Desarrollo de Aplicaciones con Tecnologías Web**.

Esta plataforma de venta de videojuegos está diseñada para ofrecer productos para PC, PlayStation, Xbox y Nintendo. Los usuarios pueden comprar videojuegos, gestionar sus pedidos y facturas, mantener la seguridad de sus datos personales mediante encriptación, y administrar su carrito de compras de manera sencilla.

## Tecnologías Utilizadas

- **PHP**: Lenguaje de programación principal para la lógica de la aplicación web.
- **HTML**: Estructura del sitio web.
- **W3.CSS**: Framework CSS utilizado para el diseño y la interfaz de usuario.
- **MySQL**: Base de datos para almacenar la información de los usuarios, pedidos y videojuegos.
- **FPDF**: Librería para la generación de facturas en formato PDF.
- **Encriptación de datos**: Los datos sensibles como correos electrónicos y contraseñas se almacenan de forma segura mediante técnicas de encriptación.

## Características

- **Gestión de usuarios**: Los usuarios pueden registrarse, iniciar sesión, cambiar su email y contraseña.
- **Visualización de pedidos**: Los usuarios pueden ver sus pedidos anteriores y descargar las facturas correspondientes.
- **Plataformas**: El sitio tiene secciones dedicadas a cada plataforma (PC, PlayStation, Xbox, Nintendo), con videojuegos exclusivos para cada una.
- **Carrito de compras**: Los usuarios pueden añadir productos al carrito, modificar la cantidad o eliminar artículos antes de proceder al pago.
- **Facturas en PDF**: Las facturas de los pedidos se generan automáticamente en formato PDF utilizando FPDF.
- **Seguridad**: Los datos personales de los usuarios, como el correo electrónico y la contraseña, están encriptados para proteger su privacidad.

## Estructura del Proyecto

El proyecto contiene los siguientes archivos en la raíz:

- **archivos/**: Archivos adicionales necesarios para el funcionamiento
- **fpdf/**: Librería FPDF para generar las facturas en PDF
- **img/**: Imágenes estáticas (productos, banners, etc.)
- **agregar_carrito.php**: Agregar productos al carrito
- **alta_usuario.php**: Registro de nuevos usuarios
- **cerrar_sesion.php**: Cerrar sesión del usuario
- **encriptar.php**: Funciones para encriptación de datos sensibles
- **factura.php**: Generación de la factura en PDF
- **funciones.php**: Funciones comunes utilizadas en el sitio
- **index.php**: Página principal
- **menu_lateral.php**: Menú lateral para la navegación
- **menu_usuario.php**: Menú de usuario con opciones personalizadas
- **modifica_usuario.php**: Modificación de datos de usuario
- **modificar_usuario.php**: Actualización de datos del usuario
- **nintendo.php**: Página de videojuegos para Nintendo
- **pc.php**: Página de videojuegos para PC
- **playstation.php**: Página de videojuegos para PlayStation
- **registrar_pedido_bbdd.php**: Registro de pedidos en la base de datos
- **registro.php**: Página de registro de usuario
- **registro_usuario.php**: Proceso de registro de usuario
- **registro_usuario_completo.php**: Registro completo del usuario
- **tendencias.php**: Página de productos más vendidos o populares
- **ver_carrito.php**: Vista del carrito de compras
- **ver_pedidos.php**: Vista de pedidos anteriores
- **verificacion_usuario.php**: Verificación de usuario para inicio de sesión
- **xbox.php**: Página de videojuegos para Xbox
- **zgamersz.sql**: Base de datos MySQL
- **zona_usuarios.php**: Área privada del usuario

## Instalación

Para instalar ZGamersZ en tu servidor local o remoto utilizando **XAMPP**, sigue estos pasos:

1. **Clona el repositorio o descarga los archivos del proyecto**.
2. **Configura XAMPP**:
    - Asegúrate de tener XAMPP instalado con Apache y MySQL en funcionamiento.
    - Coloca los archivos del proyecto en la carpeta `htdocs` de tu instalación de XAMPP (por ejemplo, `C:\xampp\htdocs\zgamersz`).
3. **Configura la base de datos**:
    - Abre **phpMyAdmin** en tu navegador (generalmente en `http://localhost/phpmyadmin`).
    - Crea una nueva base de datos llamada `zgamersz`.
    - Importa el archivo `zgamersz.sql` desde la raíz del repositorio en tu nueva base de datos.
4. **Configuración de la conexión a la base de datos**:
    - Asegúrate de que la configuración de la base de datos en el proyecto esté correcta. Verifica el archivo `config/database.php` si existe, o busca en el código la configuración de conexión (normalmente en la parte superior de los archivos PHP).
5. **Generación de facturas en PDF**:
    - El sitio utiliza la librería FPDF para la generación de facturas. Asegúrate de que la carpeta `fpdf/` esté en su lugar, tal como se indica en la estructura del proyecto.
6. **Accede al sitio web**:
    - Abre tu navegador y navega a `http://localhost/zgamersz` para ver el sitio en funcionamiento.

## Seguridad

- Las contraseñas se encriptan utilizando funciones estándar de PHP para garantizar la seguridad de los usuarios.
- Asegúrate de utilizar un entorno seguro para ejecutar la aplicación, como HTTPS, para proteger las comunicaciones entre el cliente y el servidor.

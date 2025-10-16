# Bird Watch - Plataforma de Aviturismo Nicaragüense

[![Estado del Proyecto](https://img.shields.io/badge/estado-en_desarrollo-yellow.svg)](https://github.com/tuusuario/bird-watch)
[![Licencia](https://img.shields.io/badge/licencia-MIT-blue.svg)](https://opensource.org/licenses/MIT)

Este repositorio proporciona una plantilla prediseñada para proyecto Bird Watch de Laravel que requieren un panel de administración.

## Requisitos Previos

Antes de comenzar a utilizar esta plantilla, asegúrate de tener instalado:

- [PHP](https://www.php.net/) >= 8.2
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) >= 16
- [npm](https://www.npmjs.com/)
- [MySQL](https://www.mysql.com/) >= 8.0

## 🚀 Instalación

1. Clona este repositorio en tu máquina local:

    ```bash
    git clone [https://github.com/StevenU21/argon] (https://github.com/limberrodriguezCT/Argon.git)
    ```

2. Navega a la carpeta del proyecto:

    ```bash
    cd argon
    ```

3. **Instala dependencias PHP**:
   ```bash
   composer install
   ```

4. **Instala dependencias JavaScript**:
   ```bash
   npm install 
   ```

5. **Configura el entorno**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

6. **Configura la base de datos**:
   - Crea una base de datos MySQL
   - Actualiza el archivo `.env` con tus credenciales:
     ```env
     DB_DATABASE=bird_watch
     DB_USERNAME=tu_usuario
     DB_PASSWORD=tu_contraseña
     ```

7. **Ejecuta migraciones y seeders**:
   ```bash
   php artisan migrate --seed
   ```

8. **Inicia el servidor**:
   ```bash
   php artisan serve
   ```

9. **Accede a la aplicación**:
   Abre tu navegador en `http://localhost:8000`


## 🌟 Características Técnicas

- **Panel Administrativo**: Dashboard integrado
- **Diseño Responsive**: Compatible con todos los dispositivos
- **Sistema de Reservas**: Flujo completo de reservación
- **Búsqueda Avanzada**: Filtros por especie, ubicación y temporada
- **Gestión de Usuarios**: Roles y permisos
- **API RESTful**: Para futuras integraciones móviles


## 📄 Licencia

Este proyecto está bajo la Licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más detalles.

## 📞 Contacto

**Bird Watch Nicaragua**  
✉️ info@birdwatch.com.ni  
🌐 [www.birdwatch.com.ni](https://www.birdwatch.com.ni)  
📱 Síguenos en redes sociales

---

*Descubre la majestuosidad de las aves nicaragüenses con Bird Watch - Tu ventana al mundo del aviturismo* 🦜

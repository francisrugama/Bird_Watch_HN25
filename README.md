# Bird Watch - Plataforma de Aviturismo Nicaragüense

[![Estado del Proyecto](https://img.shields.io/badge/estado-en_desarrollo-yellow.svg)](https://github.com/tuusuario/bird-watch)
[![Licencia](https://img.shields.io/badge/licencia-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![Framework](https://img.shields.io/badge/framework-Laravel-red.svg)](https://laravel.com)
[![Dashboard](https://img.shields.io/badge/dashboard-Argon-success.svg)](https://www.creative-tim.com/product/argon-dashboard)

**Bird Watch** es una aplicación web especializada en aviturismo que conecta a los amantes de la observación de aves con los mejores destinos y servicios en Nicaragua. Ofrecemos una plataforma intuitiva para reservar hospedaje y encontrar tours especializados que se adapten a las necesidades específicas de cada observador de aves.

## 🦜 Características Principales

### Para Clientes
- **Reserva de Hospedaje**: Sistema simplificado para encontrar y reservar hoteles especializados en aviturismo
- **Tours Personalizados**: Catálogo de tours filtrables por tipo de aves, ubicación, dificultad y presupuesto
- **Guías Especializados**: Acceso a guías locales expertos en aves nicaragüenses
- **Galería de Aves**: Base de datos visual de especies autóctonas
- **Reseñas y Calificaciones**: Sistema de opiniones de otros observadores de aves

### Para Proveedores
- **Panel de Gestión**: Interfaz Argon Dashboard para administrar servicios
- **Gestión de Reservas**: Sistema completo para manejar reservas de hoteles y tours
- **Perfiles de Servicios**: Plataforma para mostrar sus servicios especializados

## 🛠️ Tecnologías

- **Backend**: Laravel 10+
- **Frontend**: Dashboard + Tailwind CSS
- **Base de Datos**: MySQL
- **Autenticación**: Laravel Breeze
- **Pagos**: Integración con pasarelas de pago locales

## 📋 Requisitos Previos

Antes de instalar el proyecto, asegúrate de tener:

- [PHP](https://www.php.net/) >= 8.2
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) >= 16
- [npm](https://www.npmjs.com/)
- [MySQL](https://www.mysql.com/) >= 8.0

## 🚀 Instalación

1. **Clona el repositorio**:
   ```bash
   git clone https://github.com/francisrugama/Bird_Watch_HN25.git
   cd Bird_Watch_HN25
   ```

2. **Navega a la carpeta del proyecto:**:
   ```bash
   cd Bird_Watch_HN25
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

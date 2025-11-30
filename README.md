# Automatización para el Registro de Fichas Técnicas en el Área de Soporte Técnico de la Municipalidad Provincial de Pisco

Sistema desarrollado para automatizar y optimizar el registro, generación y gestión de fichas técnicas en el área de soporte técnico de la Municipalidad Provincial de Pisco. Permite a los técnicos registrar información detallada sobre cada caso, almacenarla en la base de datos y generar automáticamente un archivo PDF con los datos proporcionados. Además, cuenta con una interfaz intuitiva que facilita la visualización, búsqueda y edición de los registros de manera eficiente.

![fichatecnica](https://github.com/user-attachments/assets/d778e402-0ddd-42c4-97b9-d59b4a8d254f)

## 🛠️ Tecnologías

- ![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
- ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
- ![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
- ![Vite](https://img.shields.io/badge/Vite-B73BFE?style=for-the-badge&logo=vite&logoColor=FFD62E)
- ![Bootstrap](https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white)
- ![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)
- ![XAMPP](https://img.shields.io/badge/Xampp-F37623?style=for-the-badge&logo=xampp&logoColor=white)

## 📋 Funcionalidades

Sección: **Ficha Técnica**

- Registro de ficha técnica.
- Almacenamiento automático de la información en la base de datos.
- Generación automática de un archivo PDF con los datos registrados.

Sección: **Datos**

- Visualización de todas las fichas técnicas en una tabla dinámica.
- Búsqueda filtrada para encontrar registros específicos.
- Edición de registros mediante un botón Editar en cada fila.

## ⚙️ Instalación y Configuración

#### 1. Clona el repositorio

```bash
git clone https://github.com/alonsoramoss/ficha-tecnica.git
```

#### 2. Entra al directorio del proyecto

```bash
cd ficha-tecnica
```

#### 3. Instala dependencias

- Dependencias de PHP (usando Composer)

```bash
composer install
```

- Dependencias de Node.js (usando PNPM)

```bash
pnpm install
```

#### 4. Crea el archivo de configuración

Copia el archivo .env.example a .env:

```bash
cp .env.example .env
```

#### 5. Inicia Apache y MySQL en XAMPP

Abre el panel de control de XAMPP y activa los servicios de **Apache** y **MySQL**.

#### 6. Configura el archivo `.env` con los datos de conexión a MySQL

```sql
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=soporte  
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

#### 7. Genera la clave de la aplicación

```bash
php artisan key:generate
```

#### 8. Migra las tablas a la base de datos
Ejecuta las migraciones para crear las tablas necesarias en la base de datos:

```bash
php artisan migrate
```

Si la base de datos `soporte` no existe en MySQL, también se creará.

#### 9. Ejecución del proyecto

- Inicia el backend (Laravel)

```bash
php artisan serve
```

Esto iniciará el servidor en: http://127.0.0.1:8000

- Inicia el frontend (Vite)

En otra terminal, ejecuta:

```bash
pnpm run dev
```

Esto habilitará Hot Module Replacement (HMR) para recargar automáticamente los cambios en CSS y JS.

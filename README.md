# Automatización para el Registro de Fichas Técnicas en el Área de Soporte Técnico de la Municipalidad Provincial de Pisco

Sistema web desarrollado para optimizar el registro y gestión de fichas técnicas en el área de soporte técnico de la Municipalidad Provincial de Pisco. Permite a los técnicos registrar información detallada sobre cada caso, almacenarla en la base de datos y generar automáticamente un archivo PDF con los datos ingresados. Además, incluye una interfaz intuitiva que facilita la visualización, búsqueda y edición de los registros de manera eficiente.

![fichatecnica_github](https://github.com/user-attachments/assets/2cc7b9d5-103b-4dc9-8360-86877d99274f)

## 🛠️ Tecnologías
- ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
- ![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
- ![XAMPP](https://img.shields.io/badge/Xampp-F37623?style=for-the-badge&logo=xampp&logoColor=white)
- ![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
- ![Bootstrap](https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white)

## 📋 Funcionalidades
Sección: **Ficha Técnica**
- Registro de nuevas fichas técnicas para el área de soporte técnico.
- Almacenamiento de los datos en la base de datos MySQL.
- Generación automática de un archivo PDF con los información registrada.

Sección: **Datos**
- Muestra una tabla con todas las fichas técnicas registradas.
- Búsqueda filtrada para encontrar registros específicos.
- Cada fila incluye un botón *Editar* que permite modificar los datos del registro correspondiente.

## ⚙️ Instalación y Configuración
#### 1. Clona el repositorio
    git clone https://github.com/alonsoramoss/ficha-tecnica.git

#### 2. Instala dependencias
    composer install

#### 3. Crea el archivo de configuración
Copia el archivo .env.example a .env:

    cp .env.example .env

#### 4. Inicia Apache y MySQL en XAMPP
Abre el panel de control de XAMPP y activa los servicios de **Apache** y **MySQL**.

#### 5. Configura el archivo `.env` con los datos de conexión a MySQL
```sql
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=soporte  
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

#### 6. Genera la clave de la aplicación
    php artisan key:generate

#### 7. Migra las tablas a la base de datos
Ejecuta las migraciones para crear las tablas necesarias en la base de datos:

    php artisan migrate    
Si la base de datos `soporte` no existe en MySQL, también se creará.

#### 8. Inicia el servidor de desarrollo
    php artisan serve

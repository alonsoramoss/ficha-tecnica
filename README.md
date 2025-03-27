# Sistema de Gestión de Fichas Técnicas

Sistema web desarrollado en Laravel con MySQL, diseñado para optimizar el registro y gestión de fichas técnicas en el área de soporte técnico. Permite a los usuarios registrar información detallada sobre cada caso, almacenarla en la base de datos y generar un archivo PDF con los datos ingresados. Además, incluye una sección donde se pueden visualizar, buscar y editar los registros de manera eficiente a través de una interfaz intuitiva.

## Funcionalidades
Sección: **Ficha Técnica**
- Registro de nuevas fichas técnicas para el área de soporte técnico..
- Almacenamiento de los datos en la base de datos MySQL.
- Generación automática de un archivo PDF con los información registrada.

Sección: **Datos**
- Muestra una tabla con todas las fichas técnicas registradas.
- Búsqueda filtrada para encontrar registros específicos.
- Cada fila incluye un botón *Editar* que permite modificar los datos del registro correspondiente.

## Pasos para utilizar el sistema
#### 1. Clonar el repositorio
    git clone https://github.com/alonsoramoss/ficha-tecnica.git

#### 2. Instalar dependencias
    composer install

#### 3. Crear el archivo de configuración
Copia el archivo .env.example a .env:

    cp .env.example .env

#### 4. Iniciar Apache y MySQL en XAMPP
Abre el panel de control de XAMPP y activa los servicios de **Apache** y **MySQL**.

#### 5. Configurar el archivo `.env` con los datos de conexión a MySQL
```sql
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=soporte  
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

#### 6. Generar la clave de la aplicación
    php artisan key:generate

#### 7. Migrar las tablas a la base de datos
Ejecuta las migraciones para crear las tablas necesarias en la base de datos:

    php artisan migrate    
Si la base de datos `citytours` no existe en MySQL, también se creará.

#### 8. Iniciar el servidor de desarrollo
    php artisan serve

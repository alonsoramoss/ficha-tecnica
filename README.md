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

#### 2. Instalar las dependencias de Laravel
```sql
composer install
```  
#### 3. Crea el archivo de configuración
```sql
composer install
```

#### 4. Iniciar Apache y MySQL en XAMPP
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
```sql
php artisan key:generate
```

#### 7. Ejecuta las migraciones para crear la base de datos
```sql
php artisan migrate
```

#### 8. Inicia el servidor de desarrollo
```sql
php artisan serve
```



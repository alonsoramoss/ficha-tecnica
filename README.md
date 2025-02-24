# Ficha Técnica
Ficha Técnica realizada en Laravel conectada a mysql y visualización de los datos en una tabla con función de filtrar y editar.

Sistema de gestión de especies y desembarques desarrollado con PHP, javaScript y bootstrap, permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) en una base de datos de especies y desembarques.

## Funcionalidades
- **Registrar:** Permite ingresar registros a la base de datos.
- **Actualizar:** Permite la modificación de los detalles.
- **Eliminar:** Permite eliminar registros de la base de datos.
- **Búsqueda:** Permite buscar especies o desembarques por sus características.

## Pasos para utilizar el sistema
#### 1. Clonar el repositorio

#### 2. Instalar las dependencias de Laravel
```sql
composer install
```  


#### 3. Iniciar Apache y MySQL en XAMPP
Abre el panel de control de XAMPP y activa los servicios de **Apache** y **MySQL**.

#### 4. Configurar la Base de Datos
En MySQL crear una base de datos llamada `desem`.
- Ejecutar el siguiente script SQL para crear las tablas especies y desembarques:

```sql
CREATE TABLE Especies (
    idEspecie int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(20) NOT NULL,
    tipo varchar(40) NOT NULL
);

CREATE TABLE Desembarques (
    idDesembarque int PRIMARY KEY AUTO_INCREMENT,
    idEspecie int NOT NULL,
    fecha date NOT NULL,
    kg_dia decimal(10,2) NOT NULL,
    FOREIGN KEY (idEspecie) REFERENCES Especies(idEspecie)
);
```

#### 5. Configurar los archivos de conexión a la base de datos
Asegúrate de que el archivo `conexion.php` esté configurado correctamente con tus credenciales de MySQL.

#### 6. Acceder al sistema
Abre tu navegador y accede a las siguientes URLs:
- Gestión de Especies: http://localhost/crudesp
- Gestión de Desembarques: http://localhost/crudesem


# BACKEND CASINO 

## Pasos basicos para el uso del proyecto

### Primera vez clonado - PASO 1

Si se clona por primera vez se debe usar el siguiente comando para descargar las librerias necesarias y usar el programa de dependecias para PHP "Composer",
esto se hace dentro de la raiz del proyecto de WEBSERVICES PHP
```
composer install
```

### Generar la base de datos - PASO 2

Para este proyecto se hizo uso de una base de datos relacional SQLite. 
Para generar la base de datos que se uso para la realización del proyecto y obtener la base de datos con nombre db.sqlite, se debe realizar 
el siguiente comando dentro de la raiz de este proyecto.
```
vendor/bin/doctrine orm:schema-tool:update --force --dump-sql
```

### Programa que se uso para el montaje del backend - PASO 3

Para este proyecto se desarrollo y monto en un servidor XAMPP apache y se monto la carpeta del proyecto en "htdocs" dentro de la carpeta de xampp



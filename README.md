# BACKEND CASINO 

## Pasos basicos para el uso del proyecto

### Primera vez clonado - PASO 1

Si se clona por primera vez se debe usar el siguiente comando para descargar las librerias necesarias
esto se hace dentro de la raiz del proyecto de WEBSERVICES PHP
```
composer install
```

### Generar la base de datos - PASO 2

Si se realizo nuevas clases en la carperta SRC el comando para guardar y actualizar la base de datos bd.sqlite.
Esto se hace dentro de la raiz del proyecto de WEBSERVICES PHP.
```
vendor/bin/doctrine orm:schema-tool:update --force --dump-sql
```


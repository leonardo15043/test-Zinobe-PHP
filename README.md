<p align="center"><img src="https://www.zinobe.com/wp-content/uploads/2020/10/logo_dark.png" width="400"></p>

## test-Zinobe-PHP

Este sistema de login que está desarrollado en PHP y Composer está dividido en 3 secciones principales:
- Login 
- Registro
- Home ( Buscador )

Antes de comenzar el proceso de instalación debemos tener en cuenta que PHP debe estar instalado en lo posible desde la version 7.3, también MYSQL y tener bien configurado Composer.

## Proceso de instalación y configuración

- Luego de descargar el proyecto lo que debemos hacer es ir a la carpeta **sql** donde se encuentra la base de datos y exportarla
- Ya cuando tengamos cargada la base de datos debemos crear en la raíz de nuestro proyecto un archivo **.env** con el mismo formato de ejemplo del archivo **.env.example**
- En el archivo **.env** configuramos los datos de la base de datos y también si queremos aprovechamos para cambiar el tiempo de caducidad de la sesioón.

  ```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=null
  DB_USERNAME=null
  DB_PASSWORD=null
  ```
- Instalamos las dependencias de composer con el comando 

  ```composer install```
  
- En este punto ya debería funcionar el sistema y podemos ir al formulario de registro para que posteriormente podamos ingresar.
- Cuando realicemos una búsqueda, el sistema tardara unos 10 segundos en responder que es el delay que tiene el servicio, es importante que las búsquedas se hagan exactas basándonos en el archivo [mocky](http://www.mocky.io/v2/5d9f39263000005d005246ae?mocky-delay=10s) con los campos **name** o **email**
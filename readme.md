## Viajes Transparentes

Con nuestro proyecto intentamos no solamente cumplir los objetivos del proyecto en general, sino además, proponer funcionalidades que sean compatibles con la mentalidad del código y los datos abiertos, es por eso que diseñamos un sistema completamente configurable, que dará la libertad a la institución que lo use, de adaptarlo a sus necesidades.
No solamente tomamos los datos provistos para el reto, sino que los estructuramos, de forma que ahora los servidores públicos, podrán ingresar cualquier número de transportes por evento, al igual que un sin número de eventos por viaje, de forma que el sistema sea adaptable y pueda cubrir sin problema desde las comisiones mas sencillas hasta las mas complicadas. 
Para que nuestro sistema tenga esta flexibilidad, cuenta con dos API's, una que nos ayuda a obtener los viajes filtrados por varios parámetros y otra que nos permite interactuar con los servidores.

## Dependencias
El sistema cuenta con vagrant para una instalación sencilla, solo es necesario contar con:
- Vagrant
- Virtualbox

Si no se usa vagrant necesitaremos:
- apache2
- PHP 5.5 con mcrypt
- Mysql 
- Composer
- CURL

## Otras fuentes del software libre utilizado
- Frozen Node Administrator https://github.com/FrozenNode/Laravel-Administrator
- Laravel 4 https://github.com/laravel/laravel

## Instalación
Para instalar el sistema, si se desea hacer con vagrant, solo es necesario localizarse en la carpeta raiz del proyecto y ejecutar el comando
`vagrant up`

Una vez que termine de levantar el ambiente en vagrant, podremos ingresar a la siguiente dirección para ver nuestro sistema funcionando
`http://localhost:4567/`


Aúnque, también se puede instalar de forma nativa, para eso, hay que seguir las instrucciones en el archivo `bootstrap.sh`

## Screenshots


## Demo

Demo: http://blooming-escarpment-4474.herokuapp.com/public/
Video: http://youtu.be/a_YQwKVLjYc

## Preguntas o problemas

Para cualquier pregunta tenemos la sección de Issues de nuestro repositorio
https://github.com/Xoloitzcuintles/viajesTransparentes/issues

Aún que todas las respuestas deberías encontrarlas en nuestra wiki
https://github.com/Xoloitzcuintles/viajesTransparentes/wiki

## Contribuye

Invitamos a todos los devs a que nos ayuden clonando nuestro repositorio y enviándonos sus cambios, juntos podremos mejorar el sistema.

## Equipo

Luis Alejandro Morelos Ramos http://github.com/adrorocker
Gabriel Moreno López http://github.com/gabotrons
Salvador Villegas Mancilla http://github.com/sigues

### License

[Apache license](http://www.apache.org/licenses/)

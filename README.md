<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Iniciar Proyecto

Tener composer instalado y por consola ejecutar.

### composer install

Crear una base de datos en mysql llamada <b>pruebatecnica</b> y despues ejecutar el comando.

### php artisan migrate --seed

Con ese comando tenemos información en la base de datos y ya podemos ejecutar el proyecto con el comando.

### php artisan serve

Ya con eso podemos consumir los servicios desde postman.

Listar      <b>http://127.0.0.1:8000/api/v1/ticket/</b> {GET} </br>
ver         <b>http://127.0.0.1:8000/api/v1/ticket/{id}</b> {GET} </br>
crear       <b>http://127.0.0.1:8000/api/v1/ticket/</b> {POST} </br>
actualizar  <b>http://127.0.0.1:8000/api/v1/ticket/{id}</b> {PUT} </br>
eliminar    <b>http://127.0.0.1:8000/api/v1/ticket/{id}</b> {DELETE} </br>
recuperar   <b>http://127.0.0.1:8000/api/v1/ticket/reconstruct/{id}</b> {GET} </br>
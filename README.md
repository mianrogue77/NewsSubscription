# NewsSubscription
Prueba técnica R2 Diesel, PHP Laravel + Angular

## Requisitos
1. Instalación [PHP XAMPP](https://www.apachefriends.org/es/download.html)
2. Instalación [Composer](https://getcomposer.org/download/)
3. Instalación [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
4. Instalación [Vagrant](https://www.vagrantup.com/downloads.html)
5. Instalación [Node.js](https://nodejs.org/en/download/)
6. Instalación [Angular CLI](https://cli.angular.io/)

## Despliegue
En la maquina local:
- Descargar el repositorio en la consola de comandos:
  ```
  git clone https://github.com/mianrogue77/NewsSubscription.git
  ```
- Para desplegar el BackEnd, se debe ubicar en la carpeta **_BackEndNewsSubscription_**, en la consola de comando y ejecutar la siguiente sentencia:
  ```
  ~/NewsSubscription/BackEndNewsSubscription> vagrant up
  ```
- Para desplegar el FrontEnd, se debe ubicar en la carpeta **_FrontEndNewsSubscription_**, en la consola de comando y ejecutar la siguiente sentencia:
  ```
  ~/NewsSubscription/FrontEndNewsSubscription> ng serve
  ```
## Ingresar a la Aplicación
Para ingresar a la aplicación solo se debe ir al navegador de Internet e ingresar la siguiente URL:
  ```
  http://localhost:4200/
  ```

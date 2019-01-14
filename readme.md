# Sistema de renta de autos
## Montar la base de datos
Crear la base de datos autos en phpmyadmin
Importar las tablas de la base de datos incluidas en este repo
#Cuenta con 2 usuarios
usuario común:
username: mail@mail.com
password: holamundo

usuario admin:
username: prueba@gmail.com
password: Holamundo1250

##Loguearse
Para loguearse ingresar a la url: http://localhost/RIAS/proyectoRIAS/views/Login.php
Usar de los 2 usuarios antes mencionados

##Registro de autos (usuario admin)
Una vez logueado ingresar a la liga ó sección (Registrar Autos)
te redijirá a una url similar a esta:
http://localhost/RIAS/proyectoRIAS/views/carRegister.php

Ahí se registrarán los autos, es importante en el input de Imagen, colocar la url de la imagen directa en la web.
ejemplo: 
http://cdn2.atraccion360.com/media/aa/styles/gallerie/public/images/2014/09/consejos-para-comprar-auto-clasico-1_0.jpg

##Visualización de autos (Usuario Admin y Usuario común)
Ingresar a la liga ó sección Autos, ahí se mostrarán los autos registrados por el usuario admin, y un boton de previsualización de los autos.
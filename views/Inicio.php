<?php
include_once('../header.html');
?>
<li><a class="logout" href="./Login.php">Login</a></li>
</ul>
</nav>
<div class="video">
<video id="video" src="../video/videoplayback.mp4" autoplay=true muted loop >
</video>

<div class="formregistro">
<h1 class="registro">Registro</h1>
<img src="../img/avatar.png" width="60px" heigth="60px">
<form>
    <div class="titulos">
    <p for="username">Username:</p>
    <p>Contraseña:</p>
    <p>Nombre:</p>
    <p>Apellido paterno:</p>
    <p>Apellido materno:</p>
    <p>Lada & Telefono:</p>
    <p>Direcci&oacute;n:</p>
</div>
    
<div class="inputs">
<input class="registro" type="text" name="username" id="username" placeholder="username">
<input class="registro" type="password" name="password" id="password" placeholder="password">
<input class="registro" type="text" name="nombre" id="nombre" placeholder="nombre">
<input class="registro" type="text" name="app" id="app" placeholder="Apellido paterno">
<input class="registro" type="text" name="apm" id="apm" placeholder="Apellido materno">
<input class="lada" type="text" name="lada" id="lada" placeholder="lada">
<input class="telefono" type="text" name="telefono" id="telefono" placeholder="telefono">
<input class="registro" type="text" name="direccion" id="direccion" placeholder="direccion">

</div>



</form>
</div>

</div>
<?php
include_once('../footer.html');
?>
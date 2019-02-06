<?php
include_once('../header.html');
session_start();
if(!isset($_SESSION['user'])){
echo '<li><a class="logout" href="./Login.php">Login</a></li>';
}else{
    if($_SESSION['user']=='admin'){
        echo '<li><a class="menu" href="./carRegister.php">Registrar Autos</a></li>';
        echo '<li><a class="menu" href="../controller/Logout.php">Logout</a></li>';
        
    }else if($_SESSION['user']=='common'){
        echo '<li><a class="menu" href="../controller/Logout.php">Logout</a></li>';   
    }
    
}
?>
</ul>
</nav>
<?php
if(isset($_GET['usuarioreg'])){
    echo '<p style="text-align: center;font-size: 20px; margin-left:10%; color: yellow;">'.$_GET['usuarioreg'].'<p>';
}

?>
<div class="video">
<video id="video" src="../video/videoplayback.mp4" autoplay=true muted loop >
</video>

<div class="formregistro">
<h1 class="registro">Registro</h1>
<img class="registro" src="../img/avatar.png" width="60px" heigth="60px">
<form method="post" action="../controller/Controller.php" onsubmit="return validadorregistro();">
    <div class="titulos">
    <p >Email:</p>
    <p>Contraseña:</p>
    <p>Nombre:</p>
    <p>Apellido paterno:</p>
    <p>Apellido materno:</p>
    <p>Lada & Telefono:</p>
    <p>Licencia:</p>
    <p>Direcci&oacute;n:</p>
</div>
    
<div class="inputs">
<input required class="registro" type="text" name="email" id="email" placeholder="email">
<input required class="registro" type="password" name="password" id="password" placeholder="password">
<input required class="registro" type="text" name="nombre" id="nombre" placeholder="nombre">
<input required class="registro" type="text" name="app" id="app" placeholder="Apellido paterno">
<input required class="registro" type="text" name="apm" id="apm" placeholder="Apellido materno">
<input required class="lada" type="text" name="lada" id="lada" placeholder="lada">
<input required class="telefono" type="text" name="telefono" id="telefono" placeholder="telefono">
<input required class="registro" type="text" name="licencia" id="licencia" placeholder="licencia">
<input required class="registro" type="text" name="direccion" id="direccion" placeholder="direccion">
<button type="submit" class="registro">Registrar</button>
</div>



</form>
</div>

</div>
<script src="../js/validador.js"></script>
<?php
include_once('../footer.html');
?>
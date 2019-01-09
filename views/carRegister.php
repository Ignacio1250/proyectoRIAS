<?php
require_once('../header.html');
?>
</ul>
</nav>
<div class="formregistro">
<img class="registro" src="../img/car.png" width="80px" heigth="80px">
<form method="POST" action="../controller/dataSaveCar.php">

<div class="titulosregcar">
    <p>Placas</p>
    <p>Modelo</p>
    <p>Marca</p>
    <p>Capacidad</p>
    <p>Color</p>
    <p>Monto de renta</p>
    <p>Caracteristicas</p>
    <p>Imagen</p>
</div>
<div class="inputs">
<input required class="registro" type="text" name="placa" id="placa" placeholder="placa">
<input required class="registro" type="text" name="modelo" id="modelo" placeholder="modelo">
<input required class="registro" type="text" name="marca" id="marca" placeholder="marca">
<input required class="registro" type="text" name="capacidad" id="capacidad" placeholder="capacidad">
<input required class="registro" type="text" name="color" id="color" placeholder="color">
<input required class="registro" type="text" name="monto" id="monto" placeholder="monto de renta">
<input required class="caracteristicas" type="checkbox" name="caracteristicas[]" value="clima"> Clima
<input required class="caracteristicas" type="checkbox" name="caracteristicas[]" value="automatico"> Automatico
<input required class="caracteristicas" type="checkbox" name="caracteristicas[]" value="seguros"> Seguros Elect.
<input required class="caracteristicas" type="checkbox" name="caracteristicas[]" value="usb"> Usb
<input required class="registro" type="file" name="imagen" id="imagen" placeholder="imagen">
<button type="submit" class="registro">Registrar</button>
</div>
</form>
</div>
<script type="text/javascript" src="../jslib/jquery-3.3.1.js"></script>
<script type="text/javascript"src="../js/lib.js"></script>
<?php
require_once('../footer.html');
?>
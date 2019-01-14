<?php
include_once('../header.html');

?>
<li><a class="logout" href="./Login.php">Login</a></li>
  </ul>
    </nav>
    <?php
    
    if(isset($_GET['logueado'])){echo '<p style="color: yellow;margin-top:0; ;font-size: 20px; text-align: center;">',$_GET['logueado'],'</p>';}?>
    <div class="formlogin">
    
    <img class="login" src="../img/avatar.png" width="60px" heigth="60px">
<form  method="post" action='../controller/login.php' onsubmit="return validadorlogin();">
<label class="username" for="username">Username: </label>
<input required class="login" type="text" id="username" name="username" placeholder="username" />
<label class="password" for="password">Password:</label>
<input required class="login" type="password" id="password"  name="password" placeholder="password" />
<button type="submit">Ingresar</button>
</form>
</div>
<script src="../js/validador.js"></script>
<?php
include_once('../footer.html');
?>
<?php
require_once('../header.html');
session_start();
if(isset($_SESSION['user'])){
    if($_SESSION['user']=='admin'){
        echo '<li><a class="menu" href="./carRegister.php">Registrar Autos</a></li>';
        echo '<li><a class="menu" href="../controller/Logout.php">Logout</a></li>';
        
    }else if($_SESSION['user']=='common'){
        echo '<li><a class="menu" href="../controller/Logout.php">Logout</a></li>';   
    }
}else{
    header("Location: ../views/login.php");
}

?>
</ul>
</nav>
<div id="autoscontainer" style="background-color: blue">

</div>
<div id='preview' title='preview'>
<link rel="stylesheet" type="text/css" href="../jslib/jquery-ui-custom/jquery-ui.css">
		<!-- Inclusión de biblioteca jQuery -->
		<script type="text/javascript" src="../jslib/jquery-3.3.1.js">
		</script>
		<!-- Inclusión de biblioteca jQueryUI -->
        <script type="text/javascript" src="../jslib/jquery-ui-custom/jquery-ui.js"></script>
        
        <link rel="stylesheet" type="text/css" href="../jslib/theme-neptune/resources/theme-neptune-all.css">
        <script type="text/javascript" src="../jslib/ext-all.js"></script>
        <script type="text/javascript" src="../jslib/theme-neptune/theme-neptune.js"></script>
        <script type="text/javascript" src="../js/TableReq.js"></script>
        <script type="text/javascript" src="../js/lib.js"></script>
<?php
require_once('../footer.html');
?>
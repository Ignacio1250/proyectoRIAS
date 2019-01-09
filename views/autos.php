<?php
require_once('../header.html');
require_once('../models/Connection.php');
$query= new Connection();
$autos=$query->getAutos();

?>
</ul>
</nav>
<div class="autoscontainer">
<table class="autostable">
<thead>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Placas</th>
    <th>Capacidad</th>
    <th>Color</th>
    <th>$ Renta al día</th>
    <th>Preview</th>
</thead>
<tbody>
    <?php
    foreach($autos as $auto){
        echo '<tr>';
        echo '<td>'.$auto['marca'].'</td>';
        echo '<td>'.$auto['modelo'].'</td>';
        echo '<td>'.$auto['placas'].'</td>';
        echo '<td>'.$auto['capacidad'].'</td>';
        echo '<td>'.$auto['color'].'</td>';
        echo '<td>'.$auto['montorentadia'].'</td>';
        echo "<td><input type='button' value='Saluda' onclick='getPreview(".$auto['placas'].");'/></td>";
        echo '</tr>';
    }
    echo "<tr><td colspan='7'><div id='preview' title='preview'></td></tr>";
    ?>
    
</tbody>
</table>
</div>
<link rel="stylesheet" type="text/css" href="../jslib/jquery-ui-custom/jquery-ui.css">
		<!-- Inclusión de biblioteca jQuery -->
		<script type="text/javascript" src="../jslib/jquery-3.3.1.js">
		</script>
		<!-- Inclusión de biblioteca jQueryUI -->
        <script type="text/javascript" src="../jslib/jquery-ui-custom/jquery-ui.js">
        <script type="text/javascript" src="../js/lib.js">
<?php
require_once('../footer.html');
?>
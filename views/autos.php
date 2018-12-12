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
        echo '</tr>';
    }
    ?>
</tbody>
</table>
</div>
<?php
require_once('../footer.html');
?>
<?php
require_once('../header.html');

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
<div class="containerabout">
<h1>About us</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis, commodi fugit animi quasi ducimus odit minus nam doloremque necessitatibus quisquam fugiat delectus cupiditate rem mollitia vitae amet ut quaerat aliquid.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid culpa quia placeat dolor vero? Maxime libero error reprehenderit illum aliquid earum blanditiis magni saepe repellat! Quod nesciunt reiciendis recusandae? Explicabo.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia corporis, soluta laudantium unde aspernatur odit quis? Dolor possimus, atque unde sit velit perferendis reprehenderit impedit assumenda iusto. Nobis, temporibus facilis?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque rerum voluptatem, dolor error nisi earum excepturi facere fugiat ducimus consequuntur obcaecati quaerat perferendis, quisquam mollitia pariatur consectetur velit? Nobis, amet.
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum eaque, veritatis repellendus esse alias doloribus sequi quaerat vitae ex, voluptate facilis aliquam incidunt numquam facere nesciunt modi error, magnam neque.
</p>

<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia deserunt pariatur, voluptatem porro eum culpa rerum adipisci cumque voluptates vel officiis commodi aliquid tempore quo repellat! Quos distinctio mollitia dolor!
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. In itaque modi id illum fugiat reiciendis incidunt architecto dolore dolores adipisci quidem aliquid non ex temporibus dignissimos facere ut, optio eligendi.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate corporis debitis reiciendis cumque quae possimus tempore nostrum. Perspiciatis repellat assumenda est perferendis aliquam? Nostrum eum, nobis laboriosam ex nisi quisquam.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, sequi. Labore assumenda adipisci molestiae unde reiciendis incidunt animi doloribus, at odit voluptatibus nesciunt blanditiis alias a beatae quia exercitationem. Animi!
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, quo maxime. Deserunt, incidunt omnis sint quae vel aliquam a perferendis quis veritatis? Cum ex hic temporibus tempora deleniti provident accusantium.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta quasi inventore molestias laudantium nostrum autem sed pariatur distinctio. Voluptatum rerum quo cupiditate facere voluptatibus beatae consectetur ipsa eveniet sint odit.
</p>

</div>
<?php
require_once('../footer.html');
?>
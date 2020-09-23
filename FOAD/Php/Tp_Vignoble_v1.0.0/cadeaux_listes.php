<?php
require_once("./header.php");
require_once("./msg_session.php");
require_once("./connect_pdo.php");
?>
<section>
    <div id="liste_cadeaux">
        <h2>Cadeaux et accessoires</h2>
<?php
$rows = $bdd->query("SELECT * FROM cadeaux");
while($donnes = $rows->fetch()){
?>
    <article>
        <img src="<?php echo $donnes['cadeau_image']; ?>">
        <!--TODO: faire en sort de prendre le dernier cadeaux en bdd-->
        <p id="little-title"><?php echo $donnes['cadeau_title']; ?></p>
        <p><?php echo $donnes['cadeau_description']; ?></p>
    </article> 
<?php
}

if(empty($rows)){
    Echo "<center><h2>Pas d'article pour le moments</h2><center>";
}
if(!empty($_SESSION['user'])){
?>
<button><a href="cadeau_form.php">Ajouté des cadeaux</a></button>
<?php
}
?>
</div>

    </section>
<?php
    require_once("./footer.php");
?>
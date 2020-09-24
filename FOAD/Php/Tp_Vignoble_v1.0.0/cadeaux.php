<?php
require_once("./connect_pdo.php");

function readALL(): void 
{
    global $bdd;
    require_once("./header.php");
    require_once("./msg_session.php");
?>
    <section>
        <div id="liste_cadeaux">
            <h2>Cadeaux et accessoires</h2>
            <?php
            $rows = $bdd->query("SELECT * FROM cadeaux");
            while ($donnes = $rows->fetch()) {
            ?>
                <article role="article" aria-label="Ceci est des cadeaux offerts part la maison">
                    <img src="<?php echo $donnes['cadeau_image']; ?>">
                    <!--TODO: faire en sort de prendre le dernier cadeaux en bdd-->
                    <h3 id="little-title"><?php echo $donnes['cadeau_title']; ?></h3>
                    <p><?php echo $donnes['cadeau_description']; ?></p>
                </article>
            <?php
            }

            if (empty($rows)) {
                echo "<center><h2>Pas d'article pour le moments</h2><center>";
            }
            if (!empty($_SESSION['user'])) {
            ?>
                <button><a href="cadeaux.php?form=add">Ajouté des cadeaux</a></button>
            <?php
            }
            ?>
        </div>

    </section>
    <?php
    require_once("./footer.php");
}

function add(): void
{
    global $bdd;
    require_once("./header.php");
    require_once("./msg_session.php");

    if (!empty($_SESSION['user'])) {
    ?>
        <section id="cadeau">
            <div id="form_cadeau">
                <h2>Formulaire pour ajouté des cadeaux</h2>
                <form action="cadeaux.php?cadeaux=add" method="post">
                    <label for="c_title">Titre:</label>
                    <input type="text" name="c_title" id="c_tilte">
                    <label for="c_image">Image du Adeaux:</label>
                    <input type="text" name="c_image" id="c_image">
                    <label for="c_desc">Description</label>
                    <textarea name="c_desc" id="c_desc" cols="30" rows="10"></textarea>
                    <button type="submit">Enregistrer</button>
                </form>
            </div>
        </section>
<?php
    } else {
        $_SESSION['msg_alert'] = "Tu n'est pas connecté";
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'index.php';
        header("Location: http://$host$uri/$extra");
    }
    require_once("./footer.php");
}

function add_send(string $title, string $image, $description): void
{

}

/**
 *
 */
function update(): void
{
}

function update_send(string $title, string $image, $description):void
{

}

function delete():void
{

}


switch ($_GET['form']) {

    case 'add':
        add();
        break;

    case 'add_send':
        add_send($_POST['c_title'], $_POST['c_image'], $_POST['c_desc']);
        break;

    case 'update':
        update();
        break;

    case 'update_send':
        update_send($_POST['c_title'], $_POST['c_image'], $_POST['c_desc']);
        break;

    case 'delete':
        delete();
        break;

    default:
        readALL();
        break;
}

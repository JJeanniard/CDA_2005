<?php
require_once("./connect_pdo.php");
$choix = NULL;

if(!empty(isset($_GET['form']))){
    $choix = $_GET['form'];
}

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
                echo "<h2>Pas d'article pour le moments</h2>";
            }
            if (!empty($_SESSION['user'])) {
                ?>
                <button><a href="cadeaux.php?form=create">Ajouté des cadeaux</a></button>
                <?php
            }
            ?>
        </div>

    </section>
    <?php
    require_once("./footer.php");
}

function create(): void
{
    global $bdd;
    require_once("./header.php");
    require_once("./msg_session.php");

    if (!empty($_SESSION['user'])) {
        ?>

        <section id="cadeau">
            <div id="form_cadeau">
                <h2>Formulaire pour ajouté des cadeaux</h2>
                <form action="cadeaux.php?form=add" method="POST" role="form">
                    <label for="c_title">Titre:</label>
                    <input type="text" name="c_title" id="c_tilte" maxlength="50" required>
                    <label for="c_image">Image du Adeaux:</label>
                    <input type="text" name="c_image" id="c_image" required>
                    <label for="c_desc">Description</label>
                    <textarea name="c_desc" id="c_desc" cols="30" rows="10" required></textarea>
                    <button type="submit">Enregistrer</button>
                </form>
            </div>
        </section>
        <?php
    } else {
        $_SESSION['msg_alert'] = "Tu n'est pas connecté";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'index.php';
        header("Location: http://$host$uri/$extra");
    }
    require_once("./footer.php");
}

function add(string $title, string $image, string $description): void
{
    session_start();
    global $bdd;

    if(empty($_SESSION['user'])){
        $_SESSION['msg_alert'] = "Tu n'est pas connecté";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'cadeaux.php';
        header("Location: http://$host$uri/$extra");
    } else{
        $req = $bdd->prepare("INSERT INTO cadeaux(cadeau_title, cadeau_description, cadeau_image, user_id)
                                    VALUES(:title, :descp, :img, :userid)");
        $id = $_SESSION['user']['id'];
        $req->execute(array('title' => $title, 'descp' => $description, 'img' => $image, 'userid' => $id));

        $_SESSION['msg_alert'] = "Le cadeau est bien enregistré!";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'cadeaux.php';
        header("Location: http://$host$uri/$extra");
    }
}

function update($cadeau): void
{

    global $bdd;
    require_once("./header.php");
    require_once("./msg_session.php");

    if (!empty($_SESSION['user'])) {
        $req = $bdd->prepare("SELECT cadeau_title, cadeau_description, cadeau_image FROM cadeaux WHERE cadeau_id = ?");
        $req->execute(array($cadeau));

        $donne = $req->fetch(PDO::FETCH_ASSOC);

        print_r($donne);
        ?>
        <section id="cadeau">
            <div id="form_cadeau">
                <h2>Formulaire pour ajouté des cadeaux</h2>
                <form action="cadeaux.php?form=update_send" method="POST">
                    <label for="c_title">Titre:</label>
                    <input type="text" name="c_title" id="c_tilte" maxlength="50" required value="<?php $donne[cadeau_title] ?>">
                    <label for="c_image">Image du Adeaux:</label>
                    <input type="text" name="c_image" id="c_image" required>
                    <label for="c_desc">Description</label>
                    <textarea name="c_desc" id="c_desc" cols="30" rows="10" required></textarea>
                    <button type="submit">Enregistrer</button>
                </form>
            </div>
        </section>
        <?php
    } else {
        $_SESSION['msg_alert'] = "Tu n'est pas connecté";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'index.php';
        header("Location: http://$host$uri/$extra");
    }
    require_once("./footer.php");
}

function update_send(string $title, string $image, string $description): void
{
    session_start();
    global $bdd;
    if(empty($_SESSION['user'])){
        $_SESSION['msg_alert'] = "Tu n'est pas connecté";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'cadeaux.php';
        header("Location: http://$host$uri/$extra");
    }else{
        $req = $bdd->prepare("UPDATE `cadeaux` SET (`cadeau_title` = :title, `cadeau_description` = :descp, `cadeau_image` = :img)");

        $req->execute($title, $description, $image);
    }

}

function delete(): void
{

}

switch ($choix) {

    case "create":
        create();
        break;

    case "add":
        add($_POST['c_title'], $_POST['c_image'], $_POST['c_desc']);
        break;

    case "update":
        update($_GET['id']);
        break;

    case "update_send":
        update_send($_POST['c_title'], $_POST['c_image'], $_POST['c_desc']);
        break;

    case "delete":
        delete($_GET['id']);
        break;

    default:
        readALL();
        break;
}

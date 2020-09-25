<?php
require_once("./connect_pdo.php");
$choix = NULL;

if (!empty(isset($_GET['form']))) {
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
                    <input type="file" id="c_image" name="c_image" accept="image/png, image/jpeg" required>
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

    //security

    $title = strip_tags($title);
    $description = strip_tags($description);
    //TODO: Faire une verification que c'est bien une image.
    $imageDir = __DIR__.'/images/';
    $imageTmpDir = __DIR__.'/images/'.$image;

    if (empty($_SESSION['user'])) {
        $_SESSION['msg_alert'] = "Tu n'est pas connecté";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'cadeaux.php';
        header("Location: http://$host$uri/$extra");
    } else {

        $req = $bdd->prepare("INSERT INTO cadeaux(cadeau_title, cadeau_description, cadeau_image, user_id)
                                    VALUES(:title, :descp, :img, :userid)");
        $id = $_SESSION['user']['id'];
        $req->execute(array('title' => $title, 'descp' => $description, 'img' => $imageTmpDir, 'userid' => $id));

        move_uploaded_file($image, $imageDir);

        $_SESSION['msg_succes'] = "Le cadeau est bien enregistré!";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'cadeaux.php';
        header("Location: http://$host$uri/$extra");
    }
}

function update(int $cadeau): void
{

    global $bdd;
    require_once("./header.php");
    require_once("./msg_session.php");

    if (!empty($_SESSION['user'])) {
        $req = $bdd->prepare("SELECT cadeau_title, cadeau_description, cadeau_image FROM cadeaux WHERE cadeau_id = ?");
        if($req->execute(array($cadeau))){
            foreach ($req->fetch(PDO::FETCH_ASSOC) as $key => $donne) {
                $donnes[$key] = $donne;
            }
        } else {
            $_SESSION['msg_alert'] = "Le cadeau n'existe pas!";
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = 'index.php';
            header("Location: http://$host$uri/$extra");
        }

        ?>
        <section id="cadeau">
            <div id="form_cadeau">
                <h2>Formulaire pour ajouté des cadeaux</h2>
                <form action="cadeaux.php?form=update_send" method="POST">
                    <label for="c_title">Titre:</label>
                    <input type="text" name="c_title" id="c_tilte" maxlength="50" required
                           value="<?php echo $donnes['cadeau_title'] ?>">
                    <label for="c_image">Image du Adeaux:</label>
                    <input type="text" name="c_image" id="c_image" required
                           value="<?php echo $donnes['cadeau_image'] ?>">
                    <label for="c_desc">Description</label>
                    <textarea name="c_desc" id="c_desc" cols="30" rows="10"
                              required><?php echo $donnes['cadeau_description'] ?></textarea>
                    <input type="hidden" name="c_id" value="<?php echo $cadeau ?>">
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

function update_send(string $title, string $image, string $description, int $id): void
{
    session_start();
    global $bdd;
    if (empty($_SESSION['user'])) {
        $_SESSION['msg_alert'] = "Tu n'est pas connecté";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'index.php';
        header("Location: http://$host$uri/$extra");
    } else {
        $req = $bdd->prepare("UPDATE cadeaux SET cadeau_title = :title, cadeau_description = :descp, cadeau_image = :img WHERE cadeau_id = :id");

        $req->execute(array('title' => $title, 'descp' => $description, 'img' => $image, 'id' => $id));

        $_SESSION['msg_succes'] = "Le cadeau a bien été mise à jour!";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'cadeaux.php';
        header("Location: http://$host$uri/$extra");
    }

}

function delete(int $cadeau): void
{
    session_start();
    global $bdd;
    require_once("./msg_session.php");

    if (!empty($_SESSION['user'])) {
        $req = $bdd->prepare("SELECT cadeau_title, cadeau_description, cadeau_image FROM cadeaux WHERE cadeau_id = ?");
        if($req->execute(array($cadeau))){
            $reqDel = $bdd->prepare("DELETE FROM cadeaux WHERE cadeau_id = ?");
            $reqDel->execute(array($cadeau));

            $_SESSION['msg_succes'] = "Le cadeau à été supprimé!";
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = 'cadeau.php';
            header("Location: http://$host$uri/$extra");

        } else {
            $_SESSION['msg_alert'] = "Le cadeau n'existe pas!";
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = 'cadeau.php';
            header("Location: http://$host$uri/$extra");
        }

    } else {
        $_SESSION['msg_alert'] = "Tu n'est pas connecté";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'index.php';
        header("Location: http://$host$uri/$extra");
    }
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
        update_send($_POST['c_title'], $_POST['c_image'], $_POST['c_desc'], $_POST['c_id']);
        break;

    case "delete":
        delete($_GET['id']);
        break;

    default:
        readALL();
        break;
}

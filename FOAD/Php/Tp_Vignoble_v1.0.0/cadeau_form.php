<?php
require_once("./header.php");
require_once("./msg_session.php");
require_once("./connect_pdo.php");
if (!empty($_SESSION['user'])) {
?>
    <section  id="cadeau">
        <div id="form_cadeau">
            <h2>Formulaire pour ajouté des cadeaux</h2>
            <form action="cadeaux.php?cadeaux=add" method="post" >
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
    $_SESSION['msg_alert'] = "Tu n'est pas connté";
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'index.php';
    header("Location: http://$host$uri/$extra");
}
require_once("./footer.php");
?>

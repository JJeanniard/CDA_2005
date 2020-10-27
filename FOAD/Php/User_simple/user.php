<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PDO</title>
</head>
<body>

<?php
$dsn = 'mysql:host=localhost;port=3306;dbname=db_users_simple;charset=utf8';

$dbconnect = new PDO($dsn, "root", "");

/**
 * CONSIGNES :
 *
 * Si le paramètre 'id' est fourni dans l'url:
 *      Afficher l'utilisateur correspondant à l'id fourni
 *      Afficher 'aucun résultat' si aucun utilisateur trouvé
 * Sinon
 *      Afficher tous les utilisateurs
 *
 */

$id = $_GET['id'] ?? 0;
$id = intval($id);

if($id > 0){

    $row = $dbconnect->prepare("SELECT * FROM users_view WHERE user_id = :id");

    $row->execute(array(':id' => $id));

    $user = $row->fetch();
    if($user){
        echo $user['user_name'];
    }else{
        echo "aucun résultat";
    }


}else{

    $row = $dbconnect->query("SELECT * FROM users_view");
    foreach ($row->fetchall() as $user){
        echo '<pre>';
        echo $user['user_name'];
        echo '</pre>';
    }
}








































/*$id = intval($id);

if ($id > 0) {

    if ($row->execute(array(':id' => $id))) {
        $user = $row->fetch(PDO::FETCH_ASSOC);
        echo $user['user_name'];
    } else {
        echo "L'utilisateur n'est pas connu!";
    }
} else {
    echo "Il faut obligatoirement un id";
}*/
?>

</body>
</html>

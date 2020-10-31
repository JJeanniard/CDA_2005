<?php
require "./Impot.php";

$is_error = false;

$lastname = $_POST['lastname'] ?? '';
$revenu = $_POST['revenu'] ?? 0;

$lastname = strip_tags($lastname);
$revenu = strip_tags($revenu);
$revenu = intval($revenu);

if(!is_string($lastname)){
    $is_error = true;
}

if(!is_long($revenu)){
    $is_error = true;
}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul impots</title>
</head>
<body>
<?php
    $host = $_SERVER['SERVER_NAME'];
    if($is_error === false){
        $calul = new Impot($lastname, $revenu);
        $calul->afficheImpot();
        echo '<br><button><a href="https://'.$host.'/impots/index.php">retour au formulaire</a></button>';
    }else{

        header("Location: http://$host/impots/index.php");
    }
?>
</body>
</html>
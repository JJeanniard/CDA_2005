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

$row = $dbconnect->prepare("SELECT * FROM users_view WHERE user_id = :id");

$id = $_GET['id'] ?? 0;
$id = intval($id);

if ($id > 0) {

    if ($row->execute(array(':id' => $id))) {
        $user = $row->fetch(PDO::FETCH_ASSOC);
        echo $user['user_name'];
    } else {
        echo "L'utilisateur n'est pas connu!";
    }
} else {
    echo "Il faut obligatoirement un id";
}
?>

</body>
</html>

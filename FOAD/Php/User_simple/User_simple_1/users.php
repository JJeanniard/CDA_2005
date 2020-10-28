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

$rows = $dbconnect->query("SELECT * FROM users_view");

foreach ($rows as $user){
    echo "id: $user[user_id], name: $user[user_name]<br>users.php";
}

?>

</body>
</html>

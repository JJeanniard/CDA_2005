<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header></header>
<main>
    <?php
    $page = $_GET['page'] ?? 'home';

    $page = basename($page);

    if (is_file($page)) {
        require "./views/$page.php";
    } else {
        require "./views/404.php";
    }
    ?>
</main>
<footer></footer>
</body>
</html>
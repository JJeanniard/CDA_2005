<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Identification</title>
</head>
<body>
<?php
if(isset($_SESSION['error']['alert'])){
    echo "<p class='alert'>".$_SESSION['error']['alert']."</p>";
    $_SESSION['error'] = null;
}

if(isset($_SESSION['error']['warning'])){
    echo "<p class='alert'>".$_SESSION['error']['warning']."</p>";
    $_SESSION['error'] = null;
}

?>

<form action="login.php" method="post">
    <label for="lastname">Last name</label>
    <input type="text" name="lastname" id="lastname" required>
    <label for="pwd">Password</label>
    <input type="password" name="pwd" id="pwd" required>
    <button type="submit">Ok</button>
</form>
</body>
</html>

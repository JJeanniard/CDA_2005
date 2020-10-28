<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul impots</title>
</head>
<body>

<form action="resultatImpot.php" method="post">
    <label for="lastname">lastname</label>
    <input type="text" name="lastname" id="lastname" required>
    <label for="revenu">Revenu</label>
    <input type="number" name="revenu" id="revenu" required>
    <button type="submit">Submit</button>
</form>

</body>
</html>
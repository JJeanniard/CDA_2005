<?php
session_start();

if(isset($_SESSION['user']['name']) && empty($_SESSION['user']['name'])){
    $_SESSION['error']['alert'] = "Tu n'est pas connécter";
    header("Location: ./index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
</head>
<body>
<section>
    <button><a href="./logout.php">Déconnection</a></button>
</section>
<section>
    <h1>Articles</h1>
    <article>
        <h2>lorem</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur, assumenda culpa cumque eius
            illum incidunt laudantium magnam, maxime modi necessitatibus numquam officia pariatur praesentium qui quis
            velit vero voluptates.</p>
    </article>
    <article>
        <h2>lorem</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam delectus deserunt dignissimos doloribus
            ducimus eaque id nostrum placeat soluta? Corporis cum ducimus minima mollitia, non qui quos tempore
            totam.</p>
    </article>
    <article>
        <h2>lorem</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam dolorum excepturi, fugiat fugit iusto
            molestias praesentium quod reiciendis sunt vel vitae voluptas voluptatum! Adipisci est necessitatibus
            officiis velit voluptatum.</p>
    </article>
    <article>
        <h2>lorem</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto consequuntur ex explicabo labore
            maxime obcaecati quasi quia quibusdam quidem! Accusantium at deserunt est, ex minus obcaecati veniam
            veritatis voluptatibus.</p>
    </article>
    <article>
        <h2>lorem</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias asperiores aspernatur consectetur cum cumque
            earum explicabo facilis illo, impedit maiores modi molestiae neque nisi omnis qui sunt voluptates? Animi,
            asperiores?</p>
    </article>
</section>
</body>
</html>

<?php
require_once("./header.php");

?>
<section id="contact">
    <h2>Contact</h2>
    <form action="contact_send.php" method="POST">
        <label for="c_email">Email:</label>
        <input type="email" name="c_email" id="c_email" placeholder="example@hotmail.fr" required />

        <label for="c_text">Text:</label>
        <textarea type="text" name="c_text" id="c_text" rows="10" required></textarea>

        <button type="submit">Envoyer</button>
    </form>
</section>
<?php
require_once("./footer.php");
?>
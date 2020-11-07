<?php
require_once("./header.php");
require_once("./msg_session.php");
?>
<section id="register">
    <h2>Login</h2>
    <form action="register_send.php" method="POST">
        <label for="rg_email">Email:</label>
        <input type="email" name="rg_email" id="rg_email" placeholder="example@hotmail.fr" required />
        <label for="rg_lastname">Last Name:</label>
        <input type="text" name="rg_lastname" id="rg_lastname" required>
        <label for="rg_firstname">First Name:</label>
        <input type="text" name="rg_firstname" id="rg_firstname" required>
        <label for="rg_pwd">Password:</label>
        <input type="password" name="rg_pwd" id="rg_pwd" required>
        <button type="submit">Envoyer</button>
    </form>
</section>
<?php
require_once("./footer.php");
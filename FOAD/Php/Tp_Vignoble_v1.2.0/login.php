<?php
require_once("./header.php");
require_once("./msg_session.php");
?>
<section id="login">
    <h2>Login</h2>
    <form action="login_send.php" method="POST">
        <label for="l_email">Email:</label>
        <input type="email" name="l_email" id="l_email" placeholder="example@hotmail.fr" required />
        <label for="l_pwd">Password:</label>
        <input type="password" name="l_pwd" id="l_pwd" required>
        <button type="submit">Envoyer</button>
    </form>
</section>
<?php
require_once("./footer.php");
?>
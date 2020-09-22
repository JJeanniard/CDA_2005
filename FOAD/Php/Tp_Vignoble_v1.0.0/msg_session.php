<?php
//TODO: definir le type
if (isset($_SESSION['msg_alert']) && !empty($_SESSION['msg_alert'])) {

    echo "<section id='message'>";
    echo "<h3>" . $_SESSION['msg_alert'] . "</h3>";
    echo "</section>";
    $_SESSION['msg_alert'] = NULL;
}

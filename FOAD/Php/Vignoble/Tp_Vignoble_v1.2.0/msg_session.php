<?php
//TODO: definir le type

if (isset($_SESSION['msg_alert']) && !empty($_SESSION['msg_alert'])) {

    echo "<section id='message_alert'>";
    echo "<h3>" . $_SESSION['msg_alert'] . "</h3>";
    echo "</section>";
    $_SESSION['msg_alert'] = NULL;
}

if (isset($_SESSION['msg_succes']) && !empty($_SESSION['msg_succes'])) {

    echo "<section id='message_succes'>";
    echo "<h3>" . $_SESSION['msg_succes'] . "</h3>";
    echo "</section>";
    $_SESSION['msg_succes'] = NULL;
}
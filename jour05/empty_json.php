<?php
    file_put_contents('session.json', '');
    echo "success";
    session_start();
    $_SESSION['loggedIn'] = false;
    session_destroy();
    exit();
?>
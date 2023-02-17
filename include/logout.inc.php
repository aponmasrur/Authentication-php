<?php
    session_start();
    session_unset();

    // destroy the session
    session_destroy();
    header("location: ../pages/req_login.php");
?>
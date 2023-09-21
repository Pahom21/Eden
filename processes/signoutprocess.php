<?php
    session_start();

    unset($_SESSION["control"]);
    header("location: ../");

    exit();
?>
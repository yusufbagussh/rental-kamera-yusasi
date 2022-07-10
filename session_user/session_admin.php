<?php

if (!isset($_SESSION["login_admin"])) {
    header("Location: ../../login.php");
    exit;
}

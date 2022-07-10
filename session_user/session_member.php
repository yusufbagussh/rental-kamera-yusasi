<?php

if (!isset($_SESSION["login_member"])) {
    header("Location: ../../login.php");
    exit;
}

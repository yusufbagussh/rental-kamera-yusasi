<?php

session_start();

if (isset($_SESSION["login_member"])) {
    header("Location: member_view/dashboard.php");
    exit;
} elseif (isset($_SESSION["login_admin"])) {
    header("Location: admin_view/dashboard_admin.php");
    exit;
}

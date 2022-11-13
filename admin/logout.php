<?php

session_start();

setcookie("user", "", time() - 86400 * 2, '/');
unset($_COOKIE['user']);


session_destroy();
header("location:../index.php");
exit;

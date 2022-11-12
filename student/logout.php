<!-- <?php

        // session_start();
        // session_destroy();
        // header("location:../index.php");
        // exit;
        ?> -->


<?php

$cookie_name = "user";
session_start();
unset($_SESSION["RollNo"]);

setcookie("user", "", time() - 86400 * 2, '/');
unset($_COOKIE['user']);

// setcookie("user", "jay", time(), "/");
header("Location:../index.php ");
session_destroy();

exit;
?>
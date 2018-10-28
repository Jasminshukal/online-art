<?php
session_start();
echo "logout";
session_destroy();
unset($_SESSION['login']);
unset($_SESSION['type']);
header("location:index.php");
?>
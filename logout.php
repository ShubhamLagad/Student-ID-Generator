<?php
session_start();
unset($_SESSION['registrationno']);
unset($_SESSION['password']);
session_destroy();
header("location:index.html");
?>
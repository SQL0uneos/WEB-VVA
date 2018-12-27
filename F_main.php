<?php

$_SESSION['Profil'] == "0";
session_destroy();

header('location:connect.php');

?>
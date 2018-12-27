<?php
session_start();

$enca = 0;


function Encadrent()
{
    if $_SESSION['Profil'] == '2'
    {
    $enca = 1
    $var = echo "<li><a href="animation.php">Activité</a></li>";
    }

    return $var;
}


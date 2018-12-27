<?php
session_start();
include 'F_BDD.php';

// Connexion a la base
$bdd = ConnexionBDD();

//Recupération de variable POST
$ID = $_POST['user'];
$PASS = $_POST['pass'];

// Condition Controleurs pour se log
if ((isset($ID)) && (isset($PASS)) && (!empty($ID)) && (!empty($PASS)))
{
$bdd = ConnexionBDD();
$response = $bdd -> query("SELECT * FROM compte WHERE USER ='".$ID."'");
$rep = $response ->fetch();

    if($ID = $rep['USER'] && $PASS = $rep['MDP'])
    {
        $_SESSION['Profil'] = $rep['TYPEPROFIL'];
        $_SESSION['ID1'] = $rep['USER'];
        header('location:main.php');
    }

    else
    {
        header('location:connect.php?erreur=existe');
    }
}

else 
{
    echo "Un des champs n'est pas renseigné";
}

?>
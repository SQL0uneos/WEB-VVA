<?php
session_start();
include 'F_BDD.php';


// Connexion à la base de donnée via la fonction ConnexionBDD
$bdd = ConnexionBDD();

// Recupération des variables post déclarés en local
$CodeA = $_POST['lstCode'];
$CodeAct = $_POST['lstEtatAct'];
$DateAct = $_POST['DateAct'];
$PrixAct = $_POST['PrixAct'];
$HeureD = $_POST['HeureD'];
$HeureF = $_POST['HeureF'];
$PrenomR = $_POST['PreResp'];
$NomR = $_POST['NomResp'];
 

// Préparation de la requête insert INTO des activités dans la base de donnés

if (isset($DateAct) && isset($PrixAct) && isset($HeureD) && isset($HeureF) && isset($PrenomR) && isset($NomR))
{
    if(!empty($DateAct) && !empty($PrixAct) && !empty($HeureD) && !empty($HeureF) && !empty($PrenomR) && !empty($NomR))
    {
        // Controle des heures
        if ($HeureD > $HeureF)
        {
            header('location:activites.php?erreur=existe');
        }
        
        else
        {
            $response = $bdd ->query("INSERT INTO activite (CODEANIM, CODEETATACT, DATEACT, PRIXACT, HRDEBUTACT, HRFINACT, NOMRESP, PRENOMRESP) 
            VALUES('$CodeA', '$CodeAct', '$DateAct', '$PrixAct', '$HeureD', '$HeureF', '$PrenomR', '$NomR')");
            
            header('location:activites.php?insert=existe');
        }
    }
}



?>
<?php
include 'F_BDD.php';

try{
    $bdd = ConnexionBDD();
} catch(Exception $e){
    print_r($e);
}

$ID = $_POST['user'];
$MDP = $_POST['mdp'];
$MAIL = $_POST['mail'];
$PRE = $_POST['pre'];
$NOM = $_POST['nom'];
$DEB = $_POST['dateD'];
$FIN = $_POST['dateF'];


if(isset($ID) && isset($MDP) && isset($MAIL) && isset($PRE) && isset($NOM) && isset($DEB) && isset($FIN))
{
$response = $bdd -> prepare("INSERT INTO compte (USER, MDP, NOMCOMPTE, PRENOMCOMPTE, ADRMAILCOMPTE, DATEDEBSEJOUR, DATEFINSEJOUR)
VALUES('$ID', '$MDP', '$MAIL', '$PRE', '$NOM', '$DEB', '$FIN')");
$response ->execute();

header('Location: main.html');
}

else
{
    echo "Un des champs n'est pas renseigné";
}

?>
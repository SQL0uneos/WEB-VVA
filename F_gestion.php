<?php
include 'F_connection_php.php';

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
        <title>PPE Village Vacance</title>
     </head>

try{
    $bdd = ConnexionBDD();
} catch(Exception $e){
    print_r($e);
}

function RecupUSER()
{
    $response = $bdd ->query("SELECT USER, MDP, NOMCOMPTE, PRENOMCOMPTE, TYPEPROFIL FROM compte");
    $rep = $response ->fetch();
    return $rep;
}



echo "<table>";

while ($rep = $response ->fetch())
{ 
 
    echo "<tr>";
    echo "<td>";
    echo $rep['USER'];
    echo "</td>";
    echo "<td>";
    echo $rep['MDP'];
    echo "</td>";
    echo "<td>";
    echo $rep['NOMCOMPTE'];
    echo "</td>";
    echo "<td>";
    echo $rep['PRENOMCOMPTE'];
    echo "</td>";
    echo "<td>";
    echo $rep['TYPEPROFIL'];
    echo "</tr>";
}

echo "</table>";

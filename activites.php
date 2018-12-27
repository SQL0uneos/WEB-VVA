<?php
include 'F_BDD.php';
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
        <title>PPE Village Vacance</title>
     </head>
     <body class="menu">
<form method="post" action="F_activites.php">
    <p><h2>Creation d'activité :</h2></p>


    <label for="code">Selectionnez un code animation</label>

    <?php
    lstBoxAct();
    ?>

    <br/>
</br>

    <label for="Etat">Choissisez l'état de l'activité :</label>

    <?php 
    lstEtatAct();
    ?>

    <br/>
</br>
    <label for="Date">Date des activites :<input type="date" name="DateAct" id="DateAct" required/></label></br>
</br>
    <label for="Prix"> Prix de l'activité :<input type="number" name="PrixAct" id="PrixAct" required/></label></br>
</br>
    <label for="HeureD"> Heure du début d'activité :<input type="time" name="HeureD" id="HeureD" required/></label></br>
</br>
    <label for="HeureF"> Heure de fin de l'activité :<input type="time" name="HeureF" id="HeureF" required/></label></br>
</br>
    <label for="PreResp"> Prenom du responsable :<input type="text" name="PreResp" id="PreResp" required/></label></br>
</br>
    <label for="NomResp">Nom du responsable :<input type="text" name="NomResp" id="NomResp" required/></label></br>
</br>
    <label> <input type="submit" value="Créer l'activité"/> </label></br>
</br>

<?php
    if (isset($_GET['erreur']))
    {
        echo "Attention la date de l'activité ne correspond pas";
    }

    if (isset($_GET['insert']))
    {
        echo "L'activités a été enrengistré";
    }
    ?>


</br>

<p><h1> Ou bien créer une animation :<p><h1>


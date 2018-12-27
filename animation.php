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
<form method="post" action="F_animation.php">
	<p><h2>Création d'animation</h2></p>

    <label for="IDAnim :">Entrez un code animation :<input type="text" name="CodeA" id="CodeA" required/></label><br/>
    <br/>
    <label for="TypeAnim :">Choissisez un type d'animation :</label>
    <?php
    lstTypeAnimation();
    ?>
    <br/>
    <label for="Nom Anim">Nom d'animation :<input type="text" name="NomAnim" id="NomAnim" required/></label></br>
    <br/>
    <label for="Date Création">Date de création d'animation :<input type="date" name="DateCrea" id="DateCrea" required/></label></br>
    <br/>
    <label for="Date Valid">Date de validité d'animation : <input type="date" name="DateLim" id="DateLim" required/></label></br>
    <br/>
    <label for="Durée d'animation">Durée de l'animation :<input type="number" name="TimeAnim" id="TimeAnim" required/></label></br>
    <br/>
    <label for="Limite d'âge">Limite d'âge : <input type="number" name="LimAge" id="LimAge" value="0" min="18" max="99" required/></label></br>
    <br/>
    <label for="Tarif Place">Prix d'animation : <input type="number" name="Price" id="Price" value="0" min="0" max="9999" required/></label> <label for="€">€</label></br>
    <br/> 
    <label for="Nombre de place">Nombre de place maximum : <input type="number" name="NbPlace" id="NbPlace" required/></label></br>
    <br/>
    <label for="Description animation">Description : <input type="text" name="DescAnim" id="DescAnim" required/></label></br>
    <br/>
    <label> <input type="submit"  value="Envoyer"/></label><br/>
    <br/>

    <?php
    if (isset($_GET['erreur']))
    {
        echo "Attention le code animation existe déjà";
    }
    ?>
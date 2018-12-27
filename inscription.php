<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
        <title>PPE Village Vacance</title>
     </head>
     <body class="menu">
<form method="post" action="F_inscription.php">
	<p><h2>Bonjour invité ! Veuillez vous inscrire</h2></p>

		<label for="Nom d'utilisateur:">ID<input type="text" name="user" id="user" required/></label><br/>
	<br/>
		<label for="Mot de passe">Pass<input type="password" name="mdp" id="mdp" required/></label><br/>
	<br/>
		<label for="Adresse mail:">Mail<input type="email" name="mail" id="mail" required/></label><br/>
    <br/>
        <label for="Prenom:">Prenom<input type="text" name="pre" id="prenom" required/></label><br/>
    <br/>
        <label for="Nom">Nom<input type="text" name="nom" id="nom" required/></label><br/>
    <br/>
		<label for="Date début séjour:">DateDeb<input type="date" name="dateD" required/></label><br/>
	<br/>
		<label for="Date fin sejour">DateFin<input type="date" name="dateF" required/></label><br/>
    </br>
		<label> <input type="submit"  value="Envoyer"/></label><br/>
	<br/>
</form>
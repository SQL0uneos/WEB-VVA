<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
        <title>PPE Village Vacance</title>
     </head>
     <body class="menu">
     <form action="F_connect.php" method="post">
             <div align="center" class="connexion">
             <label for="Username">User</label>
             <input type="text" name="user" id="user" placeholder="Votre nom d'utilisateur">
             <br>
             <br>
             <label for ="password">Pass</label>
             <input type="password" name="pass" id="pass" placeholder="Mot de passe">
             <br>
             <br>
             <input type="submit" value="Connexion" class="button3">
             <br>
             <br>
             <a href="inscription.php"><strong>Pas de compte ?<strong></a>
             </div>
         </form>

         <?php
    if (isset($_GET['erreur']))
    {
        echo "L'utilisateur ou le mot de passe est incorrect";
    }
    ?>


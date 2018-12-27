<?php
include 'F_BDD.php';
$bdd = ConnexionBDD();
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
     <form method="post" action="listAnim.php">
     <?php lstAnimation(); ?>

     <input type="submit" name="btList"/>
     </form>


     <?php AfficherAct(); ?>
     </body>
</html>



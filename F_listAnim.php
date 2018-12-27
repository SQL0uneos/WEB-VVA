<?php
/*
include 'F_BDD.php';

// Connexion à la base de donnée
$bdd = ConnexionBDD();

echo 'Veuillez selectionnez un type animation';
echo '</br>';
// Choisir une liste par l'encadrant
lstAnimation();



$rep = $bdd ->query("SELECT * FROM activite WHERE ");
while($req = $rep->fetch())
{
    ?>
    <form method="post" action="listAnim.php">

<?php
echo "<table>";
echo "<tr>";
  echo "<td>'" .$req['DATEACT']. "</td>'";
  echo "<td>'" .$req['PRIXACT']. "</td>'";
  echo "<td>'" .$req['HRDEBUTACT']. "</td>'";
  echo "<td>'" .$req['HRFINACT']. "</td>'";
  echo "<td>'" .$req['NOMRESP']. "</td>'";
 echo "</tr>";
echo "</table>";

}
?>
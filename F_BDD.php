<?php


function afficherCo(){
?>
        <form action="connection_ppe.php" method="post">
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
}
?>

<?php 

function ConnexionBDD(){

    $bdd = new PDO('mysql:host=localhost;dbname=ppe', 'root', '');
    return $bdd;
}


function lstBoxAct()
{  
    $bdd = ConnexionBDD();
    $response = $bdd ->query("SELECT CODEANIM from animation");

    echo "<select name='lstCode' id='choixCodeA'>";

    while($req = $response->fetch())
    {
        echo "<option value='" . $req['CODEANIM'] . "'>";
        //var_dump($req['CODEANIM']);
        print_r($req['CODEANIM']);
    }

    echo "</select>";

}


function lstEtatAct()
{
    $bdd = ConnexionBDD();
    $response = $bdd ->query("SELECT * FROM etat_act");

    echo "<select name='lstEtatAct' id='Choix_Etat'>";


    while($req = $response->fetch())
    {
        echo "<option value='" . $req['CODEETATACT'] . "'>";
        //var_dump($req['NOMETATACT']);
        print_r($req['NOMETATACT']);
    }

    echo "</select>";
    print_r($req);
    $response ->closeCursor();
}


function lstTypeAnimation()
{
    $bdd = ConnexionBDD();
    $response = $bdd ->query("SELECT * FROM type_anim");

    echo "<select name='lstTypeA' id='Choix_Type'>";

    while($req = $response ->fetch())
    {
        echo "<option value='" .$req['CODETYPEANIM'] . "'>";
        print_r($req['NOMTYPEANIM']);
    }
    
    echo "</select>";
    $response ->closeCursor();
}

function lstAnimation()
{
    $bdd = ConnexionBDD();
    $response = $bdd ->query("SELECT * FROM animation");

    echo '<select name="lstAnim" >';

    while($req = $response ->fetch())
    {
        echo "<option value='" . $req['CODEANIM'] . "'>". $req['NOMANIM']."</option>";
    }

    echo '</select>';
    $response ->closeCursor();
}

function ProfilAnim()
{
    if($_SESSION['Profil'] == '2' || $_SESSION['Profil'] == '1')
    {
        echo'<li><a href="animation.php">Animation</a></li>';
        echo'<li><a href="#planning">Planning</a></li>';
    }
}

function AfficherAct()
{
    $bdd = ConnexionBDD();
    $codeanim = $_POST['lstAnim'];

    if(isset($codeanim) && !empty($codeanim))
    {
        $req = $bdd ->prepare("SELECT * FROM activite WHERE CODEANIM =?");
        $response = $req ->execute(array($codeanim));

        echo "<table>";
        echo "<tr>";

        echo"<td>Nom responsable</td>";
        echo"<td>Prenom</td>";
        echo"<td>Date</td>";
        echo"<td>début</td>";
        echo"<td>Fin</td>";

        echo "</tr>";

        while($response = $req ->fetch())
        {
            echo "<tr>";

            echo"<td> ".$response['NOMRESP']." </td>";
            echo"<td>".$response['PRENOMRESP']."</td>";
            echo"<td class=acti>".$response['DATEACT']."</td>";
            echo"<td class=acti>".$response['HRDEBUTACT']."</td>";
            echo"<td class=acti>".$response['HRFINACT']."</td>";

            echo "</tr>";
        }

        echo "</table>";
    }

}

function Deco()
{
  if($_SESSION['Profil'] == '0')
  {
     header('location:connect.php');
  }  
}


?>
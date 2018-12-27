<?php
include 'F_BDD.php';

// Bloc try qui teste si la connexion a été effectué
try{
    $bdd = ConnexionBDD();
} catch(Exception $e){
    print_r($e);
}


// Récupération des variables post déclarés en local 

$CodeA = $_POST['CodeA'];
$CodeType = $_POST['lstTypeA'];
$Nom = $_POST['NomAnim'];
$DateCrea = $_POST['DateCrea'];
$DateValid = $_POST['DateLim'];
$DureeAnim = $_POST['TimeAnim'];
$LimAge = $_POST['LimAge'];
$PrixAnim = $_POST['Price'];
$NbPlace = $_POST['NbPlace'];
$Descrip = $_POST['DescAnim'];



// Condition des variables si ils existent et ne sont pas vide

if(isset($CodeA) && isset($CodeType) && isset($Nom) && isset($DateCrea) && isset($DateValid) && isset($DureeAnim) 
&& isset($LimAge) && isset($PrixAnim) && isset($NbPlace) && isset($Descrip))
{

    if (!empty($CodeA) && !empty($CodeType) && !empty($Nom) && !empty($DateCrea) && !empty($DateValid) && !empty($DureeAnim) 
    && !empty($LimAge) && !empty($PrixAnim) && !empty($NbPlace) && !empty($Descrip))
    
    {
        $bdd = ConnexionBDD();
        $response2 = $bdd ->query("SELECT * FROM animation WHERE CODEANIM ='".$CodeA."'");
        $res = $response2 ->fetch();
            
            if ($CodeA == $res['CODEANIM'])
            {
                header('location:animation.php?erreur=existe');
            }
            else
            {
                $response1 = $bdd ->prepare("INSERT INTO animation (CODEANIM, CODETYPEANIM, NOMANIM, DATECREATIONANIM, DATEVALIDITEANIM, DUREEANIM, LIMITEAGE, TARIFANIM, NBREPLACEANIM, DESCRIPTANIM) 
                VALUES('$CodeA', '$CodeType', '$Nom', '$DateCrea', '$DateValid', '$DureeAnim', '$LimAge', '$PrixAnim', '$NbPlace', '$Descrip')");
                $response1 ->execute();
                echo "Animation ajouté";
                header('Location: animation.php');
            }
    }

}


?>


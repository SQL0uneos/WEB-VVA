<?php
session_start();
include 'F_BDD.php';
Deco();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
        <title>PPE Village Vacance </title>
    </head>
    <body>
        <header>
            <div class="debut">
                <h1><a href="#main image">Village Vacances</h1>
                <nav>
                    <ul>
                        <?php 
                         echo ProfilAnim();
                        ?>
                        <li><a href="F_compte.php"><?php echo $_SESSION['ID1']; ?></a></li>
                        <?php if($_SESSION['Profil'] == '1')
                        {
                            echo'<li><a href="gestion.php">Gestion</a></li>';
                        }
                        ?>
                        <form method="post" action="F_main.php">
                        <input style="cursor: pointer;" type="submit" value="Deconnexion" name="btDeco">
                    </ul>
                </nav>
             </div>  
        </header>

        <section id="main image">
        <div class="debut">
            <h2>Organiser votre<br><strong>Activité sur mesure</strong></h2>
            <a href="activites.php" class="button1">Par ici</a>
            </div>
        </section>

        <section id="steps">
            <div class="debut">
                <ul>
                    <li id="etape1">
                        <h4>S'inscrire a des activités</h4>
                        <p>Profitez pleinement de n'importe quelle activités proposé par village vacances</p>
                    </li>
                    <li id="etape2">
                        <h4>Gérer vos activités</h4>
                        <p>Consulter vos activités pour mettre a jour vos agenda</p>
                    </li>
                    <li id ="etape3">
                        <h4>Simplicité</h4>
                        <p>Jamais vous n'aurez vu un village vacance aussi bien codé ! </p>
                    </li>
                    <div class="clear"></div>
                </ul>
             </div>
         </section>

         <section id="possibilities">
             <div class="debut">
                 <article class="oui" style="background-image:url(image/picture.png);">
                    <div class="overlay">   
                    <h4>Gérez votre planning</h4>
                    <p><small>S'assurer de toute vos réservations en temps et en heure grâce au service de planning</p></small>
                    <a href="#" class="button2">Voir planning</a>
                    </div>

                </article>

                <article class="oui" style="background-image:url(image/image2.jpg);">
                    <div class="overlay">
                    <h4>Inscription rapide</h4>
                    <p><small>Parfois une inscription rapide simplifie la vie</small></p> 
                    <a href="#" class"button2">S'inscrire</a>   
                    
                    </article>
                    <div class="clear"></div>
                </div>
                </section>

                <section id="contact">
                    <div class="debut">
                        <h3>FAQ</h3>
                        <p>Village vacance s'attribue les mérites d'être excellent c'est pour cela qu'un systeme de foire aux questions 
                            est disponible au cas où vous en avez besoin !
                        </p>

                        // Caractéristique label
                        <form>
                            <label for="name">Nom</label>
                            <input type="text" id="name" placeholder="Votre nom">
                            <label for="Email">Email</label>
                            <input type="text" id="Email" placeholder="Votre mail">
                            <input type="submit" value="ok" class="button3"> 
                        </form>
                     </div>
                </section>

                <footer>
                    <div class="debut">
                        <h1>Village vacance<span class="point"></span></h1>
                    </div>
                </footer>        

    </body>
</html>

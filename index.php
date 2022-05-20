<?php
    $_TITRE_PAGE = 'Accueil projet RS ESEO';
    $compte = false;
    if($_POST['connexion_submit'] == 1){
        if($_POST['password'] == 'network'){
            $compte = true;
        }
    }
?>





<!DOCTYPE html>
<html lang="fr">



    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css.css">
        <title><?php echo $_TITRE_PAGE ?></title>
    </head>




    <body style="background-color:#c5c2c370;">

    <ul>
      <li>
        <a>
          <div class="logo-image">
                <img src="eseo.png"  width="100%" height="100%" class="img-fluid">
          </div>
        </a>
      </li>

      <li>
        <a>Accueil</a>
      </li>

      <li>
        <a>Etudiant</a>
      </li>
    </ul>




        <div>
            <br>
            <h2>Bienvenue sur RS ESEO</h2>
            <br>
        </div>
        <?php if(!$compte){ ?>
            <div class ="carre">
                <form method="post">
                        <p>Connexion</p>
                        <br>
                        <p>
                            <label for="idmail">Email</label>
                            <input class="rounded" border-radius:20px id="idmail" name="mail" type="text">
                        </p>
                        <br>
                        <p>
                            <label for="defaultLoginFormPassword">Mot de passe</label>
                            <input class="rounded" name="password" type="password" id="defaultLoginFormPassword">
                        </p>
                        <br>
                        <button name="connexion_submit" value="1" type="submit">Connexion</button>
                        <br>
                    </form>
            </div>
        <?php }else{ ?>
            <div>
                <h2>Vous êtes connecté !</h2>
            </div>
        <?php } ?>
        
    </body>
  
</html>
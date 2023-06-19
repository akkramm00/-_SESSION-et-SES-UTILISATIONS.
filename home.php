<?php
session_start();
?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>ACCueil</title>
  </head>
  <body>
    <h2>Bienvenue sur la page d'accueil !</h2>

<?php
if(isset($_SESSION['admin']) && $_SESSION['admin'] == true) [[{ ?>



    <nav>
      <ul>
        <a href="#"><li>Gestion des utilisateurs</li></a>
        <a href="#"><li>Gestion des produits</li></a>
        <a href="#"><li>Déconnexion</li></a>
        <p>Vous etes connectés autant qu'admin</p>
      </ul>
    </nav>
<?php}else{?>
  <nav>
      <ul>
        <a href="#"><li>Accueil</li></a>
        <a href="#"><li>produits</li></a>
        <a href="#"><li>Déconnexion</li></a>
        <p>Vous etes connectés autant qu'utilisateur</p>
        
      </ul>
    </nav>
<?php} ?>

  
  
  
  




    
  </body>
</html>

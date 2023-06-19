<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <met charset="UTF-8">
    <title>Connexion</title>
  </head>
  <body>
  <pre>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
    <label for="username">Nom de l'utilisateur :</label>
    <input type="text" name="username" id="username">
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password">
    <input type="submit" name="submit" value="se connecter">
  </form>
  </pre>

    <?php
    if($_SERVER['REQUEST_METHOD'] === "POST") {

      $username = $_POST['username';
      $password =$_POST['password'];

      if($username === 'admin' AND $password = 'admin') {

    //Initialisation de la session autant qu'administrateur !
        $_SESSION['admin'] = true ;
        //Création du cookie admin !

        setcookie('user', 'admin' , time() + 3600, '/');
        
        // redirection
        header("location:home.php");
      }
      
  

      if($username === 'user' AND $password = 'user') {

    //Initialisation de la session autant qu'administrateur !
        $_SESSION['admin'] = false;
        //Création du cookie admin !

        setcookie('user', 'user' , time() + 3600, '/');
        
        // redirection
        header("location:home.php");
      }
      
        }
    ?> 


  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>
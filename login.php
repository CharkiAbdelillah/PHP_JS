<?php require_once('connexion.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="style_login.css">
</head>

<body>
    <div class="loginbox">
        <img src="images/lal.jpg" class="lal">
        <h1>Connexion</h1>
                <form method="post" >
                <p>Nom d'utilisateur</p>
                <input class="zonetext" type="text" placeholder="Entrer le nom d'utilisateur" name="txtlogin" required>
                <p>Mot de passe</p>
                <input class="zonetext" type="password" placeholder="Entrer le mot de passe" name="txtpw" required>
                <input type="submit" id='submit' class="submit" name="btlogin" value='LOGIN' > 
                <br><a href="index.php">Exit</a>
                </form>
    </div>
                 <?php 
                    if(isset($_POST['btlogin'])){//ila wrkt 3la btlogin
                    $req="select * from utilisateurs where nom_utilisateur='".$_POST['txtlogin']."' and mot_de_passe='".$_POST['txtpw']."'";
                    if($resultat=mysqli_query($cnloccar,$req)){
                        $ligne=mysqli_fetch_assoc($resultat);
                        if($ligne!=0)
                        {
                        session_start();
                        $_SESSION['login']= $_POST['txtlogin'];
                        //echo "Bienvenue".$_SESSION['login'];
                            header("location:accueil.php");
                        }
                        else {
                        // echo "<font color='#F0001D'>Login ou mot des passe est invalide !!!!</font>";
                        echo "<script>alert('vous devez completez tous les champs')
                                </script>";
                        // echo "document.location='exercice1_part1.html'";                                
                        } 
                        }    
                    }
                ?>
</body>
</html>
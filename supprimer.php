<?php require('connexion.php');?>
<!doctype html>
<meta charset="utf-8">
<link rel="stylesheet" href="loccar_style.css">
<div id="container">
<form name="formdelet" class="formulaire">
<p><a href="accueil.php" class="submit">Tableau de Bord</a></p>
<?php
 
if (isset($_GET['supCar'])) {

	$sup=$_GET["supCar"];
	
    $reqDelete="DELETE FROM automobile WHERE IMM='$sup'";
	$resultat=mysqli_query($cnloccar,$reqDelete);
    }
 
  if($reqDelete)
  {
    echo "<label style='text-align:center;color:#960406;'>La suppression a ete correctement effectuee...</label>" ;
  }
  else
  {
    echo "<label style='text-align:center;color:#960406;'>La suppression a echouee.. </label>";
  }
  ?>
  </div>
  </form>

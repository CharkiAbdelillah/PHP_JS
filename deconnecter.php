<!doctype html>
<?php
 session_start();
 session_unset();
session_destroy();
header("location:index.php");
/*
session_start				Demarre une session
session_register			Enregistre une variable de session
session_unregister			Efface une variable de session
session_is_registered		Verifie si une variable est declaree pour la session en cours
session_id					Retourne l id de la session en cours
session_name				Retourne le nom de la session en cours
session_unset				Detruit toutes les variables de la session en cours
session_destroy				Destruit la session en cours
*/

?>
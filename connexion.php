<?php 
$serveur="192.168.1.37";
$user="root";
$pssw="root";
$bdd="loccar";
$cnloccar=new mysqli($serveur,$user,$pssw,$bdd);
if($cnloccar->connect_error){
    die('Erreur : ' .$cnloccar->connect_error);
}
// echo 'Connexion réussie';
?> 

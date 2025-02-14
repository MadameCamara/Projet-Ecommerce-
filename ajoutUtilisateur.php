<?php
include("connexion.php");
$con=connexionBD();
if(isset($_POST['envoyer']))
{
     $nom=$_POST['nom'];
     $prenom=$_POST['prenom'];
     $email=$_POST['email'];
     $mdp=$_POST['mdp'];
     $date=$_POST['datenaisse'];
     $requete="insert into utilisateur (email,mot_de_passe,nom,prenom,date_de_naissance) values ('$email','$mdp','$nom','$prenom','$date')";
     if(mysqli_query($con,$requete)) 
     {
        header("location:index.php");
        exit;
      }
     else
     {
      echo('Ajout echoue');
     }
}

?>
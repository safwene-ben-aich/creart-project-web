<?php
 
//...
// Votre code
//...
// Connexion � la base de donn�es
//...
 include_once 'common.php';
 
 
 $host="localhost";
$username="root";
$pwd="";
$conn=mysql_connect($host,$username,$pwd)
or die("could not connect");
$mssg= "added successfully";
$erreur_mail="";
$erreur_user="";
//database select

mysql_select_db("creart_bd");
 
 
 

 
 $info="";
 
 
 
// R�cup�ration des variables n�cessaires � l'activation
$username = $_GET['log'];
$cle = $_GET['cle'];
 
// R�cup�ration de la cl� correspondant au $login dans la base de donn�es
$ses_sql=mysql_query("SELECT cle,actif FROM subscriber WHERE username='$username'", $conn);
 $row = mysql_fetch_assoc($ses_sql);

    $clebdd = $row['cle'];	// R�cup�ration de la cl�
    $actif = $row['actif']; // $actif contiendra alors 0 ou 1
  
 
 
// On teste la valeur de la variable $actif r�cup�r� dans la BDD
if($actif == '1') // Si le compte est d�j� actif on pr�vient
  {
     $info= "Votre compte est deja actif !";
  }
elseif($actif == '0') // Si ce n'est pas le cas on passe aux comparaisons
  {
     if($cle == $clebdd) // On compare nos deux cl�s	
       {
          // Si elles correspondent on active le compte !	
          $info= "Votre compte a bien ete active !";
 
          // La requ�te qui va passer notre champ actif de 0 � 1

		  	mysql_query("UPDATE subscriber SET actif = 1 WHERE username = '$username'");

       }
     else // Si les deux cl�s sont diff�rentes on provoque une erreur...
       {
          $info= "Erreur ! Votre compte ne peut etre active...";
       }
  }
 
 	mysql_close($conn);


include('connect.php'); 
 
//...	
// Fermeture de la connexion	
//...
// Votre code
//...


?>
<?php
error_reporting(E_ALL ^ E_NOTICE);

$host="localhost";
$username="root";
$pwd="";
$conn=mysql_connect($host,$username,$pwd)
or die("could not connect");
$mssg= "added successfully";

//database select

mysql_select_db("creart_bd");

//insert subscriber


$username=$_POST['username'];

$Birthday=$_POST['Birthday'];














$ses_sql=mysql_query("select * from subscriber where username = '$username' and birthday='$Birthday'", $conn);
$row = mysql_fetch_assoc($ses_sql);





$email=$row['email'];
$pwd=$row['pwd'];	
$name=$row['name'];   

	
	
	
	$destinataire = $email;
$sujet = "Mot de passe oublié" ;
$entete = "From: Creart.com" ;
 
// Le lien d'activation est composé du login(log) et de la clé(cle)
$message = 'Bienvenue sur Creart.com,
 
cher (e) '.$name.', voici votre mot de passe: '.$pwd.' 
 
---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';
 
 
mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
	
	
	

	mysql_close($conn);


	
	
		
header('Location: connect.php');



?>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );
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

//insert subscriber

$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
//$BirthMonth=$_POST['BirthMonth'];
$Birthday=$_POST['Birthday'];
//$birthyear=$_POST['birthyear'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$Country=$_POST['Country'];
//$pic=$_POST['pic'];
if (isset($_POST['Interested1'])){
$Interested1=$_POST['Interested1'];
}if (isset($_POST['Interested2'])){
$Interested2=$_POST['Interested2'];
}if (isset($_POST['Interested3'])){
$Interested3=$_POST['Interested3'];
}if (isset($_POST['Interested4'])){
$Interested4=$_POST['Interested4'];
}

//$birthday=$birthyear.'/'.$BirthMonth.'/'.$BirthDay;
$Interested=$Interested1." ".$Interested2." ".$Interested3." ".$Interested4;
//$sqldate=date('YY-mm-dd',strtotime($birthday));





$target_dir = "uploads_user_pic/";
$target_file = $target_dir . basename($_FILES["pic"]["name"]);
$uploadOk = 1;
$erreur_upload = "";

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"]) ) {
    $check = @getimagesize($_FILES["pic"]["tmp_name"]);
    if($check !== false) {
        $erreur_upload = "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $erreur_upload = "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $erreur_upload = "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["pic"]["size"] > 500000000) {
    $erreur_upload = "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $erreur_upload = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $erreur_upload = "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
        $erreur_upload = "The file ". basename( $_FILES["pic"]["name"]). " has been uploaded.";
    } else {
        $erreur_upload = "Sorry, there was an error uploading your file.";
    }
}





$pic=$target_file;











if (mysql_query("INSERT INTO subscriber (name,email,username,pwd,birthday,gender,mobile,country,pic,interested) VALUES ('$name','$email','$username','$password','$Birthday','$gender','$phone','$Country','$pic','$Interested')"))
{

$cle = md5(microtime(TRUE)*100000);
	mysql_query("UPDATE subscriber SET cle = '$cle' WHERE username = '$username'");

	
	
	
	
	$destinataire = $email;
$sujet = "Activer votre compte" ;
$entete = "From: 3azouz3atef@gmail.com" ;
 
// Le lien d'activation est composé du login(log) et de la clé(cle)
$message = 'Bienvenue sur Creart.com,
 
Pour activer votre compte, veuillez cliquer sur le lien ci dessous
ou copier/coller dans votre navigateur internet.
 
http://127.0.0.1/creart.com/activation.php?log='.urlencode($username).'&cle='.urlencode($cle).'
 
 
---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';
 
 
mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail
	
	
	

	mysql_close($conn);


include('connect.php');

	
	}else{
		mysql_close($conn);
		$erreur_mail = "e-mail is used";
		$erreur_user = "username is used";

		include('subscribe.php');

		
		}





?>


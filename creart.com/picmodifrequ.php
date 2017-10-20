<?php
include('session.php');





$target_dir = "uploads_user_pic/";
$target_file = $target_dir . basename($_FILES["pic"]["name"]);
$uploadOk = 1;
$erreur_upload = "";

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["pic"]["tmp_name"]);
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













$user_check=$row['username'];


//$pic=$_POST['pic'];
$pic=$target_file;




$query1 = "UPDATE subscriber SET pic='$pic' WHERE username='$user_check'";
$res = mysql_query($query1);


header('location:myaccount.php'); // Redirecting To Home Page



?>


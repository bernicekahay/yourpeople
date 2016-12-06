<?php require_once(__DIR__."/../includes/config.php"); ?>
<?php require_once(__DIR__."/../includes/functions.php"); ?>
<?php require_once(__DIR__."/../includes/header.php"); ?>
<?php

$imagename=$_FILES["image"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['image']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO image_table VALUES('$imagetmp','$imagename')";

mysql_query($insert_image);

?>
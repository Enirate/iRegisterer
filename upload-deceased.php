<?php
require_once'modelsDB/functions.php';
require_once'modelsDB/dbHelper.php';

$errors = array();
$data = array();

// call ImageHandler and retrieve the filename for  Profile Photo

$filename = $_FILES['pic']['name'];
$tmpfilename = $_FILES['pic']['tmp_name']; 
$entity = "dead" ;
if (imageHandler($filename,$tmpfilename,$entity) == !false) {

    $newfilename = imageHandler($filename,$tmpfilename,$entity);
}
else{
        $newfilename = "" ;
}
// echo $newfilename;
// print_r($_FILES);
// print_r($_POST);
// exit();


if(empty($_POST['name'])) 
{
    $errors['name'] = "Name is required";
}

if(empty($_POST['bio'])) 
{
    $errors['bio'] = "Bio is required";
}

if(empty($_POST['dod'])) 
{
    $errors['dod'] = "Date of death is required";
}

// if(empty($_POST['pic'])) 
// {
//     $errors['name'] = "Deceased picture is required";
// }

if(!empty($errors)) 
{
    $data["success"] = false;
    $data["errors"] = $errors;
}
else
{   if(registreDead($db, $_POST['name'], $_POST['bio'], $datetime, $_POST['dod'], $newfilename) == true){    
        $data["success"] = true;
        $data["message"] = "success";
    }
}

?>
<?php
require_once'modelsDB/functions.php';
require_once'modelsDB/dbHelper.php';

$errors = array();
$data = array();

// call ImageHandler and retrieve the filename for  Profile Photo

$filename = $_FILES['pic']['name'];
$tmpfilename = $_FILES['pic']['tmp_name']; 
$entity = "condo" ;
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

if(empty($_POST['message'])) 
{
    $errors['message'] = "Condolence message is required";
}

if(empty($_POST['phone'])) 
{
    $errors['phone'] = "Phone is required";
}


if(!empty($errors)) 
{
    $data["success"] = false;
    $data["errors"] = $errors;
}
else
{   
    // die("aaaa");
    if( registerMsg($db, $_POST['name'], $_POST['message'], $datetime, $_POST['id'], $newfilename, $_POST['phone']) == true){    
        $data["success"] = true;
        $data["message"] = "success";
    }
    else{
        $data["success"] = false;
        $data["message"] = "Not successful";
    }
}

?>
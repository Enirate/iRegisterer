<?php 
require_once 'dbHelper.php';
$db = new dbHelper();

  $datetime = date('Y-m-d H:i:s'); 

  $base_server = "http://localhost/h/admin" ;

// function to check the entity so as to insert image into the right image directory
function CheckEntity($entity){
    if ($entity=="dead") {
        return("modelsDB/dead-img");
    }
    elseif ($entity=="condo") { 
        return("modelsDB/condo-img");
    }
}

//function to handle images
function imageHandler($filename,$tmpfilename,$entity)
{     
    
       $filename_ext = pathinfo($filename, PATHINFO_EXTENSION);

       if($filename_ext=="jpg" or $filename_ext=="JPG" or $filename_ext=="JPEG" or $filename_ext=="png" or $filename_ext == "jpeg" or $filename_ext == "gif" or $filename_ext == "pdf" or $filename_ext == "PDF")
       {
           $newfilename = time().".".$filename_ext;
           move_uploaded_file($tmpfilename,CheckEntity($entity)."/".$newfilename) ;
           
               return $newfilename;
           }
           else
           {
               //echo "Operation not completed";
                 return false;
           }
           
       } 



// Function to creat Slug field

function CreateSlug($string) {

    $table = array(
            'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
            'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
            'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
            'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
            'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
            'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
            'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r', '/' => '-', ' ' => '-'
    );

    // -- Remove duplicated spaces
    $stripped = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $string);

    // -- Returns the slug field 
    return strtolower(strtr($string, $table));


}

//  function to fommat date to yyyy-mm-dd from yyyy/mm/dd 

function DoDate($datee){

            $date_regex = '/(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/' ;

            return preg_match($date_regex, $datee) ;
}



// function to register a dead person
function registreDead($db, $name, $bio, $datetime, $death_date, $image){
    $slug = CreateSlug($name);
    $insert = $db->insert("deadpeople", array( 'name' => "$name",  'slug' => "$slug", 'bio' => "$bio", 'upload_date' => "$datetime", 'death_date' => "$death_date", 'image' => "$image"), array('name'));

    if ($insert['status'] == "success") {
      return true;
    }else {
      return false;
    }
}


// function to register a condolence message
function registerMsg($db, $name, $message, $datetime, $death_person, $picture, $phone){
    $insert = $db->insert("condolences", array( 'name_poster' => "$name", 'message' => "$message", 'phone' => "$phone", 'date_posted' => "$datetime", 'death_person' => "$death_person", 'picture' => "$picture"), array());
    print_r($insert);
    exit;
    if ($insert['status'] == "success") {
      return true;
    }else {
      return false;
    }
}


// function to update a dead person
function updateDead($db, $name, $bio, $datetime, $death_date, $image,$id){
    // $slug = CreateSlug($cat_name);
    $insert = $db->update("deadpeople", array( 'name' => "$name", 'bio' => "$bio", 'upload_date' => "$datetime", 'death_date' => "$death_date", 'image' => "$image"), array('id'=>$id), array('name'));
    if ($insert['status'] == "success") {
      return true;
    }else {
      return false;
    }
}



// Function to Get All dead people
function getDead($db){
    $row = $db->select("deadpeople", array());
    print_r(json_encode($row));
}

// Function to Get a dead person condolences
function getComment($db,$id){
    $row = $db->select("condolences", array('death_person'=>$id));
    print_r(json_encode($row));
}


// Function to Get All dead people
function getADeadPerson($db,$id){
    $row = $db->select("deadpeople", array('id'=>$id));
    print_r(json_encode($row));
}

// function to Delete Event

function deleteAdead($db,$id){ 
  // $string = $
  $rows = $db->delete("deadpeople", array('id'=>$id) );

     if ($rows['status'] == "success") {
       return true ;
      }
        else{
       return false;
    }
}


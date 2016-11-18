<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// Checks and handles POST requests0
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require_once("functions.php") ;

	$obj = $_GET['obj'] ;
	$errors = array();
	$data = array();

	// Getting posted data and decoding json
	$_POST = json_decode(file_get_contents('php://input'), true);

		// Handles Shop registration
		if ($obj == 'regDead') {

			// Checking for empty values  
			if (empty($_POST['name'])) 
				$errors ['name'] = 'name is  required';

			// Checking for empty values  
			// if (empty($_POST['ppt_agent'])) 
			// 	$errors ['ppt_agent'] = 'Please Select agent';

			if (!empty($errors)) { 
				
				$data ['errors'] = $errors;

			}else {

				if (registreDead($db, $_POST['name'], $_POST['bio'], $datetime, $_POST['death_date'], $_POST['image']) == true) {

				$data ['message'] = "Dead  successfully added";
				$data ['status'] = "success";

				}else {

					$data ['message'] = "Not registered";
					$data ['status'] = "warning";
				}
			}
			echo json_encode($data);
		}
	}


// checks and handles get requests 

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

		require_once("functions.php");
	
		header('Content-Type: application/json');
		// Get All dead
		if ($_GET['obj'] == "getDead") {	
			return getDead($db);
		}
		// Get All a dead
		elseif ($_GET['obj'] == "getADeadPerson") {	
			$id = $_GET['id'];
			return getADeadPerson($db,$id);
		}

		elseif ($_GET['obj'] == "getComment") {	
			$id = $_GET['id'];
			return getComment($db,$id);
		}
}


// Checks and handles put requests

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
		require_once("functions.php");
		header('Content-Type: application/json');	
		$data = array();	

		// Delete Agents
		if ($_GET['obj'] == "deleteEvents") {
			$id = $_GET['id'] ;	
			if (deleteEvents($db,$id) == 'true' ) {
				$data['status'] = 'success';
				$data['message'] = 'successfully deleted';					
			}	
			else {
				$data['status'] = 'warning';
				$data['message'] = 'not deleted';
			}
			echo json_encode($data);
		}
}

<?php 

require_once '../includes/DbOperations.php';
require_once "../../dbconect/User.php";

$response = array(); 

if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['username']) and isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(User::find($username,"%",$password)){
			$user = User::find($username,"%",$password);
			$response['error'] = false; 
			$response['id'] = "".$user[0]->userid;
			$response['email'] = "".$user[0] ->email;
			$response['username'] = "".$user[0] ->fname;
		}else{
			$response['error'] = true;
			$response['message'] = "Invalid username or password";			
		}

	}else{
		$response['error'] = true; 
		$response['message'] = "Required fields are missing";
	}
}

echo json_encode($response);

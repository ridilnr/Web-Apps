<?php
session_start();
require_once "dbconnect.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST['login'])){
        if(isset($_POST['email']) && isset($_POST['password'])){
            $sql = "SELECT * FROM userinfo WHERE emailid = :email AND  password = :password";
            $statement = $pdo->prepare($sql);
            try{
                $statement->execute(array(
                    ':email' => $_POST['email'],
                    ':password' => hash('md5', $_POST['password'])
                ));
                echo hash('md5', $_POST['password']);
                $result = $statement->fetch(PDO::FETCH_ASSOC);
                if($result){
                    $_SESSION['userFirstName'] = $result->firstname;
                    $_SESSION['userLastName'] = $result->lastname;
                    $_SESSION['userEmail'] = $result->emailid;
                    $_SESSION['successLogin'] = "You have logged in successfully";
                    header("location: ../index.php");
                    return;
                }else{
                    $_SESSION['errorLogin'] = "Email or password is incorrect";
                    header("location: index.php");
                    return;
                }
            }catch (PDOException $e){
                $_SESSION['errorLogin'] = "An error occurred. Please contact admin.";
                header("location: index.php");
                return;
            }
        }else{
            $_SESSION['errorLogin'] = "Invalid input. Please try again";
            header("location: index.php");
            return;
        }
    }else{
        $_SESSION['errorLogin'] = "An unexpected error occurred. Please contact admin.";
        header("location: index.php");
        return;
    }
}

/* $error='';
 if(isset($_POST['submit'])){
	 if(empty($_POST['email'])||empty($_POST['password'])){
		 $error = "Wrong email or password";
	 }
	 else{
		$email = $_POST['email'];
		$password = $_POST['password']; 
	
		$conn = mysqli_connect("localhost", "root","");
		$email = stripslashes($email);
		$password = stripslashes($password);
		$email = mysqli_real_escape_string($conn, $email);
		$password = mysqli_real_escape_string($conn, $password);
		$db = mysqli_select_db($conn, "mishovau");
		$sql = mysqli_query($conn, "select * from userinfo where password='$password' AND email_id='$email' ");
		$rows = mysqli_num_rows($sql);
		if($rows == 1){
			$_SESSION['login_user']=$email;
			
			header("location: profile.php");
			
		}else{
			$error="Email or password is invalid";
			echo $error;
		}mysqli_close($conn);
	 }
 }


*/
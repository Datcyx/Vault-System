<?php
session_start();
if(isset($_SESSION["login"]) && $_SESSION["login"] == true){
		header("Location:http://localhost/died/files.php");
}
$pass= $_POST["password"];
//static password
$mypasscode = "changeme";

if (empty($pass)) {
 echo "password is empty";
}else{
	if($pass==$mypasscode){
		
		$_SESSION["login"] = true;
		header("Location:http://localhost/died/files.php");

	}else{
			header("Location:http://localhost/died/index.php");
	}
}
?>
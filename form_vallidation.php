
<?php
	$fnameErr=$lnameErr=$emailErr=$pswErr = $psw_repeatErr=""; 
	$fname = $lname = $email = $psw = $psw_repeat = "";
	
	if($_SERVER["REQUEST_METHOD"] = "POST"){
		if(empty($_POST["fname"])){
			$fnameErr = "First Name is required"
		}else { $fname = test_input($_POST["fname"]); }
		
		if(empty($_POST["lname")){
			$lnameErr = "Last name is required";
		}else{$lname = test_input($_POST["lname"]);}
		
		if(empty($_POST["email"])){
			$emailErr= "Email is required";
		}else {$email = test_input($_POST["email"]); }
		
		if(empty($_POST["psw"])){
			$pswErr = "Password is required";
		} else{	$psw = test_input($_POST["psw"]);}
		
		if(empty($_POST["psw_repeat"])){
			$psw_repeatErr = "Repeat the password please";
		} else {$psw_repeat = test_input($_POST["psw_repeat"]);}
		
	}
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;		
	}
	
	echo "This is a php file";
?>

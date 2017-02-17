
<?php
session_start();
ob_start();	
include ("connect.php");
// isset -- it will only run if LOGOUT LINK button is clicked

	// isset -- it will only run if SUBMIT BUTTON  has submitted
		//importing
		$username = $_POST["username"];
		$password = $_POST["password"];

		//check if both inuts have vvalue
		if ($username!="" && $password!="") {
				
			//query into the database
    $query="SELECT * FROM `user` where username='$username' AND password='$password'";
    $run=(mysql_query($query)) or die (mysql());
    if (mysql_num_rows($run)>0){
			//validate 
				$getCheckrows=mysql_fetch_assoc($run);
				$_SESSION['sessionUsername']=$getCheckrows["username"];
				//Validate permission
				if ($getCheckrows["user_level"] == "admin") {
						$_SESSION['login_user'] = $username;
						$_SESSION['sessionPermission']=$getCheckrows["user_level"]; // Initializing 
					echo "Admin";
					 header("Location: about.php ");
				}
				else if ($getCheckrows["user_level"] == "client") {
					$_SESSION['login_user'] = $username;
					$_SESSION['sessionPermission']=$getCheckrows["user_level"]; // Initializing Session
					echo "Client";
					header("Location: index1.php ");
						
				}
				

			}else{
					echo "need to register";
				}


		}else{
			echo "Please fill all the text box!!";
		}
	
?>
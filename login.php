<?php
   session_start();  
   include "connection.php";
   $connection= new make_connection();
   $conn=$connection->connect();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Log in </title>
</head>
<body>
	<?php

		if (isset($_POST['email'])) {
			if (isset($_POST['password'])) {
				
				class user_login{

		    	public $email;
		    	public $password;

		    	// A function for input validation.
		    	public function validation($data)
					{
						$data=trim($data);
						$data=htmlspecialchars($data);
						$data=stripcslashes($data);
						return $data;
					}

		    }

		    // Creating new object of the class..

		    $loginValue = new user_login();

		    // Getting value from field and initialized to the variable in login class with validation..
		    if($_SERVER['REQUEST_METHOD'] == "POST") {
				
			 $loginValue->email = $loginValue->validation($_POST['email']);
		     $loginValue->password = $loginValue->validation($_POST['password']);

			}

			// A query for getting value from database.
			$sql="SELECT user_id,email,password FROM register WHERE email='".$loginValue->email."' AND password='".$loginValue->password."' ";

		   

		   $query=mysqli_query($conn,$sql);

		   $numrows=mysqli_num_rows($query); 

		  if($numrows !=0)  
			{  
				// getting database value from register table and initialized to a variable.
				while($row=mysqli_fetch_assoc($query))  
				{  
					$dbemail=$row['email'];  
					$dbpassword=$row['password'];
					$user_id=$row['user_id']; 
				}  

				if($loginValue->email == $dbemail && $loginValue->password == $dbpassword)  
				{  
				 
				 // get session id for user .
				 $_SESSION['sess_id'] = $user_id;

					echo "<script>
							window.location.href='homepage.php';
						
						</script>";

			 
			  }  
		    } 


		    else if($numrows == 0) {
		    	// check value from admin table..

		    	// A query for getting value from database.
				$sql="SELECT admin_id,email,password FROM admin WHERE email='".$loginValue->email."' AND password='".$loginValue->password."' ";

				$query=mysqli_query($conn,$sql);

		  		$numrows=mysqli_num_rows($query); 

		  		if($numrows !=0)  
				{  
					// getting database value from register table and initialized to a variable.
					while($row=mysqli_fetch_assoc($query))  
					{  
						$dbemail=$row['email'];  
						$dbpassword=$row['password'];
						$admin_id=$row['admin_id']; 
					}  

					if($loginValue->email == $dbemail && $loginValue->password == $dbpassword)  
					{  
					 
					 // get session id for user .
					 // $_SESSION['sess_id'] = $admin_id;

						echo "<script>
								window.location.href='adminPanel.php';
							
							</script>";

			 
			  	    }  
		    	} 
		    	else {  
					echo "<script>
						alert('Invalid Username Or Password.');
						window.location.href='loginPage.php';
					</script>"; 

			} 

		    }
		    else {  
			echo "<script>
					alert('Invalid Username Or Password.');
					window.location.href='loginPage.php';
				</script>"; 

			} 




			}
		}

	     

    	// set cookie for remembering password.

    if (isset($_POST['checkbox'])) {
       	setcookie ("email",$_POST["email"],time()+ 3600*24);
		setcookie ("password",$_POST["password"],time()+ 3600*24);
       }
    else{

    	setcookie("username","");
		setcookie("password","");
    }

	?>

 </body>
 </html>
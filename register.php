<?php include "connection.php";
$connection= new make_connection();
$conn=$connection->connect();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register process</title>
</head>
<body>
	<?php

		 class Registration{

			public $fname;
			public $lname;
			public $email;
			public $phone;
			public $address;
			public $dob;
			public $gender;
			public $rel;
			public $password;
			
			public function validation($data)
				{
					$data = trim($data);
					$data = stripslashes($data);
					$data = htmlspecialchars($data);
			        return $data;
				}

		}

		//$fname= $lname = $phone = $email = $dob = $rel = $gender = $address = $password = "";

		//Create object for the required class.
		$fieldValue = new Registration();
		

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$fieldValue->fname = $fieldValue->validation($_POST['fname']);
		$fieldValue->lname = $fieldValue->validation($_POST['lname']);
		$fieldValue->email = $fieldValue->validation($_POST['email']);
		$fieldValue->phone = $fieldValue->validation($_POST['Phone']);
		$fieldValue->address = $fieldValue->validation($_POST['address']);
		$fieldValue->dob = $fieldValue->validation($_POST['dob']);
		$fieldValue->gender = $fieldValue->validation($_POST['Gender']);
		$fieldValue->rel = $fieldValue->validation($_POST['Relegion']);
		$fieldValue->password = $fieldValue->validation($_POST['password']);

		}

		
		$query = "INSERT INTO register (user_id,fname,lname,email,phone,address,dob,gender,relegion,password)
				VALUES ('','$fieldValue->fname', '$fieldValue->lname','$fieldValue->email', '$fieldValue->phone','$fieldValue->address','$fieldValue->dob','$fieldValue->gender','$fieldValue->rel','$fieldValue->password')";

		if (mysqli_query($conn,$query)) {
				          // header("Location: login.html");
				          // exit();
							echo "<script>
							alert('You Have Registered Successfully.');	
							window.location.href='loginPage.php';
							</script>";
						}
						else
							{
							  
							  echo "Some error occurs...";
							}

	?>

</body>
</html>
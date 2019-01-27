<?php
	session_start();	
	include "connection.php";
	$connection= new make_connection();
	$conn=$connection->connect();

		
	if (isset($_SESSION['sess_id'])) {
		
	
		class field{

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

		// Call an object for the class...

		$fieldValue = new field();

		// get value from field..

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$fieldValue->fname = $fieldValue->validation($_POST['fname']);
		$fieldValue->lname = $fieldValue->validation($_POST['lname']);
		$fieldValue->email = $fieldValue->validation($_POST['email']);
		$fieldValue->phone = $fieldValue->validation($_POST['phone']);
		$fieldValue->address = $fieldValue->validation($_POST['address']);
		$fieldValue->dob = $fieldValue->validation($_POST['dob']);
		$fieldValue->gender = $fieldValue->validation($_POST['gender']);
		$fieldValue->rel = $fieldValue->validation($_POST['relegion']);
		$fieldValue->password = $fieldValue->validation($_POST['password']);

		}


		$user_id=$_SESSION['sess_id'];

		//query for value insert...
		$sql="UPDATE register SET fname='$fieldValue->fname',lname='$fieldValue->lname',email='$fieldValue->email',phone='$fieldValue->phone',gender='$fieldValue->gender',dob='$fieldValue->dob',relegion='$fieldValue->rel',address='$fieldValue->address', password='$fieldValue->password' WHERE user_id='$user_id' ";
		if (mysqli_query($conn, $sql)) {
		          
					echo "<script>
					window.location.href='UserProfile.php';
					</script>";
				}
				else
					{
					  
					  echo "<script>
					alert('Some error occurs.Please try again.');
					window.location.href='UserProfile.php';

					</script>";
					}

		}

		else
					{
					  
					  echo "<script>
					alert('You are not a registered user.Please register and try again.');
					window.location.href='UserProfile.php';

					</script>";
					}
			?>
<?php
  session_start();
  include "connection.php";
  $connection= new make_connection();
  $conn=$connection->connect();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile update</title>
</head>
<body>
	<?php
	if (isset($_SESSION['sess_id'])) {
		if (isset($_POST['upload'])) {
		$target="move_uploaded_file/".basename($_FILES['image']['name']);

			//get the value from form.
			$image= $_FILES['image']['name'];
			$_SESSION['img_name']=$image;

			//Get user id by session...

			$user_id=$_SESSION['sess_id'];

			$sql="UPDATE register SET image='$image' WHERE user_id='$user_id' ";

			if (mysqli_query($conn, $sql)) {

				if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

					echo "<script>
								
								window.location.href='UserProfile.php';
								</script>";
							}
							else
								{
								  
								  echo "<script>
								alert('There was a problem uploading your profile picture.');
								
								</script>";
								}
				}
			}

			else{
				echo "<script>
							alert('Please select an image and try again.');
							window.location.href='UserProfile.php';
					</script>";
			}

	}
	else{
		echo "<script>
					alert('You are not a registered user.Please register and try again.');
					window.location.href='UserProfile.php';
			</script>";
	}


	?>

</body>
</html>
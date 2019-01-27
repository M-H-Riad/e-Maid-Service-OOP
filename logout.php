<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
	<?php
		session_destroy();
		 echo "<script>
					alert('You have Logged out Successfully.');
					window.location.href='homepage.php';
				</script>";

	?>

</body>
</html>
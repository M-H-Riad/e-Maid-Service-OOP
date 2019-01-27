<?php
include "adminPanel.php";
// include "connection.php";
// $connection= new make_connection();
// $conn=$connection->connect();
$connection=new mysqli("localhost", "root", "","eMaid");


$sql="UPDATE request SET status='1' WHERE request_id=$request_id ";
$result=mysqli_query($connection,$sql);
if ($result) {

		echo "<script>
		window.location.href='adminPanel.php';
		</script>";
	}
	else
		{
		  
		  echo "<script>
		  		alert('Some error occurs');
		  		window.location.href='adminPanel.php';
		  		</script>";
		}




?>
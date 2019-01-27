<?php 
session_start();
include "connection.php";
$connection= new make_connection();
$conn=$connection->connect();
    //$sql="SELECT * from register where user_id='$user_id' ORDER by '1'  ASC";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="adminStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body class="body">

	<nav class="navbar navbar-expand bg-dark navbar-dark">
	<!-- Brand name -->
	<a class="navbar-brand" href="adminPanel.php">Admin Panel</a>

		<!-- Menu -->
	<ul class="navbar-nav">
		<li class="nav-item">
  			<a class="nav-link text-light" href="adminPanel.php">Customer Request</a>
		</li>

		<li class="nav-item">
  		<a class="nav-link text-light bg-danger" href="logout.php"> Log out </a>
		</li>

	</ul>
	</nav>
    

	<div class="container-fluid">
		<h2 id="req">Customer Request</h2>
		<table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Time Slot</th>
        <th>Time Period</th>
        <th>Current Address</th>
        <th>Location</th>
        <th>Works</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php

     $sql="SELECT fname,email,phone,request_id,sTime,eTime,cAddress,duration,location,work FROM register INNER JOIN request ON register.user_id=request.user_id WHERE request.status=0 ORDER BY 1 DESC";

    $query=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($query)) {
        $request_id=$row['request_id'];
        $fname=$row['fname'];
        $email=$row['email'];
        $phone=$row['phone'];
        $sTime=$row['sTime'];
        $eTime=$row['eTime'];
        $duration=$row['duration'];
        $address=$row['cAddress'];
        $location=$row['location'];
        $work=$row['work'];

        echo"
        <tr>
        <td>$fname</td>
        <td>$phone</td>
        <td>$email</td>
        <td>$sTime to $eTime</td>
        <td>$duration</td>
        <td>$address</td>
        <td>$location</td>
        <td>$work</td>
        <td>
            <a href='approve.php' class='button-hover'> <input type='button' class='button button-light bg-success text-light' name='Accept' value='Accept'></a>
            <a href='delete.php' class='button-hover'> <input type='button' class='button button-light bg-danger text-light' name='Accept' value='Delete'></a>
        </td>

        </tr>";
         }
   
     ?>

      <!-- <tr>
        <td>name</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>Example</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>example</td>
        <td>
        	<a href="#" class="button-hover"><input type="button" class="button button-light bg-success text-light" name="Accept" value="Accept"></a>
        	<input type="button" class="button button-light bg-danger text-light" name="Decline" value="Decline">
        </td>
      </tr> -->
      
    </tbody>
  </table>
	</div>


    



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
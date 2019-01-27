<?php
	session_start();
	include "connection.php";
	$connection= new make_connection();
	$conn=$connection->connect();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="UserProfileStyle.css">
	<link rel="stylesheet" type="text/css" href="homeStyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style>
	.place {
    height: 160px;
    width: 160px;
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    vertical-align: middle;
    text-align: center;
    color: transparent;
    transition: all .3s ease;
    text-decoration: none;
	box-shadow: 0 2px 2px black;
	box-sizing: border-box;
	overflow: hidden;
}

#p_pic{
	width: 160px;
	height: 160px;
	overflow: hidden;
}
	</style>
</head>
<body class="body">
	<nav class="navbar navbar-expand bg-dark navbar-dark navbar-fixed-top navbar-custom">
	<!-- Brand name -->
	<a class="navbar-brand" href="homepage.php"><span class="navbar-logo">e-Maid Service</span></a>

		<!-- Menu -->
	<div class="topnav-right">
		
		<ul>
			<li id="menu">
				<a class="nav-link text-light" href="homepage.php">Home</a>
			</li>

			<li class="nav-item ">
				<a class="nav-link text-light" href="UserProfile.php">Profile</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-light" href="contact.php">Contact</a>
			</li>

			<li class="nav-item">
				<a class="nav-link text-light" href="tc.php">Terms & Conditions</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-light" href="aboutUs.php">About us</a>
			</li>

			<li class="nav-item">
			<?php 
			if(!isset($_SESSION['sess_id']))
			   {
			    echo '<li><a href="loginPage.php">Login</a></li>';
			    echo '<li><a href="reg.php">Registration</a></li>';
			   }
			else
			{
			    echo '<li><a href="logout.php">Logout</a></li>';
			}
			?>
		   </li>
			  </div>
			</li>
		</ul>
	</div>
	</nav>


	<!-- Body content -->
<div class="login">
		 
	<form class="table table-hover" id="table" method="POST" action="profile_pic_update.php" enctype="multipart/form-data">
		<div id="pic_frame">
			<?php 
				if (isset($_SESSION['sess_id'])) {
				$user_id=$_SESSION['sess_id'];
				$sql="SELECT * FROM register WHERE user_id='$user_id' ";
				$result=mysqli_query($conn, $sql);
				while ($row=mysqli_fetch_array($result)) {
					echo "<div class='place'>";
					echo "<img src='move_uploaded_file/".$row['image']."' id='p_pic' >";
					echo "</div>"; 
				}
			}
			else{
				session_destroy();
			}
				?>
				
		</div>

				<!-- For updating profile picture -->
				<input type="file" name="image" value="Change Picture" required="required" id="file">
				<input type="submit" name="upload" value="Change Picture" id="upload">
				<!-- <a href="profile_pic_update.php" id="upload"> Upload Image </a> -->

		<table>
			<tr>
				<td>First Name</td>
					<?php 
						if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
							while ($row=mysqli_fetch_array($result)) {
								echo "<td>".$row['fname']."</td>";
							}
					    }
					    else{
								echo "<br>"."<b>"."You are not a registered user."."</b>";
							}
					?>
			</tr>
			<tr>
				<td>Last Name</td>
				<?php 
					if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
						while ($row=mysqli_fetch_array($result)) {
							echo "<td>".$row['lname']."</td>";
						}
					}
					else{
						
						}
				?>
			</tr>
			<tr>
				<td>E-mail</td>
				<?php 
					if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
						while ($row=mysqli_fetch_array($result)) {
							echo "<td>".$row['email']."</td>";
						}
					}
					else{
						
						}
				?>
			</tr>
			<tr>
				<td>Phone</td>
				<?php 
					if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
						while ($row=mysqli_fetch_array($result)) {
							echo "<td>".$row['phone']."</td>";
						}
					}
					else{
						
						}
				?>
			</tr>
			<tr>
				<td>Address</td>
				<?php 
					if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
						while ($row=mysqli_fetch_array($result)) {
							echo "<td>".$row['address']."</td>";
						}
					}
					else{
						//session_destroy();
						}
				?>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<?php 
					if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
						while ($row=mysqli_fetch_array($result)) {
							echo "<td>".$row['dob']."</td>";
						}
					}
					else{
						//session_destroy();
						}
				?>
			</tr>
			<tr>
				<td>Gender</td>
				<?php 
					if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
						while ($row=mysqli_fetch_array($result)) {
							echo "<td>".$row['gender']."</td>";
						}
					}
					else{
						//session_destroy();
						}
				?>
			</tr>
			<tr>
				<td>Relegion</td>
				<?php 
					if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
						while ($row=mysqli_fetch_array($result)) {
							echo "<td>".$row['relegion']."</td>";
						}
					}
					else{
						//session_destroy();
						}
				?>
			</tr>
			<tr>
				<td>Password</td>
				<?php 
					if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
						while ($row=mysqli_fetch_array($result)) {
							echo "<td>".$row['password']."</td>";
						}
					}
					else{
						//session_destroy();
						}
				?>
			</tr>
			<tr>
				<td colspan="2">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="width: 440px;">
						Edit Profile
					</button>
				</td>
			</tr>
		</table>
	 </form>


</div>

		<!-- Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			  <div class="modal-header">
			    <h5 class="modal-title" id="exampleModalCenterTitle">Edit your Profile</h5>
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			      <span aria-hidden="true">&times;</span>
			    </button>
		 </div>
		 <div class="modal-body">
		 	<!-- Modal body -->
		 	<form method="POST" action="updateProfile.php">
		 		
		 	<table>
		 		<tr>

		 			<td>First Name </td>
		 			<?php 
						if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
							while ($row=mysqli_fetch_array($result)) {
								echo "<td>"."<input type='text' name='fname' value=".$row["fname"].">"."</td>";
							}
					    }
					    else{
								echo "<b>"."You are not a registered user."."</b>";
							}
					?>
		 		</tr>

		 		<tr>
		 			<td>Last Name </td>
		 			<?php 
					if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
						while ($row=mysqli_fetch_array($result)) {
							echo "<td>"."<input type='text' name='lname' value=".$row["lname"].">"."</td>";
						}
					}
					else{
						
						}
				?>
		 		</tr>

		 		<tr>
		 			<td>E-mail </td>
		 			<?php 
					if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
						while ($row=mysqli_fetch_array($result)) {
							echo "<td>"."<input type='text' name='email' value=".$row["email"].">"."</td>";
						}
					}
					else{
						
						}
				?>
		 		</tr>

		 		<tr>
		 			<td>Phone </td>
		 			<?php 
					if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
						while ($row=mysqli_fetch_array($result)) {
							echo "<td>"."<input type='text' name='phone' value=".$row["phone"].">"."</td>";
						}
					}
					else{
						
						}
				?>
		 		</tr>

		 		<tr>
		 			<td>Address </td>
		 			<?php 
					if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
						while ($row=mysqli_fetch_array($result)) {
							echo "<td>"."<input type='text' name='address' value=".$row["address"].">"."</td>";
						}
					}
					else{
						
						}
				?>
		 		</tr>

		 		<tr>
		 			<td>Date of Birth </td>
		 			<?php 
					if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
						while ($row=mysqli_fetch_array($result)) {
							echo "<td>"."<input type='text' name='dob' value=".$row["dob"].">"."</td>";
						}
					}
					else{
						
						}
				?>
		 		</tr>

		 		<tr>
		 			<td>Gender </td>
		 			<?php 
					if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
						while ($row=mysqli_fetch_array($result)) {
							echo "<td>"."<input type='text' name='gender' value=".$row["gender"].">"."</td>";
						}
					}
					else{
						
						}
				?>
		 		</tr>

		 		<tr>
		 			<td>Rlelgion </td>
		 			<?php 
					if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
						while ($row=mysqli_fetch_array($result)) {
							echo "<td>"."<input type='text' name='relegion' value=".$row["relegion"].">"."</td>";
						}
					}
					else{
						
						}
				?>
		 		</tr>

		 		<tr>
		 			<td>Password </td>
		 			<?php 
					if (isset($_SESSION['sess_id'])) {
						$user_id=$_SESSION['sess_id'];
						$sql="SELECT * FROM register WHERE user_id='$user_id' ";
						$result=mysqli_query($conn, $sql);
						while ($row=mysqli_fetch_array($result)) {
							echo "<td>"."<input type='text' name='password' value=".$row["password"].">"."</td>";
						}
					}
					else{
						
						}
				?>
		 		</tr>
		 	</table>
		 </div>
			 <div class="modal-footer">
			    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			    <button type="submit" class="btn btn-primary" >Save changes</button>
			  </div>
		</form>

		</div>
		</div>
		</div>

	




	<!-- Footer content-->
<footer class="page-footer font-small blue pt-4" id="footer">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">Footer Content</h5>
          <p>Here you can use rows and columns here to organize your footer content.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Important Links</h5>

            <ul class="list-unstyled">
              <li>
                <i class="fab fa-google-plus-g" style="color: blue;"></i><a href="#" id="link">Google+</a>
              </li><br>
              <li>
                <i class="fab fa-facebook" style="color: blue"></i><a href="#" id="link"> Facebook Page</a>
              </li><br>
              <li>
                <i class="fab fa-facebook-messenger" style="color: blue"></i><a href="#!" id="link">Messenger</a>
              </li><br>
              <li>
                <i class="fab fa-twitter-square" style="color: blue"></i><a href="#!" id="link">Twiter</a>
              </li><br>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Informations</h5>

            <ul class="list-unstyled">
              <li>
                <p><b id="name">Meshkat Hasan (Riad)</b><br>Founder CEO at e-Maid Service</p>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" id="copy">© 2018-2021 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> e-maidservice.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->




	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
<?php
	session_start();
	include "connection.php";
	$connection= new make_connection();
	$conn=$connection->connect();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="regStyle.css">
	<link rel="stylesheet" type="text/css" href="homeStyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

	<!-- Menu Bar -->
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

	<!-- Registration form -->
	<div class="login">
		       <p><b>Already have an account? Go to</b> <a href="loginPage.php"> <label><button class="btn"><b>Log in</b></button></a></label>
	<form class="table bg-active" method="POST" action="register.php" class="form bg-dark" id="form">
		<h2>Create Your Account</h2>
		<table >
			<tr>
				<td>First Name</td>
				<td><input type="text" name="fname" placeholder="First name" required="required"></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="lname" placeholder="Last name" required="required"></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input type="email" name="email" placeholder="email" required="required"></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="number" name="Phone" placeholder="Phone number" required="required"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" placeholder="Current address" required="required"></td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td><input type="Date" name="dob"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<label>
					<td>
						<label><input type="radio" name="Gender" value="Male"> Male</label>
				    	<label><input type="radio" name="Gender" value="Female" style="margin-left: 45px;"> Female</label>
				    </td>
				</label>
			</tr>
			<tr>
				<td>Relegion</td>
				<td>
					<select name="Relegion">
						<option value="Islam">Select Relegion</option>
						<option value="Islam">Islam</option>
						<option value="Hindu">Hindu</option>
						<option value="Other">Other</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="password" placeholder="Enter password" required="required"></td>
			</tr>
			<tr>
				<td>
					<label><input type="checkbox" name="checkbox" required="required">I agree with<a href="tc.php">Terms & Conditions</a></label>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Register"></td>
			</tr>
		</table>
	</form>


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
          <p style="color: black; margin-left: 0px;">Here you can use rows and columns here to organize your footer content.</p>

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
                <p style="color: black; margin-left: 0px;"><b style="color: black; font-size: 120%;font-family: sans-serif;">Meshkat Hasan (Riad)</b><br>Founder CEO at e-Maid Service</p>
              </li><br>
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
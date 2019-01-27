<?php
	session_start();
	include "connection.php";
	$user_id=$_SESSION['sess_id'];
	if ($user_id == 0) {
		echo "<script>
				alert('You have to register first.');
				window.location.href='reg.php';
		</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Apply For Maid</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="homeStyle.css">
	<link rel="stylesheet" type="text/css" href="regStyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
		</ul>
	</div>
	</nav>

	<!-- Body content application form-->

	<form class="table bg-active" method="POST" action="requestInfo.php" class="form bg-dark" id="form" style="margin-top: 70px;">
		<h2>Apply For a Maid</h2>
		<table >
			<tr>
				<td>NID Number</td>
				<td><input type="number" name="nid" placeholder="Enter NID number" required="required"></td>
			</tr>
			<tr>
				<td>Family Member</td>
				<td><input type="number" name="family_member" placeholder="Number of Family Member" required="required"></td>
			</tr>
			<tr>
				<td>Location</td>
				<td>
					<select name="location" required="required">
						<option value=" ">Select Location</option>
						<option value="Dhanmondi">Dhanmondi</option>
						<option value="Farmgate">Farmgate</option>
						<option value="Mirpur">Mirpur</option>
						<option value="Islam">Shyamoli</option>
						<option value="Azimpur">Azimpur</option>
						<option value="New Market">New Market</option>
						<option value="Shabag">Shabag</option>
						<option value="Mohakhali">Mohakhali</option>
						<option value="Gulshan">Gulshan</option>
						<option value="Banani">Banani</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Present Adderss</td>
				<td><input type="text" name="address" placeholder="Present Adderss" required="required"></td>
			</tr>
			<tr>
				<td>Time Slot</td>
				<td>
					<input type="numeric" name="sTime" placeholder="Start Time" required="required"> 
					<input type="numeric" name="eTime" placeholder="End Time" required="required" style="margin-top: 10px;">  
				</td>
			</tr>
			<tr>
				<td>Time Duration</td>
				<label>
					<td>
						<label>
							<select name="day">
									<option value="0 day">0 Day</option>
									<option value="1 day">1 Day</option>
									<option value="2 day">2 Day</option>
									<option value="3 day">3 Day</option>
									<option value="4 day">4 Day</option>
									<option value="5 day">5 Day</option>
									<option value="6 day">6 Day</option>
							</select>
						</label>
					    <label>
							<select name="week">
									<option value="0 week">0 week</option>
									<option value="1 week">1 week</option>
									<option value="2 week">2 week</option>
									<option value="3 week">3 week</option>
									<option value="4 week">4 week</option>
							</select>
						</label>
					    <label>
							<select name="month">
									<option value="0 month">0 month</option>
									<option value="1 month">1 month</option>
									<option value="2 month">2 month</option>
									<option value="3 month">3 month</option>
									<option value="4 month">4 month</option>
									<option value="5 month">5 month</option>
									<option value="6 month">6 month</option>
									<option value="7 month">7 month</option>
									<option value="8 month">8 month</option>
									<option value="9 month">9 month</option>
									<option value="10 month">10 month</option>
									<option value="11 month">11 month</option>
							</select>
						</label>
						<label>
							<select name="year">
									<option value="0 year">0 year</option>
									<option value="1 year">1 year</option>
									<option value="2 year">2 year</option>
									<option value="3 year">3 year</option>
									<option value="4 year">4 year</option>
									<option value="5 year">5 year</option>
							</select>
						</label>
				    </td>
				</label>
			</tr>

			<tr>
				<td>Start time</td>
				<td><input type="date" name="sDate"></td>
			</tr>
			<tr>
				<td colspan="2">
					Select Work Type
				</td>
			</tr>
			<tr>
				<td> </td>
				<td>
					<label><input type="checkbox" name="work1" value="Clening House">Clening House</label>
				</td>
			</tr>
			<tr>
				<td> </td>
				<td>
					<label><input type="checkbox" name="work2" value="Washing cloths">Washing cloths</label>
				</td>
			</tr>
			<tr>
				<td> </td>
				<td>
					<label><input type="checkbox" name="work3" value="Cooking ">Cooking</label>
				</td>
			</tr>
			<tr>
				<td> </td>
				<td>
					<label><input type="checkbox" name="work4" value="Baby Care">Baby Care</label>
				</td>
			</tr>
			
			<tr>
				<td>Work Desciiption</td>
				<td>
					<input type="Text" name="description" style="height: 100px; width: 200px;">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<label><input type="checkbox" name="checkbox" required="required">  I agree with<a href="tc.php">Terms & Conditions</a></label>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Apply"></td>
			</tr>
		</table>
	</form>



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
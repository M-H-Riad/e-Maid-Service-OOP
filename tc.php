<?php
  session_start();
  include "connection.php";
  $connection= new make_connection();
  $conn=$connection->connect();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Terms & conditions</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="homeStyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style type="text/css">
		#con{
			margin-left: 25px;
			font-family: sans-serif;
			font-size: 100%;
		}
		h1{
			margin-left: 30px;
			margin-top: 25px;
			margin-bottom: 15px;
		}
		b{
			background-color: gray;
			border-radius: 100%;
			padding: 5px;
			margin-right: 10px;
		}
	</style>
</head>
<body>

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

	<!-- Body content With Terms and Conditions -->
	<h1>Terms & conditions</h1>
	<p id="con">     
	  <b>1.</b> If the maid wants to discontunue her service  then it must be informed  to the 
	    client before 1 month ago.
    </p>
    <p id="con">
    	<b>2.</b> The client  have to provide payment at the begining of the month.
    </p>
    <p id="con">
    	<b>3.</b> If any maid before completing agreement time.Then we willprovide replacement maid.
    </p>

    <p id="con">     
	  <b>4.</b> If any maid / worker leaves before completing the duration of the agreement then BMA will not change salary amount for replaced maid / worker .
    </p>
    <p id="con">
    	<b>5.</b> BMA will provide a maid / worker for a client within 15 days of the signed agreement unless the parties agreed otherwise.
    </p>
    <p id="con">
    	<b>6.</b> After appointment of the maid / worker , if any client unsatisfied , BMA will provide replacement of the maid / worker.
    </p>

    <p id="con">     
	  <b>7.</b> BMA takes full responsibility of ensuring safety and security of the client .
    </p>
    <p id="con">
    	<b>8.</b> Client has to pay Eid / Festival bonus @ 50% (as may be agreed upon) of the monthly salary twice in a year of the hired maid / worker , if s/he has provided at least 06(six) months service prior to the festival in a year.
    </p>
    <p id="con">
    	<b>9.</b> The salary has to be fixed by the client only in consultation with agency .
    </p>


    <p id="con">     
	  <b>10.</b> If a maid / worker leaves his / her service suddenly , his / her salary will be forfeited and funded to the BMA immediately
    </p>
    <p id="con">
    	<b>11.</b>If any maid / worker indulges any indiscipline activity with the client , lawful action may be taken against the maid / worker in consultation with the BMA.
    </p>
    <p id="con">
    	<b>12.</b> Maid registration at the local Police Station will be performed by the client ( as may be agreed upon) and BMA will provide maid / worker’s details identity to the client..
    </p>







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
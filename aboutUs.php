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
		h1{
      text-align: center;
      font-family: sans-serif;
      font-size: 120%;
      margin-top: 30px;
    }
    p{
      margin-left: 30px;
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
	<h1><b>About e-maid service</b></h1>
  <p>We are in the business of providing manpower agency to your & office we
    provide ourselves on the wide range of services that we offer to our customer.At present time every busy family requires trustable house worker ( Maid or Servant or house governess). In this situation we have setteled our following target. If any local or foreigner person waants to take our best assistance regarding verification of maid then our field officer can help with service charge. We provide maid as Cook, Cleaner, Baby Care, Old Care,Patient Care, Babyment, Security Guard, Driver etc. For 24 hours and non-residence house maid to the house of aristocratic areas. Monitoring with female visitors on the working place of maid's , we supervise their work and arrange replacement or transfer and considering the report of their service.</p><br>

                     <h1><b>Mission</b></h1><br>
  <p>To provide best possible services to all our customer in order to enhence the 
    work environment with guaranted service and the highest level of efficiency.We Create work opportunity for workless, widow after signing a bond with master / mistress of the house and preserving all the necessary documents in the agency office encouraging woman folks in providing service at home by taking measures to stop illegal torture and rough and tough behaviour with maid servants. At the same we verify address of by local contact with the chairman to prevent any theft by them.</p><br>

                     <h1><b>Vision</b> </h1><br>
  <p>To be recognized as the leader and best service provider in the field of 
    manpower agency service to all customer in the corporate & residential sector.We provide faithful workers to the house , because of poverty woman are involving in illegal and anti social works. The main target of this institution is to give best service to the client and to create a beautiful and amicuble society by changing their mentality and excouraging them to home service.</p>








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
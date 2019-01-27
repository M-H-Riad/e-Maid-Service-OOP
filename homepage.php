<?php
	session_start();
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="homeStyle.css">
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

	<!-- Body content  Image slide show -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		</ol>
		<div class="carousel-inner" id="frame">
			<div class="carousel-item active">
			  <img class="d-block w-100" src="maid3.jpg" alt="First slide" id="image">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="maid4.jpg" alt="Second slide" id="image">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="maid5.jpg" alt="Third slide" id="image">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="maid2.jpg" alt="Second slide" id="image">
			</div>
			<div class="carousel-item">
			  <img class="d-block w-100" src="maid1.jpg" alt="Third slide" id="image">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
	</div>

		<!-- CTA button -->

	<div class="cta">
			<p>
				<b>Apply for a maid</b> <a href="AddOtherInfo.php"><input type="button" value="Apply Now" id="btn"></a>
			</p>
	</div>
	<div class="description">
		<p>
			<b class="title"> Welcome to e-Maid Service </b>
		</p>
		<p id="des">
			First thanks to Allah, We established such kind of housemaid agency and we always believe Bangladesh Maid Agency is a very popular Community For getting honest and Active Maid servant in Bangladesh. Present time every people are very busy so they can not able to do well house work time to time. They want to finish their house work very easily by getting help from their maid servant. But they can not find suitable and trusted housemaid . So Bangladesh Maid Agency is trying to resolve your problem and find for you a trusted, verified and active maid
		</p>
	</div>

	<div class="description">
		<p>
			<b class="title"> Why we are unique ? </b>
		</p>
		<p id="des">
			We are in the business of providing manpower agency to your home, office & factory. We pride ourselves on the wide range of services that we offer to our clients.Oue main goal is to provide best possible service to all our customers in order to enhance the work environment with guaranteed service and the highest level of efficiency.To be recognized as the leader and best service provider in the field of Manpower Agency service to all clients in the corporate, residential and commercial sector.
		</p>
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
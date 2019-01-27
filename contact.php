<?php
	session_start();
	include "connection.php";
	$connection= new make_connection();
	$conn=$connection->connect();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contacts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="ContactStyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="homeStyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body class="body">

	<!-- Menu Bar-->
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

	<p id="text">
		<b>*** You can also call hotline for urgent contact.***</b>
	</p>

	<div>
		<div class="button">
			<p>
				<b>Contacts</b>
			</p>
		</div>

		<!-- A contact list for customer -->
		<div class="left">
			<ul>
				<li id="llist"> 
					<tr>
						<td><i class="fas fa-phone" style="color: blue"></i></td>
						<td>  </td>
						<td><b id="phone">01755210703</b></td><br>
					</tr>
				</li>
				<li id="llist">
					<tr>
						<td><i class="fas fa-phone" style="color: blue;"></i></td>
						<td>  </td>
						<td><b id="phone">01721404358</b></td>
					</tr>
				</li>
				<li id="llist">
					<tr>
						<td><i class="far fa-envelope" style="color: blue;"></i></td>
						<td>  </td>
						<td><b id="phone">e-maidservice@gmail.com</b></td>
					</tr>
				</li>
				<li id="llist">
					
					<tr>
						<td><i class="fab fa-facebook" style="color: blue;"></i></td>
						<td>  </td>
						<td><b id="phone">https://facebook.com/e-maidservice</b></td>
					</tr>
				</li>
				
				<li id="llist">
					<tr>
						<td><i class="fab fa-facebook-messenger" style="color: blue;"></i></td>
						<td>  </td>
						<td><b id="phone">https://facebook.com/e-maidservice/messege</b></td>
					</tr>
				</li>
				<li id="llist">
					<tr>
						<td><i class="fab fa-twitter-square" style="color: blue;"></i></td>
						<td>  </td>
						<td><b id="phone">https://twitter.com/e-maidservice</b></td>
					</tr>
				</li>
		    </ul>
		</div>

		<!-- Hot line phone/ telephone number for 24/7 contact. -->
		<div class="hotline">
				<p>
					<b>Hotline 24/7</b>
				</p>
		</div>
		<div class="right">
			
			<ul>
				<li id="rlist"> 
					<tr>
						<td><i class="fas fa-phone" style="color: blue;"></i></td>
						<td>  </td>
						<td><b id="phone">01755210703</b></td>
					</tr>
				</li>
				<li id="rlist">
					<tr>
						<td><i class="fas fa-phone" style="color: blue;"></i></td>
						<td>  </td>
						<td><b id="phone">01721404358</b></td>
					</tr>
				</li>
				<li id="rlist">
					<tr>
						<td><i class="fas fa-phone" style="color: blue;"></i></td>
						<td>  </td>
						<td><b id="phone">01721404358</b></td>
					</tr>
				</li>

			</ul>
		</div>
	</div>



	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<?php
session_start();
include "connection.php";
?>

<?php

		class store_data{


			public $conn;
			public $query;

			function validation()
			{
				if (mysqli_query($this->conn,$this->query)) {
						$this->return_c();
					}
			}

			function return_error(){

				echo "<script>
						alert('Some error occurs. Please try again');
						window.location.href='homepage.php';
						</script>";
			}
			

			function return_c(){
				echo "<script>
						alert('Your request is submitted Successfully.We will notify you soon.');
						window.location.href='homepage.php';
						</script>";
			}

			
		
		}



		class time_slot{
			public $sTime;
			public $eTime;


			public function get_time(){
				
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$this->sTime = $_POST['sTime'];
					$this->eTime = $_POST['eTime'];
				}
				else{
					 function return_error(){
						echo "Some error occurs.";

					}

				}

				return true;
			}

			public function return_c(){

				echo "Value is Right.";

			}


		}



		class location
		{
			public $location;

			function select_location()
			{
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$this->location = $_POST['location'];
				}
			}
		
		}

		class input_information{

			public $nid;
			public $family_member;
			public $address;
			public $day;
			public $week;
			public $month;
			public $year;
			public $sDate;
			public $work1;
			public $work2;
			public $work3;
			public $work4;
			public $description;

			function get_input(){

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					
					$this->nid = $_POST['nid'];
					$this->family_member = $_POST['family_member'];
					$this->address = $_POST['address'];
					$this->day = $_POST['day'];
					$this->week = $_POST['week'];
					$this->month = $_POST['month'];
					$this->year = $_POST['year'];
					$this->sDate = $_POST['sDate'];
					$this->work1 = $_POST['work1'];
					$this->work2 = $_POST['work2'];
					$this->work3 = $_POST['work3'];
					$this->work4 = $_POST['work4'];
					$this->description = $_POST['description'];
				}

			}
		
		}


		class submition{
			
			function get_information(){
				if (isset($_POST['submit'])) {
					return true;
				}
				else{
					return false;
				}
			}

			function return_confirm_message(){
				echo "Operation is right.";
			}
		
			function return_error(){
			   echo "Some error occurs.";
			}
		}



		$sd = new store_data();
		$submition_obj= new submition();
		$check_sub = $submition_obj->get_information();
		$connection= new make_connection();
		$sd->conn=$connection->connect();
		$user_id=$_SESSION['sess_id'];
		$time_slot_obj = new time_slot();
		$time_slot_obj->get_time();
		$loc_obj = new location();
		$loc_obj->select_location();
		$request = new input_information();
		$request->get_input();

		$sd->query = "INSERT INTO request (request_id,nid,family_member,location,cAddress,sTime,eTime,Duration,sDate,work,description,status,user_id)
					VALUES ('','$request->nid','$request->family_member','$loc_obj->location','$request->address','$time_slot_obj->sTime','$time_slot_obj->eTime','$request->day $request->week $request->month $request->year','$request->sDate','$request->work1 $request->work2 $request->work3 $request->work4 ','$request->description','0','$user_id')";

		


		if ($check_sub == 'true') {
			$sd->validation();
		}
		else{

			$sd->return_error();
		}





	?>


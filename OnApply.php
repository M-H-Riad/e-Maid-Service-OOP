<?php
	session_start();
?>
<?php
	class service{
 			public $user_id;

 			public function get_service(){
 			  $this->user_id=$_SESSION['sess_id'];
 			}
 			public function return(){
 				echo "operation success";
				return true;
 			}

 			public function error_message(){
 				echo "Some error occurs";
 			}
 		}

 	class store_data{
		public function validation(){
			 header("Location:AddOtherInfo.php");
		
		}

		function return_confirm(){
				echo "operation success";
				$this->validation();
				}

 		function return_error(){
 			echo "<script>
				alert('You have to register first.');
				window.location.href='reg.php';
				</script>";
 		}
 	}



 	$ser = new service();
 	$ser->get_service();
 	$sd = new store_data();
	if ($ser->user_id == 0) {
		
		$sd->return_error();

	}
	else{
		$sd->return_confirm();
	}
?>
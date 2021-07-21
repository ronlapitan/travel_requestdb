<?php 

include 'include/db_connect.php';
check_is_ajax('_FILE_'); 



	if (isset($_POST['activate_id'])) {

		$activate_id = $_POST['activate_id'];

		DB::update('user_tbl', array (

		        	'status' => 1,

		            ),"id =%i", $activate_id);

	}

		
?>
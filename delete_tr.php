<?php

include 'include/db_connect.php';
check_is_ajax('_FILE_');

	if (isset($_POST['delete_id'])) {

		$delete_id = $_POST['delete_id'];
		
		DB::delete('travel_tbl', "id = %i", $delete_id);

		header('Location: admin_dashboard.php');
	}

?>
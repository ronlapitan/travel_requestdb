<?php

include 'include/db_connect.php';
check_is_ajax('_FILE_');

$edit_id = $_POST['id'];
$name = $_POST['name'];
$designation = $_POST['designation'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$destination = $_POST['destination'];
$purpose = $_POST['purpose'];
$fund = $_POST['fund'];
$transportation = $_POST['transportation'];


$check = DB::queryFirstRow("SELECT 
								id
							FROM 
								travel_tbl
							WHERE 
								id = %i", $_POST['id']);

$result =[];

if (!is_null($check)) {

		DB::update('travel_tbl', array(

			'name' => $name,
			'designation' => $designation,
			'start_date' => $start_date,
			'end_date' => $end_date,
			'destination' => $destination,
			'purpose' => $purpose,
			'fund' => $fund,
			'transportation' => $transportation,
 			'processed_by' => $_SESSION['username'],
			'date_created' => date('Y-m-d H:i:s')

		),"id = %i", $_POST['id']);

		
			$result = [
				'status' => 'success',
				'message' => '<br><br><br>
								<div class="usercheck">
									<div class="alert alert-success">
										<p>Changes Successfully Made</p>
									</div>
								</div>',
				];
}

else {
			$result = [
				'status' => 'error',
				'message' => '<br><br><br>
								<div class="usercheck">
									<div class="alert alert-danger">
										<p>Unable to save changes</p>
									</div>
								</div>',
						];
}

echo json_encode($result);

?>
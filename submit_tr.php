<?php

include 'include/db_connect.php';
check_is_ajax('_FILE_');

$name = $_POST['name'];
$designation = $_POST['designation'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$destination = $_POST['destination'];
$purpose = $_POST['purpose'];
$fund = $_POST['fund'];
$transportation = $_POST['transportation'];


		$check = DB::queryFirstRow("SELECT 
										name,
										purpose,
										destination,
										start_date
									FROM 
										travel_tbl
									WHERE 
										name = %s 
									AND 
										purpose = %s
									AND 
										destination = %s
									AND 
										start_date = %s"
									,$_POST['name']
									,$_POST['purpose']
									,$_POST['destination']
									,$_POST['start_date']);
// var_dump($check);
// exit();

		$result =[];

		if (is_null($check)) {

				DB::insert('travel_tbl', array(

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
				));

				
					$result = [
						'status' => 'success',
						'message' => '<br><br><br>
										<div class="usercheck">
											<div class="alert alert-success">
												<p>Travel Request Saved!</p>
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
												<p>Unable to save. Travel Request already exists</p>
											</div>
										</div>',
						];




		}

		echo json_encode($result);


?>
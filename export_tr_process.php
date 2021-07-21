<?php
include 'include/db_connect.php';
$_SESSION['error_research'] = '';

$name = $_POST['name'];
$year = $_POST['year'];

$query = DB::query("SELECT 
						name,
						designation,
						start_date,
						end_date,
						destination,
						purpose,
						fund,
						transportation,
						processed_by,
						date_created
					FROM 
						travel_tbl 
					WHERE
						name LIKE %ss AND 
						start_date LIKE %ss", $_POST['name'], $_POST['year']	
						
					);


		if (!empty($query)) {

			header('Content-Type: text/csv; charset=utf-8');
			header('Content-Disposition: attachment; filename=export_tr.csv');
			$output = fopen("php://output", "w");
			fputcsv($output, array('Name', 'Designation', 'Start Date', 'End Date', 'Destination', 'Purpose', 'Fund', 'Transportation', 'Processed By', 'Date Uploaded', 'Date Created'));
			foreach ($query as $row) {

				fputcsv($output, $row);

			}
			fclose($output);
		

		}

		else {
			
			$_SESSION['error_research'] = 	'<br><br><br>
											<div class="alertmsg">	
													<div class="col-md-2">
													</div>
														<div class="col-md-8">
															<div class="alert alert-danger">
																<p align="center"><strong>No Records Found.</strong></p>
															</div>
														</div>
													<div class="col-md-2">
													</div>
											</div>';

			header('Location: export_tr.php#export_tr');
			

	    }

	 
	   
?>
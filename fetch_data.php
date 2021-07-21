<?php

include 'include/db_connect.php';
check_is_ajax('_FILE_');


$query = $_POST['search'];

	$result = DB::query("SELECT 
								*
						FROM 
								travel_tbl
						WHERE 
								name LIKE %ss
							
							ORDER BY date_created DESC LIMIT 10 ", $_POST['search']);
	

		if (empty($result)) {


			echo 	'<div class="col-md-4">
					</div>
						<div class="col-md-4">
							<div class="alert alert-danger">
								<p align="center"><strong>No Records Found.</strong></p>
							</div>
						</div>
					<div class="col-md-4">
					</div>';

		}

		else {

			foreach ($result as $row) {
							
			echo	'<table class="table table-bordered">
							<thead>
								<tr>
									<th class="head">Name</th>
									<th class="head">Designation</th>
									<th class="head">Start Date</th>
									<th class="head">End Date</th>
									<th class="head">Destination</th>
									<th class="head">Purpose</th>
									<th class="head">Fund</th>
									<th class="head">Transportation</th>
									<th class="head">Processed By</th>
									<th class="head">Date Encoded</th>
								</tr>
							</thead>
										
							<tbody>
								<tr>
									<td>'.$row['name'].'</td>
									<td>'.$row['designation'].'</td>
									<td>'.$row['start_date'].'</td>
									<td>'.$row['end_date'].'</td>
									<td>'.$row['destination'].'</td>
									<td>'.$row['purpose'].'</td>
									<td>'.$row['fund'].'</td>
									<td>'.$row['transportation'].'</td>
									<td>'.$row['processed_by'].'</td>
									<td>'.$row['date_created'].'</td>
								</tr>
							</tbody>
						</table>
						<br>
						<br>';


						if (isset($_SESSION['admin']) || (isset($_SESSION['super_user']))) {
						
						echo	'<div class="pull-left">
									<form action="delete_tr.php" method="post" class="delete_tr">
										<input type="hidden" value="'.intval($row['id']).'" name="delete_id">
											<button class="btn btn-danger remove">
												Delete
											</button>
										</form>
								</div>

								<div class="pull-right">
									<a href="edit_tr.php?travel_id='.intval($row['id']).'">
										<button type="button" class="btn btn-info">
												Edit Item
										</button>
									</a>
								</div>
						<br>
						<hr>';

					}
			}

		}

?>
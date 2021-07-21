<?php 

include 'header.php';

if(isset($_SESSION['admin']) && ($_SESSION['username'] = 'admin')) {

$pending = DB::query('SELECT 
							id,
							username,
							name 
						FROM 
							user_tbl
						WHERE 
							status = 0
						ORDER BY date_created DESC');

	if (empty($pending)) {

		echo 	'<div class="alertmsg">
					<div class="row">	
						<div class="col-md-2">
						</div>
							<div class="col-md-8">
								<div class="alert alert-info">
									<p align="center"><strong>No pending accounts yet</strong></p>
								</div>
							</div>
						<div class="col-md-2">
						</div>
					</div>
				</div>';
	}

	else {

		foreach ($pending as $row) {


				echo 	'<div class="row">
							<div class="col-md-2">
							</div>
								<div class="col-md-8">

                                    <table class="table table-bordered">
									    <thead>
									      <tr>
									        <th>Username</th>
									        <th>Complete Name</th>
									      </tr>
									    </thead>
										<tbody>
									    <tr>	
											<td>'.$row['username'].'</td>
											<td>'.$row['name']. '</td>
										</tr>
									    </tbody>
									</table>
									

											<br>
											<br>
											<div class="pull-left">
												<button type="submit" class="btn btn-danger">Delete</button>
											</div>

											<div class="pull-right">
												<form action="activate_account.php" method="post" class="activate_account">
														<input type="hidden" value="'.intval($row['id']).'" name="activate_id">
															<button type="submit" class="btn btn-success">
																Activate
															</button>
													</div>
												</form>
									<br>
									<br>
									<hr>
								</div>
							<div class="col-md-2">
							</div>
						</div>';

		}

	}

}

else {

	header('location: ./index.php');
}


include 'footer.php';	

?>
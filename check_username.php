<?php

include 'include/db_connect.php';
check_is_ajax('_FILE_');

$username = $_POST['username'];

if (isset($_POST['username'])) {

		$check = DB::queryFirstRow("SELECT 
										username
									FROM 
										user_tbl
									WHERE 
										username = %s", $_POST['username']);

			if (!is_null($check)) {

				echo '<br>
						<div class="usercheck">
								<div class="alert alert-danger">
									<p>Username is already taken!</p>
								</div>
						</div>';
						exit();
			}

			else {

				echo '<br>
						<div class="usercheck">
								<div class="alert alert-success">
									<p>Username is available</p>
								</div>
						</div>'; 
						exit();
			}
}
?>
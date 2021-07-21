<?php

include 'include/db_connect.php';
check_is_ajax('_FILE_');

$username = $_POST['username'];
$password = $_POST['password'];
$hash = password_hash($password, PASSWORD_BCRYPT);

$check = DB::queryFirstRow("SELECT 
								username
							FROM 
								user_tbl
							WHERE 
								username = %s", $_POST['username']);

$result =[];

if (!is_null($check)) {

		DB::update('user_tbl', array (

		        	'password' => $hash,

		            ),"username = %s", $check['username']);

		
			$result = [
				'status' => 'success',
				'message' => '<br><br><br>
								<div class="usercheck">
									<div class="alert alert-success">
										<p>Password Changed. Redirecting to Homepage...</p>
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
										<p>Unable to Change Password</p>
									</div>
								</div>',
						];
}

echo json_encode($result);

?>
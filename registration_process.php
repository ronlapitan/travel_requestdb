<?php

include 'include/db_connect.php';
check_is_ajax('_FILE_');

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$classification = $_POST['classification'];
$division = $_POST['division'];
$hash = password_hash($password, PASSWORD_BCRYPT);

$check = DB::queryFirstRow("SELECT 
								username
							FROM 
								user_tbl
							WHERE 
								username = %s", $_POST['username']);

$result =[];

if (is_null($check)) {

		DB::insert('user_tbl', array(

			'name' => $name, 
			'username' => $username,
			'password' => $hash,
			'status' => 0,
			'classification' => $classification,
			'division' => $division, 
			'date_created' => date('Y-m-d H:i:s')
		));

		
			$result = [
				'status' => 'success',
				'message' => '<br><br><br>
								<div class="usercheck">
									<div class="alert alert-success">
										<p>Registration Successful. Please wait for account activation</p>
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
										<p>Account already taken</p>
									</div>
								</div>',
						];
}

echo json_encode($result);

?>
<?php

include 'include/db_connect.php';
check_is_ajax('_FILE_');
ob_start();

$username = $_POST['username'];
$password = $_POST['password'];

$user = DB::queryFirstRow("SELECT 
								username, 
								password, 
								status, 
								classification
						   FROM 
						   		user_tbl
						   WHERE
						   		username = %s", $_POST['username']);

		$result = [];		
		if (!is_null($user)) {

			if (($user['status'] == 1) && ($user['classification'] == 'admin')) {

				$hash = $user['password']; 

					if (password_verify($password, $hash)) {

						$_SESSION['admin'] = 1;
						$_SESSION['username'] = $username;

						$result = [
							'status' => 'success',
							'redirect' => 'admin_dashboard.php', 
						];

					}

					else {
						$result = [
							'status' => 'error',
							'message' => '<br>
											<div class="usercheck">
													<div class="alert alert-danger">
														<p>Incorrect Password</p>
													</div>
											</div>',
						];
					}
			}


			elseif (($user['status'] == 1) && ($user['classification'] == 'super_user')) {

				$hash = $user['password']; 

					if (password_verify($password, $hash)) {

						$_SESSION['super_user'] = 1;
						$_SESSION['username'] = $username;

						$result = [
							'status' => 'success',
							'redirect' => 'admin_dashboard.php',
						];

					}

					else {
						$result = [
							'status' => 'error',
							'message' => '<br>
											<div class="usercheck">
													<div class="alert alert-danger">
														<p>Incorrect Password</p>
													</div>
											</div>',
						];
					}
			}

			else {
				$result = [
					'status' => 'error',
					'message' => '<br>
									<div class="usercheck">
										<div class="alert alert-info">
											<p>Account is not activated</p>
										</div>
									</div>',
				];
			}

		}

		else {
			$result = [
				'status' => 'error',
				'message' => '<br>
									<div class="usercheck">
										<div class="alert alert-danger">
											<p>Account not found</p>
										</div>
									</div>',
			];
		}
	echo json_encode($result);

?>

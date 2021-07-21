<?php include 'header.php'; ?>
			
<div class="col-md-4">

</div>
		
	<div class="panelformat">
			
			<div class="col-md-4">
				<div class="panel panel-default">
		  			<div class="panel-body">
						
						<div class="panelhead">
							<img src="images/iwep_logo.png">
		  					<h1>Change Password</h1>
		  					<hr>
		  				</div>

		  				
						<form action="change_password.php" method="POST" id="newpass">

							<div class="form-group">

			  						<div class="inner-addon left-addon">
									    <i class="glyphicon glyphicon-user"></i>
									    	<input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
									</div>
									<!-- Username Availability -->
									<span id="availability"></span>
							</div>
							<br>

							<div class="form-group">

				  					<div class="inner-addon left-addon">
										<i class="glyphicon glyphicon-lock"></i>
										   <input type="password" class="form-control" name="password" id="password" placeholder="New Password" required>
									</div>

			  				</div>
			  				<br>

			  				<div class="form-group">

			  						<div class="inner-addon left-addon">
									    <i class="glyphicon glyphicon-retweet"></i>
									    	<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
									</div>

			  				</div>
			  				<br>
								
								<!-- Password Check -->
			  				<div class="password_check"></div>
			  				<br>

			  				<div class="pull-left">
			  						<button type="reset" class="btn btn-danger custom">Clear</button>
							</div>

							<div class="pull-right">
								<button type="submit" value="submit" class="btn btn-success custom">Change</button>
			  				</div>
			  				<br>
			  				<br>
							<!-- Successful Change Password-->
							<span id="success_message"></span>

						</form>

		  			</div>
				</div>
			</div>

	</div>

<div class="col-md-4">

</div>


<?php include 'footer.php'; ?>
<?php include 'header.php'; ?>
			
<div class="col-md-4">

</div>
		
	<div class="panelformat">
			
			<div class="col-md-4">
				<div class="panel panel-default">
		  			<div class="panel-body">
						
						<div class="panelhead">
							<img src="images/iwep_logo.png">
		  					<h1>New User Registration</h1>
		  					<hr>
		  				</div>

		  				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="regform">

		  					<div class="form-group">

		  						<div class="inner-addon left-addon">
								    <i class="glyphicon glyphicon-user"></i>
								    	<input type="text" class="form-control" name="name" id="fullname" placeholder="Complete Name" required>
								</div>

		  					</div>

		  					<div class="form-group">

		  						<div class="inner-addon left-addon">
								    <i class="glyphicon glyphicon-user"></i>
								    	<input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
								</div>
								<!-- Username Availability -->
								<span id="check"></span>

		  					</div>


		  					<div class="form-group">

		  						<div class="inner-addon left-addon">
								    <i class="glyphicon glyphicon-lock"></i>
								    	<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
								</div>

		  					</div>

		  					<div class="form-group">

		  						<div class="inner-addon left-addon">
								    <i class="glyphicon glyphicon-retweet"></i>
								    	<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
								</div>

		  					</div>
							
							<!-- Password Check -->
		  					<div class="password_check"></div>

		  					<div class="form-group">
								<select class="form-control" name="classification">
									<option value="super_user">Super User</option>
									<option value="admin" disabled="">Admin</option>
								</select>
							</div>

							<div class="form-group">
								<select class="form-control" name="division">
									<option value="Division I">Division I</option>
									<option value="Division II">Division II</option>
									<option value="Division III">Division III</option>
								</select>
							</div><br>

		  					<br>
		  					<br>


							<div class="pull-left">
		  						<button type="reset" class="btn btn-danger custom">Clear</button>
							</div>

							<div class="pull-right">
								<button type="submit" value="submit" class="btn btn-success custom">Register</button>
		  					</div>

		  					<!-- Successful Registration -->
							<span id="reg_message"></span>
		  							  					
		  				</form>

		  			</div>
				</div>
			</div>

	</div>

<div class="col-md-4">

</div>


<?php include 'footer.php'; ?>
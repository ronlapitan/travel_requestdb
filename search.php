<?php include 'header.php';

if (isset($_SESSION['admin']) || isset(($_SESSION['super_user']))) {

	echo 	'<div class="col-md-2">
			</div>
				

				<div class="col-md-8">

					<br>
					<br>
					<div class="form-group">
						<div class="input-group">
							<input type="text" class="form-control" name="query" id="query" placeholder="Search Names" required>
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit">Search</button>
								</span>														
						</div>
					</div>
					<br>
					<br>
					
				</div>

				<div id="result"></div>


			<div class="col-md-2">
			</div>';
                  
}

else {

	header('Location: ./index.php');

}

include 'footer.php';?>
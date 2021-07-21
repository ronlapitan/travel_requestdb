<?php include 'header.php'; 

if (isset($_SESSION['admin']) || isset(($_SESSION['super_user']))) {
   
   echo '<div id="export_error">
		</div>

		<div class="col-md-2">
		</div>

			<div class="col-md-8">

				<form action="export_tr_process.php" method="POST">


					<div class="form-group">
						<label>Export by Name:</label>
							<input class="form-control" type="text" name="name" required> 
					</div>

					<div class="form-group">
						<label>Year:</label>
							<input class="form-control" type="text" name="year" placeholder="From 2019 and beyond" required> 
					</div>

					<div class="pull-right">
						<button type="submit" class="btn btn-primary" custom>Export Research Data</button>
					</div>

					<div class="pull-left">
						<button type="reset" class="btn btn-danger" custom>Clear</button>
					</div>

				</form>

			</div>

			

		<div class="col-md-2">
		</div>';               
}

else {


header('Location: ./index.php');

}

include 'footer.php';

?>


<?php include 'header.php'; 

if (isset($_SESSION['admin']) || isset(($_SESSION['super_user']))) {
        
    echo    '<h1>Latest Entries</h1>
			<hr>
			<br>

			<div id="database">
			</div>

			<div id="empty_message">
			</div>';
}
else {

	header('Location: ./index.php');
}

  
include 'footer.php'; ?>
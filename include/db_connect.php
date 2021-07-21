<?php
require_once 'utils/meekrodb.2.3.class.php';
DB::$user = 'ronlapitan';
DB::$password = 'R162262c';
DB::$dbName = 'iwep_div_one_db';
session_start();

if (isset($_SESSION['LAST_REQUEST_TIME'])) {
    if (time() - $_SESSION['LAST_REQUEST_TIME'] > 600) {
        // session timed out, last request is longer than 5 minutes ago
        $_SESSION = array();
        session_destroy();
        header('Location: ./index.php');
    }
}
$_SESSION['LAST_REQUEST_TIME'] = time();

function check_is_ajax($script) {
  $isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND
  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
  if(!$isAjax) {
    trigger_error('Access denied - not an AJAX request...' . ' (' . $script . ')', E_USER_ERROR);
  }
}

?>

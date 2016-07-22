<?php
include 'vcap.inc.php';

// phpredisadmin config
$config = array(
	'servers' => $vcap_redis_servers,
	'seperator' => ':',
	'maxkeylen' => 100,
	'count_elements_page' => 100,
	'keys' => false,
	'scansize' => 1000
);

// check logged in
session_start();
if( !isset($_SESSION['user_id']) ) {
	echo "<meta http-equiv='refresh' content='0;url=/auth/login.php'>";
	exit;
}

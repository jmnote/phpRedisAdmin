<?php
include '../includes/vcap.inc.php';
if(!isset($_POST['user_id']) || !isset($_POST['user_pw'])) exit;

$login_ok = false;
foreach( $vcap_redis_servers as $server) {
	if( $_POST['user_id'] == $server['name'] && $_POST['user_pw'] == $server['auth'] ) {
		$login_ok = true;
		break;
	}
}

if( $login_ok ) {
	session_start();
	$_SESSION['user_id'] = $_POST['user_id'];
}
else {
	echo "<script>alert('Cannot log in.');</script>";
}
?>
<meta http-equiv='refresh' content='0;url=/'>

<?php 
require_once '../lib/util.admin.php';
require_once '../lib/auth.class.php';
require_once '../model/user.php';

$auth = new Auth();

if ($_POST) {
	if($_POST['adminusername'] && $_POST['adminpass']){
		$inputpassword = trim($_POST['adminpass']);
		$auth->isvalidpass($inputpassword,$dbpassword);
		
	}
}
?>
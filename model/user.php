<?php 
class User {
	function __construct() {
		
	}
	/*
	 * info 
	 * @param : $db connection flag
	 */
	function getListUser($user_id) {
		$sql ="SELECT * FROM user ";
		$DB->query($sql);
	}
}

$user = new User();
$user->getListUser(1);
?>
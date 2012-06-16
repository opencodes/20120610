<?php 
require_once './model.php';
/*
 * info : model for employer
 * @param : $db connection flag
 */
class Employer {
	
	var $db;
	
	function __construct() {
		$this->db = $DB;
	}
	/*
	 * 
	 */
	function getEmployers($param) {
		
	}
	/*
	 * 
	 */
	function addEmployer($data) {
		$this->db->query(); 
	}
}


?>
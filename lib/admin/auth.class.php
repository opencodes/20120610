<?php
class Auth {
	function __construct() {
		
	}
	function createpassword($password){
      $salt = $this->salt();
      return md5($password.$salt).":".$salt;
    }
    function isvalidpass($inputpassword,$dbpassword){
      $dbpass = explode(':', $dbpassword);
      $storedsalt = $dbpass[1];
      if(md5($inputpassword.$storedsalt) == $dbpass[0]){
        return true;
      }
      return false;
    }
    function salt() {
      $chars = "0123456789abcdefghiklmnopqrstuvwxyz";
      $string_length = 4;
      $randomstring = '';
      for ($i=0; $i<=  $string_length; $i++) {
        $rnum = rand(1, 36);
        $randomstring .= $chars[$rnum];
      }
      return $randomstring;
    }
}
/*** Test ****/
$auth = new Auth();
//echo $auth->salt();
echo $auth->createpassword('admin123');
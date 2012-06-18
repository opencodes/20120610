<?php 
include('../lib/adodb5/adodb.inc.php');
$db_options = $config['db_options'];
global $DB;
$DB = &ADONewConnection('mysql');        # create a connection
$DB->PConnect($db_options['host'], $db_options['user'], $db_options['password'], $db_options['database']);
 ?>
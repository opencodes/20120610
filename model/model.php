<?php 
include('../lib/adodb5/adodb.inc.php');
$db_options = $config['db_options'];
global $DB;
$DB = NewADOConnection('mysql');
$DB->Connect($db_options['host'], $db_options['user'], $db_options['password'], $db_options['database']);
?>
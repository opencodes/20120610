<?php 
// Report all errors except E_NOTICE
error_reporting(E_ALL ^ E_NOTICE);
require_once 'config/config.php';
require_once 'lib/utill.admin.php';

$html->display('index.tpl');
?>
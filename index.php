<?php 
// Report all errors except E_NOTICE
error_reporting(E_ALL ^ E_NOTICE);
require_once 'lib/utill.php';

$html->display('index.tpl');
?>
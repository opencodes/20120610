<?php
/*
 * Include smarty library
 * configure smarty for project
 */
require('../smarty/Smarty.class.php');
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->setTemplateDir('../20120610/views/');
$smarty->setCompileDir('../20120610/templates_c');
$smarty->setCacheDir('../20120610/cache');
$smarty->setConfigDir('../20120610/config/');
/*--------------- Smarty Config End -------------*/

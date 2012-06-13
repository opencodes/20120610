<?php
include_once './config/config.php';
/*
 * Include smarty library
 * configure smarty for project
 */
require('smarty/Smarty.class.php');
$html = new Smarty;

$config = $config['development'];
//$html->force_compile = true;
$html->debugging = false;
$html->caching = true;
$html->cache_lifetime = 120;
$html->setTemplateDir($config['root_dir'].$config['tpl_options']['site']['template_dir']);
$html->setCompileDir($config['root_dir'].$config['tpl_options']['site']['templlate_compile_dir']);
$html->setCacheDir($config['root_dir'].$config['tpl_options']['site']['cache_dir']);
$html->setConfigDir('../20120610/config/');
/*--------------- Smarty Config End -------------*/

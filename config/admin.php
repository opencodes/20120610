<?php 
$config = array(
	'development'=> array(
	  'root_dir'=>'/var/www/20120610/',
	  db_options=> array(
	    host=> 'localhost',
	    port=> 3306,
	    user=> 'root',
	    password=> 'root',
	    database=> 'ec_ecibil'
	  ),
	  tpl_options=>array(
		  'template_dir'=>'/admin/views',
		  'templlate_compile_dir'=>'templates_c/admin',
		  'cache_dir'=>'cache/admin'
	  )  
	),
	'production'=> array(
	  'root_dir'=>'/home/content/05/9319505/html/test/20120610/',
	  db_options=> array(
	    host=> 'localhost',
	    port=> 3306,
	    user=> 'root',
	    password=> 'root',
	    database=> 'ec_ecibil'
	  ),
	  tpl_options=>array(
		  'template_dir'=>'admin/views',
		  'templlate_compile_dir'=>'templates_c/admin',
		  'cache_dir'=>'cache/admin'
	  )
	)

)


?>

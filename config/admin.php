<?php 
$config = array('development'=> array(
  'root_dir'=>'../20120610/',
  db_options=> array(
    host=> 'localhost',
    port=> 3306,
    user=> 'root',
    password=> 'root',
    database=> 'ec_ecibil'
  ),
  tpl_options=>array(
  	'site'=>array(
	  'template_dir'=>'views/admin/',
	  'templlate_compile_dir'=>'template_c/admin/',
	  'cache_dir'=>'cache/admin/'
	  ),
  	'admin'=>array(
	  'template_dir'=>'views/admin',
	  'templlate_compile_dir'=>'template_c/admin',
	  'cache_dir'=>'cache/admin'
	  )
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
  	'site'=>array(
	  'template_dir'=>'views/admin/',
	  'templlate_compile_dir'=>'template_c/admin/',
	  'cache_dir'=>'cache/admin/'
	  ),
  	'admin'=>array(
	  'template_dir'=>'views/admin',
	  'templlate_compile_dir'=>'template_c/admin',
	  'cache_dir'=>'cache/admin'
	  )
  )
)

)


?>

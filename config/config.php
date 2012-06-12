<?php 
$config = array('development'=> array(
  port => 1984,
  cdn=> 'http://localhost/20120610/',
  db_options=> array(
    host=> 'localhost',
    port=> 3306,
    user=> 'root',
    password=> 'root',
    database=> 'ec_ecibil'
  )
),'production'=> array(
  port => 1984,
  cdn=> 'http://rkjha.com/test/ecibil/',
  db_options=> array(
    host=> 'localhost',
    port=> 3306,
    user=> 'root',
    password=> 'root',
    database=> 'ec_ecibil'
  )
));


?>

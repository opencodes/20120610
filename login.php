<?php 
//include_once '../model/user.php';
$colors = array(123,32,32432,324,4,324,234,32,42,34,234,234,23,42,34,4,324,4);
for ($i = 0; $i < count($colors)-1; $i++) {
	if ($i%5==0) {
		echo "<div>";
	}
	echo "<span>".$colors[$i]."</span>";
	if ($i%5==0 || $i == count($colors)-1 ) {
		echo "</div>";
	}
}

?>
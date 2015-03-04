<?php
$d1 = date("Y-m-j");
$d2 = "2015-04-2";

if(strtotime($d1) > strtotime($d2))
	echo "inn";
else
	echo "out";

?>

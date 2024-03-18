<?php
	//To find simple interest
	$p=1540;
	$r=6;
	$n=3;
	$si=($p*$r*$n)/100;
	echo "SIMPLE INTEREST : ".$si;

	echo "<BR>";
	echo "p is integer? :".is_int($p);

	echo "<BR>";
	echo "r is float? :".is_float($r);

	echo "<BR>";
	echo "si is float? :".is_float($si);

	$msg="THE END";
	echo "<BR>".$msg;

	$msg=NULL;
	echo "<BR>***".$msg;

	echo "<BR>msg is NULL? :".is_null($msg);
	echo "<BR>p is NULL? :".is_null($p);
?>
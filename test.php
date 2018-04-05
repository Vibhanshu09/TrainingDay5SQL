<?php
	$a=$_POST["First"];
	$b=$_POST["Second"];
	$res = $a+$b;
	for($i=1;$i<=10;$i++)
		echo $a." * ".$i." = ".$a*$i."<br />";
	var_dump($res);
?>
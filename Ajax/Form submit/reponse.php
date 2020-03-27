<?php

$data=$_GET['datavalue'];
$a= array('north city','south city');
$b= array('natore','bogra');
$c= array('moymanhing city','modhupur');

if($data == "Dhaka"){
	foreach ($a as $a1) {
		echo "<option> $a1 </option>";
	}
}
if ($data == "Rajshahi") {
		foreach ($b as $b1) {
		echo "<option> $b1 </option>";
	}
}
if ($data == "Moymanshing") {
		foreach ($c as $c1) {
		echo "<option> $c1 </option>";
	}
}

?>
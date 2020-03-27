<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'formdb');

extract($_POST);


if(isset($_POST['submit'])){
	$q="insert into ajaxinsert(username,password,degree,class)values('$username','$password','$degree','$class')";
	$quiry= mysqli_query($con,$q);
	header('location:form_1.php');
}

?>


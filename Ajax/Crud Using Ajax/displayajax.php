<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'formdb');
$q="select * from ajaxinsert";
$quiry= mysqli_query($con,$q);

if(mysqli_num_rows($quiry) > 0){
	while($result=mysqli_fetch_array($quiry)){
		?>

		<tr>
	        <td> <?php echo $result['id'] ?> </td>
	        <td> <?php echo $result['username'] ?> </td>
	        <td> <?php echo $result['password'] ?> </td>
	        <td> <?php echo $result['degree'] ?> </td>
	        <td> <?php echo $result['class'] ?> </td>
         </tr>

<?php
	}
}
?>




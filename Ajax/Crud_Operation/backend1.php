<?php

$con=mysqli_connect('localhost','root',"",'formdb');
extract($_POST);



if(isset($_POST['readrecord'])){
	$data='<table class="table table-bordered table striped">
	    <tr>
	    <th>No</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Email</th>
	    <th>Mobile</th>
	    <th>Edit Action</th>
	    <th>Delete Action</th>
	    </tr>';

	    $displayquery="SELECT * FROM `ajaxcrudtable` ";
	    $result=mysqli_query($con,$displayquery);
	    if(mysqli_num_rows($result) > 0){
	    	$number=1;
	    	while($row=mysqli_fetch_array($result)){
	    		$data .= '<tr>
					    		<td>'.$number.'</td>
					    		<td>'.$row['firstname'].'</td>
					    		<td>'.$row['lastname'].'</td>
					    		<td>'.$row['email'].'</td>
					    		<td>'.$row['mobile'].'</td>
					    		<td>
					    		<button onclick="GetUserDetails('.$row['id'].')" class="btn sbtn-warning">Edit</button>
					    		</td>
					    		<td>
					    		<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>
					    		</td>

	    		 		  </tr>';
	    		 		  $number++;

	    	}
	    }
	    $data .= '</table>'
	    echo $data;
}



if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['mobile'])){
	$query=" INSERT INTO `ajaxcrudtable`(`firstname`, `lastname`, `email`, `mobile`) VALUES ( '$firstname','$lastname','$email','$mobile' ) ";
	mysqli_query($con,$query);
}
?>

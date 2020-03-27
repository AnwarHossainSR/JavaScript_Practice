<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'formdb');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container col-lg-6">
		<h2 class="text-center text-danger">Get Data from Database</h2>

		<form id="myform" action="insert.php" method="post">
			
			Username: <input type="" name="username" class="form-control"><br>
			Password: <input type="" name="password" class="form-control"><br>
			Degrees: <select class="form-control" name="degree" onchange="myfun(this.value)">
				<option>Select Any One</option>
				<?php

				$q="select * from degree";
				$result=mysqli_query($con,$q);
				while($rows=mysqli_fetch_array($result)){
				?>
				<option><?php echo $rows['degrees'];?></option>
				<?php
			}

				?>
			</select><br>
			Class: <select class="form-control" name="class" id="dataget">
				<option>Select Any One</option>
				<?php

				$q="select * from classes";
				$result=mysqli_query($con,$q);
				while($rows=mysqli_fetch_array($result)){
				?>
				<option><?php echo $rows['class'];?></option>
				<?php
			}

				?>

			</select><br><br><br>

			<button class="btn btn-primary" name="submit" id="submit">Submit</button>
		</form>
		
	</div>



    <div>
    	<br><br>
    		<h1 class="text-center bg-whit2 text-dark">Display Data using ajax</h1>
    		<br>
    		<button id="displaydata"name="displaydata" class="btn btn-danger text-right"  >Display</button>

    		<table class="table table-center table-light table-striped text-center table-bordered">
    			<thead class="thead-dark"> 

	    			<th>Id</th>
	    			<th>User Name</th>
	    			<th>Password</th>
	    			<th>Degree</th>
	    			<th>Class</th>

    			</thead>

    			<tbody id="response">
    				
    			</tbody>
    		</table>
    </div>



	<script type="text/javascript">
		
		$(document).ready(function(){
			var form=$('#myform');
			$('#submit').click(function(){
				$.ajax({
					url: form.attr("action"),
					type: 'POST',
					data: $("#myform input,select").serialize(),

					success: function(data){
						console.log(data);

				}
			});

		});
	
	
		$('#displaydata').click(function(){
			$.ajax({
				url:'displayajax.php',
					type: 'post',
					success: function(responsedata){
						$('#response').html(responsedata);
					}
			});
		});
	});
	</script>
</body>
</html>
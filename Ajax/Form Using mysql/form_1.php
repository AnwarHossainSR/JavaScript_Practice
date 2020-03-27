<?php

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'formdb');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container col-lg-6">
		<h2 class="text-center text-danger">Get Data from Database</h2>

		<form>
			
			Username: <input type="" name="" class="form-control"><br>
			Password: <input type="" name="" class="form-control"><br>
			Degrees: <select class="form-control" onchange="myfun(this.value)">
				<option>Select Any One</option>
				<?php

				$q="select * from degree";
				$result=mysqli_query($con,$q);
				while($rows=mysqli_fetch_array($result)){
				?>
				<option value="<?php echo $rows['mid'];?>"><?php echo $rows['degrees'];?></option>
				<?php
			}

				?>
			</select><br>
			Class: <select class="form-control" id="dataget">
				<option>Select Any One</option>

			</select><br><br><br>

			<button class="btn btn-primary">Submit</button>
		</form>
		
	</div>

	<script type="text/javascript">
		
		function myfun(datavalue){
					$.ajax({
					url: 'form_2.php',
					type: 'POST',
					data: {datapost : datavalue},

					success: function(result){
						$('#dataget').html(result);
			   }
		    });
			
		}
	</script>

</body>
</html>
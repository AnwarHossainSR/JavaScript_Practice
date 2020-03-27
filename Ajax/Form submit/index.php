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

	<div class="container">
		<div class="ro">
			<div class=" col-lg-12">
				<h3 class="text-success text-center">Ajax Synchronous javacripts and xml</h3>


				<form>
					<div class="form-group">
						<label for="user">Username</label>
						<input type="text" name="" id="user" class="form-control">
					</div>
					<div class="form-group">
						<label for="pwd">Password</label>
						<input type="text" name="" id="pwd" class="form-control">
					</div>

					<div class="form-group">
						<label>Choose Divission</label>
						<select class="form-control" onchange="myfun(this.value)">
							<option>select divission</option>
							<option>Dhaka</option>
							<option>Rajshahi</option>
							<option>Moymanshing</option>
						</select>					
					</div>

					<div class="form-group">
						<label>City</label>
						<select class="form-control" id="city">
							<option>select city</option>
						</select>					
					</div>
					
				</form>
			</div>
		</div>
		
	</div>

	<script type="text/javascript">
		
		function myfun(data){
			var req=new XMLHttpRequest();
			req.open("GET","http://localhost/Ajax/Form%20submit/reponse.php?datavalue="+data,true);
			req.send();

			req.onreadystatechange=function(){

				if(req.readyState==4 && req.status==200){
					document.getElementById('city').innerHTML=req.responseText;
				}
			}
		}

	</script>

</body>
</html>
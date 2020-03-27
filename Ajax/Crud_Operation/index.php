<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  
</head>
<body>

	<div class="container">
		<h1 class="text-primary text-uppercase text-center">Ajax Crud Operation</h1>

		<div class="d-flex justify-content-end">
			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Open modal</button>
		</div>

		<h2 class="text-danger">All Records</h2>

		<div class="records_contant">
			
		</div>

				<div class="modal" id="myModal">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h4 class="modal-title">Ajax Crud Operation</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body">
				        <div class="form-group">
				        	<label>First Name</label>
				        	<input type="text" name="" id="firstname" class="form-control" placeholder="First Name">
				        </div>
				        <div class="form-group">
				        	<label>Last Name</label>
				        	<input type="text" name="" id="lastname" class="form-control" placeholder="Last Name">
				        </div>
				        <div class="form-group">
				        	<label>Email</label>
				        	<input type="text" name="" id="email" class="form-control" placeholder="Email">
				        </div>
				        <div class="form-group">
				        	<label>Mobile Number</label>
				        	<input type="text" name="" id="mobile" class="form-control" placeholder="Mobile Number">
				        </div>
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer">
				      	<button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addRecord()">Save</button>
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				      </div>

				    </div>
				  </div>
				</div>
	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script type="text/javascript">


  	function readRecords(){
  		var readrecord="readrecord";
  		$.ajax({
  			url:'backend1.php',
  			type: 'POST',
  			data: {readrecord : readrecord },
  			success:function(data,status){
  				$('#records_contant').html(data);
  			}
  		});
  	}


  	function addRecord(){
  		var firstname=$('#firstname').val();
  		var lastname=$('#lastname').val();
  		var email=$('#email').val();
  		var mobile=$('#mobile').val();

  		$.ajax({
  			url:'backend1.php',
  			type: 'POST',
			data: {firstname : firstname,
				lastname : lastname,
				email : email,
				mobile : mobile
			},
		    success:function(data,status){
		    	readRecords();
		    }
  		});
  	}
  </script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>

  <?php include 'connection.php'; ?>

<div class="container">
  <h1 class="text-primary text-center text-uppercase">Ajax Crud operation</h1><br>
  <div id="records_content"> <!-- Data record Table --> </div>
</div>

<div class="container">

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-primary" <!-- <!-- data-toggle="modal" data-target="#myModal" ><i class="glyphicon glyphicon-plus"></i> Add Data</button>

  <!-- Insert Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title text-center">Inset Data (Ajax)</h3>
        </div>
        <div class="modal-body">
           <form action="" method="post">
    <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname">
    </div>
    <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname">
    </div>
    <div class="form-group">
      <label for="email">Email Id:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="cnum">Contct Number:</label>
      <input type="text" class="form-control" id="cnum" placeholder="Enter contact number" name="cnum">
    </div>
    <button onclick="addRecords();" type="button" name="submit" id="submit" class="btn btn-success">Submit Data</button>
  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


    <!--Update Modal -->
  <div class="modal fade" id="myEditModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title text-center">Edit / Update Data (Ajax)</h3>
        </div>
        <div class="modal-body">
           <form action="" method="post">
    <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="u_fname" placeholder="Enter first name" name="fname">
    </div>
    <div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" id="u_lname" placeholder="Enter last name" name="lname">
    </div>
    <div class="form-group">
      <label for="email">Email Id:</label>
      <input type="email" class="form-control" id="u_email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="cnum">Contct Number:</label>
      <input type="text" class="form-control" id="u_cnum" placeholder="Enter contact number" name="cnum">
    </div>
    <div>
      <input type="hidden" name="u_id" id="u_id">
    </div>
    <button onclick="updateRecords();" type="button" name="submit" id="u_submit" class="btn btn-success">Submit Data</button>
  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <script>

    $(function(){
      readRecords(); 
    });


    function readRecords() {
      var readRecords = "readRecords";
      $.post({
        url: 'ajax.php',
        type: 'post',
        data: {readRecords:readRecords},
        success: function(data, status){
          $('#records_content').html(data)

        }
      })
    }


    function addRecords() {
      var fname = $('#fname').val();
      var lname = $('#lname').val();
      var email = $('#email').val();
      var cnum = $('#cnum').val();

      $.post({
        url: 'ajax.php',
        type: 'post',
        data: {fname:fname, lname:lname, email:email, cnum:cnum},
        success:function(data, status) {
          readRecords();
        }
      });
      
    }


    function deleteRecord(deleteId){
      var conf = confirm('Are you sure');
      if (conf == true) {
        $.post({
          url: 'ajax.php',
          type: 'post',
          data: {deleteId:deleteId},
          success: function(data, status){
            $('#records_content').html(data);
            readRecords();
          }
        });
      }
    }



    function editRecord(id){
      $('#u_id').val(id);
      $.post({
        url: 'ajax.php',
        type: 'post',
        data: {id:id},
        success: function(data, status) {
          var user = JSON.parse(data);

          $('#u_fname').val(user.fname);
            $('#u_lname').val(user.lname);
            $('#u_email').val(user.email);
            $('#u_cnum').val(user.cnum);
        }
      });

      $("#myEditModal").modal('show');
    }



    function updateRecords() {
      var u_fname = $('#u_fname').val();
      var u_lname = $('#u_lname').val();
      var u_email = $('#u_email').val();
      var u_cnum = $('#u_cnum').val();
      var u_id = $('#u_id').val();

      $.post({
        url: 'ajax.php',
        type: 'post',
        data: {u_fname:u_fname, u_lname:u_lname, u_email:u_email, u_cnum:u_cnum, updateId:u_id},
        success:function(data, status) {
          $("#myEditModal").modal('hide');
            readRecords();
        }
      });
    }


  </script>
</body>
</html>
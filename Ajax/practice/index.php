<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Insert</title>
</head>
<body>
    <label>Name</label>
    <input type="text" id="name"> 
    <label>Email</label>
    <input type="text" id="email">
    <button type="submit" id="button">SAVE</button>    
    <script>
        $(document).ready(function(){
            $("#button").click(function(){
                var name=$("#name").val();
                var email=$("#email").val();
                $.ajax({
                    url:'insert.php',
                    method:'POST',
                    data:{
                        name:name,
                        email:email
                    },
                   success:function(data){
                       alert(data);
                   }
                });
            });
        });
    </script>
</body>
</html>
<?php

include 'conn.php';

if(isset($_POST['submit_success'])){

 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $q = " INSERT INTO crudtable(`username`, `email`, `password`) 
        VALUES ( '$username', '$email', '$password' )";

 $query = mysqli_query($con, $q);
 
 header('location:display.php');
}
?>
<!--PHP end  -->



<!-- Design start -->
<!DOCTYPE html>
<html>
<head>
 <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Operation </h1>
 </div><br>


<!-- input start -->
 <label> username: </label>
 <input type="text" name="username" class="form-control"> <br>

 <label> email: </label>
 <input type="text" name="email" class="form-control"> <br>

 <label> password: </label>
 <input type="text" name="password" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit_success"> Submit </button><br>
<!-- input end -->


 </div>
 </form>
 </div>
</body>
</html>
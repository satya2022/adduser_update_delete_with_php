<?php
include 'connect.php';
if (isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];

$sql="insert into`crud`(name,email,password,mobile) values('$name','$email','$password','$mobile')";
$result=mysqli_query($conn,$sql);
if($result){
    // echo"data inserted succesfully";
    header('Location:display.php');
}
else{
   die(mysqli_error($conn));
}
}



?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Crud opration</title>
</head>

<body>


    <div class="container my-5">

        <form method="post">

            <div class="form-group">
                <label>name</label>
                <input type="text" class="form-control" placeholder="inter your name" name="name" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="inter your email" name="email" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="inter your mobile" name="mobile"
                    autocomplete="off">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="inter your Password" name="password"
                    autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
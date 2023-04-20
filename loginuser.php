<?php
session_start();
include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center custom-login">
                <h3 style="margin-top: 40px;">Login</h3>
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="container">
                        <form action="" name="form1" method="POST">
                            <div class="row" style="margin-left: 400px;" >

                                        <div class="form-group col-lg-12">
                                            <label> Username</label>
                                            <input style="width: 500px;" type="text" name="username" class="form-control" placeholder="Username">
                                        </div>
                                        
                                            <div class="form-group col-lg-12">
                                                <label>Password</label>
                                                <input style="width: 500px;" type="password" name="password" class="form-control" placeholder="Password">
                                            </div>                                     
                                                                             
                                                    
                            </div>
                            <div class="text-center">
                                <button style="margin-top: 30px; width: 100px;"  type="submit" name="login" class="btn btn-success loginbtn">Login</button>
                            </div>
                            <div class="text-center">
                                <button style="margin-top: 30px; width: 100px;" type="submit" name="register" class="btn btn-success loginbtn">Register</button>
                            </div>
                           
                            <div class="alert alert-danger" id="failure"style="margin-top: 10px; width: 500px; margin-left: 408px; display: none;">
                                <strong>Does not match!</strong> Invalid username or password.
                              </div>

<?php

if(isset($_POST["login"]))
{
    $count=0;
    $res=mysqli_query($connection,"select * from registration where username='$_POST[username]' && password='$_POST[password]'");

    $count=mysqli_num_rows($res);

    if($count==0)
    {
        ?>
        <script type="text/javascript">
        document.getElementById("failure").style.display="block";
        </script>
        <?php


    }
    else
    {
        $_SESSION["username"]=$_POST["username"]
        ?>
        <script type="text/javascript">
        window.location="selectexam.php";
        </script>
        <?php

    }
}
?>
<?php
if(isset($_POST["register"]))
{
 ?>
 <script type="text/javascript">
 window.location="register.php"

 </script>
 <?php
}
?>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
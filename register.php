<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<style>
.pcolor{
    color:red;
}
</style>
</head>
<body>

    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center custom-login">
                <h3 style="margin-top: 40px;">Register Now</h3>
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="container">
                        <form action="" name="form1" method="POST">
                            <div class="row" style="margin-left: 400px;" >
                                <div class="form-group col-lg-12">
                                    <label>First Name</label>
                                    <input style="width: 500px;" id="fname" type="text" name="firstname" class="form-control">
                                </div>
                                
                                    <div class="form-group col-lg-12">
                                        <label>Last Name</label>
                                        <input style="width: 500px;" id="lname"  type="text" name="lastname" class="form-control">
                                    </div>
                                    
                                        <div class="form-group col-lg-12">
                                            <label> Username</label>
                                            <input style="width: 500px;" id="uname" type="text" name="username" class="form-control">
                                        </div>
                                        
                                            <div class="form-group col-lg-12">
                                                <label>Password</label>
                                                <input style="width: 500px;" id="pass" type="password" name="password" class="form-control">
                                            </div>
                                            
                                                <div class="form-group col-lg-12">
                                                    <label>Email</label>
                                                    <input style="width: 500px;"id="email" type="text" name="email" class="form-control">
                                                </div>
                                                
                                                    <div class="form-group col-lg-12">
                                                        <label>Contact</label>
                                                        <input style="width: 500px;" id="contact" type="text" name="contact" class="form-control">
                                                    </div>
                                                    
                            </div>
                             
                            <div class="text-center">
                                <button style="margin-top: 30px;" type="submit" name="submit1" class="btn btn-success loginbtn">Register</button>
                            </div>

                            <div class="alert alert-success" id="success" style="margin-top: 10px; width: 500px; margin-left: 408px; display: none; ">
                                <strong>Success!</strong> Account Registration Successfully.
                              </div>
                              <div class="alert alert-danger" id="failure"style="margin-top: 10px; width: 500px; margin-left: 408px; display: none;">
                                <strong>Wrong!</strong> This Account already Exist.
                              </div>
                              <div class="alert alert-danger" id="validator"style="margin-top: 10px; width: 500px; margin-left: 408px; display: none;">
                                <strong>Wrong!</strong> Please fill all the required fields!
                              </div>

                            
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <?php
    if(isset($_POST["submit1"]))
    {
        $count=0;
        $res=mysqli_query($connection,"select * from registration where username='$_POST[username]'") or die (mysqli_error($connection));
        $count=mysqli_num_rows($res);

        if($count>0)
        {

            ?>
            <script type="text/javascript">
            document.getElementById("success").style.display="none";
            document.getElementById("failure").style.display="block";

            </script>

            <?php
        }
        else { 

            if((!empty($_POST["firstname"])) && (!empty($_POST["lastname"])) && (!empty($_POST["username"])) && (!empty($_POST["password"])) && (!empty($_POST["email"])) && (!empty($_POST["contact"])))
            {
                mysqli_query($connection,"insert into registration values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]')");
               ?>            
                <script type="text/javascript">
        document.getElementById("success").style.display="block";
        document.getElementById("failure").style.display="none";
        </script>
        <?php
            }
            else{
                ?>

                <script type="text/javascript">
                document.getElementById("validator").style.display="block";
                document.getElementById("fname").setAttribute("placeholder", "Required");
                document.getElementById("lname").setAttribute("placeholder", "Required");
                document.getElementById("uname").setAttribute("placeholder", "Required");
                document.getElementById("pass").setAttribute("placeholder", "Required");
                document.getElementById("email").setAttribute("placeholder", "Required");
                document.getElementById("contact").setAttribute("placeholder", "Required");
                

           </script>
           <?php
            }
        }
        

       

        
       
    }
   

    ?>
    



   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
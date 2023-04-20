<?php
include "connection.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>
        ul{
            padding: 0;
            margin: 0;
            background-color: #333;
            display: block;
            list-style-type:none;
            overflow: hidden;
        }
        li {
            float: left;
        }
        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    li a:hover {
            background-color:white;
        }
        
    </style>
</head>
<body>

   <div class="container">
        <div class="row">
    
        <ul>
<li><a href="selectexam.php">Select Exam</a></li>
<li><a href="old_exam_results.php">Last Results</a></li>
<li><a href="logout.php">Logout</a></li>
<li style="float:right"><a class="active11" href="logout.php"> <span class="admin-name"><?php echo $_SESSION["username"]; ?></span></a></li>
</ul>
</div>
    
<div class="row">
    <div class="col-lg-12"  style="height: 70px;">
       <div id="countdowntimer" style="display: block;"></div>
    </div>
    </div>

    <script type="text/javascript">
    setInterval(function()
    {
        timer();
    },1000);
function timer()
{
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            if(xmlhttp.responseText=="00:00:01")
            {
                window.location="result.php";
            }
            document.getElementById("countdowntimer").innerHTML=xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET","forajax/load_timer.php",true);
    xmlhttp.send(null);
}
    </script>
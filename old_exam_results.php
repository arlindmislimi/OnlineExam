
        <?php
        session_start();

        include "header.php";
        include "connection.php";
        if(!isset($_SESSION["username"]))
{
    ?>
    <script type="text/javascript">
    window.location="loginuser.php";
    </script>
    <?php

}
?>
        

    

    <div class="row">
        
        <div class="col-lg-12" style="height: 600px ;">
        <center>
        <h1>Old Exams Results</h1>
        </center>
        
        <?php
        $count=0;
$res=mysqli_query($connection,"select * from exam_results where username='$_SESSION[username]' order by id desc");
$count=mysqli_num_rows($res);

if($count==0)
{
    ?>
     <center>
        <h1>No Results Found</h1>
        </center>

    <?php
}
else 
{
    echo "<table class='table table bordered'>";
    echo "<tr style='background-color:#333; color:white'>";
    echo "<th>"; echo "username"; echo "</th>";
    echo "<th>"; echo "exam type"; echo "</th>";
    echo "<th>"; echo "total questions"; echo "</th>";
    echo "<th>"; echo "correct answer"; echo "</th>";
    echo "<th>"; echo "wrong answer"; echo "</th>";
    echo "<th>"; echo "exam time"; echo "</th>";


    echo "</tr>";
    while($row=mysqli_fetch_array($res))
    {
        echo "<tr>";
        echo "<td>"; echo $row["username"]; echo "</td>";
        echo "<td>"; echo $row["exam_type"]; echo "</td>";
        echo "<td>"; echo $row["total_question"]; echo "</td>";
        echo "<td>"; echo $row["correct_answer"]; echo "</td>";
        echo "<td>"; echo $row["wrong_answer"]; echo "</td>";
        echo "<td>"; echo $row["exam_time"]; echo "</td>";
    
    
        echo "</tr>";
    }

    echo "</table>";
}

?>
        
        </div>
        
        
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
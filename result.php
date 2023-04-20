
        <?php
        session_start();
        include "connection.php";

$date=date("Y-m-d H:i:s");
$_SESSION["end_time"]=date("Y-m-d H:i:s",strtotime($date."+ $_SESSION[exam_time] minutes"));

        include "header.php";
        ?>

    

    <div class="row">
        
        <div class="col-lg-12" style="height: 600px ;">
        
        <?php

$correct=0;
$wrong=0;

if(isset($_SESSION["answer"]))
{
    for($i=1;$i<=sizeof($_SESSION["answer"]);$i++)
    {
        $answer="";
        $res=mysqli_query($connection,"select * from questions where category='$_SESSION[exam_category]' && question_no=$i");
        while($row=mysqli_fetch_array($res))
        {
            $answer=$row["answer"];
        }
        if(isset($_SESSION["answer"][$i]))
        {
            if($answer==$_SESSION["answer"][$i])
            {
                $correct=$correct+1;
            }
            else
            {
                $wrong=$wrong+1;

            }
        }
        else 
        {
            $wrong=$wrong+1;

        }
    }
}
$count=0;
$res=mysqli_query($connection,"select * from questions where category='$_SESSION[exam_category]'");
$count=mysqli_num_rows($res);
$wrong=$count-$correct;

echo "<br>"; echo "<br>";
echo "<center>";

echo "Total Questions=".$count;
echo "<br>";
echo "Correct Answer=".$correct;
echo "<br>";
echo "Wrong Answer=".$wrong;



echo "</center>";


      ?>

    
        
        
        </div>       
        
    </div>

    <?php
if(isset($_SESSION["exam_start"]))
{
    $date=date("Y-m-d");
    mysqli_query($connection,"insert into exam_results(id,username,exam_type,total_question,correct_answer,wrong_answer,exam_time) values(NULL,'$_SESSION[username]','$_SESSION[exam_category]','$count','$correct','$wrong','$date')");

}
if(isset($_SESSION["exam_start"]))
{
    unset($_SESSION["exam_start"]);
    ?>
    <script type="text/javascript">
    window.location.href=window.location.href;

    </script>
    <?php
}

?>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
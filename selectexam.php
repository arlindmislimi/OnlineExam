<?php
session_start();
if(!isset($_SESSION["username"]))
{
    ?>
    <script type="text/javascript">
    window.location="loginuser.php";
    </script>
    <?php

}
?>

        <?php
        include "connection.php";
        include "header.php";
        ?>

    

    <div class="row">
        
        <div class="col-lg-6 col-lg-push-3" >

        <?php

        $res=mysqli_query($connection,"select * from exam_category");
        while($row=mysqli_fetch_array($res))
        {
            ?>
            <input type="button" class="btn btn success" value="<?php echo $row["category"]; ?>" style="margin-top: 100px; background-color: #333; color: white" onclick="set_exam_type_session(this.value);">
          <?php
        }

        ?>
    
    
        </div>
        
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>

<script type="text/javascript">
function set_exam_type_session(exam_category)
{
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            window.location = "dashboard.php";
        }
    };
    xmlhttp.open("GET","forajax/set_exam_type_session.php?exam_category="+exam_category,true);
    xmlhttp.send(null);
}

</script>
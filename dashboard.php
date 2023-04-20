
        <?php
        session_start();
        include "header.php";
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

        <br>

        <div class="row">
        <br>
        <div class="col-lg-2">
        <div id="current_que" style="float:left; font-size:35px" >0</div>
        <div style="float:left;  font-size:35px">/</div>
        <div id="total_que" style="float:left;  font-size:35px ">0</div>
        </div>

        <div class="row" style="margin-top:30px">

        <div class="row">
        <div class="col-lg-10 " style="min-height:300px; background-color:white" id="load_questions"></div>
        </div>
        </div>

        <div class="row" style="margin-top:10px">
             
             <div class="col-lg-12 " style="min-height:50px">
             
             <div class="col-lg-12 text-center">
              <input type="button" class="btn btn-warning" value="Previous" onclick="load_previous();">&nbsp;
              <input type="button" class="btn btn-success" value="Next" onclick="load_next();">
             </div> 
             </div>
        </div>

        </div>
        </div>




        

        <script type="text/javascript">
        function load_total_que()
        {
         var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById("total_que").innerHTML=xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET","forajax/load_total_que.php",true);
    xmlhttp.send(null);
    }
    

    var questionno="1";
    load_questions(questionno);
    function load_questions(questionno)
    {
        document.getElementById("current_que").innerHTML=questionno;
        var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
           if(xmlhttp.responseText=="over")
           {
               window.location="result.php";
           }
           else {
               document.getElementById("load_questions").innerHTML=xmlhttp.responseText;
               load_total_que();
           }
        }
    };
    xmlhttp.open("GET","forajax/load_questions.php?questionno="+questionno,true);
    xmlhttp.send(null);

    }

    function radioclick(radiovalue,questionno)
    {
        var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            
        }
    };
    xmlhttp.open("GET","forajax/save_answer_in_session.php?questionno="+ questionno +"&value1="+ radiovalue,true);
    xmlhttp.send(null);


    }

    function load_previous()
    {
        if(questionno=="1")
        {
            load_questions(questionno);
        }
        else 
        {
            questionno=eval(questionno)-1;
            load_questions(questionno);
        }

    }
    function load_next()
    {
        questionno=eval(questionno)+1;
            load_questions(questionno);
    }

        </script>
      
      

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
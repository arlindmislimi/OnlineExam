<?php

include "header.php";
include "../connection.php";
$id=$_GET["id"];
$id1=$_GET["id1"];
$question="";
$option1="";
$option2="";
$option3="";
$option4="";
$answer="";
$res=mysqli_query($connection,"select * from questions where id=$id");
while($row=mysqli_fetch_array($res))
{
   $question=$row["question"];
   $option1=$row["option1"];
   $option2=$row["option2"];
   $option3=$row["option3"];
   $option4=$row["option4"];
   $answer=$row["answer"];
}
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Update Question</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-body">
                            <div class="col-lg-8">
                            <form name="form1" action="" method="post">
                        <div class="card">
                            <div class="card-header"><strong>Update Questions</strong>
                        </div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="company" class=" form-control-label">Add Question</label><input type="text" name="question" placeholder="Add Question" class="form-control" value="<?php echo $question; ?>"></div>
                                <div class="form-group"><label for="company" class=" form-control-label">Option 1</label><input type="text" name="option1" placeholder="Add Option 1" class="form-control" value="<?php echo $option1; ?>"></div>
                                <div class="form-group"><label for="company" class=" form-control-label">Option 2</label><input type="text" name="option2" placeholder="Add Option 2" class="form-control" value="<?php echo $option2; ?>"></div>
                                <div class="form-group"><label for="company" class=" form-control-label">Option 3</label><input type="text" name="option3" placeholder="Add Option 3" class="form-control" value="<?php echo $option3; ?>"></div>
                                <div class="form-group"><label for="company" class=" form-control-label">Option 4</label><input type="text" name="option4" placeholder="Add Option 4" class="form-control" value="<?php echo $option4; ?>"></div>
                                <div class="form-group"><label for="company" class=" form-control-label">Answer</label><input type="text" name="answer" placeholder="Add Answer" class="form-control" value="<?php echo $answer; ?>"></div>

                                    <div class="form-group">
                                        <input type="submit" name="submit1" value="Update Question" class="btn btn-success">
                                    </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                
                            </div>
                        </div>
                    </div>
                    <!--/.col-->

                                            
                                                
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->

<?php

if(isset($_POST["submit1"]))
{
    mysqli_query($connection,"update questions set question='$_POST[question]',option1='$_POST[option1]',option2='$_POST[option2]',option3='$_POST[option3]',option4='$_POST[option4]',answer='$_POST[answer]' where id=$id");

    ?>
    <script type="text/javascript">

alert("Question updated successfully");
    window.location="add_edit_questions.php?id=<?php echo $id1;?>";
    </script>

<?php
}
?>  
                                
<?php
include "footer.php";
?>
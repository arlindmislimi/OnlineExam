<?php

include "header.php";
include "../connection.php";
$id=$_GET["id"];
$exam_category='';
$res=mysqli_query($connection,"select * from exam_category where id=$id");
while($row=mysqli_fetch_array($res))
{
    $exam_category=$row["category"];
}
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Questions inside <?php echo "<font color='red'>".$exam_category."</font>" ;?></h1>
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
                            <div class="card-header"><strong>Add New Questions</strong>
                        </div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="company" class=" form-control-label">Add Question</label><input type="text" name="question" placeholder="Add Question" class="form-control"></div>
                                <div class="form-group"><label for="company" class=" form-control-label">Option 1</label><input type="text" name="option1" placeholder="Add Option 1" class="form-control"></div>
                                <div class="form-group"><label for="company" class=" form-control-label">Option 2</label><input type="text" name="option2" placeholder="Add Option 2" class="form-control"></div>
                                <div class="form-group"><label for="company" class=" form-control-label">Option 3</label><input type="text" name="option3" placeholder="Add Option 3" class="form-control"></div>
                                <div class="form-group"><label for="company" class=" form-control-label">Option 4</label><input type="text" name="option4" placeholder="Add Option 4" class="form-control"></div>
                                <div class="form-group"><label for="company" class=" form-control-label">Answer</label><input type="text" name="answer" placeholder="Add Answer" class="form-control"></div>

                                    <div class="form-group">
                                        <input type="submit" name="submit1" value="Add Question" class="btn btn-success">
                                    </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <!--/.col-->
 

                    <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-body">
                            <table class="table table-bordered">
                            <tr>
                            <th>No</th>
                            <th>Questions</th>
                            <th>Option 1</th>
                            <th>Option 2</th>
                            <th>Option 3</th>
                            <th>Option 4</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            </tr>
                            

                            <?php

                            $res=mysqli_query($connection,"select * from questions where category='$exam_category' order by question_no asc");
                            while($row=mysqli_fetch_array($res))
                            {
                                echo "<tr>";
                                echo "<td>"; echo $row["question_no"]; echo "</td>";
                                echo "<td>"; echo $row["question"]; echo "</td>";
                                echo "<td>"; echo $row["option1"]; echo "</td>";
                                echo "<td>"; echo $row["option2"]; echo "</td>";
                                echo "<td>"; echo $row["option3"]; echo "</td>";
                                echo "<td>"; echo $row["option4"]; echo "</td>"; 

                                echo "<td>"; ?> <a href="editquestions.php?id=<?php echo $row["id"];?>&id1=<?php echo $id;?>">Edit</a> <?php echo "</td>";
                                echo "<td>"; ?> <a href="deletequestions.php?id=<?php echo $row["id"];?>&id1=<?php echo $id;?>">Delete</a> <?php echo "</td>";
                                echo "</tr>";

                            }

                            ?>
                            
                          </table>

                            </div>
                            </div>
                            </div>
                            </div>

                                            
                                                
     </div>
     </div><!-- .animated -->
    </div><!-- .content -->
                                
<?php

if(isset($_POST["submit1"]))
{
    $loop=0;
    $count=0;
    $res=mysqli_query($connection,"select * from questions where category='$exam_category' order by id asc") or die(mysqli_error($connection));

    $count=mysqli_num_rows($res);

    if($count==0)
    {

    }
    else 
    {
        while($row=mysqli_fetch_array($res))
        {
            $loop=$loop+1;
            mysqli_query($connection,"update questions set question_no='$loop' where id=$row[id]");
        }
    }
    $loop=$loop+1;
    mysqli_query($connection,"insert into questions values(NULL,'$loop','$_POST[question]','$_POST[option1]','$_POST[option2]','$_POST[option3]','$_POST[option4]','$_POST[answer]','$exam_category')") or die(mysqli_error($connection));

    ?>

    <script type="text/javascript">

    alert("Question added successfully");

    window.location.href=window.location.href;

    </script>

    <?php
}
?>


<?php              

include "footer.php";

?>
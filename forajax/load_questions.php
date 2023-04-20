<?php

session_start();
include "../connection.php";

$question_no="";
$question="";
$opt1="";
$opt2="";
$opt3="";
$opt4="";
$answer="";
$count=0;
$ans="";

$queno=$_GET["questionno"];
if(isset($_SESSION["answer"] [$queno]))
{
    $ans=$_SESSION["answer"] [$queno];
}
$res=mysqli_query($connection,"select * from questions where category='$_SESSION[exam_category]' && question_no=$_GET[questionno]");
$count=mysqli_num_rows($res);

if($count==0)
{
echo "over";
}
else
{
 while($row=mysqli_fetch_array($res))
 {
     $question_no=$row["question_no"];
     $question=$row["question"];
     $opt1=$row["option1"];
     $opt2=$row["option2"];
     $opt3=$row["option3"];
     $opt4=$row["option4"];
 }
 ?>

 <br>
  
  <table>
    <tr>
    <td style="font-weight:bold; font-size:40px; padding-left:5px" colspan="2">
     <?php  echo  "(".$question_no . ")". $question; ?>

    </td>
    </tr>
  </table>

  <table style="height:30px; margin-left:20px">
<tr>
<td>
<input type="radio" name="r1" id="r1" value="<?php echo $opt1; ?>" onclick="radioclick(this.value, <?php echo $question_no ?>)"
<?php
if($ans==$opt1)
{
    echo "checked";
}
?>>
</td>
<td  style="font-size:25px"> <?php echo $opt1 ?> </td>
</tr>

<tr>
<td>
<input type="radio" name="r1" id="r1" value="<?php echo $opt2; ?>" onclick="radioclick(this.value, <?php echo $question_no ?>)"
<?php
if($ans==$opt2)
{
    echo "checked";
}
?>>
</td>
<td style="font-size:25px"> <?php echo $opt2 ?> </td>
</tr>

<tr>
<td>
<input type="radio" name="r1" id="r1" value="<?php echo $opt3; ?>" onclick="radioclick(this.value, <?php echo $question_no ?>)"
<?php
if($ans==$opt3)
{
    echo "checked";
}
?>>
</td>
<td  style="font-size:25px"> <?php echo $opt3 ?> </td>
</tr>

<tr>
<td>
<input type="radio" name="r1" id="r1" value="<?php echo $opt4; ?>" onclick="radioclick(this.value, <?php echo $question_no ?>)"
<?php
if($ans==$opt4)
{
    echo "checked";
}
?>>
</td>
<td  style="font-size:25px"> <?php echo $opt4 ?> </td>
</tr>
  </table>

 <?php
}
?>
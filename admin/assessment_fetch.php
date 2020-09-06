<?php
//fetch.php
if(isset($_POST["action"]))
{
 $connect = mysqli_connect("localhost", "root", "", "erms");
 $output = '';
 if($_POST["action"] == "name")
 {
  $query = "SELECT * FROM courses WHERE department_code = '".$_POST["query"]."'";
  $result = mysqli_query($connect, $query);
  $output .= '<option value="" disabled selected>Select course</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["code"].'">'.$row["name"].'</option>';
  }
 }
 if($_POST["action"] == "course")
 {
  $query = "SELECT * FROM modules WHERE course_code = '".$_POST["query"]."'";
  $result = mysqli_query($connect, $query);
  $output .= '<option value="" disabled selected>Select module</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["code"].'">'.$row["name"].'</option>';
  }
 }
 echo $output;
}
?>

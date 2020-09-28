<?php  
//export.php  
$con = mysqli_connect("localhost", "root", "", "erms");
$output = '';
if(isset($_POST["export"]))
{
//  $query = "show table excel_marks";
//  $result = mysqli_query($connect, $query);
//  if(mysqli_num_rows($result) > 0)
//  {
//   $output .= '
//    <table class="table" bordered="1">  
//                     <tr>  
//                     <th>Student_id</th>  
//                     <th>Student_name</th>  
//                     <th>NIC_number/th>  
//                     <th>MOD01</th>
//                     <th>MOD02</th>
//                     <th>MOD03</th>
//                     <th>MOD04</th>
//                     <th>MOD06</th>
//                     <th>MOD07</th>
//                     <th>MOD08</th>
//                     <th>Percentage</th>  
//                     <th>Status</th> 
//                     </tr>
//   ';
?>
<table class="table" border="1">  
                    <tr>  
                    <th>Student_id</th>  
                                        <th>Student_name</th>  
                                        <th>NIC_number</th>  
                                       <th>module</th>
                                       <th>batch</th>
                                       <th>Status</th>
                                       <th>Percentage</th>
                    </tr>

  <?php 

}
$sql = "SELECT `student_assessments`.`student_id`,`student`.`name_with_initials`,`student_assessments`.`marks`,
modules.code,student.nic,student_enroll.batch_no FROM `student_assessments` INNER JOIN student ON 
student_assessments.student_id=student.id INNER JOIN assessments ON student_assessments.assessment_id=assessments.id 
INNER JOIN modules ON assessments.module=modules.id
INNER JOIN student_enroll ON student_enroll.id=student_assessments.student_id";

$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
                                        <td><?php echo $row['student_id']; ?></td>
                                        <td><?php echo $row['name_with_initials']; ?></td>
                                        <td><?php echo $row['nic']; ?></td>
                                       <td><?php echo $row['code']; ?></td>
                                       <td><?php echo $row['batch_no']; ?></td>
                                       <td><?php  
                                       if ($row['marks'] > 50) {
                                                     echo "Pass";
                                                 } else {
                                                 echo "Fail";
                                            } ?></td>
                                       <td><?php echo $row['marks'].'%'; ?></td>
                                    </tr>
<?php
  }
  echo '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=docu.xls');
?>

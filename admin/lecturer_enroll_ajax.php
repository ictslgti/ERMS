
<?php include_once("../config.php"); ?>
<?php
// module
$output ='';
if (isset($_GET['course'])) {
    echo $_GET['course'];
    $query = 'select * from modules where course_code="' . $_GET['course'] . '";';
    $result = mysqli_query($con, $query);
    $output .= '<option selected disabled value="">Choose Module</option>';
    while ($row = mysqli_fetch_array($result)) {
      $output .= '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
    }
    echo $output;
  }
  // module

  //batch
if (isset($_GET['cou'])) {
    echo $_GET['cou'];
    $query = 'select * from batches where department_code=(select department_code from courses where code="'.$_GET['cou'].'") and NVQ_level=(select NVQ_level from courses where code="'.$_GET['cou'].'") order by batch_no desc;';
    $result = mysqli_query($con, $query);
    $output .= '<option selected disabled value="">Choose Batch</option>';
    while ($row = mysqli_fetch_array($result)) {
      $output .= '<option value="' . $row["id"] . '">' . $row["batch_no"] . '</option>';
    }
    echo $output;
  }
  
  //batch

  //lecturer
if (isset($_GET['courses'])) {
    echo $_GET['courses'];
    $query = 'select * from lecturer';
    $result = mysqli_query($con, $query);
    $output .= '<option selected disabled value="">Choose lecturer</option>';
    while ($row = mysqli_fetch_array($result)) {
      $output .= '<option value="' . $row["id"] . '">' . $row["first_name"].$row["last_name"]." | "."<span class='badge badge-dark'>".$row["department_code"]."</span>". '</option>';
    }
    echo $output;
  }
  
  //lecturer 


  if (isset($_GET['module'])) {
    $output = '';
     $_GET['module'];
    // $query = " select (select first_name from lecturer where id in(select lecturer from lecturer_enroll)) as first_name,(select last_name from lecturer where id in(select lecturer from lecturer_enroll)) as last_name, (select  batch_no from batches where id in 
    // (select batch from lecturer_enroll)) as batch from lecturer_enroll where module='".$_GET['module']."';";
    $query = "select lecturer.first_name,lecturer.last_name,batches.batch_no from lecturer inner join lecturer_enroll on 
    lecturer.id=lecturer_enroll.lecturer inner join batches on batches.id=lecturer_enroll.batch and lecturer_enroll.module='".$_GET['module']."'";
    $result = mysqli_query($con, $query);
    $output .= '<div class=row><div class="col-3"></div><div class="col-6"><table>';
    $output .= '<tr> <th> Lecturer name </th> <th> Batch </th> </tr>';
    while ($row = mysqli_fetch_array($result)) {
      $output .= '<tr>';
      $output .= '<td>' . $row['first_name'] .$row['last_name'].'</td>';
      $output .= '<td>' . $row['batch_no'] . '</td>';
      $output .= '</tr>';
    }
    $output .= '</table></div><div class="col-3"></div></div>';
    
    echo $output;
 }
?>
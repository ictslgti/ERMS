<style>
  table {
    width: 100%;
    border: 1px solid skyblue;
  }

  tr,
  th,
  td {
    border: 1px solid skyblue;
  }
</style>

<?php
include_once("../config.php");
$dep = null;
if (isset($_POST["action"])) {
  $output = '';
  if ($_POST["action"] == "department") {
    echo $dep = $_POST["query"];
    $query = "SELECT * FROM courses WHERE department_code = '" . $_POST["query"] . "'";
    $result = mysqli_query($con, $query);
    $output .= '<option value="" disabled selected>Select course </option>';
    while ($row = mysqli_fetch_array($result)) {
      $output .= '<option value="' . $row["code"] . '">' . $row["name"] . '</option>';
    }
  } else if ($_POST["action"] == "course") {

    echo $dep;
    $query = "SELECT * FROM modules WHERE course_code = '" . $_POST["query"] . "'";
    $result = mysqli_query($con, $query);
    $output .= '<option value="" disabled selected>Select module</option>';
    while ($row = mysqli_fetch_array($result)) {
      $output .= '<option value="' . $row["id"] . '">' . $row["code"] . '</option>';
    }
  }

  if ($_POST["action"] == "academic") {
    $query = "SELECT id,batch_no, NVQ_level
          FROM batches
          WHERE Academic_year = '" . $_POST["query"] . "'";

    $result = mysqli_query($con, $query);
    $output .= '<option value="" disabled selected>Select Batch</option>';
    while ($row = mysqli_fetch_array($result)) {
      $output .= '<option value="' . $row["id"] . '">' . $row["NVQ_level"] . "-Batch-" . $row["batch_no"] . '</option>';
    }
  } 
  echo $output;
}


if (isset($_GET['batch'])) {
   $output = '';
    $_GET['batch'];
    $_GET['module'];
   $query = "select * from assessments where module='".$_GET['module']."' and batch='".$_GET['batch']."';";
   $result = mysqli_query($con, $query);
   $output .= '<table>';
   $output .= '<tr> <th> Name </th> <th> Percentage </th> </tr>';
   while ($row = mysqli_fetch_array($result)) {
     $output .= '<tr>';
     $output .= '<td>' . $row['names'] . '</td>';
     $output .= '<td>' . $row['percentage'] . '</td>';
     $output .= '</tr>';
   }
   $output .= '</table>';
   
   echo $output;
}


if (isset($_GET['cou'])) {
  $_GET['cou'];
  $query = 'select * from batches where department_code=(select department_code from courses where code="'.$_GET['cou'].'") and NVQ_level=(select NVQ_level from courses where code="'.$_GET['cou'].'") order by batch_no desc;';
  $result = mysqli_query($con, $query);
  $output .= '<option selected disabled value="">Choose Batch</option>';
  while ($row = mysqli_fetch_array($result)) {
    $output .= '<option value="' . $row["id"] . '">' . $row["batch_no"] . '</option>';
  }
  echo $output;
}

?>

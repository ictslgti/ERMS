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
?>
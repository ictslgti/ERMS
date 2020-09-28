<?php include_once("../config.php"); ?>
<?php
$output = "";
// course
if (isset($_GET['department'])) {
    $id= $_GET['department'];
    $query = "select distinct batch from exams where department='$id'";
    $result = mysqli_query($con, $query);
    $output .= '<option selected disabled value="">Choose batch</option>';
    while ($row = mysqli_fetch_assoc($result)) {
      $output .= '<option value="' . $row["batch"] . '">' . $row["batch"] . '</option>';
    }
    echo $output;
  }
// course

//exame type

// if (isset($_GET['exametype'])) {
//     $id= $_GET['exametype'];
//     $query = "select distinct exams from exams where exametype='$id'";//select distinct exams from exams_result where batch_no=
//     $result = mysqli_query($con, $query);
//     $output .= '<option selected disabled value="">Select Exams type</option>';
//     while ($row = mysqli_fetch_assoc($result)) {
//       $output .= '<option value="' . $row["Exams_type"] . '">' . $row["Exams_type"] . '</option>';
//     }
//     echo $output;
//   }
?>
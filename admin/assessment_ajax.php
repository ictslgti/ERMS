<?php include_once("../config.php"); ?>
<?php
$output = "";
// course
if (isset($_GET['department'])) {
    echo $_GET['department'];
    $query = 'select * from courses where department_code="' . $_GET['department'] . '";';
    $result = mysqli_query($con, $query);
    $output .= '<option selected disabled value="">Choose Course</option>';
    while ($row = mysqli_fetch_array($result)) {
      $output .= '<option value="' . $row["code"] . '">' . $row["name"] . '</option>';
    }
    echo $output;
  }
// course


// module
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

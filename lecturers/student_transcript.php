<?php
$title = ' ERMS | SLGTI(Transcript)';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
  <link rel="stylesheet" type="text/css" href="print.css" media="print">
  <?php include_once('../head.php');

  ?>
  <?php include_once('../databases/config.php'); ?>
  
</head>

<body>

  <script type='text/javascript'>
    function preview_image(event) {
      var reader = new FileReader();
      reader.onload = function() {
        var output = document.getElementById('output_image');
        output.src = reader.result;
      }
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
  <style>
    #wrapper {
      text-align: center;
      margin: 0 auto;
      padding: 0px;
    }

    #output_image {
      width: 200px;
      height: 250px;
      border: 1px solid black;

    }
  </style>
  <!-- view  start -->
  <?php
  $student_id = $stitle = $full_name = $ini_name = $gender = $civil = $email = $nic = $dob = $phone = $address = $ds =
    $district = $province = $zip = $blood = $gname = $gaddress = $gphone = $grelation = $regno = $cid =
    $mode = $status = $enrolldate = $exitdate = null;
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // $sql_student = "SELECT * FROM student LEFT JOIN student_enroll
    //             ON `student`.`id` = `student_enroll`.`id`
    //             WHERE `student`.`id` = '$id'";

    $sql_student = "SELECT * FROM `student` LEFT JOIN `student_enroll`
    ON `student`.`id` = `student_enroll`.`id` LEFT JOIN `batches` ON 
    `student_enroll`.`batch_no` = `batches`.`batch_no` LEFT JOIN `courses` ON
    `student_enroll`.`course_code` = `courses`.`code` WHERE 
    `batches`.`department_code`=`courses`.`department_code` AND 
    `batches`.`NVQ_level`=`courses`.`NVQ_level` AND `student_enroll`.`id` = '$id'";


    $result_student = mysqli_query($con, $sql_student);
    $row = mysqli_fetch_assoc($result_student);
    if (mysqli_num_rows($result_student) == 1) {
      $full_name = $row['full_name'];
      $ini_name = $row['name_with_initials'];
      $nic = $row['nic'];
      $regno = $row['id'];
      $cid = $row['course_code'];
      $bid = $row['batch_no'];
      $ayear = $row['Academic_year'];
    }
  }
  ?>
  <!-- view  end -->

  <main class='page-content pt-2'>
    <?php include_once('nav.php'); ?>

    <div class='container-fluid p-5'>
      <!-- #1 Insert Your Content-->

      <div class='row'>
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h3> <?php echo " $title" ?> </h3>
            </div>
            <div class="card-body">
              <div class='row'>
                <div class="col-md-6">
                </div>
              </div>

              <div class="card-body">
                <div class='row'>

                  <form>
                    <div class="row">

                      <div class='col-3'>

                        <div class="col-auto">
                          <?php
                          if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $result = $con->query("SELECT * FROM `student_image` WHERE id = '$id'");
                            if ($result->num_rows > 0) {
                              while ($row = $result->fetch_assoc()) {
                          ?>
                                <img id="output_image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
                            <?php
                              }
                            }
                            ?>

                          <?php
                          } else {
                          ?>
                            <img id="output_image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
                          <?php
                          }
                          ?>

                        </div>

                      </div>

                      <div class="col-8">

                        <div class="row">
                          <div class="col-6"> <label for="exampleInputEmail1" name="department">Full Name :-<b><?php echo $full_name; ?></b></label></div>
                          <div class="col-6"> <label for="exampleInputEmail1" name="batch">Student Id :-<b><?php echo $regno; ?></b></label></div>
                          <div class="col-6"> <label for="exampleInputEmail1" name="batch">Name with Initial :-<b><?php echo $ini_name; ?></b></label></div>
                          <div class="col-6"> <label for="exampleInputEmail1" name="batch">NIC Number :-<b><?php echo $nic; ?></b></label></div>
                          <div class="col-6"> <label for="exampleInputEmail1" name="batch">Course :-<b><?php echo $cid; ?></b></label></div>
                          <div class="col-6"> <label for="exampleInputEmail1" name="batch">Batch :-<b><?php echo $bid; ?></b></label></div>
                          <div class="col-6"> <label for="exampleInputEmail1" name="batch">Academic Year :-<b><?php echo $ayear; ?></b></label></div>
                        </div>

                      </div>


                    </div>

                    <?php


                    if (isset($_GET['view'])) {
                      $id = $_GET['view'];
                      $sql = "DELETE FROM `modules,exams_result` WHERE `id` = $id";
                      if (mysqli_query($con, $sql)) {
                        echo 'Record was view';
                      } else {
                        echo 'Try again';
                      }
                    }
                    ?>





                    <!-- <div class="row">
                      <div class="col-2"></div>
                      <div class="col-5">
                        <label for="exampleInputEmail1"><b>Full Name :- </b><?php echo $full_name; ?></label>
                      </div>
                      <div class="col-5">
                        <label for="exampleInputEmail1"><b> Student Id :- </b><?php echo $regno;
                                                                              ?></label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-2"></div>
                      <div class="col-5">
                        <label for="exampleInputEmail1"><b>Name with Initial :- </b><?php echo $ini_name; ?>
                                                                                    </label>
                      </div>
                      <div class="col-5">
                        <label for="exampleInputEmail1"><b> NIC Number :- </b><?php echo $nic; ?>
                                                                             </label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-2"></div>
                      <div class="col-5">
                        <label for="exampleInputEmail1"><b>Course :- </b><?php echo $cid; ?>
                                                                          </label>
                      </div>
                      <div class="col-5">
                        <label for="exampleInputEmail1"><b>Batch :- </b><?php/echo $bid; ?></label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-2"></div>
                      <div class="col-6">
                        <label for="exampleInputEmail1"><b>Academic Year :- </b>2018/2020</label>
                      </div>
                    </div>

                </div>


              </div> -->

                  </form>
                  <!-- #1 Insert Your Content-->



                  <table class="table">
                    <thead class="thead-light">

                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Module Code</th>
                        <th scope="col">Module Name</th>
                        <th scope="col">Attempt</th>
                        <th scope="col">Result</th>

                      </tr>
                      <?php

                      $sql = "SELECT modules.id,modules.Code,modules.Name,exams_result.Attempt,exams_result.marks 
                  FROM modules,exams_result 
                  WHERE exams_result.course = modules.course_code group by modules.Code";
                      $result = mysqli_query($con, $sql);
                      $i = 1;
                      if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo '<tr>
                          <td type = "1">',$i++,'</td>  
                          <td>', $row['Code'], '</td>
                          <td>', $row['Name'], '</td>
                          <td>', $row['Attempt'], '</td>
                          <td>', $row['marks'], '</td>
                          <td>
                            
                          </td>
                      </tr>';
                        }
                      } else {
                        echo 'no rows';
                      }
                      ?>
                  </table>

                  <!-- <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button> -->
                  <!-- <div class="text-center">
                  <a href="student_transcript_print.php" class="btn btn-primary">print</a>
                </div> -->


                  <!-- #1 Insert Your Content-->
                </div>
                <div class="row">
                  <div class="col-4"></div>
                  <div class="text-center col-4">
                    <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
                  </div>
                  <div class="col-4"></div>
                </div>

              </div>
            </div>
          </div> <!-- #1 Insert Your Content" -->
        </div>
  </main>

  <?php include_once("../script.php");
  ?>
</body>

</html>
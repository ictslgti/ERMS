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
      width: 230px;
      height: 260px;
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
    $sql_student = "SELECT * FROM student LEFT JOIN student_enroll
                ON `student`.`id` = `student_enroll`.`id`
                WHERE `student`.`id` = '$id'";
    $result_student = mysqli_query($con, $sql_student);
    $row = mysqli_fetch_assoc($result_student);
    if (mysqli_num_rows($result_student) == 1) {
      $full_name = $row['full_name'];
      $ini_name = $row['name_with_initials'];
      $nic = $row['nic'];
      $regno = $row['id'];
      $cid = $row['course_code'];
      $bid = $row['batch_no'];
    }
  }
  ?>
  <!-- view  end -->

  <main class='page-content pt-2'>
    <?php include_once('nav.php');?>

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

                      <div class="col-9">

                        <div class="row">
                          <div class="col-6"> <label for="exampleInputEmail1" name="department">Full Name :-<b><?php echo $full_name; ?></b></label></div>
                          <div class="col-6"> <label for="exampleInputEmail1" name="batch">Student Id :-<b><?php echo $regno; ?></b></label></div>
                          <div class="col-6"> <label for="exampleInputEmail1" name="batch">Name with Initial :-<b><?php echo $ini_name; ?></b></label></div>
                          <div class="col-6"> <label for="exampleInputEmail1" name="batch">NIC Number :-<b><?php echo $nic; ?></b></label></div>
                          <div class="col-6"> <label for="exampleInputEmail1" name="batch">Course :-<b><?php echo $cid; ?></b></label></div>
                          <div class="col-6"> <label for="exampleInputEmail1" name="batch">Batch :-<b><?php echo $bid; ?></b></label></div>
                          <div class="col-6"> <label for="exampleInputEmail1" name="batch">Academic Year :-<b>2018/2020</b></label></div>
                        </div>

                      </div>


                    </div>


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
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>MO6</td>
                        <td>Database system</td>
                        <td>1st</td>
                        <td>Fail</td>


                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>MO6</td>
                        <td>Local Area Network</td>
                        <td>2nd</td>
                        <td>Pass</td>

                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>MO7</td>
                        <td>Web Programming</td>
                        <td>3rd</td>
                        <td>Pass</td>

                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>MO6</td>
                        <td>Software Testing</td>
                        <td>1st</td>
                        <td>Pass</td>

                      </tr>

                      <tr>
                        <th scope="row">5</th>
                        <td>MO6</td>
                        <td>Planning and Scheduling Work at Workplace</td>
                        <td>1st</td>
                        <td>Fail</td>

                      </tr>

                      <tr>
                        <th scope="row">6</th>
                        <td>MO1</td>
                        <td>Manage Workplace Communication</td>
                        <td>1st</td>
                        <td>Fail</td>

                      </tr>
                    </tbody>
                  </table>


                  <!-- <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button> -->
                  <!-- <div class="text-center">
                  <a href="student_transcript_print.php" class="btn btn-primary">print</a>
                </div> -->
                  <div class="text-center" >
                    <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
                  </div>
                  <!-- #1 Insert Your Content-->
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
<?php
$title = 'Attendance List';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>


  <?php include_once('.././head.php');
  include_once('../config.php');
  ?>
</head>

<body>
  <main class='page-content pt-2'>
    <?php include_once('nav.php');
    ?>
    <div id='overlay' class='overlay'></div>
    <div class='container-fluid p-5'>
      <!-- #1 Insert Your Content-->
      <div class='row'>
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h3> <?php echo " $title" ?></h3>
            </div>
            <div class="card-body">

              <!-- #1 Insert Your Content-->
              <div class="container" style="margin-top:30px">
                <div class="card">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-md-9"></div>
                      <div class="col-md-3" align="right">
                      </div>

                    </div>
                    <div class="dropdown">
                      <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="show details" name="show_date">
                        Attendance Review
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="attendance_month.php">Month-wise</a>
                        <a class="dropdown-item" href="attendance_semester.php">Semester-wise</a>
                        <a class="dropdown-item" href="attendance.php">Date-wise</a>
                      </div>
                    </div>
                    <div class="dropdown">
                      <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="show details" name="show_date">
                        Batch:
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Choose</a>
                        <a class="dropdown-item" href="?Batch 01-BRIDGING">Batch 01-BRIDGING</a>
                        <a class="dropdown-item" href="?Batch 01-NVQ-05">Batch 01-NVQ-05</a>
                        <a class="dropdown-item" href="?Batch 02-BRIDGING">Batch 02-BRIDGING</a>
                        <a class="dropdown-item" href="?Batch 02-NVQ-05">Batch 02-NVQ-05</a>
                        <a class="dropdown-item" href="?Batch 03-BRIDGING">Batch 03-BRIDGING</a>
                        <a class="dropdown-item" href="?Batch 03-NVQ-05">Batch 03-NVQ-05</a>
                        <a class="dropdown-item" href="?Batch 04-BRIDGING">Batch 04-BRIDGING</a>
                        <a class="dropdown-item" href="?Batch 04-NVQ-05">Batch 04-NVQ-05</a>

                      </div>
                    </div>
                  </div>

                  <div class="card-body">

                    <div class="table-responsive">

                      <span id="message_operation"></span>
                      <table class="table table-striped table-bordered" id="attendance_table">
                        <thead>
                          <tr>
                            <th>Student Name</th>
                            <th>Index Number</th>
                            <th>Module Code</th>
                            <th>Percentage over taken sessions</th>
                          </tr>




                          <?php
                          // if (isset($_POST['show_date'])) {
                          //   $dat = $_POST['prese_date'];
                          //   echo $dat . "-" . "attendance details";
                          //   $sql = "SELECT 
                          //   `student`.`id`,`student`.`full_name`,`student_enroll`.`course_id`,
                          //   `student_enroll`.`academic_year`,`student`.`phone_no`
                          //   FROM student 
                          //   LEFT JOIN student_enroll
                          //   ON `student`.`id` = `student_enroll`.`id`
                          //   ORDER BY `id` ASC";
                          // } else {

                          // "select s.name_with_initials,s.id,m.name from student s inner join modules m on s.id=sd.id 
                          // inner join attendance a on s.id=a.student_id where attendance_date=curdate();";
                          // }

                          // $sql = "SELECT `student`.`id`,`student`.`name_with_initials`,`student_enroll`.`batch_no`,`student_enroll`.`course_code`,`attendance`.`code` 
                          // FROM `student` LEFT JOIN `student_enroll` ON `student`.`id` = `student_enroll`.`id` LEFT JOIN `student_attendance` ON
                          // `student`.`id` = `student_attendance`.`student_id` LEFT JOIN `attendance` ON
                          // `student_attendance`.`id` = `attendance`.`attendance_id` group by name_with_initials ORDER BY `student`.`id` ASC";

                          $sql = "SELECT count(student_attendance.status) as Total,(SELECT count(student_attendance.status) from 
                          attendance,student_attendance where student_attendance.id=attendance.attendance_id and 
                          student_attendance.status='present' AND attendance.code=modules.code group by batch_no)
                          as Take,attendance.code,student_attendance.student_id,student.name_with_initials from 
                          attendance,student_attendance,modules,student where student_attendance.id=attendance.attendance_id
                          and attendance.code=modules.code group by CODE,batch_no";


                          $result = mysqli_query($con, $sql);
                          while ($row = mysqli_fetch_assoc($result)) {

                          ?>
                            <tr>
                              <td scope='col'>
                                <?php echo $row['name_with_initials']; ?>
                              </td>
                              <td scope='col'>
                                <?php echo $row['student_id']; ?>
                              </td>
                              <td scope='col'>
                                <?php echo $row['code']; ?>
                              </td>
                              <td scope='col'>
                                <?php echo number_format(($row['Take'] / $row['Total']) * 100, 2) . "%" ?>
                              </td>
                            <?php
                          }
                            ?>

                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

</body>

</html>

<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="css/datepicker.css" />

<div class="modal" id="formModal">
  <div class="modal-dialog">
    <form method="post" id="attendance_form">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title" id="modal_title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
      </div>
  </div>
  <div class="form-group" id="student_details">
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
      </table>
    </div>
  </div>
</div>
</main>

<?php include_once("../script.php");
?>
</body>

</html>
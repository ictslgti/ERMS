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
        <div class="col-md-9">Attendance List</div>
        <div class="col-md-3" align="right">
          <button type="button" id="add_button" class="btn btn-info btn-sm">Chart</button>
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
              <th>Batch</th>
              <th>Attendance Status</th>
              <th>Attendance Date</th>
            </tr>
            <tr>
                    <?php 
                    $sql="select  DISTINCT s.student_id,s.student_name,s.student_batch,a.status,a.attendance_date from student s inner join attendance a on s.student_id=a.student_id inner join batch b on s.student_batch=b.Batch_id;";

                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                     <tr>
                    <td scope='col'>
                       <?php echo $row['student_name']; ?>
                    </td>
                    <td scope='col'>
                       <?php echo $row['student_id']; ?>
                    </td>
                     <td scope='col'>
                         <?php echo $row['student_batch']; ?>
                     </td>
                     <td scope='col'>
                       <?php echo $row['status']; ?>
                    </td>
                    <td scope='col'>
                       <?php echo $row['attendance_date']; ?>
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

<?php
$title = ' ERMS | SLGTI(page Title)';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php include_once('.././head.php');
    // include_once('../config.php');
    ?>
</head>

<body>
    <main class='page-content pt-2'>
        <?php include_once('nav.php');
        ?>
        <div id='overlay' class='overlay'></div>
        <div class='container-fluid p-5'>
            <!-- #1 Insert Your Content-->

            <?php

//attendance_action.php

// include('admin/database_connection.php');
// session_start();
// $output = '';
// if(isset($_POST["action"]))
// {
//  if($_POST["action"] == 'fetch')
//  {
//   $query = "
//   SELECT * FROM tbl_attendance 
//   INNER JOIN tbl_student 
//   ON tbl_student.student_id = tbl_attendance.student_id 
//   INNER JOIN tbl_grade 
//   ON tbl_grade.grade_id = tbl_student.student_grade_id 
//   WHERE tbl_attendance.teacher_id = '".$_SESSION["teacher_id"]."' AND (";
//   if(isset($_POST["search"]["value"]))
//   {
//    $query .= 'tbl_student.student_name LIKE "%'.$_POST["search"]["value"].'%" 
//       OR tbl_student.student_roll_number LIKE "%'.$_POST["search"]["value"].'%" 
//       OR tbl_attendance.attendance_status LIKE "%'.$_POST["search"]["value"].'%" 
//       OR tbl_attendance.attendance_date LIKE "%'.$_POST["search"]["value"].'%") ';
//   }
//   if(isset($_POST["order"]))
//   {
//    $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
//   }
//   else
//   {
//    $query .= 'ORDER BY tbl_attendance.attendance_id DESC ';
//   }
//   if($_POST["length"] != -1)
//   {
//    $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
//   }

//   $statement = $connect->prepare($query);
//   $statement->execute();
//   $result = $statement->fetchAll();
//   $data = array();
//   $filtered_rows = $statement->rowCount();
//   foreach($result as $row)
//   {
//    $sub_array = array();
//    $status = '';
//    if($row["attendance_status"] == 'Present')
//    {
//     $status = '<label class="badge badge-success">Present</label>';
//    }
//    if($row["attendance_status"] == 'Absent')
//    {
//     $status = '<label class="badge badge-danger">Absent</label>';
//    }
   
//    $sub_array[] = $row["student_name"];
//    $sub_array[] = $row["student_roll_number"];
//    $sub_array[] = $row["grade_name"];
//    $sub_array[] = $status;
//    $sub_array[] = $row["attendance_date"];
//    $data[] = $sub_array;
//   }

//   $output = array(
//    "draw"    => intval($_POST["draw"]),
//    "recordsTotal"  =>  $filtered_rows,
//    "recordsFiltered" => get_total_records($connect, 'tbl_attendance'),
//    "data"    => $data
//   );
//   echo json_encode($output);
//  }
//  if($_POST["action"] == "Add")
//  {
//   $attendance_date = '';
//   $error_attendance_date = '';
//   $error = 0;
//   if(empty($_POST["attendance_date"]))
//   {
//    $error_attendance_date = 'Attendance Date is required';
//    $error++;
//   }
//   else
//   {
//    $attendance_date = $_POST["attendance_date"];
//   }
//   if($error > 0)
//   {
//    $output = array(
//     'error'       => true,
//     'error_attendance_date'   => $error_attendance_date
//    );
//   }
//   else
//   {
//    $student_id = $_POST["student_id"];
//    $query = '
//    SELECT attendance_date FROM tbl_attendance 
//    WHERE teacher_id = "'.$_SESSION["teacher_id"].'" 
//    AND attendance_date = "'.$attendance_date.'"
//    ';
//    $statement = $connect->prepare($query);
//    $statement->execute();
//    if($statement->rowCount() > 0)
//    {
//     $output = array(
//      'error'     => true,
//      'error_attendance_date' => 'Attendance Data Already Exists on this date'
//     );
//    }
//    else
//    {
//     for($count = 0; $count < count($student_id); $count++)
//     {
//      $data = array(
//       ':student_id'   => $student_id[$count],
//       ':attendance_status' => $_POST["attendance_status".$student_id[$count].""],
//       ':attendance_date'  => $attendance_date,
//       ':teacher_id'   => $_SESSION["teacher_id"]
//      );

//      $query = "
//      INSERT INTO tbl_attendance 
//      (student_id, attendance_status, attendance_date, teacher_id) 
//      VALUES (:student_id, :attendance_status, :attendance_date, :teacher_id)
//      ";
//      $statement = $connect->prepare($query);
//      $statement->execute($data);
//     }
//     $output = array(
//      'success'  => 'Data Added Successfully',
//     );
//    }
//   }
//   echo json_encode($output);
//  }

//  if($_POST["action"] == "index_fetch")
//  {
//   $query = "
//   SELECT * FROM tbl_attendance 
//   INNER JOIN tbl_student 
//   ON tbl_student.student_id = tbl_attendance.student_id 
//   INNER JOIN tbl_grade 
//   ON tbl_grade.grade_id = tbl_student.student_grade_id 
//   WHERE tbl_attendance.teacher_id = '".$_SESSION["teacher_id"]."' AND (";
//   if(isset($_POST["search"]["value"]))
//   {
//    $query .= 'tbl_student.student_name LIKE "%'.$_POST["search"]["value"].'%" 
//       OR tbl_student.student_roll_number LIKE "%'.$_POST["search"]["value"].'%" 
//       OR tbl_grade.grade_name LIKE "%'.$_POST["search"]["value"].'%" )';
//   }

//   $query .= 'GROUP BY tbl_student.student_id ';
//   if(isset($_POST["order"]))
//   {
//    $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
//   }
//   else
//   {
//    $query .= 'ORDER BY tbl_student.student_roll_number ASC ';
//   }

//   if($_POST["length"] != -1)
//   {
//    $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
//   }

//   $statement = $connect->prepare($query);
//   $statement->execute();
//   $result = $statement->fetchAll();
//   $data = array();
//   $filtered_rows = $statement->rowCount();
//   foreach($result as $row)
//   {
//    $sub_array = array();
//    $sub_array[] = $row["student_name"];
//    $sub_array[] = $row["student_roll_number"];
//    $sub_array[] = $row["grade_name"];
//    $sub_array[] = get_attendance_percentage($connect, $row["student_id"]);
//    $sub_array[] = '<button type="button" name="report_button" id="'.$row["student_id"].'" class="btn btn-info btn-sm report_button">Report</button>';
//    $data[] = $sub_array;
//   }

//   $output = array(
//    "draw"    => intval($_POST["draw"]),
//    "recordsTotal"  =>  $filtered_rows,
//    "recordsFiltered" => get_total_records($connect, 'tbl_student'),
//    "data"    => $data
//   );
//   echo json_encode($output);  
//  }
// }


//<?php

//attendance.php

//include('header.php');

?>

<div class="container" style="margin-top:30px">
  <div class="card">
   <div class="card-header">
      <div class="row">
        <div class="col-md-9">Attendance List</div>
        <div class="col-md-3" align="right">
          <button type="button" id="chart_button" class="btn btn-primary btn-sm">Chart</button>
          <button type="button" id="report_button" class="btn btn-danger btn-sm">Report</button>
        </div>
      </div>
    </div>
   <div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="attendance_table">
          <thead>
            <tr>
              <th>Student Name</th>
              <th>Roll Number</th>
              <th>Grade</th>
              <th>Attendance Status</th>
              <th>Attendance Date</th>
              <th>Teacher</th>
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

<script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="../css/datepicker.css" />

<style>
    .datepicker
    {
      z-index: 1600 !important; /* has to be larger than 1050 */
    }
</style>

<div class="modal" id="reportModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Make Report</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
          <select name="grade_id" id="grade_id" class="form-control">
            <option value="">Select Grade</option>
            <?php
            echo load_grade_list($connect);
            ?>
          </select>
          <span id="error_grade_id" class="text-danger"></span>
        </div>
        <div class="form-group">
          <div class="input-daterange">
            <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" readonly />
            <span id="error_from_date" class="text-danger"></span>
            <br />
            <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" readonly />
            <span id="error_to_date" class="text-danger"></span>
          </div>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" name="create_report" id="create_report" class="btn btn-success btn-sm">Create Report</button>
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="chartModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create Grade Attandance Chart</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
          <select name="chart_grade_id" id="chart_grade_id" class="form-control">
            <option value="">Select Grade</option>
            <?php
            echo load_grade_list($connect);
            ?>
          </select>
          <span id="error_chart_grade_id" class="text-danger"></span>
        </div>
        <div class="form-group">
          <div class="input-daterange">
            <input type="text" name="attendance_date" id="attendance_date" class="form-control" placeholder="Select Date" readonly />
            <span id="error_attendance_date" class="text-danger"></span>
          </div>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" name="create_chart" id="create_chart" class="btn btn-success btn-sm">Create Chart</button>
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<script>
$(document).ready(function(){
 
  var dataTable = $('#attendance_table').DataTable({
    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
      url:"attendance_action.php",
      type:"POST",
      data:{action:'fetch'}
    }
  });

  $('.input-daterange').datepicker({
    todayBtn: "linked",
    format: "yyyy-mm-dd",
    autoclose: true,
    container: '#formModal modal-body'
  });

  $(document).on('click', '#report_button', function(){
    $('#reportModal').modal('show');
  });

  $('#create_report').click(function(){
    var grade_id = $('#grade_id').val();
    var from_date = $('#from_date').val();
    var to_date = $('#to_date').val();
    var error = 0;

    if(grade_id == '')
    {
      $('#error_grade_id').text('Grade is Required');
      error++;
    }
    else
    {
      $('#error_grade_id').text('');
    }

    if(from_date == '')
    {
      $('#error_from_date').text('From Date is Required');
      error++;
    }
    else
    {
      $('#error_from_date').text('');
    }

    if(to_date == '')
    {
      $('#error_to_date').text("To Date is Required");
      error++;
    }
    else
    {
      $('#error_to_date').text('');
    }

    if(error == 0)
    {
      $('#from_date').val('');
      $('#to_date').val('');
      $('#formModal').modal('hide');
      window.open("report.php?action=attendance_report&grade_id="+grade_id+"&from_date="+from_date+"&to_date="+to_date);
    }

  });

  $('#chart_button').click(function(){
    $('#chart_grade_id').val('');
    $('#attendance_date').val('');
    $('#chartModal').modal('show');
  });

  $('#create_chart').click(function(){
    var grade_id = $('#chart_grade_id').val();
    var attendance_date = $('#attendance_date').val();
    var error = 0;
    if(grade_id == '')
    {
      $('#error_chart_grade_id').text('Grade is Required');
      error++;
    }
    else
    {
      $('#error_chart_grade_id').text('');
    }
    if(attendance_date == '')
    {
      $('#error_attendance_date').text('Date is Required');
      $error++;
    }
    else
    {
      $('#error_attendance_date').text('');
    }

    if(error == 0)
    {
      $('#attendance_date').val('');
      $('#chart_grade_id').val('');
      $('#chartModal').modal('show');
      window.open("chart1.php?action=attendance_report&grade_id="+grade_id+"&date="+attendance_date);
    }

  });

});
</script>





?>
             <!-- #1 Insert Your Content" -->
        </div>
    </main>

    <?php include_once("../script.php");
    ?>
</body>

</html>



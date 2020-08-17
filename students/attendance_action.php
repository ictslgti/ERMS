
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
            
<div class="container" style="margin-top:10px">
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
    <table class="table align-middle">
                        <thead class='thead-light'>
                            <tr>
                                <th scope='col'>Course</th>
                                <th scope='col'>Date</th>
                                <th scope='col'>Taken sessions</th>
                                <th scope='col'>Points</th>
                                <th ccrop='col'>Remarks</th>
                            </tr>
                            <tr>
                                <td scope='col'>Basic Computer Application</td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>12</td>
                                <td scope='col'>12/10</td>
                                <td scope='col'>85.0%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Fundamentals of Software Programming </td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>25</td>
                                <td scope='col'>25/23</td>
                                <td scope='col'>87.0%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Communication Skill </td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>45</td>
                                <td scope='col'>45/37</td>
                                <td scope='col'>85.8%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Fundamentals of Graphic Design </td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>17</td>
                                <td scope='col'>17/17</td>
                                <td scope='col'>100%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Fundamentals of Networking</td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>96</td>
                                <td scope='col'>96/83</td>
                                <td scope='col'>100%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Introduction to Database Systems</td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>24</td>
                                <td scope='col'>24/20</td>
                                <td scope='col'>85.7%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Static Web Page Designing</td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>81</td>
                                <td scope='col'>81/75</td>
                                <td scope='col'>91.0%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Database Systems I</td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>81</td>
                                <td scope='col'>81/75</td>
                                <td scope='col'>87.4%</td>
                            </tr>
                            <tr>
                                <td scope='col'>System Analysis and Design </td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>45</td>
                                <td scope='col'>45/40</td>
                                <td scope='col'>89.5%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Web Programming</td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>33</td>
                                <td scope='col'>33/28</td>
                                <td scope='col'>90.0%</td>
                            </tr>
                            <tr>
                                <th>Average attendance</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th >90.9%</th>
                            </tr>
                        </thead>
                    <tbody>
                        <tbody>
                        </tbody>
                     </table>
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



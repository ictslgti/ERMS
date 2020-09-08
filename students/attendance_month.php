<?php
$title = ' ERMS | SLGTI(page Title)';
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
    <?php
    $month = null;
    if (isset($_GET['month'])) {
        $month = $_GET['month'];
    }
    ?>
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


                            <div class="container" style="margin-top:10px">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="dropdown">
                                                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="show details" name="show_date">
                                                        Attendance Review
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="attendance_month.php">Month-wise</a>
                                                        <a class="dropdown-item" href="attendance_semester.php">Semester-wise</a>
                                                        <a class="dropdown-item" href="attendance_all.php">Moudel-wise</a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="dropdown">
                                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="show details" name="show_date">
                                                    Month:
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Choose</a>
                                                    <a class="dropdown-item" href="?month=1">January</a>
                                                    <a class="dropdown-item" href="?month=2">February</a>
                                                    <a class="dropdown-item" href="?month=3">March</a>
                                                    <a class="dropdown-item" href="?month=4">April</a>
                                                    <a class="dropdown-item" href="?month=5">May</a>
                                                    <a class="dropdown-item" href="?month=6">June</a>
                                                    <a class="dropdown-item" href="?month=7">July</a>
                                                    <a class="dropdown-item" href="?month=8">August</a>
                                                    <a class="dropdown-item" href="?month=9">September</a>
                                                    <a class="dropdown-item" href="?month=10">October</a>
                                                    <a class="dropdown-item" href="?month=11">November</a>
                                                    <a class="dropdown-item" href="?month=12">December</a>
                                                </div>
                                            </div>
                                            <div class="col-3"></div>

                                            <div class="col-3" align="right">
                                                <button type="button" id="add_button" class="btn btn-info btn-sm">Chart</button>
                                                <?php echo $month; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">

                                        <div class="table-responsive">

                                            <span id="message_operation"></span>
                                            <table class="table table-striped table-bordered" id="attendance_table">
                                                <thead>
                                                    <tr>
                                                        <th>module</th>
                                                        <th>Take session</th>
                                                        <th>points</th>
                                                        <th>Percentage over taken sessions</th>
                                                    </tr>


                                                    <?php

                                                     $sql = "select count(student_attendance.status) as total_session,(select count(student_attendance.status) from attendance,student_attendance 
                                                     where student_attendance.id=attendance.attendance_id and student_attendance.status='present' AND student_id='2018ICTBIT01' group by code,batch_no) 
                                                     as take_session,attendance.code,attendance.batch_no from student_attendance,attendance where student_attendance.id=attendance.attendance_id 
                                                     and student_id='2018ICTBIT01' group by code,batch_no";

                                                    $result = mysqli_query($con, $sql);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $row1 = (($row['take_session'] / $row['status']) * 100)
                                                    ?>
                                                        <tr>
                                                            <td scope='col'>
                                                                <?php echo $row['code']; ?>
                                                            </td>
                                                            <td scope='col'>
                                                                <?php echo $row['take_session']; ?>
                                                            </td>
                                                            <td scope='col'>
                                                                <?php echo $row['total_session']; ?>
                                                            </td>
                                                            <td scope='col'>
                                                                <?php echo $row1 ."%"; ?>
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
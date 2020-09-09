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
    $semester = null;
    if (isset($_GET['semester'])) {
        $semester = $_GET['semester'];
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
                                                    Semester:
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="?close">Choose</a>
                                                    <a class="dropdown-item" href="?semester=1">1 st Semester </a>
                                                    <a class="dropdown-item" href="?semester=2">2 nd Semester</a>
                                                </div>
                                            </div>

                                            <div class="col-3"></div>

                                            <div class="col-3" align="right">
                                                <?php  $semester; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">

                                        <div class="table-responsive">

                                            <span id="message_operation"></span>
                                            <table class="table table-striped table-bordered" id="attendance_table">
                                                <thead>
                                                    <tr>
                                                        <th>Course</th>
                                                        <th>Take session</th>
                                                        <th>points</th>
                                                        <th>Percentage over taken Semester </th>
                                                    </tr>

                                                    <?php
                                                //     if (isset($_POST['show_date'])) {
                                                //         $dat = $_POST['prese_date'];
                                                //         $sql = "SELECT 
                                                //         FROM attendance
                                                //         LEFT JOIN student_enroll
                                                //         ON `student`.`id` = `student_enroll`.`id`
                                                //         ORDER BY `id` ASC;";
                                                //    } else {
                                                //         $sql = "select  DISTINCT s.student_id,s.student_name,s.student_batch,a.status,date(a.attendance_date) as attendance_date from student s inner join attendance a on s.student_id=a.student_id 
                                                //             inner join batch b on s.student_batch=b.Batch_id and attendance_date=curdate();";
                                                //     }


                                                //     $result = mysqli_query($con, $sql);
                                                //     while ($row = mysqli_fetch_assoc($result)) {
                                            $sql=null;
                                                    if(isset($_GET['semester']))
                                                    {
                                                        $no=$_GET['semester'];

                                                        if($no==1)
                                                        {
                                                            $sql = "select count(student_attendance.status) as total_session,(select count(student_attendance.status) from attendance,student_attendance where 
                                                            student_attendance.id=attendance.attendance_id and student_attendance.status='present' AND student_id='2018slgtibit01' group by code,batch_no) as take_session,
                                                            attendance.code,attendance.batch_no from student_attendance,attendance where student_attendance.id=attendance.attendance_id and student_id='2018slgtibit01' 
                                                            and month(attendance.attendance_date) between 1 and 6 group by code,batch_no;";
                                                        }
                                                        else
                                                        {
                                                            $sql = "select count(student_attendance.status) as total_session,(select count(student_attendance.status) from attendance,student_attendance where 
                                                            student_attendance.id=attendance.attendance_id and student_attendance.status='present' AND student_id='2018slgtibit01' group by code,batch_no) as take_session,
                                                            attendance.code,attendance.batch_no from student_attendance,attendance where student_attendance.id=attendance.attendance_id and student_id='2018slgtibit01' 
                                                            and month(attendance.attendance_date) between 7 and 12 group by code,batch_no;";
                                                        }
                                                    

                                                    $result = mysqli_query($con, $sql);
                                                    while ($row = mysqli_fetch_assoc($result)) {

                                                        $row1 = (($row['take_session'] / $row['total_session']) * 100)
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
                                                                <?php echo $row1 ."%";  ?>
                                                            </td>
                                                        <?php
                                                    }
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
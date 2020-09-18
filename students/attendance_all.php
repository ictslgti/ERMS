<?php
$title = ' ERMS | SLGTI Attendance';
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
                                                        <a class="dropdown-item" href="attendance_month.php">Month-Wise</a>
                                                        <a class="dropdown-item" href="attendance_semester.php">Semester-Wise</a>
                                                        <a class="dropdown-item" href="attendance_all.php">Moudel-Wise</a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="dropdown">
                                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="show details" name="show_date">
                                                    ALL Moduels
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="./attendance.php">Selected Moduel </a>
                                                </div>
                                            </div>

                                            <div class="col-3"></div>


                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <span id="message_operation"></span>

                                            <div class="row">
                                                <div class="form-group col-md-12 table-responsive">
                                                    <table class="table align-middle table table-striped">
                                                        <thead class='thead-light'>
                                                            <tr>
                                                                <th scope='col'>Moduels</th>
                                                                <th scope='col'>Points Over Taken Session</th>
                                                                <th scope='col'>All Session</th>
                                                                <th scope='col'>Percentage Sver Taken Session</th>
                                                                <th></th>
                                                            </tr>

                                                            <?php
                                                            // if (isset($_GET['id'])) {
                                                            // $id = $_GET['id'];
                                                            // $query1 = mysql_query("select * from employee where employee_id=$id", $connection);
                                                            // while ($row1 = mysql_fetch_array($query1)) {
                                                            ?>

                                                            <?php

                                                            $sql = mysqli_query($con, "SELECT `code` FROM `attendance` GROUP BY `code` ");

                                                            while ($row = mysqli_fetch_array($sql)) {
                                                                $modu[] = $row['code'];
                                                            }

                                                            ?>

                                                            <?php
                                                            $cont = count($modu);
                                                            
                                                            if (isset($_GET['semester'])) {
                                                                $sem = $_GET['semester'];

                                                                $sql = "select count(student_attendance.status) as Total_session,(SELECT count(student_attendance.status) from attendance,student_attendance where 
                                                                    student_attendance.id=attendance.attendance_id and student_attendance.status='present' AND student_id='2018slgtibit01' and code='" . $modu[$x] . "' group by batch_no) as Take_session ,
                                                                    attendance.code from attendance,student_attendance where student_attendance.id=attendance.attendance_id 
                                                                    AND student_id='2018slgtibit01' and code='" . $modu[$x] . "' group by CODE,batch_no";

                                                                $result = mysqli_query($con, $sql);
                                                                while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                                    <tr>
                                                                        <td scope='col'>
                                                                            <?php echo $row['code'];
                                                                            ?>
                                                                        </td>
                                                                        <td scope='col'>

                                                                            <?php
                                                                            if ($row['Take_session'] == null) {
                                                                                echo "0";
                                                                            } else {
                                                                                echo $row['Take_session'];
                                                                            }
                                                                            ?>
                                                                        </td>
                                                                        <td scope='col'>

                                                                            <?php echo $row['Total_session']; ?>
                                                                        </td>
                                                                        <td scope='col'>
                                                                            <?php echo number_format(($row['Take_session'] / $row['Total_session']) * 100, 2) . "%" ?>
                                                                        </td>

                                                                    </tr>
                                                                    <?php
                                                                }
                                                            } else {
                                                                for ($x = 0; $x < $cont; $x++) {
                                                                    $sql = "select count(student_attendance.status) as Total,(SELECT count(student_attendance.status) from attendance,student_attendance where 
                                                                            student_attendance.id=attendance.attendance_id and student_attendance.status='present' AND student_id='2018slgtibit01' and code='" . $modu[$x] . "' group by batch_no) as Take ,
                                                                            attendance.code from attendance,student_attendance where student_attendance.id=attendance.attendance_id 
                                                                            AND student_id='2018slgtibit01'  and code='" . $modu[$x] . "' group by CODE,batch_no";

                                                                    $result = mysqli_query($con, $sql);
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                    ?>
                                                                        <tr>
                                                                            <td scope='col'>
                                                                                <?php echo $row['code'];
                                                                                ?>
                                                                            </td>
                                                                            <td scope='col'>

                                                                                <?php
                                                                                if ($row['Take'] == null) {
                                                                                    echo "0";
                                                                                } else {
                                                                                    echo $row['Take'];
                                                                                }
                                                                                ?>
                                                                            </td>
                                                                            <td scope='col'>

                                                                                <?php echo $row['Total'];
                                                                                ?>
                                                                            </td>
                                                                            <td scope='col'>
                                                                                <?php echo number_format(($row['Take'] / $row['Total']) * 100, 2) . "%" ?>
                                                                            </td>

                                                                        </tr>
                                                            <?php
                                                                    }
                                                                }
                                                            }
                                                            ?>

                                                            <?php
                                                            $sql = "SELECT count(student_attendance.status) as total_session,count(attendance.code) as count_code,(select count(student_attendance.status) from attendance,student_attendance where 
                                                            student_attendance.id=attendance.attendance_id and student_attendance.status='present' AND student_id='2018slgtibit01' group by batch_no) as take_session,
                                                            attendance.code from student_attendance,attendance where student_attendance.id=attendance.attendance_id and student_id='2018slgtibit01'";
                                                            $result = mysqli_query($con, $sql);
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                                $row1 = number_format(($row['take_session'] / $row['total_session']) * 100, 2)
                                                            ?>

                                                                <tr>
                                                                    <td scope='col'>Average Attendance</td>
                                                                    <td scope='col'></td>
                                                                    <td scope='col'></td>
                                                                    <td scope='col'><?php echo $row1 . "%" ?></td>

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
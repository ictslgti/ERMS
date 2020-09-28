<?php
$title = "Attendance | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../head.php");
    // include_once('../config.php');

    ?>
    <?php include_once('../databases/config.php'); ?>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <?php include_once("nav.php"); ?>
        <div class="container">
            <!-- content -->
            <br>
            <div class="card border-secondary mb-3">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm">
                            <h1>Attendance</h1>
                        </div>
                    </div>
                </div>
                <div class="card-body text-dark">
                    <!-- first row -->
                    <?php
                    $code = $_GET['code']
                    ?>
                    <div class="row">
                        <div class="col">
                            <p>Date -: <?php
                                        echo   $date = $_GET['date']
                                        ?></p>
                            <p>Time -: <?php
                                        echo   $time = $_GET['time']
                                        ?></p>
                            <p>Lecture -: Y.Achchuthan</p>
                        </div>
                        <div class="col-auto">
                            <p>module -: <?php
                                            echo   $code = $_GET['code']
                                            ?></p>
                            <p>Batch -: <?php
                                        echo   $batch_no = $_GET['batch_no']
                                        ?></p>
                            <p></p>
                        </div>
                    </div>
                    <!-- first row end -->
                    <hr>
                    <!-- seond row -->
                    <div class="row">
                        <div class="col">
                            <h6>Att ID</h6>
                        </div>
                        <div class="col">
                            <h6>Student ID</h6>
                        </div>

                        <div class="col">
                            <h6>Name</h6>
                        </div>
                        <div class="col-auto">
                            <h6>status</h6>
                        </div>
                    </div>

                    <hr>
                    <form action="" id="" method="POST">
                        <?php
                        $code = $_GET['code'];
                        $batch_no = $_GET['batch_no'];
                        $sql = "select attendance.attendance_id,student_enroll.id,student.full_name from student_enroll,student,attendance,batches WHERE
                     attendance.batch_no=batches.id and batches.batch_no=student_enroll.batch_no and student_enroll.id=student.id and 
                     attendance.code=$code' and attendance.batch_no=$batch_no GROUP BY student_enroll.id";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo

                                    '<div class="row">
                                    <div lass="col">
                                    <input name="res',
                                    $row['id'],
                                    '" value="',
                                    $row['attendance_id'],
                                    '" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width: 80%;" type="hidden">
                                       </div>
                                      <div lass="col">
                                       <input name="reg',
                                    $row['id'],
                                    '" value="',
                                    $row['id'],
                                    '" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width: 80%;" type="hidden">
                                       </div>
                            <div class="col" >',
                                    $row['full_name'],
                                    '</div>
                            <div class="col-auto">
                            
                            <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="att',$row['id'],'" id="inlineRadio1" value="present">
  <label class="form-check-label" for="inlineRadio1">Present</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="att',$row['id'],'" id="inlineRadio2" value="Absent">
  <label class="form-check-label" for="inlineRadio2">Absent</label>
</div>
                            </div>
                        </div>
                        ';
                            }
                        } else {
                            echo 'no rows';
                        }
                        ?>
<br>
<br>
                        <div class="card-footer bg-transparent border-secondary">
                            <div class="row">
                                <div class="col"><input type="submit" name="submit" value="ADD" class="btn btn-outline-primary"></div>
                                <div class="col"><input type="edite" value="Edit" class="btn btn-outline-primary"></div>
                                <!-- <div class="col-auto">click all select<input type='checkbox' name='checkall' onclick='checkedAll(frm1);'></div> -->

                            </div>
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        //start
                        if (isset($_GET['code'])) {
                            $code = $_GET['code'];
                            $batch_no = $_GET['batch_no'];

                            $sql = "select student_enroll.id,student.full_name from student_enroll,student,attendance,batches WHERE
                            attendance.batch_no=batches.id and batches.batch_no=student_enroll.batch_no and student_enroll.id=student.id and 
                            attendance.code=$code' and attendance.batch_no=$batch_no GROUP BY student_enroll.id";
                            $sql_multi = null;
                            $result = $con->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $res = 'res' . $row['id'];
                                    $reg = 'reg' . $row['id'];
                                    $att = 'att' . $row['id'];

                                    $value = $_POST[$res];
                                    $value2 = $_POST[$reg];
                                    $value3 = $_POST[$att];
                                    $sql_multi .= "INSERT INTO  `student_attendance`(`id`,`student_id`,`status`) 
                                                     VALUES ('$value','$value2','$value3');";
                                }
                            }
                        }
                        $sql_multi;
                        //end

                        if (mysqli_multi_query($con, $sql_multi)) {
                            echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong></strong> Assessment Type details inserted!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>   
  ';
                        } else {

                            echo "Error: " . $sql . "<br>" . mysqli_error($con);
                        }
                    }


                    ?>
                </div>






                <script type="text/javascript">
                    checked = false;

                    function checkedAll(frm1) {
                        var aa = document.getElementById('frm1');
                        if (checked == false) {
                            checked = true
                        } else {
                            checked = false
                        }
                        for (var i = 0; i < aa.elements.length; i++) {
                            aa.elements[i].checked = checked;
                        }
                    }
                </script>


            </div>
        </div>
    </div>

    <!-- content -->
    </div>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>
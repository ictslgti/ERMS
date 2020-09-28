<?php
$title = ' Result | SLGTI(page Title)';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php include_once('../head.php');
    include_once('../config.php');
    ?>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">

        <?php include_once("nav.php"); ?>
        <div class="container">
            <br>
            <form action="">
                <!-- <div class="card  mb-3" >
                <div class="card-header ">
                <div class="row">
                <div class="col"><h4>Course</h4></div>
                <div class="col-auto">
                <a href="course.php" class="btn btn-outline-primary">New</a>
                </div> -->

        </div>
    </div>

    <div class="">

        <div class="card border-success mb-3">
            <div class="card-header bg-transparent border-success">View Result</div>
            <div class="card-body ">
                <div class="table-responsive">
                    <?php
                    $sql = "SELECT * FROM student";
                    $result = $con->query($sql);
                    if ($result->num_rows > 1) {
                        while ($row = $result->fetch_assoc()) {

                            $full_name = $row['full_name'];
                            $name_with_initials = $row['name_with_initials'];
                            $id = $row['id'];
                            $nic = $row['nic'];
                            // $semester = $row['semester'];
                            // $module = $row['module'];
                            // $exam_type = $row['exam_type'];
                            // $attempt = $row['attempt'];
                            // $marks = $row['marks'];
                        }
                    }
                    ?>
                    <?php
                    $department = $_GET['department'];
                    $course = $_GET['course'];
                    $module = $_GET['module'];
                    $batch = $_GET['batch'];
                    $sql = "SELECT * FROM student_assessments,assessments,modules WHERE student_assessments.id=assessments.id 
                                            and modules.id=assessments.module AND assessments.department_code='$department' and assessments.module=$module and assessments.batch=$batch GROUP BY assessments.batch  ";
                    $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {

                            echo '
 <div class="row">
                        <div class="col-3">Departmet Code :-<b>', $row['department_code'], ' </b></div>
                        <div class="col-3">Batch :-<b>Batch-', $row['batch'], ' </b> </div>
                    </div>

                    <div class="row">
                        <div class="col-3">Module Code :-<b>', $row['code'], ' </b>  </div>
                        <div class="col-3">Course  :-<b>', $row['course_code'], ' </b>  </div>
                    </div>
                    <div class="row">
                    <div class="col-3">Module  Name :-<b>', $row['name'], ' </b>  </div>
                    <div class="col-3">Semester  :-<b>', $row['semester_id'], ' </b>  </div>
                </div>

                    <table border="1px black" class="table align-middle">
                        <thead class="thead-dark text-light">';
                        }
                    } else {
                        echo 'no rows';
                    }
                    ?>
                    <!-- <tr>

                                <th>No</th>
                                <th>Index</th>
                                <th>Name</th>

                                <th colspan="6">writting test</th>

                                <th colspan="2">presentation</th>

                                <th colspan="2"> Assignment</th>

                                <th colspan="3">project</th>

                                <th rowspan="2">Average</th>

                            </tr> -->

                    </thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Index No</th>
                        <th>Asessment </th>
                        <th>Asessment Type </th>
                        <th colspan="6" style="text-align: center;">marks </th>
                        <th>States</th>
                    </tr>
                    <?php
                    $department = $_GET['department'];
                    $module = $_GET['module'];
                    $batch = $_GET['batch'];

                    $sql = "SELECT * FROM student_assessments,assessments,student WHERE student_assessments.id=assessments.id and
                                             student.id=student_assessments.student_id AND assessments.department_code='$department' and assessments.module=$module and assessments.batch=$batch GROUP BY student.id  ";
                    $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {

                    ?>

                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo  $row['full_name'] ?></td>
                                <td><?php echo  $row['id'] ?></td>
                                <td><?php echo  $row['names'] ?></td>
                                <td><?php echo  $row['type'] ?></td>
                                <td colspan="6" style="text-align: center;"><?php echo  $row['marks'] ?></td>
                                <td><?php
                                    if (($row['marks']) >= 50) {
                                        echo 'Pass';
                                    } else {
                                        echo 'Fail';
                                    }
                                    ?> </td>

                            </tr>



                    <?php
                        }
                    } else {
                        echo 'no rows';
                    }
                    ?>
                    </tbody>
                    </table>



                </div>

            </div>



        </div>

        <!-- #1 Insert Your Content" -->
    </div>

    </main>
    </div>
    <div class="card-footer ">
        <div class="row">
            <div class="col-11 "></div>
            <div class="col-1">
                <!-- <button type="submit" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal"> -->



                <!-- <a href="viewresult.php">print</a> -->
                <div class="text-center">
                    <a href="viewresultprint.php?department=<?php echo $department; ?> & course=<?php echo $course; ?> & module=<?php echo $module; ?> & batch=<?php echo $batch; ?>" class="btn btn-primary">Print</a>
                </div>




            </div>
        </div>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: .././index.php');
}
?>
<?php
if (isset($_GET['logout']) && isset($_SESSION['username'])) {
    unset($_SESSION['username']);
    header('Location: .././index.php');
}
?>
<?php
$title = ' ERMS | Exams';
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
            <form method="POST" action="">
                <div class='row'>
                    <div class="col-md">
                        <div class="card">
                            <div class="card-header">
                                <h3> <?php echo " $title" ?></h3>
                            </div>
                            <div class="card-body">
                                <!-- #1 Insert Your Content-->
                                <?php
                                // if (isset($_GET['reg'])) {
                                $reg = $_SESSION['username'];

                                $sql = "SELECT * FROM exams_result ,student where student.id IN (select id from student where email='$reg' ) GROUP BY student.id";
                                // $sql = "SELECT * FROM exams_result,student where student.id = exams_result.student_id and exams_result.student_id='$sql1'";
                                // $sql = "SELECT * FROM `student`,student_enroll,batches,exams_result WHERE student.id=student_enroll.id and batches.batch_no=student_enroll.batch_no and batches.batch_no=exams_result.batch_no and batches.batch_no=$batch_no and student_enroll.course_code = '$course' and exams_result.module='$module' group by student_enroll.id";
                                $result = $con->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo '       
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1" name="Exams"><b>Name</b> :-', $row['title'], '.', $row['full_name'], '</label>
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1" name="batch"><b>Id</b> :-', $row['student_id'], '</label>
            
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1" name="studentid"><b>E-mail</b>  :-', $row['email'], '</label>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail1" name="course"><b>NIC </b> :-', $row['nic'], '</label>
                            </div>
                          
                            <div class="col-md-4">
                            <label for="exampleInputEmail1" name="exams"><b>Batch No</b> :-Batch -', $row['batch_no'], '</label>
                            </div>
                            <div class="col-md-4">
                            <label for="exampleInputEmail1" name="exams"><b>Course</b>:-', $row['course'], '</label>
                            </div>
                        </div>
                      
                            </div>';
                                    }
                                } else {
                                    echo 'no rows';
                                }
                                ?>
                                <!-- modal-->
                                <!-- end modal-->
                                <!-- db coneection-->
                                <br>
                                <div class='row'>
                                    <div class="form-group col-md-12 table-responsive ">

                                        <table class='table table-md'>
                                            <thead class='table-active text-dark'>
                                                <tr>
                                                    <th scope='col'>NO</th>
                                                    <th scope='col'>INDEX NO</th>
                                                    <th scope='col'>EXAMS</th>
                                                    <th scope='col'>MODULE CODE</th>
                                                    <th scope='col'>SEMESTER</th>
                                                    <th scope='col'>MARKS</th>
                                                    <th scope='col'>ATTEMPT</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                // if (isset($_GET['reg'])) {
                                                //     $reg = $_GET['reg'];
                                                $reg = $_SESSION['username'];

                                                $sql = "SELECT * FROM exams_result where student_id IN(select id from student where email='$reg') ";
                                                // $sql = "SELECT * FROM `exams_result` where student_id='2018slgtibit01' ORDER BY `marks` ASC";
                                                // $sql = "SELECT * FROM `student`,student_enroll,batches,exams_result WHERE student.id=student_enroll.id and batches.batch_no=student_enroll.batch_no and batches.batch_no=exams_result.batch_no and batches.batch_no=$batch_no and student_enroll.course_code = '$course' and exams_result.module='$module' group by student_enroll.id";
                                                $result = $con->query($sql);
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<tr>
                                            <td> </td>
                                            <td>', $row['index_no'], '</td>
                                            <td> ', $row['exams'], '</td>
                                            <td> ', $row['module'], '<span class="badge badge-pill badge-success" name="exam_type">', $row['exam_type'], '</span></td>
                                            <td>', $row['semester'], '</td>
                                            <td>', $row['marks'], '</td>
                                            <td>
                                            ', $row['attempt'], '
                                            </td>
                                            
                                        </tr>';
                                                    }
                                                } else {
                                                    echo 'no rows';
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                        <div class='modal-footer'>
                                            <!-- <button type='button' class='btn btn-warning btn btn-sm '>Close</button> -->

            </form>

        </div>
        </div>
        </div>
        <?php
        if (isset($_POST['submit'])) {
            echo $reg = $_GET['reg'];
            echo $marks = $_POST['marks'];
            echo $attempt = $_POST['attempt'];

            echo  $sql = "UPDATE `exams_result` SET `marks`= '$marks',`attempt`= '$attempt' WHERE `student_id`='$reg'";
            if (mysqli_query($con, $sql)) {
                echo '
<div class="row">
<div class="col-sm alert alert-success alert-dismissible fade show " role="alert">
Succesfully Created..........
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
</div>
';
            } else {
                echo '
<div class="row">
<div class="col-sm alert alert-danger alert-dismissible fade show " role="alert">
"Error: " . $sql . "<br>" . mysqli_error($con);..........

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
</div>';
                'Error: ' . $sql . '<br>' . mysqli_error($con);
            }
        }
        ?>

        <!-- #1 Insert Your Content-->
        </div>
        <div class="card-footer text-muted">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">

                    </li>
                </ul>
            </nav>
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
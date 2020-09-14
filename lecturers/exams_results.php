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
                                if (isset($_GET['results'])) {
                                    $batch_no = $_GET['results'];
                                   echo $course = $_GET['course'];
                                    $sql = "select * from exams,batches where exams.batch=batches.batch_no and batches.batch_no =$batch_no and exams.course = '$course' group by batches.department_code";
                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo '       
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1" name="department">Department :-<b>', $row['department'], '</b></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1" name="batch">Betch :-', $row['batch'], '</b></label>
            
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1" name="Academic_year">Academic Year :-<b>', $row['Academic_year'], '</b></label>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail1" name="course">Course :-<b>', $row['course'], '</b></label>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleInputEmail1" name="level">Level :-', $row['NVQ_level'], '</b></label>
        
                            </div>
                            <div class="col-md-4">
                                <label for="exampleInputEmail1" name="date">Exam Date :-<b>', $row['date'], '</b></label>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1" name="module">Module Code :-<b>', $row['module'], '</b></label><span class="badge badge-pill badge-success" name="exam_type">', $row['exam_type'], '</span>
                                </div>
                                 <div class="col-md-4">
                                    <label for="exampleInputEmail1" name="exams">Exams Type :-<b>', $row['exams'], '</b></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1" name="semester">Semester :-<b>', $row['semester'], '</b></label>
                                </div>
                            </div>';
                                        }
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
                                                    <th scope='col'>REG NO</th>
                                                    <th scope='col'>STUDENTS NAME</th>
                                                    <th scope='col'>RESULT</th>
                                                    <th scope='col'>ATTEMPT</th>
                                                    <th scope='col'>ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <input name="results" value="<?php echo $_GET['results'] ?>" type="hidden">
                                                <?php
                                                if (isset($_GET['results'])) {
                                                    $batch_no = $_GET['results'];
                                                    $course = $_GET['course'];
                                                    $sql = "SELECT * FROM student , student_enroll  where `student`.`id` = `student_enroll`.`id` and`student_enroll`.`batch_no` =$batch_no  and `student_enroll`.`course_code` = '$course'";
                                                    $result = $con->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo '<tr>
                                            <td> </td>
                                            <td><input name="reg', $row['id'], '" value="', $row['id'], '" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width: 50%;"></td>
                                            <td> ', $row['id'], '</td>
                                            <td> ', $row['full_name'], '</td>
                                            <td><input type="number" name="res', $row['id'], '" value="0" min="0" max="100" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width: 20%;" ></td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" id="exampleFormControlSelect1" style="width: 50%;" name="att', $row['id'], '" >
                                                        <option value="1">1 st</option>
                                                        <option  value="2">2 nd</option>
                                                        <option  value="3">3 rd</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="../admin/studentview.php?view=', $row['id'], '" class="btn btn-warning btn-group btn btn-sm "> View </td>
                                        </tr>';
                                                        }
                                                    }
                                                } else {
                                                    echo 'no rows';
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-warning btn btn-sm '>Close</button>
                                            <button type='submit' name='Update' class='btn btn-primary btn btn-sm '>
                                                Update
                                            </button>

            </form>

        </div>
        </div>
        </div>
        <?php
        if (isset($_POST['Update'])) {
            //start
            if (isset($_GET['results'])) {
                $batch_no = $_GET['results'];
                $course = $_GET['course'];
                $sql = "SELECT * FROM `student`,student_enroll,batches,exams WHERE student.id=student_enroll.id and batches.batch_no=student_enroll.batch_no and batches.batch_no=exams.batch and batches.batch_no=$batch_no and student_enroll.course_code = '$course' group by student_enroll.id";
                $sql_multi = null;
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $name = 'reg' . $row['id'];
                        $res = 'res' . $row['id'];
                        $att = 'att' . $row['id'];
                        $exams =  $row['exams'];
                        $module = $row['module'];
                        $semester = $row['semester'];
                        $exam_type = $row['exam_type'];

                        $value = $_POST[$name];
                        $value2 = $_POST[$res];
                        $value3 = $_POST[$att];
                        // $exams = $_POST[$exams];
                        // $module = $_POST[$module];
                        // $semester = $_POST[$semester];
                        // $exams = $_POST[$exams];
                        // $exam_type = $_POST[$exam_type];
                        echo  $sql_multi .= "INSERT INTO  `exams_result`(`exams`,`batch_no`,`student_id`,`index_no`,`semester`, `module`, `exam_type`, `attempt`,`marks`) 
                                                     VALUES ('$exams','$batch_no','$value','$value','$semester','$module','$exam_type','$value3','$value2');";
                    }
                }
            }
            echo $sql_multi;
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

                echo '
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong></strong> echo "Error".$sql_multi."<br>".mysqli_multi_query($con);
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>
  
  ';
            }
        }


        ?>
        <!-- #1 Insert Your Content-->
        </div>
        <div class="card-footer text-muted">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
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
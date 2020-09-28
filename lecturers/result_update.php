<?php
$title = ' ERMS | Exams';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: .././index.php');
}
?>

<?php 

if (isset($_GET['logout']) && isset($_SESSION['username']) ) {
    unset($_SESSION['username']);  
    header('Location: .././index.php');         
}
?>
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
                                if (isset($_GET['reg'])) {
                                    $reg = $_GET['reg'];
                                    $sql = "SELECT * FROM exams_result,student where student.id = exams_result.student_id and exams_result.student_id='$reg'group by student.id";

                                    // $sql = "SELECT * FROM `student`,student_enroll,batches,exams_result WHERE student.id=student_enroll.id and batches.batch_no=student_enroll.batch_no and batches.batch_no=exams_result.batch_no and batches.batch_no=$batch_no and student_enroll.course_code = '$course' and exams_result.module='$module' group by student_enroll.id";
                                    $result = $con->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo '       
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1" name="Exams">Name :-<b>', $row['title'], '.', $row['full_name'], '</b></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1" name="batch">Gender :-', $row['gender'], '</b></label>
            
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1" name="studentid">E-mail  :-<b>', $row['email'], '</b></label>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail1" name="course">Semester  :-<b>', $row['semester'], '</b></label>
                            </div>
                            <div class="col-md-4">
                            <label for="exampleInputEmail1" name="module">Module Code :-<b>', $row['module'], '</b></label><span class="badge badge-pill badge-success" name="exam_type">', $row['exam_type'], '</span>
        
                            </div>
                            <div class="col-md-4">
                            <label for="exampleInputEmail1" name="exams">Exams Type :-<b>', $row['exams'], '</b></label>
                            </div>
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
                                                    <th scope='col'>RESULT</th>
                                                    <th scope='col'>ATTEMPT</th>
                                                    <th scope='col'>ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <input name="results" value="<?php echo $_GET['results'] ?> " type="hidden">
                                                <?php
                                                if (isset($_GET['reg'])) {
                                                    $reg = $_GET['reg'];

                                                    $sql = "SELECT * FROM `exams_result` where student_id='$reg' group by student_id ";
                                                    // $sql = "SELECT * FROM `student`,student_enroll,batches,exams_result WHERE student.id=student_enroll.id and batches.batch_no=student_enroll.batch_no and batches.batch_no=exams_result.batch_no and batches.batch_no=$batch_no and student_enroll.course_code = '$course' and exams_result.module='$module' group by student_enroll.id";
                                                    $result = $con->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo '<tr>
                                            <td> </td>
                                            <td>', $row['student_id'], '</td>
                                            <td> ', $row['index_no'], '</td>
                                            <td><input type="number" name="marks" value=', $row['marks'], ' min="0" max="100" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width: 20%;" ></td>
                                            <td>
                                           
                                            <select class="form-control" id="exampleFormControlSelect1" style="width: 50%;" name="attempt" >
                                            <option value="', $row['attempt'], '" >', $row['attempt'], '</option>            
                                                        <option value="1" >1 st</option>
                                                        <option  value="2">2 nd</option>
                                                        <option  value="3">3 rd</option>
                                                    </select>
                                            </td>
                                            <td>
                                                <a href="../admin/studentview.php?view=', $row['student_id'], '" class="btn btn-warning btn-group btn btn-sm "> View  
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
                                            <!-- <button type='button' class='btn btn-warning btn btn-sm '>Close</button> -->
                                            <button type='submit' name='submit' class='btn btn-primary btn btn-sm '>
                                                Update
                                            </button>

            </form>

        </div>
        </div>
        </div>
        <?php
        if (isset($_POST['submit'])) {
            echo $reg = $_GET['reg'];
            echo $marks = $_POST['marks'];
            echo $attempt = $_POST['attempt'];

            $sql = "UPDATE exams_result SET marks= '$marks', attempt= '$attempt' WHERE student_id='$reg'";
            if (mysqli_query($con,$sql)) {
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
<?php
$title = ' ERMS | Exams';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php
    include_once('.././head.php');
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
                <div class="col-md">
                    <div class="card">
                        <div class="card-header">
                            <h3> <?php echo " $title" ?></h3>
                        </div>
                        <div class="card-body">

                            <!-- #1 Insert Your Content-->







                            <div class='row'>
                                <div class="col-md-8"></div>
                                <div class="col-md-3"></div>
                                <div class='col-md-auto'>
                                    <button type='submit' class='btn btn-success btn-group btn btn-sm ' name="add" data-toggle='modal' data-target='#add_exam'>
                                        <i class="fas fa-plus" style="font-size: 18px">
                                        </i>
                                        Exams</button>

                                </div>
                            </div>
                            <!-- modal-->

                            <!-- Extra large modal -->

                            <div class='modal fade bd-exams-modal-lg' tabindex='-1' style="opacity: 0.9;" id="add_exam" role='dialog' aria-labelledby='myExtraLargeModalLabel' aria-hidden='true'>
                                <div class='modal-dialog modal-lg' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>ADD NEW EXAMS</h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;
                                                </span>
                                            </button>
                                        </div>
                                        <!-- new exams add form-->
                                        <div class='modal-body'>
                                            <form method='POST' action='' class='needs-validation'>
                                                <div class='row'>
                                                    <!-- select Exams Type -->
                                                    <div class='col-sm'>
                                                        <div class='input-group-sm '>
                                                            <div class='input-group-prepend '>
                                                                <!-- <label class='input-group-text' for='inputGroupSelect01'>Exams Type</label> -->
                                                                <label for='exampleInputEmail1'>Exams</label>
                                                            </div>
                                                            <select class='custom-select' required id='inputGroupSelect01' id='validationServer01' required name='exams'>
                                                                <option value=''>Select Exams</option>
                                                                <option value='INSTITUTE'>INSTITUTE</option>
                                                                <option value='TVEC'>TVEC</option>
                                                            </select>
                                                            <!-- <div class = 'invalid-feedback'>Select valide Exams Type</div> -->
                                                        </div>
                                                    </div>
                                                    <!-- select department -->

                                                    <div class='col-md'>
                                                        <div class='input-group-sm  sm-3 '>
                                                            <div class='input-group-prepend'>
                                                                <!-- <label class='input-group-text' for='inputGroupSelect01'>Department</label> -->
                                                                <label for='exampleInputEmail1'>Department</label>
                                                            </div>
                                                            <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required name='department'>
                                                                <option disabled value="">Choose Department</option>
                                                                <?php
                                                                $result = $con->query("SELECT `dname` FROM `departments`");
                                                                while ($row = $result->fetch_assoc()) {
                                                                    unset($dname);
                                                                    $dname = $row['dname'];
                                                                    echo '<option value=" ' . $dname . '"  >' . $dname . '</option>';
                                                                }

                                                                ?>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <!-- Select Course -->
                                                    <div class='col-md'>
                                                        <div class='input-group-sm  mb-3'>
                                                            <div class='input-group-prepend'>
                                                                <!-- <label class='input-group-text' for='inputGroupSelect01'>Course</label> -->
                                                                <label for='exampleInputEmail1'>Course</label>
                                                            </div>
                                                            <select class='custom-select' id='inputGroupSelect01' id='validationServer03' required name='course'>

                                                                <?php
                                                                $result1 = $con->query("SELECT cname FROM course where dname ='Electrical & Electronic Technology Department'");
                                                                while ($row1 = $result1->fetch_assoc()) {
                                                                    unset($cname);
                                                                    $cname = $row1['cname'];
                                                                    echo '<option value=" ' . $cname . '"  >' . $cname . '</option>';
                                                                }


                                                                ?>
                                                                <!-- <option value=''>Select Course</option>
                                                                <option value='NVQ LEVEL-4'>NVQ LEVEL-4</option>
                                                                <option value='BRIDGING LEVEL-5'>BRIDGING LEVEL-5</option>
                                                                <option value='LEVEL-5'>NVQ LEVEL-5</option>
                                                                <option value='LEVEL-6'>NVQ LEVEL-6</option> -->
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <br>
                                                <!--, , , , , , , , , , , , , , , , , , , , , , ............................, , , , , , , , , , , , , , , , , , ,  -->
                                                <div class='row'>
                                                    <!-- Select Semester -->
                                                    <div class='col-md'>
                                                        <div class='input-group-sm  mb-3'>
                                                            <div class='input-group-prepend'>
                                                                <!-- <label class='input-group-text' for='inputGroupSelect01'>Semester</label> -->
                                                                <label for='exampleInputEmail1'>Batch</label>
                                                            </div>
                                                            <select class='custom-select' id='inputGroupSelect01' id='validationServer04' required name='batch'>
                                                                <?php

                                                                $result = $con->query("SELECT batch_name FROM batch");
                                                                while ($row = $result->fetch_assoc()) {
                                                                    unset($bname);
                                                                    $bname = $row['batch_name'];
                                                                    echo '<option value=" ' . $bname . '"  >' . $bname . '</option>';
                                                                }


                                                                ?>
                                                                <!-- <option value=''>Select Semester</option>
                                                                <option value='1 st'>1 st semester</option>
                                                                <option value='2 nd'>2 nd semester</option>
                                                                <option value='3 rd'>3 rd semester</option> -->

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- select module -->
                                                    <div class='col-md'>
                                                        <div class='input-group-sm  mb-3 '>
                                                            <div class='input-group-prepend '>
                                                                <!-- <label class='input-group-text' for='inputGroupSelect01'>Module</label> -->
                                                                <label for='exampleInputEmail1'>Semester</label>
                                                            </div>
                                                            <select class='custom-select' id='inputGroupSelect01' id='validationServer05' required name='semester'>
                                                                <option value=''>Select Semester</option>
                                                                <option value='1 st'>1 st semester</option>
                                                                <option value='2 nd'>2 nd semester</option>
                                                                <option value='3 rd'>3 rd semester</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-md'>
                                                        <div class='input-group-sm mb-3 '>
                                                            <div class='input-group-prepend '>
                                                                <!-- <label class='input-group-text' for='inputGroupSelect01'>Type</label> -->
                                                                <label for='exampleInputEmail1'>Module</label>
                                                            </div>
                                                            <select class='custom-select' id='inputGroupSelect01' id='validationServer06' required name='Module'>
                                                                <option value=''>Select Module</option>
                                                                <option value='EMP-MO1'>EMP-MO1</option>
                                                                <option value='EMP-MO2'>EMP-MO2</option>
                                                                <option value='EMP-MO3'>EMP-MO3</option>
                                                                <option value='MO4'>MO4</option>
                                                                <option value='MO5'>MO5</option>
                                                                <option value='MO5'>MO6</option>
                                                                <option value='MO7'>MO7</option>
                                                                <option value='MO8'>MO8</option>
                                                            </select>
                                                        </div>
                                                    </div>


                                                </div>
                                                <!--, , , , , , , , , , , , , , , , , , , , , , ............................, , , , , , , , , , , , , , , , , , ,  -->
                                                <div class='row'>
                                                    <!-- Select Semester -->
                                                    <div class='col-md'>
                                                        <div class='input-group-sm  mb-3'>
                                                            <div class='input-group-prepend'>
                                                                <!-- <label class='input-group-text' for='inputGroupSelect01'>Semester</label> -->
                                                                <label for='exampleInputEmail1'>Exam Type</label>
                                                            </div>
                                                            <select class='custom-select' id='inputGroupSelect01' id='validationServer04' required name='exam_type'>
                                                                <option value=''>Select Type</option>
                                                                <option value='T'>THEORY</option>
                                                                <option value='P'>PRACTICAL</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- select date -->
                                                    <div class='col-md'>
                                                        <div class='input-group-sm  mb-3 '>
                                                            <div class='input-group-prepend '>
                                                                <!-- <label class='input-group-text' for='inputGroupSelect01'>Module</label> -->
                                                                <label for='exampleInputEmail1'>Exams Date</label>
                                                            </div>
                                                            <input type="date" class="form-control" aria-label="Small" name="date" aria-describedby="inputGroup-sizing-sm">
                                                        </div>
                                                    </div>
                                                   


                                                </div>
                                                <div class='row '>
                                                    <div class='input-group  '>
                                                        <div class='col-10'></div>
                                                        <div class='col-2'>

                                                            <!-- Button trigger modal -->

                                                            <div class='modal-footer'>
                                                                <button type='button' class='btn btn-warning btn btn-sm ' data-dismiss='modal'>Close</button>
                                                                <button type='submit' name='submit' class='btn btn-primary btn btn-sm ' data-toggle='modal' data-target='#exampleModal'>
                                                                    SAVE
                                                                </button>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                        <!-- form end-->
                                    </div>
                                </div>
                            </div>

                            <!-- end modal-->
                            <!-- db coneection-->
                            <!-- add exam sql-->


                            <?php
                            if (
                                isset($_POST['submit'])
                                && !empty($_POST['exams'])
                                && !empty($_POST['department'])
                                && !empty($_POST['course'])
                                && !empty($_POST['batch'])
                                && !empty($_POST['semester'])
                                && !empty($_POST['module'])
                                && !empty($_POST['type'])
                                && !empty($_POST['date'])

                            ) {
                                $exams = $_POST['exams'];
                                $department = $_POST['department'];
                                $course = $_POST['course'];
                                $batch = $_POST['batch'];
                                $semester = $_POST['semester'];
                                $module = $_POST['module'];
                                $type = $_POST['type'];
                                $date = $_POST['date'];

                                $sql = "INSERT INTO exams (exam, dept_name, course,batch,semester,module,exam_type,date)
    VALUES 
    ('$exams', 
    '$department', 
    '$course',
    '$batch',
    '$semester', 
    '$module', 
    '$type',
    '$date')

    ";

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
                                    // 'Error: ' . $sql . '<br>' . mysqli_error($con);
                                }
                            }

                            ?>
                            <br>
                            <div class='row'>
                                <div class="form-group col-md-12 table-responsive ">
                                    <table class='table table-md'>
                                        <thead class='table-active text-dark'>
                                            <tr>
                                                <th scope='col'>NO</th>
                                                <th scope='col'>Exams</th>
                                                <th scope='col'>DEPARTMENT</th>
                                                <th scope='col'>COURSE</th>
                                                <th scope='col'>BATCH</th>
                                                <th scope='col'>SEMESTER</th>
                                                <th scope='col'>MODULE</th>
                                                <th scope='col'>DATE</th>
                                                <th scope='col'>ACTIONS</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_GET['delete'])) {
                                                $exam_id = $_GET['delete'];
                                                $sql = "DELETE FROM `exams` WHERE `exam_id` = $exam_id";
                                                if (mysqli_query($con, $sql)) {
                                                    echo '
                                        <div class="row">
                                        <div class="col-md alert alert-success alert-dismissible fade show " role="alert">
                                        Record Was Deleted..........
                                        
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>                                     
                                        </div>';
                                                } else {
                                                    echo 'Try again';
                                                }
                                            }
                                            ?>
                                            <?php

                                            $sql = "select * from exams  ";
                                            $result = $con->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {

                                                    echo '<tr>
                                    <td> ', $row['exam_id'], '</td>
                                    <td> ', $row['exam'], '</td>
                                    <td> ', $row['dept_name'], '</td>
                                    <td> ', $row['course'], '</td>
                                    <td> ', $row['batch'], '</td>
                                    <td> ', $row['semester'], '</td>
                                    <td> ', $row['module'], '<span class = "badge badge-dark">', $row['exam_type'], '</span></td>
                                    <td> ', $row['date'], '</td>
                                    <td class="btn-group "role="group" > 
                                    <a href="?View=', $row['exam_id'], '" class = "btn btn-warning btn-group btn btn-sm " >   
                                    View
                                     </a>
                                    <a class = "btn btn-danger btn-group btn btn-sm " href="?delete=', $row['exam_id'], '"> Delete </a>
                                    <a class = "btn btn-info btn-group btn btn-sm " href="exams_results.php?Results=', $row['exam_id'], '"> Results </a>
                                    </td>
                                    </tr>';
                                                }
                                            } else {
                                                echo 'no rows';
                                            }
                                            ?>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
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
            </div>
            <!-- #1 Insert Your Content" -->


        </div>
    </main>

    <?php include_once("../script.php");
    ?>
</body>

</html>
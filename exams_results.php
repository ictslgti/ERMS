<?php
$title = 'Dashboard | Online Examination Result Management System | SLGTI';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php include_once('./head.php');
    ?>
</head>

<body>
    <div class='page-wrapper toggled bg2 border-radius-on light-theme'>
        <nav id='sidebar' class='sidebar-wrapper'>
            <?php include_once('nav.php');
            ?>
        </nav>
        <main class='page-content pt-2'>
            <div id='overlay' class='overlay'></div>
            <div class='container-fluid p-5'>
                <!-- #1 Insert Your Content-->
                <section class='mb-40 pt-2 mx-auto'>
                    <div class='row'>
                        <div class='col-4'>
                            <h3 class='text-primary'> Welcome </h3>
                        </div>
                        <div class='col-4'>
                            <div class='input-group' id='serching'>

                                <input type='text' class='form-control primary-input border border-primary border-top-0 border-left-0 border-right-0' placeholder='Search'>
                            </div>
                        </div>
                        <div class='col-2'></div>
                        <div class='col-2'>

                            <button type='button' class='btn btn-success btn-block' data-toggle='modal' data-target='.bd-example-modal-xl'>
                                <svg class='bi bi-plus-circle-fill' width='2em' height='2em' viewBox='0 0 16 16' fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                                    <path fill-rule='evenodd' d='M16 8A8 8 0 110 8a8 8 0 0116 0zM8.5 4a.5.5 0 00-1 0v3.5H4a.5.5 0 000 1h3.5V12a.5.5 0 001 0V8.5H12a.5.5 0 000-1H8.5V4z' clip-rule='evenodd' />
                                </svg>
                                Add Exams</button>
                        </div>

                    </div>
                    <!-- modal-->

                    <!-- Extra large modal -->

                    <div class='modal fade bd-example-modal-xl' tabindex='-1' role='dialog' aria-labelledby='myExtraLargeModalLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-xl' role='document'>
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
                                                <div class='input-group sm '>
                                                    <div class='input-group-prepend '>
                                                        <label class='input-group-text' for='inputGroupSelect01'>Exams Type</label>
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
                                            <div class='col-sm'>
                                                <div class='input-group sm-3 '>
                                                    <div class='input-group-prepend'>
                                                        <label class='input-group-text' for='inputGroupSelect01'>Department</label>
                                                    </div>
                                                    <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required name='department'>
                                                        <option value=''>Select Department</option>
                                                        <option value='Information Communication Technology'>Information Communication Technology</option>
                                                        <option value='Automotive & Technology'>Automotive & Technology</option>
                                                        <option value='Construction Technology'>Construction Technology</option>
                                                        <option value='Electrical Technology'>Electrical Technology</option>
                                                        <option value='Food Technology'>Food Technology</option>
                                                        <option value='Mechanical Technology'>Mechanical Technology</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Select Course -->
                                            <div class='col-sm'>
                                                <div class='input-group mb-3'>
                                                    <div class='input-group-prepend'>
                                                        <label class='input-group-text' for='inputGroupSelect01'>Course</label>
                                                    </div>
                                                    <select class='custom-select' id='inputGroupSelect01' id='validationServer03' required name='course'>
                                                        <option value=''>Select Course</option>
                                                        <option value='NVQ LEVEL-4'>NVQ LEVEL-4</option>
                                                        <option value='BRIDGING LEVEL-5'>BRIDGING LEVEL-5</option>
                                                        <option value='LEVEL-5'>NVQ LEVEL-5</option>
                                                        <option value='LEVEL-6'>NVQ LEVEL-6</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <br>
                                        <!--, , , , , , , , , , , , , , , , , , , , , , ............................, , , , , , , , , , , , , , , , , , ,  -->
                                        <div class='row'>
                                            <!-- Select Semester -->
                                            <div class='col-sm'>
                                                <div class='input-group mb-3'>
                                                    <div class='input-group-prepend'>
                                                        <label class='input-group-text' for='inputGroupSelect01'>Semester</label>
                                                    </div>
                                                    <select class='custom-select' id='inputGroupSelect01' id='validationServer04' required name='semester'>
                                                        <option value=''>Select Semester</option>
                                                        <option value='1 st'>1 st semester</option>
                                                        <option value='2 nd'>2 nd semester</option>
                                                        <option value='3 rd'>3 rd semester</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <!-- select module -->
                                            <div class='col-sm'>
                                                <div class='input-group mb-3 '>
                                                    <div class='input-group-prepend '>
                                                        <label class='input-group-text' for='inputGroupSelect01'>Module</label>
                                                    </div>
                                                    <select class='custom-select' id='inputGroupSelect01' id='validationServer05' required name='module'>
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
                                            <div class='col-sm'>
                                                <div class='input-group mb-3 '>
                                                    <div class='input-group-prepend '>
                                                        <label class='input-group-text' for='inputGroupSelect01'>Type</label>
                                                    </div>
                                                    <select class='custom-select' id='inputGroupSelect01' id='validationServer06' required name='type'>
                                                        <option value=''>Select Type</option>
                                                        <option value='T'>THEORY</option>
                                                        <option value='P'>PRACTICAL</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <br>
                                        <!-- db coneection-->

                                        <div class='row '>
                                            <div class='input-group  '>
                                                <div class='col-10'></div>
                                                <div class='col-2'>

                                                    <!-- <button type = 'button' class = 'btn btn-primary'>SAVE</button> -->
                                                    <!-- Button trigger modal -->

                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-warning' data-dismiss='modal'>Close</button>
                                                        <button type='submit' name='submit' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
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

                    <br>
                    <div class='row'>
                        <div class='col-lg-12'>
                        </div>
                    </div>

                    <div class='row'>

                        <div class='col-lg-3 col-md-3 col-sm-3 shadow-lg p-2 mb-5 bg-white rounded'>
                            <a href='#' class='d-block text-decoration-none'>
                                <div class='white-box single-summery'>
                                    <div class='d-flex justify-content-between'>
                                        <div>
                                            <h3>Student</h3>
                                            <p class='mb-0'>Total Students</p>
                                        </div>
                                        <h1 class='primary'>
                                            75
                                        </h1>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class='col-lg-3 col-md-3 col-sm-3 shadow-lg p-3 mb-5 bg-white rounded'>
                            <a href='#' class='d-block text-decoration-none'>
                                <div class='white-box single-summery'>
                                    <div class='d-flex justify-content-between'>
                                        <div>
                                            <h3>Lecturer</h3>
                                            <p class='mb-0'>Total Lecturer</p>
                                        </div>
                                        <h1 class='primary'>
                                            3
                                        </h1>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class='col-lg-3 col-md-3 col-sm-3 shadow-lg p-3 mb-5 bg-white rounded'>
                            <a href='#' class='d-block text-decoration-none'>
                                <div class='white-box single-summery'>
                                    <div class='d-flex justify-content-between'>
                                        <div>
                                            <h3>Courses</h3>
                                            <p class='mb-0'>Total Courses</p>
                                        </div>
                                        <h1 class='primary'>
                                            21
                                        </h1>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class='col-lg-3 col-md-3 col-sm-3 shadow-lg mb-5 bg-white rounded'>
                            <a href='#' class='d-block text-decoration-none'>
                                <div class='white-box single-summery'>
                                    <div class='d-flex justify-content-between'>
                                        <div>
                                            <h3>Staffs</h3>
                                            <p class='mb-0'>Total Staffs</p>
                                        </div>
                                        <h1 class='primary'>
                                            1
                                        </h1>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- </div> -->
                </section>

                <!-- Heding -->
                <div class='form-group col-md-12 col-sm '>
                    <div>
                        <div class='text-wrap text-center text-primary'>
                            <h4>UPDATE STUDENTS RESULTS</h4>
                        </div>
                    </div>
                </div>

                <!-- new exams add form-->
                <form method='POST' action=''>
                    <div class='row'>
                        <!-- select Exams Type -->
                        <div class='col-sm mb-3'>
                            <div class='input-group mb-3'>
                                <div class='input-group-prepend '>
                                    <label class='input-group-text' for='inputGroupSelect01'>Exams Type</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer01' required>
                                    <option value=''>Select Exams</option>
                                    <option value='1'>INSTITUTE</option>
                                    <option value='2'>TVEC</option>
                                </select>
                            </div>
                        </div>
                        <!-- select department -->
                        <div class='col-sm'>
                            <div class='input-group mb-3 '>
                                <div class='input-group-prepend'>
                                    <label class='input-group-text' for='inputGroupSelect01'>Department</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option value=''>Select Department</option>
                                    <option value='1'>Information Communication Technology</option>
                                    <option value='2'>Automotive & Technology</option>
                                    <option value='3'>Construction Technology</option>
                                    <option value='4'>Electrical Technology</option>
                                    <option value='5'>Food Technology</option>
                                    <option value='6'>Mechanical Technology</option>
                                </select>
                            </div>
                        </div>

                        <!-- Select Course -->
                        <div class='col-sm'>
                            <div class='input-group mb-3'>
                                <div class='input-group-prepend'>
                                    <label class='input-group-text' for='inputGroupSelect01'>Course</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer03' required>
                                    <option value=''>Select Course</option>
                                    <option value='1'>NVQ LEVEL-4</option>
                                    <option value='2'>BRIDGING LEVEL-5</option>
                                    <option value='3'>NVQ LEVEL-5</option>
                                    <option value='4'>NVQ LEVEL-6</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <br>
                    <!--, , , , , , , , , , , , , , , , , , , , , , ............................, , , , , , , , , , , , , , , , , , ,  -->
                    <div class='row'>
                        <!-- Select Semester -->
                        <div class='col-sm'>
                            <div class='input-group mb-3'>
                                <div class='input-group-prepend'>
                                    <label class='input-group-text' for='inputGroupSelect01'>Semester</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer04' required>
                                    <option value=''>Select Semester</option>
                                    <option value='1'>1 st semester</option>
                                    <option value='2'>2 nd semester</option>
                                    <option value='3'>3 rd semester</option>

                                </select>
                            </div>
                        </div>
                        <!-- select module -->

                        <div class='col-sm'>
                            <div class='input-group mb-3'>
                                <div class='input-group-prepend '>
                                    <label class='input-group-text' for='inputGroupSelect01'>Module</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer05' required>
                                    <option value=''>Select Module</option>
                                    <option value='1'>EMP-MO1</option>
                                    <option value='2'>EMP-MO2</option>
                                    <option value='3'>EMP-MO3</option>
                                    <option value='4'>MO4</option>
                                    <option value='5'>MO5</option>
                                    <option value='6'>MO6</option>
                                    <option value='7'>MO7</option>
                                    <option value='8'>MO8</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-sm'>
                            <div class='input-group mb-3 '>
                                <div class='input-group-prepend '>
                                    <label class='input-group-text' for='inputGroupSelect01'>Type</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer06' required>
                                    <option value=''>Select Type</option>
                                    <option value='1'>THEORY</option>
                                    <option value='2'>PRACTICAL</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class='row'>
                        <div class='col-11 '></div>
                        <div class='col-1 '>
                            <button type='submit' class='btn btn-primary'>SEARCH</button>
                        </div>
                    </div>
                </form>

            </div>
            <!-- add exam sql-->
            <?php
           // include_once('config.php');
            ?>

            <?php
            if (
                isset($_POST['submit'])
                && !empty($_POST['exams'])
                && !empty($_POST['department'])
                && !empty($_POST['course'])
                && !empty($_POST['semester'])
                && !empty($_POST['module'])
                && !empty($_POST['type'])

            ) {
                $exams = $_POST['exams'];
                $department = $_POST['department'];
                $course = $_POST['course'];
                $semester = $_POST['semester'];
                $module = $_POST['module'];
                $type = $_POST['type'];

                $sql = "INSERT INTO exams (exam, dept_name, course,semester,module,exam_type)
    VALUES 
    ('$exams', 
    '$department', 
    '$course',
    '$semester', 
    '$module', 
    '$type')
    ";

                if (mysqli_query($con, $sql)) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
         Succesfully Create a New Exams
         <a type="button" name="button" class="btn btn-warning btn-sm" href="exams_dashbord.php">View</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
                } else {
                    echo 'Error: ' . $sql . '<br>' . mysqli_error($con);
                }
            }

            ?>
            <!-- end add exam sql-->
            <!-- sample table-->
            <form method='POST' action='' class='needs-validation'>
                <div class='table-responsive'>
                    <table class='table'>
                        <thead class='bg-primary text-light'>
                            <tr>
                                <th scope='col'>NO</th>
                                <th scope='col'>REG NO</th>
                                <th scope='col'>INDEX NO</th>
                                <th scope='col'>STUDENT NAME</th>
                                <th scope='col'>ATTEMPT </th>
                                <th scope='col'>MARKS</th>
                                <th scope='col'>STATUS</th>
                                <th scope='col'>VIEW</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope='row'></th>
                                <td>2018ICTBIT01</td>
                                <td>2018ICTBIT01</td>
                                <td>Mohamed Sakkoor Eashath</td>
                                <td><select class='custom-select' id='inputGroupSelect01' id='validationServer01' required>
                                        <option value=''>Select</option>
                                        <option value='1'>1 st</option>
                                        <option value='2'>2 nd</option>
                                        <option value='3'>3 rd</option>
                                </td>
                                <td><input type='text' class='form-control' placeholder='Marks' id='validationServer02' required aria-label='marks' aria-describedby='addon-wrapping'></td>
                                <td><span class='badge badge-success'>PASS</span></td>
                                <td><button type='button' name='button' class='btn btn-warning btn-sm'>View</button></td>

                            </tr>

                        </tbody>
                    </table>

                </div>
                <br>
                <div class='row'>
                    <div class='col-10 '></div>
                    <div class='col-2 '>
                        <button type='cancel' class='btn btn-danger'>CANCEL</button>
                        <button type='submit' class='btn btn-primary'>SAVE</button>
                    </div>
                </div>
            </form>
            <!-- #1 Insert Your Content" -->
    </div>
    </main>
    </div>
    <?php include_once("script.php");
    ?>
</body>

</html>
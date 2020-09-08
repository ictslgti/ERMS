<?php
$title = ' ERMS | Exams';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "erms");
$country = '';
$query = "SELECT * FROM departments";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($result)) {
    $country .= '<option value="' . $row["code"] . '">' . $row["name"] . '</option>';
}
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php
    include_once('.././head.php');
    include_once('../config.php');
    ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $('#bonus').change(function() {
                document.write($("#bonus option:selected").text());
            });
        });
    </script>
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
                                                            <select name="department" id="department" class="form-control action">
                                                                <option disabled value="">Choose Department</option>
                                                                <?php echo $country; ?>
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
                                                            <select name="course" id="course" class="form-control action">
                                                                <!-- <option value="">Select course</option> -->
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
                                                                <label for='exampleInputEmail1'>Module</label>
                                                            </div>
                                                            <select name="module" id="module" class="form-control action">
                                                                <option disabled value="">Select module</option>
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
                                                            <select name="semester" id="semester" class="form-control action">
                                                                <option disabled value="">Select Semester</option>

                                                                <!-- <option value='Semester 01'>Semester 01</option>
                                                                <option value='Semester 02'>Semester 02</option> -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class='col-md'>
                                                        <div class='input-group-sm mb-3 '>
                                                            <div class='input-group-prepend '>
                                                                <!-- <label class='input-group-text' for='inputGroupSelect01'>Type</label> -->
                                                                <label for='exampleInputEmail1'>Batch</label>
                                                            </div>
                                                            <select name="batch" id="batch" class="form-control action">
                                                                <option disabled value=''>Select Batch</option>
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
                                                                <option disabled value=''>Select Type</option>
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
                                && !empty($_POST['module'])
                                && !empty($_POST['semester'])
                                && !empty($_POST['batch'])
                                && !empty($_POST['exam_type'])
                                && !empty($_POST['date'])
                            ) {
                                $exams = $_POST['exams'];
                                $department = $_POST['department'];
                                $course = $_POST['course'];
                                $module = $_POST['module'];
                                $semester = $_POST['semester'];
                                $batch = $_POST['batch'];
                                $exam_type = $_POST['exam_type'];
                                $date = $_POST['date'];
                                $sql = "INSERT INTO `exams` (`exams`, `department`, `course`, `module`, `semester`, `batch`, `exam_type`, `date`)
                                VALUES ('$exams', '$department', '$course', '$module',  '$semester',  '$batch', '$exam_type', '$date')";
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
                                                <th scope='col'>MODULE</th>
                                                <th scope='col'>SEMESTER</th>
                                                <th scope='col'>BATCH</th>
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
                                            $sql = "select * from exams ";
                                            $result = $con->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {

                                                    echo '<tr>
                                    <td> ', $row['exam_id'], '</td>
                                    <td> ', $row['exams'], '</td>
                                    <td> ', $row['department'], '</td>
                                    <td> ', $row['course'], '</td>
                                    <td> ', $row['module'], '<span class = "badge badge-dark">', $row['exam_type'], '</span></td>
                                    <td> ', $row['semester'], '</td>
                                    <td> ', $row['batch'], '</td>
                                    <td> ', $row['date'], '</td>
                                    <td class="btn-group "role="group" > 
                                    <a href="?View=', $row['exam_id'], '" class = "btn btn-warning btn-group btn btn-sm " >   
                                    View
                                     </a>
                                    <a class = "btn btn-danger btn-group btn btn-sm " href="?delete=', $row['exam_id'], '"> Delete </a>
                                    <a class = "btn btn-info btn-group btn btn-sm " href="exams_results.php?results=', $row['batch'], '"> Results </a>
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
    <script>
        $(document).ready(function() {
            $('.action').change(function() {
                if ($(this).val() != '') {
                    var action = $(this).attr("id");
                    var query = $(this).val();
                    var result = '';
                    if (action == "department") {
                        result = 'course';
                    } else if (action == "course") {
                        result = 'module';

                    } else if (action == "module") {
                        result = 'semester';
                    } else if (action == "course") {
                        result = 'batch';
                    }
                    $.ajax({
                        url: "ex_fetch.php",
                        method: "POST",
                        data: {
                            action: action,
                            query: query
                        },
                        success: function(data) {
                            $('#' + result).html(data);
                        }
                    })
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.action').change(function() {
                if ($(this).val() != '') {
                    var action = $(this).attr("id");
                    var query = $(this).val();
                    var result = '';
                    if (action == "course") {
                        result = 'batch';
                    }
                    $.ajax({
                        url: "exams.php",
                        method: "POST",
                        data: {
                            action: action,
                            query: query
                        },
                        success: function(data) {
                            $('#' + result).html(data);
                        }
                    })
                }
            });
        });
    </script>
    <?php
    //fetch.php
    if (isset($_POST["action"])) {
        $output = '';
        if ($_POST["action"] == "course") {
            $query = "SELECT `batches`.`batch_no` FROM `batches` LEFT JOIN `courses` ON `batches`.`NVQ_level` = `courses`.`NVQ_level` AND 
            `batches`.`department_code` = `courses`.`department_code` WHERE `courses`.`code`='" . $_POST["query"] . "'";
            $result = mysqli_query($con, $query);
            $output .= '<option value="" disabled selected>Choose Batch</option>';
            while ($row = mysqli_fetch_array($result)) {
                $output .= '<option value="' . $row["batch_no"] . '">' . $row["batch_no"] . '</option>';
            }
        }
        echo $output;
    }
    ?>
</body>

</html>
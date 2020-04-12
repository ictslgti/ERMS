<?php
$title = 'Dashboard | Online Examination Result Management System | SLGTI';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <?php include_once('./head.php');
    ?>
    <?php
    include_once('config.php');
    ?>
</head>
<body>
    <div class='page-wrapper toggled bg2 border-radius-on light-theme'>
        <nav id='sidebar' class='sidebar-wrapper'>
            <?php include_once('nav.php'); ?>
        </nav>
        <main class='page-content pt-2'>
            <?php include_once('exam/nav_bar.php');
            include_once('exam/exams_nav.php');
            include_once('exam/add_exam.php');
            ?>
            <div class='container-fluid p-5'>
                <!-- #1 Insert Your Content-->

            <div class="row">
    <div class="col-md">
     <h3  class="text-secondary"> Exams Detail</h3>
    </div>
    <div class="col-md">
     
    </div>
    <div class="col-md">
     
    </div>
  </div>
  <br>
    <!-- #1 Searching bar" -->
    <div class="row">
    <div class="col-md">
      
    </div>
    <div class="col-md">
      
    </div>
    <div class="col-md-auto pr-4 sidebar-item sidebar-search ">
    <div class="input-group input-group-sm mb-3">
                <input type="text" class="form-control-sm search-menu" id="mySearch" onkeyup="myFunction()" placeholder="Module..." title="Type in a category">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
    </div>
  </div>
               <br>
                <!-- #1 Insert Your Content-->
               
                <!--#2 Insert your Content-->
                <div class="row">
                    <div class="form-group col-md-12 table-responsive">
                        <table class='table align-middle'>
                            <thead class='bg-primary text-light'>
                                <tr>
                                    <th scope='col'>NO</th>
                                    <th scope='col'>Exams</th>
                                    <th scope='col'>DEPARTMENT</th>
                                    <th scope='col'>COURSE</th>
                                    <th scope='col'>SEMESTER</th>
                                    <th scope='col'>MODULE</th>
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
                                $sql = "select * from exams ORDER BY exam_id DESC";
                                $result = $con->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {

                                        echo '<tr>
                                    <td> ', $row['exam_id'], '</td>
                                    <td> ', $row['exam'], '</td>
                                    <td> ', $row['dept_name'], '</td>
                                    <td> ', $row['course'], '</td>
                                    <td> ', $row['semester'], '</td>
                                    <td> ', $row['module'], '<span class = "badge badge-dark">', $row['exam_type'], '</span></td>
                                    <td class="btn-group" role="group" > 
                                    <a class = "btn btn-warning btn-group btn btn-sm " href="insert.php?edit=', $row['exam_id'], '"> Edit </a>
                                    <a class = "btn btn-danger btn-group btn btn-sm " href="?delete=', $row['exam_id'], '"> Delete </a>
                                    <a class = "btn btn-info btn-group btn btn-sm " href="?view=', $row['exam_id'], '"> View </a>
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
                <!--#2 Insert your Content-->
                <!-- #1 Insert Your Content" -->
            </div>
    </div>
    </main>
    </div>
    <?php include_once("script.php");
    ?>
</body>
</html>
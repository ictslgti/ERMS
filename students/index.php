<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: .././index.php');
}
?>
<?php
$title = 'Dashboard';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php include_once('.././head.php');
          include_once('dashboard/dash-cdn.php');    
          include_once("../databases/config.php");
    //    include_once('../config.php');
    ?>
    <link rel="stylesheet" href="dashboard/css/prograss-bar-main.css">
    <link rel="stylesheet" href="dashboard/css/profile.css">
</head>
<?php 
if (isset($_GET['logout']) && isset($_SESSION['username']) ) {
    unset($_SESSION['username']);  
    header('Location: .././index.php');         
}
?>

<?php                   
                        
                        //     $username_seson = $_SESSION['username'];
                        //     $result = $con->query("SELECT `image` FROM `lecturer` WHERE email = $username_seson"); 
                        //      if($result->num_rows > 0){ 
                        //         while($row = $result->fetch_assoc())
                        //         {
                        //           ?>
<!-- //           <img id="output_image" src="data:image/jpg;charset=utf8;base64,<?php// echo base64_encode($row['image']); ?>"/> -->
<?php
                        //         }

                        // }
                        
                  
                        ?>
                        <?php
                            $sql = "SELECT count(student_attendance.status) as total_session,count(attendance.code) as count_code,(select count(student_attendance.status) from attendance,student_attendance where 
                            student_attendance.id=attendance.attendance_id and student_attendance.status='present' AND student_id='2018slgtibit01' group by batch_no) as take_session,
                            attendance.code from student_attendance,attendance where student_attendance.id=attendance.attendance_id and student_id='2018slgtibit01'";
                            $result = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $row1 = number_format(($row['take_session'] / $row['total_session']) * 100, 2)                                
                        ?>
                    <?php
                    }
                    ?>
<?php
                            $sql = "SELECT count(*) as total from `student`;";
                            $result =mysqli_query($con,$sql);
                            $row = mysqli_fetch_assoc($result);                                   
                        ?>
                        
   


<body>

    <main class='page-content pt-1'>

        <?php include_once('nav.php');
        ?>

        <div id='overlay' class='overlay'></div>
        <div class='container-fluid p-1'>
            <!-- #1 Insert Your Content-->
            <main class="page-content pt-2">
                <div id="overlay" class="overlay"></div>
                <div class="container-fluid p-3">
                    <!-- #1 Insert Your Content-->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">Dashboard - Students</h1>
                            </div>
                            <!-- Content Row -->
                            <div class="row">
                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-2">
                                                        Total
                                                        students (SLGTI)</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        <?php echo $row['total']; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-success text-uppercase mb-2">
                                                        Total
                                                        students (ICT)</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-3 col-md-6 mb-4" href="#">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-2">
                                                        Attendance</div>
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col-auto">
                                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                            <?php echo $row1 . "%"?></div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="progress progress-sm mr-2">
                                                                <div class="progress-bar bg-info" role="progressbar"
                                                                    style="width: 20%" aria-valuenow="50"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                    $sql = "SELECT student_attendance.student_id,student.name_with_initials,COUNT(status) as Total,
                                    SUM(`status` = 'present') as Take ,attendance.code
                                    FROM student_enroll INNER JOIN student ON student_enroll.id=student.id INNER JOIN 
                                    student_attendance ON student_enroll.id=student_attendance.student_id INNER JOIN attendance on
                                    attendance.attendance_id=student_attendance.id where student_attendance.student_id='2018slgtibit02' GROUP BY student_enroll.id";

                                    $result = mysqli_query($con, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $module = $row['code'];
                                            $status = number_format(($row['Take'] / $row['Total']) * 100, 2);        
                                            
                                                
                                            
                                            //     echo "<div class='alert alert-success' role='alert'>
                                            //     Your attetance is Correct
                                            //     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            //         <span aria-hidden='true'>&times;</span>
                                            //         </button>
                                            // </div>";
                                            
                                        }
                                    }
                                    ?>

                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-warning text-uppercase mb-2">
                                                        Your attetance</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php if ($status < 80.00) {
                                                         echo "<h5>low in Module : <lable style='color: red;'> $module </lable> </h5>"; 
                                                        } else { echo "Your attetance is :<lable style='color: green;'> Good </lable>"; 
                                                        }

                                                    ?>
                                            </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Content Row -->

                            <div class="row">
                                <!-- Area Chart -->
                                <div class="col-xl-6 col-lg-7">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div
                                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">TVEC Exam Pass / Fail
                                                Rating(Year)</h6>
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                    aria-labelledby="dropdownMenuLink">
                                                    <div class="dropdown-header">Dropdown Header:</div>
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-3"></div>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="chart-area">
                                                <canvas id="myAreaChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!---->
                                <div class="col-xl-6 col-lg-4">
                                    <div class="card shadow">
                                        <div
                                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">My Profile</h6>
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                    aria-labelledby="dropdownMenuLink">
                                                    <div class="dropdown-header">Dropdown Header:</div>
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-3"></div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-lg-8 col-md-6">
                                                    <h3 class="mb-0 text-truncated" style="text-transform: capitalize;">
                                                        <?php echo $_SESSION['username']; ?> </h3>
                                                    <p class="lead">Student @SLGTI</p>
                                                    <p>
                                                        I love to read, hang out with friends, watch football,
                                                        listen to
                                                        music, and learn new things.
                                                    </p>
                                                    <p class="lead">2018 - 2020</p>
                                                    <p> <span class="badge badge-info tags">Semister 01</span>
                                                        <span class="badge badge-info tags">Semister 02</span>
                                                    </p>
                                                </div>
                                                <div class="col-12 col-lg-4 col-md-3 text-center">
                                                    <img src="https://image.freepik.com/free-vector/profile-icon-male-avatar-hipster-man-wear-headphones_48369-8728.jpg"
                                                        alt="" class="profile">
                                                </div>
                                                <div class="col-12 col-lg-3">
                                                    <h3 class="mb-0">Subjects</h3>
                                                    <small>View Subjects</small>
                                                    <a style="text-decoration: none;" href="attendance_all.php"><button
                                                            class="btn btn-block btn-outline-success"><span
                                                                class="fa fa-plus-circle"
                                                                href="students/attendance_all.php">&nbsp;</span>Subject</button></a>
                                                </div>

                                                <div class="col-12 col-lg-3">
                                                    <h3 class="mb-0">Attendance</h3>
                                                    <small>View Your Attendance</small>
                                                    <a style="text-decoration: none;" href="attendance_all.php"><button
                                                            type="button"
                                                            class="btn btn-outline-primary btn-block"><span
                                                                class="fas fa-check-circle">&nbsp;</span>Attendance</button></a>
                                                </div>

                                                <div class="col-12 col-lg-3">
                                                    <h3 class="mb-0">Marks</h3>
                                                    <small>Marks (All subjects)</small>
                                                    <a style="text-decoration: none;" href="exams_report.php"><button
                                                            class="btn btn-outline-info btn-block"><span
                                                                class="fa fa-user">&nbsp;</span>Marks</button></a>
                                                </div>
                                                <div class="col-12 col-lg-3">
                                                    <h3 class="mb-0">Setting</h3>
                                                    <small>Profile setting</small>
                                                    <a style="text-decoration: none;" href="attendance_all.php"><button
                                                            type="button"
                                                            class="btn btn-outline-primary btn-block"><span
                                                                class="fa fa-gear">&nbsp;</span>Profile
                                                            Setting</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>






                                <div class="row">

                            </div>

                            <div class="col-lg-12 mb-4">

                                <!-- Illustrations -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">About</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                        </div>
                                        <p>Exam & Result Management System (ERMS) is an easy online application that
                                            automates and digitizes a lot of processes which involve student result
                                            processing. These processes range from students’ registration,
                                            examination, papers marking, approval of results, producing of students
                                            result reports, summary and charts, result notification and publishing,
                                            transcript processing as well as customized result analysis to produce a
                                            performance analysis of courses, students, lecturers, departments or
                                            even faculties. <br><br><br>
                                            Real-time updates and
                                            information exchange. Student performance analysis within a few clicks.
                                            Dynamic teachers, parents & students collaboration through mobile apps
                                            and respective portals</P>
                                        <a target="_blank" rel="nofollow" href="http://slgti.com/">Browse Other
                                            Details on slgti.com &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                    <!-- /.container-fluid -->
                </div>
                <!-- End of Main Content -->
                                                    </div>
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Srilanka German Trannig Insitutue 2020</span>
                        </div>
                    </div>
                </footer><!-- End of Footer -->
        </div>
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current
                        session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!-- #1 Insert Your Content" -->
    </main>
    </div>
    </div>
    </main>
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"> -->
    </script>
    <?php include_once("..\script.php");
         
    ?>
</body>

</html>
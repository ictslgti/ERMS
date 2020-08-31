<?php
$title = 'Dashboard';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php include_once('.././head.php');
          include_once('dashboard/dash-cdn.php');    
    //    include_once('../config.php');
    //    include_once('../config.php');
    ?>
    <link rel="stylesheet" href="dashboard/css/prograss-bar-main.css">
</head>

<body>
    <main class='page-content pt-2'>
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
                                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
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
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">837</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-success text-uppercase mb-2">
                                                        Total
                                                        students (ICT)</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">175</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
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
                                                                75%</div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="progress progress-sm mr-2">
                                                                <div class="progress-bar bg-info" role="progressbar"
                                                                    style="width: 75%" aria-valuenow="50"
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

                                <!-- Pending Requests Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-warning text-uppercase mb-2">
                                                        Pending Exams (ICT)</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
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

                                <!-- Progress Bar 3 -->
                                <div class="col-xl-3 col-lg-4">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div
                                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">TVEC Exam Pass / Fail
                                                Rating(by Department)</h6>
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                    aria-labelledby="dropdownMenuLink">
                                                    <div class="nav-link disabled">Departments:</div>
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel1001"
                                                        role="tab">Ict</a>
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel1002"
                                                        role="tab">Construction</a>
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel1003"
                                                        role="tab">Auto mobile</a>
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel1004"
                                                        role="tab">Electronic</a>
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel1005"
                                                        role="tab">Mechanical</a>
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#panel1006"
                                                        role="tab">Foot</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <!-- Card content -->
                                            <h4 class="card-title font-weight-bold mb-2">Exam</h4>
                                            <!-- <p class="card-text mb-4">NYSE: AZHC • Oct 16, 1:45PM</p> -->
                                            <div class="d-flex justify-content-between">
                                                <p class="display-4 align-self-end mb-0">887.32</p>
                                                <!-- <p class="align-self-end pb-2">887.02 (.03%)</p> -->
                                            </div>
                                        </div>
                                        <!-- Classic tabs -->
                                        <div class="classic-tabs">
                                            <div class="tab-content rounded-bottom">
                                                <div class="tab-pane fade in show active" id="panel1001"
                                                    role="tabpanel">
                                                    <canvas id="lineChart-ict" height="250px"></canvas>
                                                </div>
                                                <div class="tab-pane fade" id="panel1002" role="tabpanel">

                                                    <ul class="list-group list-group-flush">
                                                        <strong>
                                                            <li class="list-group-item text-primary">Semistor #01 <spam
                                                                    class="float-right text-info">25</spam>
                                                            </li>
                                                        </strong>
                                                        <strong>
                                                            <li class="list-group-item text-primary">Semistor #02 <spam
                                                                    class="float-right text-info">15</spam>
                                                            </li>
                                                        </strong>
                                                        <strong>
                                                            <li class="list-group-item text-primary">Semistor #03 <spam
                                                                    class="float-right text-info">30</spam>
                                                            </li>
                                                        </strong>
                                                    </ul>

                                                </div>
                                                <div class="tab-pane fade" id="panel1003" role="tabpanel">

                                                    <ul class="list-group list-group-flush">
                                                        <strong>
                                                            <li class="list-group-item text-primary">Semistor #01 <spam
                                                                    class="float-right text-info">25</spam>
                                                            </li>
                                                        </strong>
                                                        <strong>
                                                            <li class="list-group-item text-primary">Semistor #02 <spam
                                                                    class="float-right text-info">15</spam>
                                                            </li>
                                                        </strong>
                                                        <strong>
                                                            <li class="list-group-item text-primary">Semistor #03 <spam
                                                                    class="float-right text-info">30</spam>
                                                            </li>
                                                        </strong>
                                                    </ul>

                                                </div>
                                                <div class="tab-pane fade" id="panel1004" role="tabpanel">

                                                    <ul class="list-group list-group-flush">
                                                        <strong>
                                                            <li class="list-group-item text-primary">Semistor #01 <spam
                                                                    class="float-right text-info">25</spam>
                                                            </li>
                                                        </strong>
                                                        <strong>
                                                            <li class="list-group-item text-primary">Semistor #02 <spam
                                                                    class="float-right text-info">15</spam>
                                                            </li>
                                                        </strong>
                                                        <strong>
                                                            <li class="list-group-item text-primary">Semistor #03 <spam
                                                                    class="float-right text-info">30</spam>
                                                            </li>
                                                        </strong>
                                                    </ul>

                                                </div>
                                                <div class="tab-pane fade" id="panel1005" role="tabpanel">
                                                    <ul class="list-group list-group-flush">

                                                        <strong>
                                                            <li class="list-group-item text-primary">Semistor #01 <spam
                                                                    class="float-right text-info">25</spam>
                                                            </li>
                                                        </strong>
                                                        <strong>
                                                            <li class="list-group-item text-primary">Semistor #02 <spam
                                                                    class="float-right text-info">15</spam>
                                                            </li>
                                                        </strong>
                                                        <strong>
                                                            <li class="list-group-item text-primary">Semistor #03 <spam
                                                                    class="float-right text-info">30</spam>
                                                            </li>
                                                        </strong>
                                                    </ul>

                                                </div>
                                                <div class="tab-pane fade" id="panel1006" role="tabpanel">

                                                    <ul class="list-group list-group-flush">
                                                        <strong>
                                                            <li class="list-group-item text-primary">Semistor #01 <spam
                                                                    class="float-right text-info">25</spam>
                                                            </li>
                                                        </strong>
                                                        <strong>
                                                            <li class="list-group-item text-primary">Semistor #02 <spam
                                                                    class="float-right text-info">15</spam>
                                                            </li>
                                                        </strong>
                                                        <strong>
                                                            <li class="list-group-item text-primary">Semistor #03 <spam
                                                                    class="float-right text-info">30</spam>
                                                            </li>
                                                        </strong>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Progress Bar 3 -->
                                <div class="col-xl-3 col-lg-4">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div
                                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Cource Duriation</h6>
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                    aria-labelledby="dropdownMenuLink">
                                                    <div class="nav-link disabled">Departments:</div>
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#1001"
                                                        role="tab">Ict</a>
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#1002"
                                                        role="tab">Construction</a>
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#1003"
                                                        role="tab">Auto mobile</a>
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#1004"
                                                        role="tab">Electronic</a>
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#1005"
                                                        role="tab">Mechanical</a>
                                                    <a class="nav-link waves-light" data-toggle="tab" href="#1006"
                                                        role="tab">Foot</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <!-- Content Column -->
                                            <!-- Project Card Example -->
                                            <div class="classic-tabs">
                                                <div class="tab-content rounded-bottom">
                                                    <div class="tab-pane fade in show active" id="1001" role="tabpanel">
                                                        <div class="skill-name small font-weight-bold">Payout
                                                            Details<span class="float-right">20%</span></div>
                                                        <div class="skill-bar progress-bar">
                                                            <div class="skill-per" per="20"></div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade in show active" id="1002" role="tabpanel">
                                                        <div class="skill-name small font-weight-bold">Payout
                                                            Details<span class="float-right">90%</span></div>
                                                        <div class="skill-bar progress-bar">
                                                            <div class="skill-per" per="90"></div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade in show active" id="1003" role="tabpanel">
                                                        <div class="skill-name small font-weight-bold">Payout
                                                            Details<span class="float-right">50%</span></div>
                                                        <div class="skill-bar progress-bar">
                                                            <div class="skill-per" per="50"></div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade in show active" id="1004" role="tabpanel">
                                                        <div class="skill-name small font-weight-bold">Payout
                                                            Details<span class="float-right">60%</span></div>
                                                        <div class="skill-bar progress-bar">
                                                            <div class="skill-per" per="60"></div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade in show active" id="1005" role="tabpanel">
                                                        <div class="skill-name small font-weight-bold">Payout
                                                            Details<span class="float-right">95%</span></div>
                                                        <div class="skill-bar progress-bar">
                                                            <div class="skill-per" per="95"></div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade in show active" id="1006" role="tabpanel">
                                                        <div class="skill-name small font-weight-bold">Payout
                                                            Details<span class="float-right">25%</span></div>
                                                        <div class="skill-bar progress-bar">
                                                            <div class="skill-per" per="25"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                            $('.skill-per').each(function() {
                                                var $this = $(this);
                                                var per = $this.attr('per');
                                                $this.css("width", per + '%');
                                                $({
                                                    animatedValue: 0
                                                }).animate({
                                                    animatedValue: per
                                                }, {
                                                    duration: 1000,
                                                    step: function() {
                                                        $this.attr('per', Math.floor(this
                                                            .animatedValue) + '%');
                                                    },
                                                    complete: function() {
                                                        $this.attr('per', Math.floor(this
                                                            .animatedValue) + '%');
                                                    }
                                                });
                                            });
                                            </script>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Content Row -->
                            <div class="row">

                                <!-- Content Column -->
                                <div class="col-lg-6 mb-4">

                                    <!-- Project Card Example -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="small font-weight-bold">Server Migration <span
                                                    class="float-right">29%</span></h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar bg-danger " role="progressbar"
                                                    style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <h4 class="small font-weight-bold">Sales Tracking <span
                                                    class="float-right">40%</span></h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar skill-per bg-warning" role="progressbar"
                                                    style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <h4 class="small font-weight-bold">Customer Database <span
                                                    class="float-right">60%</span></h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar" role="progressbar" style="width: 60%"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>



                                </div>

                                <div class="col-lg-6 mb-4">

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
                                                even faculties. <br>

                                                Allows students, faculty, and all non-academic staff to manage tasks
                                                with the flexibility of time and place. Real-time updates and
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js">
    </script>
    <?php include_once("..\script.php");
         
    ?>
</body>

</html>
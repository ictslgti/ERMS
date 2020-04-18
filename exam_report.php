<?php
$title = 'Results Report | ';
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
            <?php include_once('exam/nav_bar.php');
            include_once('exam/exreport_nav.php');

            ?>
            <div id='overlay' class='overlay'></div>
            <div class='container-fluid p-5'>
                <!-- #1 Insert Your Content-->

                <!-- #1 Insert Your Content-->

                <!-- #1 Insert Your Content" -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="academic" role="tabpanel" aria-labelledby="academic-tab">
                        <div class="row">
                            <div class="col-md">
                                <h3 class="text-secondary">Exams Resuls Report</h3>
                            </div>
                            <div class="col-md">

                            </div>

                            <div class="col-md-auto pr-4">
                                <a class="btn btn-warning btn-group btn btn-sm " href="?view=', $row['exam_id'], '">
                                    <i class="fas fa-edit" style="font-size: 20px"></i>
                                    Edit </a>
                                <button type="button" class="btn btn-info  btn-sm ">
                                    <i class="fas fa-print" style="font-size: 20px"> </i>
                                    Print
                                </button>

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
                                    <input type="text" class="form-control search-menu" id="mySearch" onkeyup="myFunction()" placeholder="Reg No..or Name..." title="Type in a category">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- #1 Insert Your Content" -->
                        <div class="row">
                            <div class="col-md-2 col-sm">
                                <h6>Department :-</h6>
                            </div>
                            <div class="col-md-4 col-sm">
                                <h6 class="text-muted">ICT</h6>
                            </div>
                            <div class="col-md-2 col-sm">
                                <h6>Course :-</h6>
                            </div>
                            <div class="col-md-4 col-sm">
                                <h6 class="text-muted">Diploma In Networking</h6>
                            </div>
                            <div class="col-md-2 col-sm">
                                <h6>Semester :-</h6>
                            </div>
                            <div class="col-md-4 col-sm">
                                <h6 class="text-muted"> 1<sup>st</sup> Semester</h6>
                            </div>
                            <div class="col-md-2 col-sm">
                                <h6>Betch :-</h6>
                            </div>
                            <div class="col-md-4 col-sm">
                                <h6 class="text-muted">Betch -4 <span class=' badge badge-success'>2018/2025</span></h6>
                            </div>
                        </div>
                        <br>
                        <!-- #1 Insert Your Content" -->

                        <!-- #1 Insert Your Content" -->
                        <form method='POST' action=''>
                            <div class="row">
                                <div class="form-group col-md-12 table-responsive">
                                    <table class='table align-middle'>
                                        <thead class='table-active text-dark'>
                                            <tr>
                                                <th scope='col'>NO</th>
                                                <th scope='col'>Reg NO</th>
                                                <th scope='col'>Name</th>
                                                <th scope='col'>Result %</th>
                                                <th scope='col'>Emp mo-1 <span class=' badge badge-light'>T</span></th>
                                                <th scope='col'>Emp mo-2 <span class=' badge badge-light'>T</span></th>
                                                <th scope='col'>mo-5 <span class=' badge badge-light'>T</span></th>
                                                <th scope='col'>mo-5 <span class=' badge badge-light'>P</span></th>
                                                <th scope='col'>mo-7 <span class=' badge badge-light'>P</span></th>
                                                <th scope='col'>mo-8 <span class=' badge badge-light'>P</span></th>
                                                <th scope='col'>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope='row'>1</th>
                                                <td>2018ICTBIT14</td>
                                                <td>M S Eashath</td>
                                                <td>
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                                                </td>
                                                <td>pass<span class=' badge badge-success'>1st</span> </td>
                                                <td>pass<span class=' badge badge-success'>1st</span> </td>
                                                <td>pass<span class=' badge badge-success'>1st</span> </td>
                                                <td>pass<span class=' badge badge-success'>1st</span> </td>
                                                <td>Fail<span class=' badge badge-danger'>1st</span> </td>
                                                <td>Fail<span class=' badge badge-danger'>1st</span> </td>
                                                <td><a class="btn btn-info btn-group btn btn-sm " href=" ?view=', $row[' exam_id'], '"> View </a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="tvec" role="tabpanel" aria-labelledby="tvec-tab">
                        <div class="row">
                            <div class="col-md">
                                <h3 class="text-secondary">TVEC Resuls Report</h3>
                            </div>
                            <div class="col-md">

                            </div>

                            <div class="col-md-auto pr-4">
                                <a class="btn btn-warning btn-group btn btn-sm " href="?view=', $row['exam_id'], '">
                                    <i class="fas fa-edit" style="font-size: 20px"></i>
                                    Edit </a>
                                <button type="button" class="btn btn-info  btn-sm ">
                                    <i class="fas fa-print" style="font-size: 20px"> </i>
                                    Print
                                </button>

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
                                    <input type="text" class="form-control search-menu" id="mySearch" onkeyup="myFunction()" placeholder="Reg No..or Name..." title="Type in a category">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- #1 Insert Your Content" -->
                        <div class="row">
                            <div class="col-md-2 col-sm">
                                <h6>Department :-</h6>
                            </div>
                            <div class="col-md-4 col-sm">
                                <h6 class="text-muted">ICT</h6>
                            </div>
                            <div class="col-md-2 col-sm">
                                <h6>Course :-</h6>
                            </div>
                            <div class="col-md-4 col-sm">
                                <h6 class="text-muted">Diploma In Networking</h6>
                            </div>
                            <div class="col-md-2 col-sm">
                                <h6>Semester :-</h6>
                            </div>
                            <div class="col-md-4 col-sm">
                                <h6 class="text-muted"> 1<sup>st</sup> Semester</h6>
                            </div>
                            <div class="col-md-2 col-sm">
                                <h6>Betch :-</h6>
                            </div>
                            <div class="col-md-4 col-sm">
                                <h6 class="text-muted">Betch -4 <span class=' badge badge-success'>2018/2025</span></h6>
                            </div>
                        </div>
                        <br>
                        <!-- #1 Insert Your Content" -->

                        <!-- #1 Insert Your Content" -->
                        <form method='POST' action=''>
                            <div class="row">
                                <div class="form-group col-md-12 table-responsive">
                                    <table class='table align-middle'>
                                        <thead class='table-active text-dark'>
                                            <tr>
                                                <th scope='col'>NO</th>
                                                <th scope='col'>Module</th>
                                                <th scope='col'>Betch</th>
                                                <th scope='col'>No of Students</th>
                                                <th scope='col'>Pass rate</th>
                                                <th scope='col'>Date </th>
                                                <th scope='col'>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope='row'>1</th>
                                                <td>Web Programming <span class=' badge badge-success'>P</span> </td>
                                                <td>Betch -4<span class=' badge badge-success'>2018/2025</span></td>
                                                <td>15 </td>
                                                <td>
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100%</div>
                                                </td>
                                                <td>2020/jully/03 </td>

                                                <td><a class="btn btn-info btn-group btn btn-sm " href=" ?view=', $row[' exam_id'], '"> View </a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="institute" role="tabpanel" aria-labelledby="institute-tab">
                        <div class="row">
                            <div class="col-md">
                                <h3 class="text-secondary">INSTITUTE Resuls Report</h3>
                            </div>
                            <div class="col-md">

                            </div>

                            <div class="col-md-auto pr-4">
                                <a class="btn btn-warning btn-group btn btn-sm " href="?view=', $row['exam_id'], '">
                                    <i class="fas fa-edit" style="font-size: 20px"></i>
                                    Edit </a>
                                <button type="button" class="btn btn-info  btn-sm ">
                                    <i class="fas fa-print" style="font-size: 20px"> </i>
                                    Print
                                </button>

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
                                    <input type="text" class="form-control search-menu" id="mySearch" onkeyup="myFunction()" placeholder="Reg No..or Name..." title="Type in a category">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- #1 Insert Your Content" -->
                        <div class="row">
                            <div class="col-md-2 col-sm">
                                <h6>Department :-</h6>
                            </div>
                            <div class="col-md-4 col-sm">
                                <h6 class="text-muted">ICT</h6>
                            </div>
                            <div class="col-md-2 col-sm">
                                <h6>Course :-</h6>
                            </div>
                            <div class="col-md-4 col-sm">
                                <h6 class="text-muted">Diploma In Networking</h6>
                            </div>
                            <div class="col-md-2 col-sm">
                                <h6>Semester :-</h6>
                            </div>
                            <div class="col-md-4 col-sm">
                                <h6 class="text-muted"> 1<sup>st</sup> Semester</h6>
                            </div>
                            <div class="col-md-2 col-sm">
                                <h6>Betch :-</h6>
                            </div>
                            <div class="col-md-4 col-sm">
                                <h6 class="text-muted">Betch -4 <span class=' badge badge-success'>2018/2025</span></h6>
                            </div>
                        </div>
                        <br>
                        <!-- #1 Insert Your Content" -->

                        <!-- #1 Insert Your Content" -->
                        <form method='POST' action=''>
                            <div class="row">
                                <div class="form-group col-md-12 table-responsive">
                                    <table class='table align-middle'>
                                        <thead class='table-active text-dark'>
                                            <tr>
                                                <th scope='col'>NO</th>
                                                <th scope='col'>Module</th>
                                                <th scope='col'>Betch</th>
                                                <th scope='col'>No of Students</th>
                                                <th scope='col'>Pass rate</th>
                                                <th scope='col'>Date </th>
                                                <th scope='col'>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope='row'>1</th>
                                                <td>Web Programming <span class=' badge badge-success'>P</span> </td>
                                                <td>Betch -4<span class=' badge badge-success'>2018/2025</span></td>
                                                <td>15 </td>
                                                <td>
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100%</div>
                                                </td>
                                                <td>2020/jully/03 </td>

                                                <td><a class="btn btn-info btn-group btn btn-sm " href=" ?view=', $row[' exam_id'], '"> View </a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="student" role="tabpanel" aria-labelledby="student-tab">
                        <div class="row">
                            <div class="col-md">
                                <h3 class="text-secondary">Exams Resuls Report</h3>
                            </div>
                            <div class="col-md">

                            </div>

                            <div class="col-md-auto pr-4">
                                <a class="btn btn-warning btn-group btn btn-sm " href="?view=', $row['exam_id'], '">
                                    <i class="fas fa-edit" style="font-size: 20px"></i>
                                    Edit </a>
                                <button type="button" class="btn btn-info  btn-sm ">
                                    <i class="fas fa-print" style="font-size: 20px"> </i>
                                    Print
                                </button>

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
                                    <input type="text" class="form-control search-menu" id="mySearch" onkeyup="myFunction()" placeholder="Reg No..or Name..." title="Type in a category">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- #1 Insert Your Content" -->
                        <div class="row">
                            <div class="col-md col-sm">
                                <h6>Name :-</h6>
                            </div>
                            <div class="col-md col-sm">
                                <h6 class="text-muted">M S Eashath</h6>
                            </div>

                            <div class="col-md col-sm">
                                <h6>Reg No</h6>
                            </div>
                            <div class="col-md col-sm">
                                <h6 class="text-muted">2018/ICT/BIT/14</h6>
                            </div>

                            <div class="col-md col-sm">
                                <h6>N I C </h6>
                            </div>
                            <div class="col-md col-sm">
                                <h6 class="text-muted">*********v</h6>
                            </div>

                            <div class="col-md col-sm">
                                <h6>Date Of Birth</h6>
                            </div>
                            <div class="col-md col-sm">
                                <h6 class="text-muted">00/00/0000</h6>
                            </div>



                        </div>
                        <!-- #1 Insert Your Content" -->
                        <div class="row">
                            <div class="col-md  col-sm">
                                <h6>Department</h6>
                            </div>
                            <div class="col-md col-sm">
                                <h6 class="text-muted">ICT</h6>
                            </div>

                            <div class="col-md col-sm">
                                <h6>Course</h6>
                            </div>
                            <div class="col-md col-sm">
                                <h6 class="text-muted">NVQ Level-05</h6>
                            </div>

                            <div class="col-md col-sm">
                                <h6>Academic Year</h6>
                            </div>
                            <div class="col-md col-sm">
                                <h6 class="text-muted">2018/2025</h6>
                            </div>

                            <div class="col-md col-sm">
                                <h6>Semester.</h6>
                            </div>
                            <div class="col-md col-sm">
                                <h6 class="text-muted">1 St Semester</h6>
                            </div>

                        </div>
                        <!-- #1 Insert Your Content" -->
                        <form method='POST' action=''>
                            <div class="row">
                                <div class="form-group col-md-12 table-responsive">
                                    <table class='table align-middle'>
                                        <thead class='table-active text-dark'>
                                            <tr>
                                                <th scope='col'>NO</th>
                                                <th scope='col'>INDEX NO</th>
                                                <th scope='col'>MODULE</th>
                                                <th scope='col'>ATTEMPT </th>
                                                <th scope='col'>MARKS</th>
                                                <th scope='col'>STATUS</th>
                                                <th scope='col'>ACTION</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope='row'>1</th>
                                                <td>2018ICTBIT14</td>
                                                <td>MO8 <span class=' badge badge-success'>P</span></td>
                                                <td>1 St</td>
                                                <td>68</td>
                                                <td><span class=' badge badge-success'>PASS</span> </td>
                                                <td><a class="btn btn-info btn-group btn btn-sm " href=" ?view=', $row[' exam_id'], '"> View </a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- #1 Insert Your Content" -->
                <!-- #1 Insert Your Content" -->
                <!-- #1 Insert Your Content" -->
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php");
    ?>
</body>

</html>
<?php
$title = 'Results Report | Online Examination Result Management System | SLGTI';
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
                <div class="row">
                    <div class="col-md">
                        <h3 class="text-secondary">Exams Resuls Report</h3>
                    </div>
                    <div class="col-md">

                    </div>

                    <div class="col-md-auto pr-4">
                        <a class="btn btn-warning btn-group btn btn-sm " href="?view=', $row['exam_id'], '">
                            <svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z" clip-rule="evenodd" />
                            </svg>
                            Edit </a>
                        <button type="button" class="btn btn-info btn-group btn btn-sm ">
                            <svg class="bi bi-download" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M.5 8a.5.5 0 01.5.5V12a1 1 0 001 1h12a1 1 0 001-1V8.5a.5.5 0 011 0V12a2 2 0 01-2 2H2a2 2 0 01-2-2V8.5A.5.5 0 01.5 8z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M5 7.5a.5.5 0 01.707 0L8 9.793 10.293 7.5a.5.5 0 11.707.707l-2.646 2.647a.5.5 0 01-.708 0L5 8.207A.5.5 0 015 7.5z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M8 1a.5.5 0 01.5.5v8a.5.5 0 01-1 0v-8A.5.5 0 018 1z" clip-rule="evenodd" />
                            </svg>
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
                            <input type="text" class="form-control-sm search-menu" id="mySearch" onkeyup="myFunction()" placeholder="Reg No..or Name..." title="Type in a category">
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
                    <div class="col-md-2 col-sm-4">
                        <h6>Full Name :-</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">Mohamed Sakkoor Eashath</h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Reg No</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">2018/ICT/BIT/14</h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>N I C </h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">*********v</h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Date Of Birth</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">00/00/0000</h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Mobile No.</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">0702090100</h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Address</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">No-04,Nilaveli,Trincomalee.</h6>
                    </div>
                </div>
                <!-- #1 Insert Your Content" -->
                <div class="row">
                    <div class="col-md-2 col-sm-4">
                        <h6>Department</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">Information and communication technology</h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Course</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">NVQ Level-05</h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Academic Year</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">2018/2025</h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>E-mail</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">Seashath@icloud.com</h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Semester.</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">1 St Semester</h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Module</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">Database II</h6>
                    </div>
                </div>
                <!-- #1 Insert Your Content" -->
                <form method='POST' action=''>
                    <div class="row">
                        <div class="form-group col-md-12 table-responsive">
                            <table class='table align-middle'>
                                <thead class='bg-primary text-light'>
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
                                        <td>MO8<span class=' badge badge-success'>P</span></td>
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
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php");
    ?>
</body>

</html>
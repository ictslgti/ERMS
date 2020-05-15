<?php
$title = ' ERMS | SLGTI(page Title)';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php include_once('.././head.php');
    //include_once('../config.php');
    ?>
</head>

<body>
    <main class='page-content pt-2'>
        <?php include_once('nav.php');
        ?>
        <div id='overlay' class='overlay'></div>
        <div class='container-fluid p-5'>
            <!-- #1 Insert Your Content-->
            
            <div class="container">

                <!-- 1st row start -->
                <div class="row">
                     <div class="col-sm">
                        <div class="border border-primary rounded text-center">
                            <h2>Student's Attendence | SLGTI</h2>
                        </div>
                    </div>
                </div>
                    <br>
                <!-- 1st row end -->

                <form method="POST" action="">
                    <div class="row">
                        <div class='col-7'>
                            <div class='form-group col-md'>
                                <ul class='nav nav-tabs'>
                                    <li class='nav-item'>
                                        <a class='nav-link active' href='./attendence_all.php'>ALL Courses</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='./attendence.php'>Selected Course</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
                
                <div class="row">
                    <div class="form-group col-md-12 table-responsive">
                    <table class="table align-middle">
                        <thead class='thead-light'>
                            <tr>
                                <th scope='col'>Course</th>
                                <th scope='col'>Points over taken session</th>
                                <th scope='col'>Percentage over taken session</th>
                            </tr>
                            <tr>
                                <td scope='col'>Basic Computer Application</td>
                                <td scope='col'>00/00</td>
                                <td scope='col'>00%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Fundamentals of Software Programming </td>
                                <td scope='col'>00/00</td>
                                <td scope='col'>00%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Communication Skill </td>
                                <td scope='col'>00/00</td>
                                <td scope='col'>00%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Fundamentals of Graphic Design </td>
                                <td scope='col'>00/00</td>
                                <td scope='col'>00%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Fundamentals of Networking</td>
                                <td scope='col'>00/00</td>
                                <td scope='col'>00%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Introduction to Database Systems</td>
                                <td scope='col'>00/00</td>
                                <td scope='col'>00%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Static Web Page Designing</td>
                                <td scope='col'>00/00</td>
                                <td scope='col'>00%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Database Systems I</td>
                                <td scope='col'>00/00</td>
                                <td scope='col'>00%</td>
                            </tr>
                            <tr>
                                <td scope='col'>System Analysis and Design </td>
                                <td scope='col'>00/00</td>
                                <td scope='col'>00%</td>
                            </tr>
                            <tr>
                                <td scope='col'>BAC</td>
                                <td scope='col'>00/00</td>
                                <td scope='col'>00%</td>
                            </tr>
                            <tr>
                                <td>Average attendance</td>
                                <td></td>
                                <td>00%</td>
                            </tr>
                        </thead>
                    <tbody>
                     
                    </tbody>
                </table>
                    </div>
                </div>
            
            <!-- #1 Insert Your Content" -->
        </div>
    </main>

    <?php include_once("../script.php");
    ?>
</body>

</html>
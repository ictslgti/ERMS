<?php
$title = "Attendence | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <nav id="sidebar" class="sidebar-wrapper">
            <?php include_once("nav.php"); ?>
        </nav>
        <main class="page-content pt-2">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5">
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
                <a class='nav-link active' href='./attendence.php'>This Cource</a>
                </li>
                <li class='nav-item'>
                <a class='nav-link' href='./attendence_all.php'>All course</a>
                </li>
                </ul>
                </div>
                </div>
                </div>
                </form>
                
                <div class="row">
                    <div class="form-group col-md-12 table-responsive">
                    <table class='table align-middle '>
                    <thead class='thead-dark'>
                        <tr>
                            <th scope='col'>DATE</th>
                            <th scope='col'>TIME</th>
                            <th scope='col'>STATUS</th>
                        </tr>
                        <tr>
                            <td scope='col'>2020/04/07</td>
                            <td scope='col'>10:27 am</td>
                            <td scope='col'>1</td>
                        </tr>
                        <tr>
                            <td scope='col'>2020/04/06</td>
                            <td scope='col'>10:30 am</td>
                            <td scope='col'>0</td>
                        </tr>
                        <table>
                        <tr>
                            <p>Average attendance</p>
                        </tr>
                    </table>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                    </div>
                </div>


                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>

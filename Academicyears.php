<?php
$title = "Academicyear | Online Examination Result Management System | SLGTI";
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
<!-- 111 -->
                    <div class="row">
                    <div class="col-md-11 col-sm-11 col-xs-11">
                     <div class="text-primary">
                     <h1>Academicyears</h1>
                     </div>
                    </div>

                    <div class="col-md-1 col-sm-1 col-xs-1">
                    <button type=submit onClick="location.href='Academicyear.php'" class="btn btn-outline-primary">New </button>
                    </div>
                    </div>
                    <!-- 1111111 -->
                    <hr>
                    <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8"></div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Any one search" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button" id="button-addon2"><img src="https://img.icons8.com/officel/20/000000/search.png"/></button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- 1111111 -->







                <div class="row">
                    <div class="form-group col-md-12">
                    <div class="table-responsive">
                    <table class='table align-middle'>
                        <thead class='bg-primary text-light'>
                            <tr>
                                <th scope='col'>Year</th>
                                <th scope='col'>Status</th>
                                <th scope='col'>semi 1 start</th>
                                <th scope='col'>semi 1 end</th>
                                <th scope='col'>semi 2 start</th>
                                <th scope='col'>semi 2 end</th>
                                <th scope='col'>Options</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-danger">
                                <th scope='row'>2017/2018</th>
                                <td>Completed</td>
                                <td>2017.02.25</td>
                                <td>2017.08.25</td>
                                <td>2017.09.30</td>
                                <td>2020.03.30</td>
                                <td>
                                
                                
                                </td>

                            </tr>
                            
                            <tr class="table-danger">
                                <th scope='row'>2017/2018</th>
                                <td>Completed</td>
                                <td>2017.02.25</td>
                                <td>2017.08.25</td>
                                <td>2017.09.30</td>
                                <td>2020.03.30</td>
                                <td>
                                
                                
                                </td>

                            </tr>

                            <tr class="table-danger">
                                <th scope='row'>2017/2018</th>
                                <td>Completed</td>
                                <td>2017.02.25</td>
                                <td>2017.08.25</td>
                                <td>2017.09.30</td>
                                <td>2020.03.30</td>
                                <td>
                                
                                
                                </td>

                            </tr>

                        </tbody>
                    </table>
                    </div>
                    </div>
                </div>
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>

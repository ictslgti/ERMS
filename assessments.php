<?php
$title = "assessments | Online Examination Result Management System | SLGTI";
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
                    <div class="col-md-10 col-sm-10 col-xs-10">
                     <div class="text-primary">
                     <h1>Assessments</h1>
                     </div>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-2">
                    <input type=submit onClick="location.href='assessment.php'" value='New Assessment'class="btn btn-outline-primary">
                    </div>
                    </div>
                    <!-- 1111111 -->

<hr>


                <div class="row">
                    <div class="form-group col-md-12">
                    <div class="table-responsive">
                    <table class='table align-middle'>
                        <thead class='bg-primary text-light'>
                            <tr>
                                <th scope='col'>ID</th>
                                <th scope='col'>Name</th>
                                <th scope='col'>Course</th>
                                <th scope='col'>Module</th>
                                <th scope='col'>Acemadic year</th>
                                <th scope='col'>Attempt</th>
                                <th scope='col'>Date</th>
                                <th scope='col'>Options</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope='row'>1</th>
                                <td>Assessment 01</td>
                                <td>5IT</td>
                                <td>Web Programming</td>
                                <td>2019/2020</td>
                                <td>1</td>
                                <td>2020.03.25</td>
                                <td>
                                <button type='submit' name='add' class="btn btn-outline-success">Add result</button>
                                <button type='submit' name='view' class="btn btn-outline-danger">Delete </button>
                                
                                </td>

                            </tr>
                            
                            <tr>
                                <th scope='row'>2</th>
                                <td>Assessment 02</td>
                                <td>5IT</td>
                                <td>Web Programming</td>
                                <td>2019/2020</td>
                                <td>1</td>
                                <td>2020.03.27</td>
                                <td>
                                <button type='submit' name='add' class="btn btn-outline-success">Add result</button>
                                <button type='submit' name='view' class="btn btn-outline-danger">Delete</button>
                                
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

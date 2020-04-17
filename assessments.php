<?php
$title = "assessments | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>

                    <style>


                    td.A {
                        text-align: right;
                    }

                    th,td {
                        text-align: center;
                    }
                    </style>
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

                <?php  
                  $title ="
                  <h4 class='text-primary'>ERMS|<span class='text-secondary'>Assessments</span></h4>";
                 include_once('exam/nav_bar.php');
            
                 ?>

                <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand"></a>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                    <a href="assessment_type.php"  class="btn btn-outline-primary my-2 my-sm-0 m-1">Add new</a>
                </form>
                </nav> 
                    
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
                                <th scope='col'>Batch</th>
                                <th scope='col'>Date</th>
                                <th scope='col'>Options</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope='row'>1</th>
                                <td>Assessment 01</td>
                                <td>5IT</td>
                                <td>Web Programming<span class="badge badge-pill badge-dark m-1">M07</span></td>
                                <td>Batch-1<span class="badge badge-pill badge-dark m-1">2019/2020</span></td>
                                
                                <td>2020.03.25</td>
                                <td class="A">
                                <button type='submit' name='add' class="btn btn-outline-success">Add result</button>
                                <button type='submit' name='view' class="btn btn-outline-danger">Delete  </button>
                                <button type='submit' name='view' class="btn btn-outline-info">Edit </button>
                                </td>

                            </tr>
                            
                            <tr>
                                <th scope='row'>2</th>
                                <td>Assessment 02</td>
                                <td>5IT</td>
                                <td>Web Programming<span class="badge badge-pill badge-dark m-1">M07</span></td>
                                <td>Batch-2<span class="badge badge-pill badge-dark m-1">2019/2020</span></td>
                                
                                <td>2020.03.27</td>
                                <td class="A">
                                <button type='submit' name='add' class="btn btn-outline-success">Add result</button>
                                <button type='submit' name='view' class="btn btn-outline-danger">Delete </button>
                                <button type='submit' name='view' class="btn btn-outline-info">Edit </button>
                                </td>

                            </tr>

                            <tr class="table-info">
                                <th scope='row'>3</th>
                                <td>Assessment 02</td>
                                <td>5IT</td>
                                <td>Software Testing<span class="badge badge-pill badge-dark m-1">M06</span></td>
                                <td>Batch-1<span class="badge badge-pill badge-dark m-1">2019/2020</span></td>
                                
                                <td>2020.04.24</td>
                                <td class="A">
                                <button type='submit' name='add' class="btn btn-outline-success">Add result</button>
                                <button type='submit' name='view' class="btn btn-outline-danger">Delete </button>
                                <button type='submit' name='view' class="btn btn-outline-info">Edit </button>
                                
                                </td>

                            </tr>

                            <tr class="table-success">
                                <th scope='row'>3</th>
                                <td>Assessment 01</td>
                                <td>5IT</td>
                                <td>Software Testing<span class="badge badge-pill badge-dark m-1">M06</span></td>
                                <td>Batch-1<span class="badge badge-pill badge-dark m-1">2019/2020</span></td>
                                
                                <td>2020.03.24</td>
                                <td class="A">
                                <button type='submit' name='add' class="btn btn-outline-success">Viewmarks</button>
                                <button type='submit' name='view' class="btn btn-outline-danger" disabled>Delete </button>
                                <button type='submit' name='view' class="btn btn-outline-info">Edit </button>
                                
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

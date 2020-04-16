<?php
$title = "departments | Online Examination Result Management System | SLGTI";
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
             
                <?php  
                  $title ="
                  <h4 class='text-primary'>ERMS|<span class='text-secondary'>Deparments</span></h4>";
                 include_once('exam/nav_bar.php');
            
                 ?>

 <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand"></a>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                    <a href="department.php"  class="btn btn-outline-success my-2 my-sm-0 m-1">Add new</a>
                </form>
                </nav>

<br>
                    <form method="POST">
                <div class="row">
                    <div class="form-group col-md-12">
                    <div class="table-responsive">
                    
                    <table class='table align-middle'>
                        <thead class='bg-primary text-light'>
                            <tr>
                                <th scope='col'>Id</th>
                                <th scope='col'>Code</th>
                                <th scope='col'>Name</th>
                                <th scope='col'>Option</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                        <tr>
                        <td>01</td>
                        <td>ICT</td>
                        <td>INFORMATION COMMUNICATION & TECHNOLOGY</td>
                        <td>
                        <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal">
                                EDIT
                                </button>
                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
                                DELETE
                                </button>
                        
                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
                               VIEW COURSES
                        </button></td>
                        </tbody>
                    </table>
                    
                    </div>
                    </div>
                </div>
                </form>
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>

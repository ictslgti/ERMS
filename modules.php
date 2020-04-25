<?php
$title = "Modules | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
    <style>
                    td.alig {
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
            <?php  
                  $title ="
                  <h4 class='text-primary'>ERMS|<span class='text-secondary'>Modules</span></h4>";
                 include_once('exam/nav_bar.php');
            
                 ?>

                <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand"></a>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><img src="https://img.icons8.com/android/24/000000/search.png"/>Search</button>
                    <a href="module.php"  class="btn btn-outline-success my-2 my-sm-0 m-1">Add new</a>
                </form>
                </nav>
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5">
             
                


                    <form method="POST">
                <div class="row">
                    <div class="form-group col-md-12">
                    <div class="table-responsive">
                    
                    <table class='table align-middle'>
                        <thead class='bg-primary text-light'>
                            <tr class="h5">
                                <th scope='col'>ID</th>
                                <th scope='col'>CODE</th>
                                <th scope='col'>NAME</th>
                                <th scope='col'>SEMESTER</th>
                                <th scope='col'>OPTION</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                        <tr>
                        <td><h6>01</h6></td>
                        <td><h6>M07</h6></td>
                        <td><h6>WEB PROGRAMMING</h6></td>
                        <td><h6>2</h6></td>

                        <td class="alig">
                        <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-warning"><img src="https://img.icons8.com/android/25/000000/edit.png"/>Edit</button>
  <button type="button" class="btn btn-danger"><img src="https://img.icons8.com/windows/26/000000/delete-forever.png"/>Delete</button>
  
</div></td>
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

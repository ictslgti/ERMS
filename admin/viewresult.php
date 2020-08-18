<?php
$title = ' Result | SLGTI(page Title)';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php include_once('../head.php');
    //include_once('../config.php');
    ?>
</head>

 <body>
 <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        
            <?php include_once("nav.php"); ?>
            <div class="container"> 
             <br>
         <form action=""> 
            <!-- <div class="card  mb-3" >
                <div class="card-header ">
                <div class="row">
                <div class="col"><h4>Course</h4></div>
                <div class="col-auto">
                <a href="course.php" class="btn btn-outline-primary">New</a>
                </div> -->

                </div>
                </div>
                
                <div class="container">
                
                <div class="card border-success mb-3" >
  <div class="card-header bg-transparent border-success">View Result</div>
  <div class="card-body text-success">
  <div class="table-responsive">
                    
                    <table class='table align-middle'>
                        <thead class='bg-primary text-light'>
                            <tr class="h5">
                                <th scope='col'>Index No</th>
                                <th scope='col'>Name</th>
                                <th scope='col'>Nic</th>
                                <th scope='col'>Assesment1<span class="badge badge-pill badge-dark m-1">T</span></th>
                                <th scope='col'>Assesment2<span class="badge badge-pill badge-dark m-1">P</span></th>
                                <th scope='col'>Total</th>
                                <th scope='col'>Percentage%</th>

                            </tr>
                            
                        </thead>
                        <tbody>
                        <tr>
                        <td><h6>2018/ICT/BIT22</h6></td>
                        <td><h6>B.Kiriya</h6></td>
                        <td><h6>966683007V</h6></td>
                        <td><h6>58</h6></td>
                        <td><h6>78</h6></td>
                        <td class="alig">
                        <h2></h2>
            
            <!-- <div class="w3-dropdown-hover">
                <a class="">...</a>
                <div class="w3-dropdown-content w3-bar-block w3-border">
                <a class="dropdown-item" href="#"><img src="https://img.icons8.com/android/18/000000/edit.png"/>  Edit</a>
                <a class="dropdown-item" href="#"><img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/>Delete</a>
                </div>
            </div> -->
</td>
</tbody>
                    </table>
    
  </div>
  
</div>


                
                </div>
                   
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>
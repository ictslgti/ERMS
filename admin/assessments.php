<?php
$title = "Assessments | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
   .test:after {
  content: '\2807';
  font-size: 18px;
  font-weight:bold;
  }
    </style>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        
            <?php include_once("nav.php"); ?>
       
        <!-- <main class="page-content pt-2"> -->
            <!-- 1st row start -->

         <div class="container"> 
             <br>
         <form action=""> 
            <div class="card  mb-3" >
                <div class="card-header ">
                <div class="row">
                <div class="col"><h4>Assessments</h4></div>
                <div class="col-auto">
                <a href="assessment.php" class="btn btn-outline-primary">New</a>
                </div>

                </div>
                </div>
                <div class="card-body ">
                <div class="row">
                    <div class="form-group col-md-12">
                    <div class="table-responsive">
                    <table class='table align-middle'>
                        <thead class='bg-primary text-light'>
                            <tr>
                                <th scope='col'>ID</th>
                                <th scope='col'>Name</th>
                                
                                <th scope='col'>Module</th>
                                <th scope='col'>Batch</th>
                                <th scope='col'>Options</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope='row'>1</th>
                                <td>Assessment 01 <img src="https://img.icons8.com/cute-clipart/30/000000/delete-sign.png"/></td>
                                
                                <td>Web Programming<span class="badge badge-pill badge-dark m-1">M07</span></td>
                                <td>Batch-1<span class="badge badge-pill badge-dark m-1">2019/2020</span></td>
                                
                                
                                <td class="alig">
                        <h2></h2>
                            
                            <div class="w3-dropdown-hover">
                                <a class=""><div class="test"></div></a>
                                <div class="w3-dropdown-content w3-bar-block w3-border">
                                <a class="dropdown-item" href="#"><img src="https://img.icons8.com/android/18/000000/edit.png"/>  Edit</a>
                                <a class="dropdown-item" href="#"><img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/>Delete</a>
                                <a class="dropdown-item" href="assessment_result.php">Add result</a>
                                </div>
                            </div>
                </td>

                            </tr>
                            
                            <tr>
                                <th scope='row'>2</th>
                                <td>Assessment 02 <img src="https://img.icons8.com/cute-clipart/30/000000/delete-sign.png"/></td>
                                
                                <td>Web Programming<span class="badge badge-pill badge-dark m-1">M07</span></td>
                                <td>Batch-2<span class="badge badge-pill badge-dark m-1">2019/2020</span></td>
                                
                               
                                <td class="alig">
                        <h2></h2>
                        
                        <div class="w3-dropdown-hover">
                            <a class=""><div class="test"></div></a>
                            <div class="w3-dropdown-content w3-bar-block w3-border">
                            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/android/18/000000/edit.png"/>  Edit</a>
                            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/>Delete</a>
                            <a class="dropdown-item" href="assessment_result.php">Add result</a>
                            </div>
                        </div>
            </td>

                            </tr>

                            <tr >
                                <th scope='row'>3</th>
                                <td>Assessment 02 <img src="https://img.icons8.com/color/30/000000/checked-2.png"/></td>
                                
                                <td>Software Testing<span class="badge badge-pill badge-dark m-1">M06</span></td>
                                <td>Batch-1<span class="badge badge-pill badge-dark m-1">2019/2020</span></td>
                                
                                
                                <td class="alig">
                              <h2></h2>
                                
                                <div class="w3-dropdown-hover">
                                    <a class=""><div class="test"></div></a>
                                    <div class="w3-dropdown-content w3-bar-block w3-border">
                                    <a class="dropdown-item" href="#"><img src="https://img.icons8.com/android/18/000000/edit.png"/>  Edit</a>
                                    <a class="dropdown-item" href="#"><img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/>Delete</a>
                                    <a class="dropdown-item" href="assessment_result.php">Add result</a>
                                    </div>
                                </div>
                                 </td>

                            </tr>

                            <tr >
                                <th scope='row'>3</th>
                                <td>Assessment 01 <img src="https://img.icons8.com/color/30/000000/checked-2.png"/></td>
                               
                                <td>Software Testing<span class="badge badge-pill badge-dark m-1">M06</span></td>
                                <td>Batch-1<span class="badge badge-pill badge-dark m-1">2019/2020</span></td>
                                
                               
                                <td class="alig">
                          <h2></h2>
            
                        <div class="w3-dropdown-hover">
                            <a class=""><div class="test"></div></a>
                            <div class="w3-dropdown-content w3-bar-block w3-border">
                            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/android/18/000000/edit.png"/>  Edit</a>
                            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/>Delete</a>
                            <a class="dropdown-item" href="assessment_result.php">Add result</a>
                            </div>
                        </div>
                        </td>

                            </tr>

                        </tbody>
                    </table>
                    </div>
                    
                    </div>
                    
                   
                </div>
                <div class="card-footer ">
                <div class="row">
                     <div class="col">
                     <img src="https://img.icons8.com/color/30/000000/checked-2.png"/>Results submit
                     
                     </div>
                     <div class="col">
                     
                     <img src="https://img.icons8.com/cute-clipart/30/000000/delete-sign.png"/>Results not submit
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

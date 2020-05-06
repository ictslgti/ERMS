<?php
$title = "Add Course | Online Examination Result Management System | SLGTI";
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
            <?php  
                  $title ="
                  <h4 class='text-primary'>ERMS|<span class='text-secondary'>Course</span></h4>";
                 include_once('exam/nav_bar.php');
            
            ?>
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand"></a>
                <form class="form-inline">
                    
                    <a href="courses.php"><h6 class="text-primary">Click Here Show Courses</h6></a>
                </form>
                </nav>
            <div class="container-fluid p-5">
                <!-- #1 Insert Your Content-->
                <div class="container">
                
                 
                    <!-- 2 row start -->
                     <form method="POST" action="">
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Code</span>
                       </div>
                       <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="validationServer01" required>
                         </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Name</span>
                       </div>
                       <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="validationServer01" required>
                         </div>
                     </div>
                     </div>
                     </div>
                     <br>
                     <!-- 2 row end -->




                     

                     <!-- 4 row start -->
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Duration Of Course</span>
                       </div>
                       <input type="Number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="validationServer01" required>
                         </div>
                         </div>
                     </div>

                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Duration OJT</span>
                       </div>
                       <input type="Number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="validationServer01" required>
                         </div>
                     </div>
                     </div>
                     </div>
                     <br>
                     <!-- 4 row end -->

                     <form method="POST" action="">
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">NVQ LEVEL</span>
                       </div>
                       <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled>Choose NVQ Level</option>
                        <option value="1">NVQ-3</option>
                        <option value="1">NVQ-4</option>
                        <option value="1">BRIDEGING</option>
                        <option value="1">NVQ-5</option>
                        <option value="1">NVQ-6</option>
                        <option value="1">NVQ-7</option>

                        </select>
                         </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Department Name</span>
                       </div>
                       <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled>Choose department</option>
                        <option value="1">ICT</option>
                        <option value="1">Food Tech</option>
                        <option value="1">Meganical</option>
                        </select>
                         </div>
                     </div>
                     </div>
                     </div>
                     <br>




                     <div class="row">
                     <div class="col-11 "></div>
                     <div class="col-1">
                     <button type="submit" class="btn btn-outline-success" data-toggle="modal"
                                data-target="#exampleModal">
                                Add
                            </button>
                     </div>
                     </div>
</form>
                    


                </div>
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>

<?php
$title = "Add Department | Online Examination Result Management System | SLGTI";
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
                     <div class="border border-primary rounded p-3 text-center">
                     <h1>Add Course</h1>
                     </div>
                    </div>
                    </div>
                <!-- 1st row end -->
                  <br>
                    <!-- 2 row start -->
                    <br>
                    
                     <form method="POST" action="">
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Course NO</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Course Name</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                     </div>
                     </div>
                     </div>
                     <br>
                     <!-- 2 row end -->




                     <!-- 3 row start -->
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Duration-Institute Training</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>
                    
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Duration OJT</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                     </div>
                     </div>
                     </div>
                     <br>
                     <!-- 3 row end -->

                     <form method="POST" action="">
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">NVQ LEVEL</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Department Name</span>
                       </div>
                        <select class="custom-select" id="inputGroupSelect01" name="Assess">
                        <option selected>Choose department</option>
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
                     <div class="col-10 "></div>
                     <div class="col-2">
                     <button type="button" class="btn btn-outline-success " >Add</button>
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

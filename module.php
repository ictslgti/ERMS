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
                     <div class="text primary">
                     <h1>Add Module Details</h1><hr>
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
                         <span class="input-group-text" id="basic-addon1">Module Id</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                       <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Module Name</span>
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
                         <span class="input-group-text" id="basic-addon1">Semester Id</span>
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
                       <select class="custom-select" id="inputGroupSelect01" name="Assess">
                        <option selected>Select Course Name</option>
                        <option value="1">ICT</option>
                        <option value="1">Food Tech</option>
                        <option value="1">Meganical</option>
                        </select>
                        </div>
                        
                     </div>
                     </div>
                     </div>
                     <br>
                     <!-- 3 row end -->

                   
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-2">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Learning Hours</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Lecture Hours</span>
                       </div>
                       <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>
                     </div>
                     <br>
                       <!-- 5 row start -->
                       <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Practical Hours</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>
                    
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Self Study Hours</span>
                       </div>
                       <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                       <!-- <select class="custom-select" id="inputGroupSelect01" name="Assess">
                        <option selected>Select Course Name</option>
                        <option value="1">ICT</option>
                        <option value="1">Food Tech</option>
                        <option value="1">Meganical</option>
                        </select> -->
                        </div>
                        
                     </div>
                     </div>
                     </div>
                     <br>
                     <!-- 5 row end -->
                    
                     <br>
                      <!-- 6 row start -->
                     <div class="row">
                     <div class="col-sm">
                    Module_aim
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <textarea name="AIM" id="" cols="30" rows="10"></textarea>
                         </div>
                         </div>
                     </div>
                    
                     <div class="col-sm">
                    Learning _Outcomes
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <textarea name="Learn" id="" cols="30" rows="10"></textarea>
                         </div>
                         </div>
                     </div>
                     <div class="col-sm">
                    Resources
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <textarea name="Resources" id="" cols="30" rows="10"></textarea>
                         </div>
                         </div>
                     </div>
                     <div class="col-sm">
                    References
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <textarea name="References" id="" cols="30" rows="10"></textarea>
                         </div>
                         </div>
                     </div>
                    
                    
                    

                       
                
                
                     
                     
                     </div>
                     <br>
                     <!-- 6 row end -->
                    
                     




                     <div class="row">
                     <div class="col-10 "></div>
                     <div class="col-2">
                     <button type="button" class="btn btn-outline-primary " >Add Module</button>
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

<?php
$title = "Dashboard | Online Examination Result Management System | SLGTI";
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
                
                   <div class="row">
                     <div class="col-sm">
                     <div class="border border-primary text-center rounded text-primary">
                     <h1>Asignments Portal</h1>
                     <h3>Add Assessments</h3>
                     <h6>Welcome to examinations portal for lectures or admin. This section to add examinations and assignments/asessments results </h6>                    
                     </div>
                    </div>
                 </div>
                    <br>
                    <br>
                    <form method="POST" action="">
                    <div class="row">
                        <!-- #col1 -->
                      <div class="col-sm">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Course</label>
                          </div>
                          <select class="custom-select" id="inputGroupSelect01">
                          <option selected>Choose course</option>
                           <option value="1">One</option>
                            <option value="2">Two</option>
                           <option value="3">Three</option>
                         </select>
                        </div>
                         </div>
                         <!-- #col1 -->

                         <!-- #col2 -->
                      <div class="col-sm">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Module</label>
                          </div>
                          <select class="custom-select" id="inputGroupSelect01">
                          <option selected>Choose module</option>
                           <option value="1">One</option>
                            <option value="2">Two</option>
                           <option value="3">Three</option>
                         </select>
                        </div>
                         </div>
                         <!-- #col2 -->
                         </div>
                       <br>
                        <!-- #row2 -->
                         <div class="row">
                        <!-- #col1 -->
                      <div class="col-sm">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Assessments</label>
                          </div>
                          <select class="custom-select" id="inputGroupSelect01">
                          <option selected>Choose Assessments</option>
                           <option value="1">One</option>
                            <option value="2">Two</option>
                           <option value="3">Three</option>
                         </select>
                        </div>
                         </div>
                         <!-- #col1 -->

                         <!-- #col2 -->
                      <div class="col-sm">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Academy Year</label>
                          </div>
                          <select class="custom-select" id="inputGroupSelect01">
                          <option selected>Choose Academy Year</option>
                           <option value="1">One</option>
                            <option value="2">Two</option>
                           <option value="3">Three</option>
                         </select>
                        </div>
                         </div>
                         <!-- #col2 -->

                       <!-- #col3 -->
                      <div class="col-sm">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Date</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                        
                         </div>
</div>

                      </div>
                     </div>
                     <br>
                     <button type="button" class="btn btn-outline-success" >Add</button>
                         
                         <!-- #col3 -->
                         </div>
                     <!-- #row2 -->
                     
                      </form>
                      
               </div>
              
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>

<?php
$title = "Add Assessment | Online Examination Result Management System | SLGTI";
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
<!-- 1 -->

                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-10">
                     <div class="text-primary">
                     <h1>Add Assessment</h1>
                     </div>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-2">
                    <input type=submit onClick="location.href='assessments.php'" value='view Assessment'class="btn btn-outline-primary">
                    </div>
                    </div>

<!-- 1 -->
                  <hr>
                  <br>
                  <br>
<!-- 2  -->

                    
                     <form name="myForm" action=""  method="post" required>
                     <div class="row">
                     <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Department</span>
                       </div>
                       <select class="custom-select" id="inputGroupSelect01" name="Department" id="validationCustom04" required>
                       <option  selected disabled value="">Choose Department</option>
                            <option value="1">ICT</option>
                            <option value="2">Mechanical</option>
                            <option value="3">Food technology</option>
                         </select>
                         </div>
                     </div>
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Course</label>
                        </div>
                          <select class="custom-select" id="inputGroupSelect01" name="Course"id="validationCustom04" required>
                            <option  selected disabled value="">Choose Course</option>
                            <option value="1">NVQ-LEVEL-5</option>
                            <option value="2">NVQ-LEVEL-4</option>
                            <option value="3">BRIDGING</option>
                          </select>
                          </div>
                        </div>
                      </div>
                         
                      
                    </div>
<br>
<!-- <2> -->
<!-- <3> -->

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Module</label>
                        </div>
                          <select class="custom-select" id="inputGroupSelect01" name="Module"id="validationCustom04" required>
                            <option  selected disabled value="">Choose Module</option>
                            <option value="1">M01</option>
                            <option value="2">EMP-02</option>
                            <option value="3">EMP-01</option>
                          </select>
                          </div>
                        </div>


                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Assessment</label>
                        </div>
                          <select class="custom-select" id="inputGroupSelect01" name="Assessment"id="validationCustom04" required>
                            <option  selected disabled value="">Choose Assessment</option>
                            <option value="1">Assessment1</option>
                            <option value="2">Assessment2</option>
                            <option value="3">Assessment3</option>
                          </select>
                          </div>
                        </div>
                        </div>
                       
                        </div>
<!-- 3 -->

<br>

<!-- <4> -->

                   <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Batch</label>
                        </div>
                          <select class="custom-select" id="inputGroupSelect01" name="Batch"id="validationCustom04" required>
                            <option  selected disabled value="">Choose Batch</option>
                            <option value="1">Batch-03</option>
                            <option value="2">Batch-04</option>
                            
                          </select>
                          </div>
                        </div>
                        </div>
                        
                       <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="form-group">
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon3">Assessment Date</span>
                              </div>
                              <input type="date" id="birthday" name="Assessment_Date"class="form-control" id="basic-url" aria-describedby="basic-addon3" name="date"id='validationServer01' required>
                              </div>
                        </div>
                      </div>
                        </div>
<!-- 4 -->

              <br>
             
                     <div class="row">
                        <div class="col-md-11 col-sm-11 col-xs-11 "></div>
                        <div class="col-md-1 col-sm-1 col-xs-1 ">
                          <input type="submit"  class="btn btn-outline-success "value="Add">
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

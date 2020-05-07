<?php
$title = "SLGTI Academic Year | Online Examination Result Management System | SLGTI";
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
        <div class="container">
                  <form method="POST" action="">
        <div class="card  mb-3" >
            <div class="card-header ">
            <div class="row">
            <div class="col"> <h2>Academic Year</h2></div>
            <div class="col-auto">
            <button type="submit" class="btn btn-outline-primary">
           Academic Years</button>
            </div>
            </div>

            </div>
            <div class="card-body ">
            <div class="card  mb-3" >
  
  <div class="card-body">
  <div class="row"> 
                  <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Academic Year </label>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer06" required>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01"> Year Status</label>
                        </div>
                          <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                            <option selected disabled value="">Choose Academic Year Status</option>
                            <option value="1">Completed</option>
                            <option value="2">Active</option>
                              <option value="3">plan</option>
                          </select>
                          </div>
                        </div>
                      </div>
                      </div>
                      <br>

               
               <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="form-group">
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon3">Semester1 Start Date</span>
                              </div>
                              <input type="date" id="birthday" name="Assessment_Date"class="form-control" id="basic-url" aria-describedby="basic-addon3" id="validationServer06" required>
                              </div>
                        </div>
                      </div>
    
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="form-group">
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon3">Semester1 End Date</span>
                              </div>
                              <input type="date" id="birthday" name="Assessment_Date"class="form-control" id="basic-url" aria-describedby="basic-addon3" id="validationServer06" required>
                              </div>
                        </div>
                      </div>
                    
               </div>
                  <br>

                  <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="form-group">
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon3">Semester2 Start Date</span>
                              </div>
                              <input type="date" id="birthday" name="Assessment_Date"class="form-control" id="basic-url" aria-describedby="basic-addon3" id="validationServer06" required>
                              </div>
                        </div>
                      </div>
    
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="form-group">
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon3">Semester2 End Date</span>
                              </div>
                              <input type="date" id="birthday" name="Assessment_Date"class="form-control" id="basic-url" aria-describedby="basic-addon3" id="validationServer06" required>
                              </div>
                        </div>
                      </div>
                    </div>
              
                  <br>
  </div>
  
</div>
            </div>
            <div class="card-footer ">
            <div class="row">
                    <div class="col-md-11 col-sm-11 col-xs-11 "></div>
                    <div class="col-md-1 col-sm-1 col-xs-1 ">
                    <button type="submit" class="btn btn-outline-success" data-toggle="modal"
                                data-target="#exampleModal">
                                Add
                            </button>
                   </div>
                </div>

            </div>
            </div>
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5">
                <!-- #1 Insert Your Content-->
                
            
                
                  

                  
                  
                
               </form>
            </div>
              
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>

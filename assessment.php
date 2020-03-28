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
                          <h3>Add Assessments</h3>
                          <h6>Welcome to examinations portal for lectures or admin. This section to add examinations and assignments/asessments results </h6>                    
                        </div>
                    </div>
                 </div>
                    <br>
                    <br>
                  <form method="POST" action="">
                  <div class="row"> 
                    <div class="col-sm">
                     <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Course</label>
                        </div>
                          <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose course</option>
                            <option value="1">NVQ LEVEL5</option>
                            <option value="2">NVQ LEVEL5</option>
                            <option value="3">BRIDGING</option>
                          </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm">
                     <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Module</label>
                        </div>
                          <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose Module</option>
                            <option value="1">Emp01</option>
                            <option value="2">Emp02</option>
                            <option value="3">Emp03</option>
                          </select>
                          </div>
                        </div>
                      </div>
                         
                      <div class="col-sm">
                      <div class="form-group">
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon3">Assessment Date</span>
                              </div>
                              <input type="date" id="birthday" name="Assessment_Date"class="form-control" id="basic-url" aria-describedby="basic-addon3">
                              </div>
                        </div>
                      </div>
                    </div>

                  <br>

                  <div class="row">
                    <div class="col-sm">
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Assessments</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                          <option selected>Choose Assessments</option>
                          <option value="1">Assessment1</option>
                          <option value="2">Assessment2</option>
                          <option value="3">Assessment3</option>
                        </select>
                      </div>
                      </div>
                    </div>

                    <div class="col-sm">
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Attempt</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                          <option selected>Choose Attempt</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                      </div>
                      </div>
                    </div>

                    <div class="col-sm">
                    <div class="form-group">
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Academy Year</label>
                          </div>
                          <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose Academy Year</option>
                            <option value="1">2020/2019</option>
                            <option value="2">2018/2019</option>
                            <option value="3">2017/2018</option>
                         </select>
                      </div>
                      </div>
                    </div>
                  </div>
                <br>
                <div class="row">
                    <div class="col-11 "></div>
                    <div class="col-1 ">
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

<?php
$title = "Batch | Online Examination Result Management System | SLGTI";
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
                <?php  
                  $title ="
                  <h4 class='text-primary'>ERMS|<span class='text-secondary'>Batch</span></h4>";
                 include_once('exam/nav_bar.php');
            
            ?>
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand"></a>
                <form class="form-inline">
                    
                    <a href="batches.php"  class="btn btn-outline-primary my-2 my-sm-0">Batches info</a>
                </form>
                </nav>
                <br>
                <form method="POST" action="">
                <!-- 1st row -->
                <div class="row"> 
                  <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Department</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                            <option selected disabled value="">Choose Department</option>
                            <option value="1">ICT</option>
                            <option value="2">Mechanical</option>
                            <option value="2">Food Technology</option>
                            <option value="2">Consruction Technology</option>
                            <option value="2">Automotieve</option>
                            <option value="2">Electrical </option>
                          </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01"> NVQ Level</label>
                        </div>
                          <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                            <option selected disabled value="">Choose NVQ Level</option>
                            <option value="1">NVQ-04</option>
                            <option value="2">BRIDGING</option>
                            <option value="1">NVQ-05</option>
                            <option value="1">NVQ-06</option>
                            <option value="1">NVQ-07</option>
                          </select>
                          </div>
                        </div>
                      </div>
                      </div>
                      <br>
                <!-- 1st row -->
                
                <!-- 2nd row -->
                <div class="row"> 
                  <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Academicyear</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                            <option selected disabled value="">Choose Academicyear</option>
                            <option value="1">2018/2019</option>
                            <option value="2">2019/2020</option>
                          </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01"> Batch no</label>
                        </div>
                        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="validationServer01" required>
                          </div>
                        </div>
                      </div>
                      </div>
                      <br>
                <!-- 2nd row -->


                <div class="row">
                    <div class="col-md-11 col-sm-11 col-xs-11 "></div>
                    <div class="col-md-1 col-sm-1 col-xs-1 ">
                    <button type="submit" class="btn btn-outline-success" data-toggle="modal"
                                data-target="#exampleModal">
                                Add
                            </button>
                   </div>
                </div>
                </form>


                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>

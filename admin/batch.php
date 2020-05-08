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
        <?php include_once("nav.php"); ?>
       <!-- card start -->
<div class="container">
<form action=""method="post">
<div class="card  mb-3" >
      <div class="card-header bg-transparent ">
      <div class="row">
      <div class="col"> <h4>Batch</h4> </div>
      <div class="col-auto"> <a href="" class="btn btn-outline-primary">Batches</a> </div>
      </div>
      </div>
      <div class="card-body ">
         
            <div class="card  mb-3" >
                 
                  <div class="card-body ">
                    <!-- 1st row -->

                <div class="row "> 
                  <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                     Department  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                            <option selected disabled value="">Choose Department</option>
                            <option value="1">ICT</option>
                            <option value="2">Mechanical</option>
                            <option value="2">Food Technology</option>
                            <option value="2">Consruction Technology</option>
                            <option value="2">Automotive</option>
                            <option value="2">Electrical </option>
                          </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                     NVQ LEVEL  <br>
                     <div class="input-group input-group-sm mb-3">
  
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
                      
                <!-- 1st row -->
                
                <!-- 2nd row -->
                <div class="row"> 
                  <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                     Academicyear  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                            <option selected disabled value="">Choose Academicyear</option>
                            <option value="1">2017/2018</option>
                            <option value="1">2018/2019</option>
                            <option value="2">2019/2020</option>
                          </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-6">
                      Batch no <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                          </div>
                        </div>
                      </div>
                      </div>
                    
                <!-- 2nd row -->
                  </div>
                  
    </div>


      </div>
      <div class="card-footer">
      <div class="row">
                     <div class="col-11 "></div>
                     <div class="col-1">
                     <button type="submit" class="btn btn-outline-success" data-toggle="modal"
                                data-target="#exampleModal">
                                Add
                            </button>
                     </div>
                     </div>
      </div>
    </div>
    </form>
</div>
       <!-- card end  -->
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>






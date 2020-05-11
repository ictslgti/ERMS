<?php
$title = "Module | Online Examination Result Management System | SLGTI";
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
       
        <!-- <main class="page-content pt-2"> -->
            <!-- 1st row start -->

         <div class="container"> 
             <br>
         <form action=""> 
            <div class="card  mb-3" >
                <div class="card-header ">
                <div class="row">
                <div class="col"><h4>Module Enrollment</h4></div>
                <div class="col-auto">
                <!-- <a href="modules.php" class="btn btn-outline-primary">Modules</a> -->
                </div>

                </div>
                </div>
                <div class="card-body ">
                <div class="card  mb-3">
                   
                    <div class="card-body ">
                    <form method="POST" action="">
                     <div class="row">
                     <div class="col-sm">
                     Lecturer Name  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                    

                     <!-- <div class="col-sm">
                     <div class="form-group">
                      Lecturer Name  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                    </div>
                    </div> -->
                    <!-- 1 row end -->
                    
                    

                     <div class="col-sm">
                     <div class="form-group">
                     Course Name  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Course </option>
                            <option value="1">ICT</option>
                            <option value="2">AUT</option>
                            <option value="2">CON</option>
                        </select>
                        </div>
                         </div>
                     </div>
                     
                     
                    </div>

                    
                </div>
                <div class="row">
                <div class="col-sm">
                     <div class="form-group">
                     Module Name  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Course </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="2">3</option>
                        </select>
                        </div>
                         </div>
                     </div>
                     
                     
                    <!-- </div> -->

                    
                </div>
                <!-- <div class="row"> -->
                     <div class="col-sm">
                     Academic Year  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Academic Year </option>
                            <option value="1">2016</option>
                            <option value="2">2017</option>
                            <option value="2">2018</option>
                            <option value="2">2019</option>
                            <option value="2">2020</option>
                        </select>
                        </div>
                         </div>
                     </div>

                <!-- 2 row end -->

                <!-- <div class="row">
                     <div class="col-sm">
                     Learning Hours <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                    

                     <div class="col-sm">
                     <div class="form-group">
                     Lecture Hours  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                     
                     
                    </div>

                    
                </div>

                <!-- 3 row end -->


                <!-- <div class="row">
                     <div class="col-sm">
                     Practical Hours <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                    

                     <div class="col-sm">
                     <div class="form-group">
                     Self Study Hours <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                     
                     
                    </div>

                    
                </div> -->

                <!-- 4 row end -->
<!-- 6 row start -->
<!-- <div class="row">
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
                 
                     </div> --> 


<!-- end -->    
<div class="card-footer "><div class="row">
                     <div class="col-11 "></div>
                     <div class="col-1">
                     <button type="submit" class="btn btn-outline-success" data-toggle="modal"
                                data-target="#exampleModal">
                                Add
                            </button>
                     </div></div>
                </div>
                
                    
                     
                     
                    
</form>
                    


                </div>
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>

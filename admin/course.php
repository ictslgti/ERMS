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
        
            <?php include_once("nav.php"); ?>
       
        <!-- <main class="page-content pt-2"> -->
            <!-- 1st row start -->

         <div class="container"> 
         <form action=""> 
         <br>
            <div class="card  mb-3" >
                <div class="card-header ">
                <div class="row">
                <div class="col"><h4>Course</h4></div>
                <div class="col-auto">
                <button type="submit" class="btn btn-outline-primary">Courses</button>
                </div>

                </div>
                </div>
                <div class="card-body ">
                <div class="card  mb-3">
                   
                    <div class="card-body ">
                    <form method="POST" action="">
                     <div class="row">
                     <div class="col-sm">
                     Code  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                    

                     <div class="col-sm">
                     <div class="form-group">
                     Name  <br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                     <br>
                    </div>
<!-- 2 row end -->


                    <div class="row">
                     <div class="col-sm">
                     Duration Of Course  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                    

                     <div class="col-sm">
                     <div class="form-group">
                     Duration Of OJT  <br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                     <br>
                     
                    </div>
                   <!-- 3 row end -->


                   <div class="row">
                     <div class="col-sm">
                     NVQ Level  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose NVQ Level </option>
                            <option value="1">NVQ-04</option>
                            <option value="1">NVQ-05 Bridging</option>
                            <option value="1">NVQ-05</option>
                            <option value="1">NVQ-06</option>
                            <option value="1">NVQ-07</option>
                            
                        </select>
                        </div>
                         </div>
                     </div>
                    

                     <div class="col-sm">
                     <div class="form-group">
                     Department  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Department  </option>
                            <option value="1">ICT</option>
                            <option value="2">AUT</option>
                            <option value="3">CON</option>
                        </select>
                        </div>
                         </div>
                     </div>
                     <br>
                     
                    </div>




                    </div>

                    
                </div>
                <div class="card-footer "><div class="row">
                     <div class="col-11 "></div>
                     <div class="col-1">
                     <button type="submit" class="btn btn-outline-success" data-toggle="modal"
                                data-target="#exampleModal">
                                Add
                            </button>
                     </div></div>
                </div>
                
                    
                     
                     
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

<?php
$title = "Lec_Enrolement | Online Examination Result Management System | SLGTI";
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
                <a href="#" class="btn btn-outline-primary"></a>
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
                    

                     <div class="col-sm">
                     <div class="form-group">
                     Course Name  <br>
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
                     
                    </div>
                </div>


                <div class="row">
                <div class="col-sm">
                     <div class="form-group">
                     Module Name  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Module </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="2">3</option>
                        </select>
                        </div>
                         </div>
                     </div>
                        
                </div>
               
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
                </form>
                    


                </div>
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>

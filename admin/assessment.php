
<?php
$title = " Assessment| Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>

    <style>
                table, th, td {
                  padding:5px;
                  border: 1px solid black;
                  text-align:center;
                }
                </style>

                 <script>
                 function myFunction() { 
                   var x=document.getElementById("mySelect").value;
                  if(x==1)
                  {
                    var z="<table>"
                    +"<tr><th>Assessment ID</th><th>Name</th><th>Assessment Type</th><th>Percentage</th></tr>"
                    +"<tr><td>01</td><td>Assessment 01</td><td>Practical</td><td>20</td></tr>"
                    +"<tr><td>02</td><td>Assessment 02</td><td>Theroy</td><td>25</td></tr>"
                    +"</table><br>"
                    
                    document.getElementById("demo").innerHTML = z;
                  }
                  else
                  {
                    var z="<table>"
                    +"<tr><th>Assessment ID</th><th>Name</th><th>Assessment Type</th><th>Percentage</th></tr>"
                    +"<tr><td>01</td><td>Assessment 01</td><td>Practical</td><td>20</td></tr>"
                    +"<tr><td>02</td><td>Assessment 02</td><td>Practical</td><td>20</td></tr>"
                    +"<tr><td>03</td><td>Assessment 03</td><td>Theroy</td><td>20</td></tr>"
                    +"<tr><td>04</td><td>Assessment 04</td><td>Practical</td><td>20</td></tr>"
                    +"<tr><td>05</td><td>Assessment 05</td><td>Theroy</td><td>20</td></tr>"
                    +"</table> <br>"
                    
                    document.getElementById("demo").innerHTML = z;
                  }
                }
                 </script>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        
            <?php include_once("nav.php"); ?>
       
        <!-- <main class="page-content pt-2"> -->
            <!-- 1st row start -->

         <div class="container"> 
             <br>
          
            <div class="card  mb-3" >
                <div class="card-header ">
                <div class="row">
                <div class="col"><h4>Assessment</h4></div>
                <div class="col-auto">
                <a href="assessments.php" class="btn btn-outline-primary">Assessments</a>
                </div>

                </div>
                </div>
                <div class="card-body ">
                <div class="card  mb-3">
                   
                    <div class="card-body ">
                    <form action="">
                    <div class="row">
                 
                 <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                     Department  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Department  </option>
                            <option value="1">ICT</option>
                            <option value="2">AUT</option>
                            <option value="2">CON</option>
                        </select>
                        </div>
                        </div>
                      </div>


                      <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                      Course  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  course </option>
                            <option value="1">5it</option>
                            
                        </select>
                        </div>
                        </div>
                      </div>

                 </div>
                 <!-- 2 row end   -->
                <br>

                 <!-- 3 row start   -->
                 <div class="row">
                 
                      <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                     Batch  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Batch  </option>
                            <option value="1">Batch 01</option>
                            <option value="2">Batch 02</option>
                            <option value="2">Batch 03</option>
                        </select>
                        </div>
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                      Module  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select"  id="mySelect" id="inputGroupSelect01"id="validationCustom04" onchange="myFunction()" required >
                        <option selected disabled value="">Choose  module  </option>
                            <option value="1">web programming</option>
                            <option value="2">Database II</option>
                            
                        </select>
                        </div>
                        </div>
                      </div>

                 </div>
                 <!-- 3 row end   -->
                  <br>
                  <!-- 4th row stat -->
                   <div class="row">
                 
                 <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                     Type  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Type  </option>
                            <option value="1">Practical</option>
                            <option value="2">Theroy</option>
                            
                        </select>
                        </div>
                        </div>
                      </div>


                      <div class="col-md-6 col-sm-6 col-xs-6">
                      Percentage  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
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

                 <div class="row">
                <div class="col-3"></div>
                <div class="col-9"><p id="demo" ></p></div>
                </div>

                    </form>
                     </div>
                </div>
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("../script.php"); ?>

               
</body>

</html>



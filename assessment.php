<?php
$title = "Assessment | Online Examination Result Management System | SLGTI";
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
                 <!-- 1st row start -->
                 <?php  
                  $title ="
                  <h4 class='text-primary'>ERMS|<span class='text-secondary'>Assessment</span></h4>";
                  include_once('exam/nav_bar.php');
                  
                  ?>
                  <nav class="navbar navbar-light bg-light">
                      <a class="navbar-brand"></a>
                      <form class="form-inline">
                          <label class=" my-2 my-sm-0 p-2"> <h6 class='text-primary'>Click Here !</h6></label>
                          <a href="assessments.php"  class="btn btn-outline-primary my-2 my-sm-0">Assessment</a>
                      </form>
                  </nav>
                
                 <!-- 1st row end -->

                 <br>
                 <form method="POST" action="">

                 <!-- 2 row start   -->
                 <div class="row">
                 
                 <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01"> Department</label>
                        </div>
                          <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                            <option selected disabled value="">Choose Department</option>
                            <option value="1">Information communication and technology</option>
                            <option value="2">Automotive</option>
                          </select>
                          </div>
                        </div>
                      </div>


                      <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01"> Course</label>
                        </div>
                          <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                            <option selected disabled value="">Choose Course</option>
                            <option value="1">5it</option>
                            <option value="2">bridging</option>
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
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01"> Batch </label>
                        </div>
                          <select class="custom-select" id="inputGroupSelect01"id="validationCustom04"  required>
                            <option selected disabled value="">Choose Type</option>
                            <option value="1">Batch-04</option>
                            <option value="2">Batch-03</option>
                          </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01"> Module</label>
                        </div>
                          <select class="custom-select"  id="mySelect" id="inputGroupSelect01"id="validationCustom04" onchange="myFunction()" required >
                            <option selected disabled value="">Choose Module</option>
                            <option value="1">Software Testing</option>
                            <option value="2">Database Systems II</option>
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
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01"> Type</label>
                        </div>
                          <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                            <option selected disabled value="">Choose Type</option>
                            <option value="1">Practical</option>
                            <option value="2">Theroy</option>
                          </select>
                          </div>
                        </div>
                      </div>


                      <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01"> Percentage</label>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="validationServer01" required>
                          </div>
                        </div>
                      </div>

                 </div>
                 <!-- 4 row end   -->

                 <br>


 



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

                <!-- script start -->

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
                    +"<a href='assessments.php'  class='btn btn-outline-primary my-2 my-sm-0'>seemore</a>"
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
                    +"<a href='assessments.php'  class='btn btn-outline-primary my-2 my-sm-0'>seemore</a>"
                    document.getElementById("demo").innerHTML = z;
                  }
                }
                 </script>

                <div class="row">
                <div class="col-3"></div>
                <div class="col-9"><p id="demo" ></p></div>
                </div>
                
               
                
                  <!-- script End -->


                  </div>
                 
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>

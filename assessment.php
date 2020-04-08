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

                    
                     <form name="myForm" action="" onsubmit="return validateForm()" method="post" required>
                     <div class="row">
                     <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Course</span>
                       </div>
                       <select class="custom-select" id="inputGroupSelect01" name="course">
                       <option selected>Choose course</option>
                            <option value="1">NVQ LEVEL5</option>
                            <option value="2">NVQ LEVEL5</option>
                            <option value="3">BRIDGING</option>
                         </select>
                         </div>
                     </div>
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Module</label>
                        </div>
                          <select class="custom-select" id="inputGroupSelect01" name="module">
                            <option selected>Choose Module</option>
                            <option value="1">Emp01</option>
                            <option value="2">Emp02</option>
                            <option value="3">Emp03</option>
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
                          <label class="input-group-text" for="inputGroupSelect01">Assessments</label>
                        </div>
                          <select class="custom-select" id="inputGroupSelect01" name="Assess">
                            <option selected>Choose Assessments</option>
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                          </select>
                          </div>
                        </div>


                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Attempt</label>
                        </div>
                          <select class="custom-select" id="inputGroupSelect01" name="Attempt">
                            <option selected>Choose Attempt</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
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
                          <label class="input-group-text" for="inputGroupSelect01">Academy Year</label>
                        </div>
                          <select class="custom-select" id="inputGroupSelect01" name="Year">
                            <option selected>Academy Year</option>
                            <option value="1">2020/2019</option>
                            <option value="2">2019/2018</option>
                            
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
                              <input type="date" id="birthday" name="Assessment_Date"class="form-control" id="basic-url" aria-describedby="basic-addon3" name="date">
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

                      <script>
                        function validateForm() {
                            var a = document.forms["myForm"]["course"].value;
                            var b = document.forms["myForm"]["module"].value;
                            var c = document.forms["myForm"]["Assess"].value;
                            var d = document.forms["myForm"]["Attempt"].value;
                            var e = document.forms["myForm"]["Year"].value;
                                          
                            if (a == "Choose course") 
                            {
                              alert("Choose The Assessment course");
                              return false;
                            }
                            if (b == "Choose Module") 
                            {
                              alert("Choose The Assessment Module");
                              return false;
                            }
                            if (c == "Choose Assessments") 
                            {
                              alert("Choose Assessment No");
                              return false;
                            }
                            if (d == "Choose Attempt") 
                            {
                              alert("Choose Assessment Attempt");
                              return false;
                            }
                            if (e == "Academy Year") 
                            {
                              alert("Choose Assessment Academy Year");
                              return false;
                            }
                         }
                      </script>


                <!-- #1 Insert Your Content" -->

            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>

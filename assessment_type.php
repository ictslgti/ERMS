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
                 <!-- 1st row start -->
                 <div class="row border border-primary p-4">
                 <div class=col-sm>
                 <h1 class="text-center"> Add Assesment Type</h1>
                </div>
                 </div>
                 <!-- 1st row end -->
                   <br>
                   <br>
                 <!-- 2nd row start -->
                 <div class=row>
                 <div class=col-sm>
                 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">course</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose course</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
                </div>


                <div class=col-sm>
                 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Module</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose Module</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
                </div>

                 </div>
                 <!-- 2nd row end -->
<br>
                <!-- 3rd row Start -->
                 <div class=row>
                 <div class=col-sm>
                 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Assesment Type</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose Assesment Type</option>
    <option value="1">Practical</option>
    <option value="2">Theory</option>
    
  </select>
</div>
                </div>


                <div class=col-sm>
                 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Academic Year</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose Academic Year</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
                </div>

                 </div>

<!-- 3rd row end-->

<br>
<!-- 4th row start-->
<div class=row>
                 <div class=col-sm>
                 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Assessment Name</span>
  </div>
  <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
</div>
                </div>


                <div class=col-sm>
                <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Assessment Percentage</span>
  </div>
  <input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
</div>
                </div>



                </div>

<!-- 4th row end-->
<br>
<!-- 5th row start-->
<div class=row>
                 <div class=col-11>
                 
                </div>


                <div class=col-1>
                <button type="Submit" class="btn btn-outline-success">Add</button>
                </div>





<!-- 5th row end-->










                

                  </div>
                 

                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>
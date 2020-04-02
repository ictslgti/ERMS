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
        <nav id="sidebar" class="sidebar-wrapper">
            <?php include_once("nav.php"); ?>
        </nav>
        <main class="page-content pt-2">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5">
                <!-- #1 Insert Your Content-->
                <div class="container">
                <!-- 1st row start -->
                <div class="row">
                     <div class="col-sm">
                     <div class="border border-primary rounded p-3 text-center">
                     <h1>Add department</h1>
                     </div>
                    </div>
                    </div>
                <!-- 1st row end -->
                  <br>
                    <!-- 2 row start -->
                    
                     <form method="POST" action="">
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Department No</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Department Name</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                     </div>
                     </div>
                     </div>
                     <br>
                     <!-- 2 row end -->
                     <div class="row">
                     <div class="col-10 "></div>
                     <div class="col-2">
                     <button type="button" class="btn btn-outline-success " >Add Department</button>
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

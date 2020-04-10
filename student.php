<?php
$title = "Add Student | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result Management System (ERMS)-SLGTI";
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
                     <div class="border border-primary rounded text-center">
                     <h2>Student's Registration Form | SLGTI</h2>
                     </div>
                    </div>
                    </div>
                    <br>
                <!-- 1st row end -->
                <form method="POST" action="">
                <div class="row">
                <div class='col-7'>
                <?php include_once('student/s_nav_bar.php');
                include_once('student/add_student.php');
                ?>
                </div>
                </div>
                </form>

                  <br>
                    <!-- 2 row start -->
                    <div class="row">
                    <div class="col-sm">
                    <div class="border-bottom border-primary">
                    <h3>Personal Information </h3>
                    </div>
                    </div>
                    </div><br>

                     <form method="POST" action="">
                     <div class="row">

                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                     <div class="input-group-prepend">
                     <label for="title">Title: </label>
                     
                     <select name="title" id="title" class="custom-select" value="<?php echo $title; ?>" required>
                       <option selected disabled>Choose Title</option>
                       <option value="Mr" <?php if($title=="Mr") echo 'selected';?>>Mr</option> 
                       <option value="Miss" <?php if($title == "Miss") echo 'selected';?>>Miss</option>
                       <option value="Mrs"<?php if($title=="Mrs") echo 'selected';?>>Mrs</option>
                       </select>
                       </div>
                     </div>
                     </div>
                     </div>

                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Academic Year</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                     </div>
                     </div>
                     
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Course Mode</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>

                     </div>
                     </form>
                     <!-- 2 row end -->
                     
                     <!-- 3 row start -->
                     <form method="POST" action="">
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Student ID</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>

                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Status</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                     </div>
                     </div>
                     
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Enroll Date</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>

                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Exit Date</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>

                     </div>

                     </form>
                     <!-- 3 row end -->

                     <!-- 4 row start -->
                     <div class="row">
                     <div class="col-sm">
                     <div class="border-bottom border-primary text-left">
                     <h3>Enroll Information </h3>
                     </div>
                     </div>
                     </div><br>


                     <form method="POST" action="">
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Student ID</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>

                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Status</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                     </div>
                     </div>
                     
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Enroll Date</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>

                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Exit Date</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>

                     </div>
                     <br>
                     <!-- 4 row end -->


                     <div class="row">
                     <div class="col-10 "></div>
                     <div class="col-2">
                     <button type="button" class="btn btn-outline-success " >Add Student</button>
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

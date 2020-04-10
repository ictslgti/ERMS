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
                <div class='form-group col-md'>
                <ul class='nav nav-tabs'>
                <li class='nav-item'>
                <a class='nav-link' href='./students.php'>ALL</a>
                </li>
                <li class='nav-item'>
                <a class='nav-link active' href='./student.php'>Add New</a>
                </li>
                </ul>
                </div>
                </div>
                </div>
                </form>

                    <!-- 2 row start -->
                    <br>
                    <div class="row">
                    <div class="col-sm">
                    <div class="border-bottom border-primary">
                    <h3>Personal Information</h3>
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
                     </form>
                     <!-- 2 row end -->
                </div>
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>

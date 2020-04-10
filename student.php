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
                <!-- 1st row end -->

                <!-- 2 row start -->
                <div class="row">
                <div class="col-sm">
                <div class="border-bottom border-primary">
                <h3>Personal Information</h3>
                </div>
                </div>
                </div><br>
                <form method="POST" action="">
                <!-- 1st row start -->
                    <div class="form-row">

                    <div class="col-2">
                    <label for="title"> Title: </label>
                    <select name="title" id="title" class="custom-select" value="<?php echo $title; ?>" required>
                    <option selected disabled>Choose Title</option>
                    <option value="Mr" <?php if($title=="Mr") echo 'selected';?>>Mr</option> 
                    <option value="Miss" <?php if($title=="Miss") echo 'selected';?>>Miss</option>
                    <option value="Mrs"<?php if($title=="Mrs") echo 'selected';?>>Mrs</option>
                    </select>
                    </div>

                    <div class="col-7">
                    <label for="fullname"> Full Name: </label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value="" placeholder="" aria-describedby="fullnamePrepend" required>
                    </div>

                    <div class="col-3">
                    <label for="ini_name"> Name with Initials: </label>
                    <input type="text" class="form-control" id="ini_name" name="ini_name" value="" placeholder="" required>
                    </div>

                    </div>
                <!-- 1st row end -->

                <!-- 2nd row start -->
                    <div class="form-row">

                    <div class="col-2">
                    <label for="custom-select"> Gender: </label>
                    <select name="gender" id="gender" class="form-control" value="<?php echo $gender; ?>" required>
                    <option selected disabled>Choose Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
                    </div>

                    <div class="col-3">
                    <label for="civil"> Civil Status: </label>
                    <select name="civil" id="civilstatus" class="custom-select" value="<?php echo $civil; ?>" required>
                    <option selected disabled>Choose Status</option>
                    <option value="Single">Single</option> 
                    <option value="Married">Married</option>
                    </select>
                    </div>

                    <div class="col-3">
                    <label for="email"> Email: </label>
                    <div class="input-group-prepend">
                    <input type="email" class="form-control" id="email" name="email" value="" placeholder="ab2237243@gmail.com"  required>
                    </div>
                    </div>

                    <div class="col-2">
                    <label for="nic"> NIC: </label>
                    <input type="text" class="form-control" id="nic" name="nic" max="12" min="10" value="" placeholder="980000000V/19980000000"  required>
                    </div>

                    <div class="col-2">
                    <label for="dob"> Date of Birth: </label>
                    <input type="date" class="form-control" id="dob" name="dob" value="" placeholder=""  required>
                    </div>

                    </div>
                <!-- 2nd row end -->


                </form>   
                    
                </div>
                <!-- 2 row end -->

                <!-- 3 row start -->
                <br>
                <div class="row">
                <div class="col-sm">
                <div class="border-bottom border-primary">
                <h3>Enroll Information</h3>
                </div>
                </div>
                    </div><br>
                    <form method="POST" action="">
                    <div class="col-md-2 mb-3">
                    <label for="title"> Title: </label>
                    <select name="title" id="title" class="custom-select" value="<?php echo $title; ?>" required>
                    <option selected disabled>Choose Title</option>
                    <option value="Mr" <?php if($title=="Mr") echo 'selected';?>>Mr</option> 
                    <option value="Miss" <?php if($title == "Miss") echo 'selected';?>>Miss</option>
                    <option value="Mrs"<?php if($title=="Mrs") echo 'selected';?>>Mrs</option>
                    </select>
                    </div>
                    </form>
                </div>

                <!-- 3 row end -->

                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>

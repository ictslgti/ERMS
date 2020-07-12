<?php
$title = "View Students | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../head.php"); ?>
    <?php include_once('../databases/config.php'); ?>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
    <?php include_once("nav.php"); ?>

    <script type='text/javascript'>
        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('simg');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

    <!-- view  start -->
    <?php
            $student_id = $stitle = $full_name = $ini_name = $gender = $civil = $email = $nic = $dob = $phone = $address = $ds = 
            $district = $province = $zip = $blood = $gname = $gaddress = $gphone = $grelation = $regno = $cid = $ayear = 
            $mode = $status = $enrolldate = $exitdate = null;
            if (isset($_GET['view'])) {
                $student_id = $_GET['view'];
                $sql_student = "SELECT * FROM student LEFT JOIN student_enroll
                ON `student`.`id` = `student_enroll`.`id`
                WHERE `student`.`id` = '$student_id'";
                $result_student = mysqli_query($con, $sql_student);
                $row = mysqli_fetch_assoc($result_student);
                if (mysqli_num_rows($result_student) == 1 ) {
                    $stitle = $row['title'];
                    $full_name = $row['full_name'];
                    $ini_name = $row['name_with_initials'];
                    $gender = $row['gender'];
                    $civil = $row['civil_status'];
                    $email = $row['email'];
                    $nic = $row['nic'];
                    $dob = $row['date_of_birth'];
                    $phone = $row['phone_no'];
                    $address = $row['address'];
                    $ds = $row['divisional_secretariat'];
                    $district = $row['district'];
                    $province = $row['province'];
                    $zip = $row['zip_code'];
                    $blood = $row['blood_group'];
                    $gname = $row['guardian_name'];
                    $gaddress = $row['guardian_address'];
                    $gphone = $row['guardian_phone_no'];
                    $grelation = $row['guardian_relationship'];
                    $regno = $row['id'];
                    $cid = $row['course_id'];
                    $ayear = $row['academic_year'];
                    $mode = $row['course_mode'];
                    $status = $row['student_status'];
                    $enrolldate = $row['enroll_date'];
                    $exitdate = $row['exit_date'];
                }   
            }
                ?>
            <!-- view  end -->

        <main class="">
            <div class="container-fluid p-5">
                <!-- #1 Insert Your Content-->
                <div class="container">

                <!-- 1st row start -->
                <div class="card">

                <div class="card-header">
                <div class="row">
                <div class='col-8'>
                <h5><?php echo "$title" ?></h5>
                </div>
                <div class='col-2'></div>
                <div class='col-1-sm'>
                <a class='btn btn-outline-primary' href='./student.php'>Add New</a>
                </div>
                <div class='col'>
                <a class='btn btn-outline-primary' href='./students.php'>ALL</a>
                </div>
                </div>
                </div>

                <div class="card-body">
                <h6 class="card-title"></h6>
                <div class='row'>
                <div class='col-4'>

                <div style='text-align:center; margin:0 auto; padding:0px;'>
                <img style='width:230px;height: 260px;border: 1px solid black;' id="simg">
                <input type="file" accept="image/*" onchange="preview_image(event)"><br>
                </div>

                </div>
                <div class='col-8'>
                
                <div class='row'>
                <div class='col-4'><label for="fullname"> Full Name: </label></div>
                <div class='col-8'><input type="text" class="form-control" name="fullname" value="<?php echo $full_name; ?>" disabled></div>
                </div>
                
                <div class='row'>
                <div class='col-4'><label for="ini_name"> Name with Initials: </label></div>
                <div class='col-8'><input type="text" class="form-control" name="ini_name" value="<?php echo $ini_name; ?>" disabled></div>
                </div>

                <div class='row'>
                <div class='col-4'><label for="gender"> Gender: </label></div>
                <div class='col-8'><input type="text" class="form-control" name="gender" value="<?php echo $gender; ?>" disabled></div>
                </div>
                
                <div class='row'>
                <div class='col-4'><label for="civil"> Civil Status: </label></div>
                <div class='col-8'><input type="text" class="form-control" name="civil" value="<?php echo $civil; ?>" disabled></div>
                </div>
                
                <div class='row'>
                <div class='col-4'><label for="email"> Email: </label></div>
                <div class='col-8'><input type="email" class="form-control" name="email"  value="<?php echo $email; ?>" disabled></div>
                </div>
                
                <div class='row'>
                <div class='col-4'><label for="dob"> Date of Birth: </label></div>
                <div class='col-8'><input type="text" class="form-control" name="dob" value="<?php echo $dob; ?>" disabled></div>
                </div>
                
                <div class='row'>
                <div class='col-4'><label for="phone"> Phone No: </label></div>
                <div class='col-8'><input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>" disabled></div>
                </div>
                
                <div class='row'>
                <div class='col-4'><label for="address"> Address: </label></div>
                <div class='col-8'><input type="text" class="form-control" name="address" value="<?php echo $address; ?>" disabled></div>
                </div>
                
                <div class='row'>
                <div class='col-4'><label for="ds"> Divisional Secretariat: </label></div>
                <div class='col-8'><input type="text" class="form-control" name="ds" value="<?php echo $ds; ?>" disabled></div>
                </div>
                
                <div class='row'>
                <div class='col-4'><label for="province"> Province: </label></div>
                <div class='col-8'><input type="text" class="form-control" name="province" value="<?php echo $province; ?>" disabled></div>
                </div>
                
                <div class='row'>
                <div class='col-4'><label for="district"> District: </label></div>
                <div class='col-8'><input type="text" class="form-control" name="district" value="<?php echo $district; ?>" disabled></div>
                </div>
                
                <div class='row'>
                <div class='col-4'><label for="zip"> ZIP-Code: </label></div>
                <div class='col-8'><input type="text" class="form-control" name="zip" value="<?php echo $zip; ?>" disabled></div>
                </div>
                
                <div class='row'>
                <div class='col-4'><label for="blood"> Blood Group: </label></div>
                <div class='col-8'><input type="text" class="form-control" name="blood" value="<?php echo $blood; ?>" disabled></div>
                </div>

                <div class='row'>
                <div class='col-4'><label for="cid"> Course Name: </label></div>
                <div class='col-8'><input type="text" class="form-control" name="cid" value="<?php echo $cid; ?>" disabled></div>
                </div>

                <div class='row'>
                <div class='col-4'><label for="ayear"> Academic Year: </label></div>
                <div class='col-8'><input type="text" class="form-control" name="ayear" value="<?php echo $ayear; ?>" disabled></div>
                </div>

                <div class='row'>
                <div class='col-4'><label for="mode"> Course Mode: </label></div>
                <div class='col-8'><input type="text" class="form-control" name="mode" value="<?php echo $mode; ?>" disabled></div>
                </div>

                <div class='row'>
                <div class='col-4'><label for="regno"> Registration No: </label></div>
                <div class='col-8'><input type="text" class="form-control" name="regno" value="<?php echo $regno; ?>" disabled></div>
                </div>

                <div class='row'>
                <div class='col-4'><label for="status"> Status:</label></div>
                <div class='col-8'><input type="text" class="form-control" name="status" value="<?php echo $status; ?>" disabled></div>
                </div>

                <div class='row'>
                <div class='col-4'><label for="enrolldate"> Enroll Date:</label></div>
                <div class='col-8'><input type="text" class="form-control" name="enrolldate" value="<?php echo $enrolldate; ?>" disabled></div>
                </div>

                <div class='row'>
                <div class='col-4'><label for="exitdate"> Exit Date:</label></div>
                <div class='col-8'><input type="text" class="form-control" name="exitdate" value="<?php echo $exitdate; ?>" disabled></div>
                </div>

                <div class='row'>
                <div class='col-4'><label for="gname">Guardian Name :</label></div>
                <div class='col-8'><input type="text" class="form-control" name="gname" value="<?php echo $gname; ?>" disabled></div>
                </div>

                <div class='row'>
                <div class='col-4'><label for="gaddress">Guardian Address :</label></div>
                <div class='col-8'><input type="text" class="form-control" name="gaddress" value="<?php echo $gaddress; ?>" disabled></div>
                </div>

                <div class='row'>
                <div class='col-4'><label for="gphone">Guardian Phone No :</label></div>
                <div class='col-8'><input type="text" class="form-control" name="gphone" value="<?php echo $gphone; ?>" disabled></div>
                </div>

                <div class='row'>
                <div class='col-4'><label for="grelation">Guardian Relationship :</label></div>
                <div class='col-8'><input type="text" class="form-control" name="grelation" value="<?php echo $grelation; ?>" disabled></div>
                </div>

                </div>
                </div>

                <div class="card-footer text-muted"></div>
                </div>
                <!-- 1st row end -->

                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>
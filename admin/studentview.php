<?php
$title = "View Students | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result Management System (ERMS)-SLGTI";
?>

<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: .././index.php');
}
?>

<?php 

if (isset($_GET['logout']) && isset($_SESSION['username']) ) {
    unset($_SESSION['username']);  
    header('Location: .././index.php');         
}
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
                reader.onload = function() {
                    var output = document.getElementById('output_image');
                    output.src = reader.result;
                }
                reader.readAsDataURL(event.target.files[0]);
            }
        </script>
        <style>
            #wrapper {
                text-align: center;
                margin: 0 auto;
                padding: 0px;
            }

            #output_image {
                width: 230px;
                height: 260px;
                border: 1px solid black;
            }
        </style>

        <!-- view  start -->
        <?php
        $student_id = $stitle = $full_name = $ini_name = $gender = $civil = $email = $nic = $dob = $phone = $address = $ds =
            $district = $province = $zip = $blood = $gname = $gaddress = $gphone = $grelation = $regno = $cid = $bid = $ayear =
            $mode = $status = $enrolldate = $exitdate = null;
        if (isset($_GET['view'])) {
            $student_id = $_GET['view'];

            // $sql_student = "SELECT * FROM `student` LEFT JOIN `student_enroll`
            // ON `student`.`id` = `student_enroll`.`id` LEFT JOIN `batches` ON 
            // `student_enroll`.`batch_no` = `batches`.`batch_no` LEFT JOIN `courses` ON
            //  `student_enroll`.`course_code` = `courses`.`code` WHERE 
            //  `batches`.`department_code`=`courses`.`department_code` AND 
            //  `batches`.`NVQ_level`=`courses`.`NVQ_level` AND `student_enroll`.`id` = '$student_id'";

            $sql_student = "SELECT * FROM student 
            -- LEFT JOIN student_enroll
            -- ON `student`.`id` = `student_enroll`.`id`
            WHERE `student`.`id` = '$student_id'";

            $result_student = mysqli_query($con, $sql_student);
            $row = mysqli_fetch_assoc($result_student);
            if (mysqli_num_rows($result_student) == 1) {
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
                // $cid = $row['course_code'];
                // $bid = $row['batch_no'];
                // $mode = $row['course_mode'];
                // $status = $row['student_status'];
                // $enrolldate = $row['enroll_date'];
                // $exitdate = $row['exit_date'];
                // $ayear = $row['Academic_year'];
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
                                <div class='col-2'>
                                    <a class='btn btn-outline-warning' href="student.php?edit=<?php echo $student_id; ?>">Edit</a>
                                </div>
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

                                <div class='col-3'>
                                    <div style='text-align:center; margin:0 auto; padding:0px;'>
                                        <?php
                                        if (isset($_GET['view'])) {
                                            $result = $con->query("SELECT * FROM `student_image` WHERE id = '$student_id'");
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                        ?>
                                                    <img id="output_image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
                                            <?php
                                                }
                                            }
                                            ?>
                                        <?php
                                        } else {
                                        ?>
                                            <img id="output_image">
                                        <?php
                                        }
                                        ?>
                                    </div>

                                    <!-- <div>aefsdfs</div>
                                    <div>aefsdfs</div>
                                    <div>aefsdfs</div> -->
                                </div>
                                
                                <div class='col-9'>

                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="border-bottom border-primary">
                                                <h3>Personal Information</h3>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class='row border-bottom'>
                                        <div class='col-3'><label for="fullname"> Full Name: </label></div>
                                        <div class='col-9'><label for="fullname"><?php echo $full_name; ?></label></div>
                                    </div>

                                    <div class='row border-bottom'>
                                        <div class='col-3'><label for="ini_name"> Name with Initials: </label></div>
                                        <div class='col-3'><label for="ini_name"><?php echo $ini_name; ?></label></div>
                                        <div class='col-2'><label for="gender"> Gender: </label></div>
                                        <div class='col-4'><label for="gender"><?php echo $gender; ?></label></div>
                                    </div>

                                    <div class='row border-bottom'>
                                        <div class='col-3'><label for="civil"> Civil Status: </label></div>
                                        <div class='col-3'><label for="civil"><?php echo $civil; ?></label></div>
                                        <div class='col-2'><label for="email"> Email: </label></div>
                                        <div class='col-4'><label for="email"><?php echo $email; ?></label></div>
                                    </div>

                                    <div class='row border-bottom'>
                                        <div class='col-3'><label for="dob"> Date of Birth: </label></div>
                                        <div class='col-3'><label for="dob"><?php echo $dob; ?></label></div>
                                        <div class='col-3'><label for="phone"> Phone No: </label></div>
                                        <div class='col-3'><label for="phone"><?php echo $phone; ?></label></div>
                                    </div>

                                    <div class='row border-bottom'>
                                        <div class='col-3'><label for="address"> Address: </label></div>
                                        <div class='col-9'><label for="address"><?php echo $address; ?></label></div>
                                    </div>

                                    <div class='row border-bottom'>
                                        <div class='col-3'><label for="ds"> Divisional Secretariat: </label></div>
                                        <div class='col-3'><label for="ds"><?php echo $ds; ?></label></div>
                                        <div class='col-3'><label for="province"> Province: </label></div>
                                        <div class='col-3'><label for="province"><?php echo $province; ?></label></div>
                                    </div>

                                    <div class='row border-bottom'>
                                        <div class='col-2'><label for="district"> District: </label></div>
                                        <div class='col-2'><label for="district"><?php echo $district; ?></label></div>
                                        <div class='col-2'><label for="zip"> ZIP-Code: </label></div>
                                        <div class='col-2'><label for="zip"><?php echo $zip; ?></label></div>
                                        <div class='col-2'><label for="blood"> Blood Group: </label></div>
                                        <div class='col-2'><label for="blood"><?php echo $blood; ?></label></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="border-bottom border-primary">
                                                <h3>Emergency Contact Information</h3>
                                            </div>
                                        </div>
                                    </div><br>

                                    <div class='row border-bottom'>
                                        <div class='col-3 '><label for="gname">Guardian Name :</label></div>
                                        <div class='col-3'><label for="gname"><?php echo $gname; ?></label></div>                
                                    </div>

                                    <div class='row border-bottom'>
                                        <div class='col-3'><label for="grelation">Guardian Relationship :</label></div>
                                        <div class='col-3'><label for="grelation"><?php echo $grelation; ?></label></div>
                                        <div class='col-3'><label for="gphone">Guardian Phone No :</label></div>
                                        <div class='col-3'><label for="gphone"><?php echo $gphone; ?></label></div>
                                    </div>

                                    <div class='row border-bottom'>
                                        <div class='col-3'><label for="gaddress">Guardian Address :</label></div>
                                        <div class='col-9'><label for="gaddress"><?php echo $gaddress; ?></label></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="border-bottom border-primary">
                                                <h3>Enroll Information</h3>
                                            </div>
                                        </div>
                                    </div><br>

                                    <!-- 1st row start -->
                                    <div class="row">
                                        <div class="form-group col-md-12 table-responsive">
                                            <table class='table align-middle'>
                                                <thead class='thead-light'>
                                                    <tr>
                                                        <td scope='col'>Course</td>
                                                        <td scope='col'>Batch</td>
                                                        <td scope='col'>Course Mode</td>
                                                        <td scope='col'>Status</td>
                                                        <td scope='col'>Enroll Date</td>
                                                        <td scope='col'>Exit Date</td>
                                                        <!-- <td scope='col'>ACTIONS</td> -->
                                                    </tr>
                                                    <?php
                                                    $sql = "SELECT * FROM student_enroll WHERE id = '$student_id' ORDER BY course_code desc";
                                                    $result = mysqli_query($con, $sql);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                        <tr>
                                                            <td scope='col'>
                                                                <?php echo $row['course_code']; ?>
                                                            </td>
                                                            <td scope='col'>
                                                                <?php echo $row['batch_no']; ?>
                                                            </td>
                                                            <td scope='col'>
                                                                <?php echo $row['course_mode']; ?>
                                                            </td>
                                                            <td scope='col'>
                                                                <?php echo $row['student_status']; ?>
                                                            </td>
                                                            <td scope='col'>
                                                                <?php echo $row['enroll_date']; ?>
                                                            </td>
                                                            <td scope='col'>
                                                                <?php echo $row['exit_date']; ?>
                                                            </td>
                                                            <!-- <td scope='col'>
                                                                <a class="btn btn-outline-warning btn-sm" href="student.php?eedit=<?php echo $row['id']; ?>">Edit</a>
                                                                <a class="btn btn-outline-danger btn-sm disabled" href="?edelete=<?php echo $row['id']; ?>">Delete</a>
                                                            </td> -->
                                                        <?php
                                                    }
                                                        ?>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- 1st row end -->

                                </div>
                            </div><br>

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
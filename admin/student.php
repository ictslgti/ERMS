<?php
$title = "Add Student | Online Examination Result Management System | SLGTI";
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
            <!-- insert  start-->
            <?php
            if(
                isset($_POST['add'])  
                && !empty($_POST['regno'])
                && !empty($_POST['title'])
                && !empty($_POST['fullname'])
                && !empty($_POST['ini_name']) 
                && !empty($_POST['gender']) 
                && !empty($_POST['civil']) 
                && !empty($_POST['email']) 
                && !empty($_POST['nic']) 
                && !empty($_POST['dob']) 
                && !empty($_POST['phone']) 
                && !empty($_POST['address']) 
                && !empty($_POST['ds'])
                && !empty($_POST['district']) 
                && !empty($_POST['province']) 
                && !empty($_POST['zip'])
                && !empty($_POST['blood']) 
                && !empty($_POST['gname'])
                && !empty($_POST['gaddress']) 
                && !empty($_POST['gphone']) 
                && !empty($_POST['grelation'])
            )
            {
                $regno = $_POST['regno'];
                $title = $_POST['title'];
                $fullname = $_POST['fullname'];
                $ini_name = $_POST['ini_name'];
                $gender = $_POST['gender'];
                $civil = $_POST['civil'];
                $email = $_POST['email'];
                $nic = $_POST['nic'];
                $dob = $_POST['dob'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $ds = $_POST['ds'];
                $district = $_POST['district'];
                $province = $_POST['province'];
                $zip = $_POST['zip'];
                $blood = $_POST['blood'];
                $gname = $_POST['gname'];
                $gaddress = $_POST['gaddress'];
                $gphone = $_POST['gphone'];
                $grelation = $_POST['grelation'];

                $sqlstudent = "INSERT INTO student (id, title, full_name, name_with_initials, gender, civil_status, email, nic, date_of_birth, 
                phone_no, address, divisional_secretariat, district, province, zip_code, blood_group, guardian_name, guardian_address, guardian_phone_no,
                guardian_relationship) VALUES 
                ('$regno','$title','$fullname','$ini_name','$gender','$civil','$email','$nic','$dob','$phone',
                '$address','$ds','$district','$province','$zip','$blood','$gname','$gaddress','$gphone','$grelation')";

            if (mysqli_query($con,$sqlstudent)) 
            {
                echo '<div class="alert alert-success" role="alert">
                New record created successfully
                Insert Successfully
                </div>';
                } else 
                {
                    echo "Error: " . $sqlstudent . "<br>" . mysqli_error($con);
                }
            }

            if(
                isset($_POST['add'])
                && !empty($_POST['regno']) 
                && !empty($_POST['cid'])
                && !empty($_POST['ayear']) 
                && !empty($_POST['mode']) 
                && !empty($_POST['status']) 
                && !empty($_POST['enrolldate']) 
                && !empty($_POST['exitdate']))
                {
                    $regno = $_POST['regno'];
                    $cid=$_POST['cid'];
                    $ayear=$_POST['ayear'];
                    $mode=$_POST['mode'];
                    $status=$_POST['status'];
                    $enrolldate=$_POST['enrolldate'];
                    $exitdate=$_POST['exitdate'];

                    $sqlenroll = "INSERT INTO student_enroll (id, course_id, academic_year, course_mode, student_status,
                    enroll_date, exit_date) VALUES ('$regno','$cid','$ayear','$mode','$status','$enrolldate','$exitdate')";

                        if(mysqli_query($con,$sqlenroll))
                        {
                        // echo '<div class="alert alert-success" role="alert">
                        // Record Insert Successfully
                        // </div>';
                        }
                        else
                        {
                        echo "Error: " . $sqlenroll . "<br>" . mysqli_error($con);
                        }
                }
            ?>
            <!-- insert  end -->

            <!-- edit  start -->
            <?php
            $full_name = null;
            if (isset($_GET['edit'])) {
                $student_id = $_GET['edit'];
                $sql_student = "SELECT * FROM student LEFT JOIN student_enroll
                ON `student`.`id` = `student_enroll`.`id`
                WHERE `student`.`id` = '$student_id'";
                $result_student = mysqli_query($con, $sql_student);
                $row_fullname = mysqli_fetch_assoc($result_student);
                if (mysqli_num_rows($result_student) == 1 ) {
                    $full_name = $row_fullname['full_name'];
                }   
            }
                ?>
            <!-- insert  end -->

        <main class="">
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
                </div><br>

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
                <!-- 1st row end -->

                <form method="POST" action="student.php">
                <!-- 2 row start -->
                <div class="row">
                <div class="col-sm">
                <div class="border-bottom border-primary">
                <h3>Personal Information</h3>
                </div>
                </div>
                </div><br>

                <!-- 1st row start -->
                    <div class="form-row">

                    <div class="col-2">
                    <label for="title"> Title: </label>
                    <select name="title" class="custom-select" required>
                    <option selected disabled>Choose</option>
                    <option value="Mr">Mr</option> 
                    <option value="Miss">Miss</option>
                    <option value="Mrs">Mrs</option>
                    </select>
                    </div>

                    <div class="col-7">
                    <label for="fullname"> Full Name: </label>
                    <input type="text" class="form-control" name="fullname" placeholder="Sathyaseelan Sathursan" value="<?php echo $student_name; ?>" required>
                    </div>

                    <div class="col-3">
                    <label for="ini_name"> Name with Initials: </label>
                    <input type="text" class="form-control" name="ini_name" placeholder="S.Sathursan" required>
                    </div>

                    </div>
                <!-- 1st row end -->

                <!-- 2nd row start -->
                    <div class="form-row">

                    <div class="col-2">
                    <label for="custom-select"> Gender: </label>
                    <select name="gender" class="custom-select" required>
                    <option selected disabled>Choose</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
                    </div>

                    <div class="col-2">
                    <label for="civil"> Civil Status: </label>
                    <select name="civil" class="custom-select" required>
                    <option selected disabled>Choose</option>
                    <option value="Single">Single</option> 
                    <option value="Married">Married</option>
                    </select>
                    </div>

                    <div class="col-3">
                    <label for="email"> Email: </label>
                    <div class="input-group-prepend">
                    <input type="email" class="form-control" name="email" placeholder="ab2237243@gmail.com"  required>
                    </div>
                    </div>

                    <div class="col-2">
                    <label for="nic"> NIC: </label>
                    <input type="text" class="form-control" name="nic" max="12" min="10" placeholder="980000000V"  required>
                    </div>

                    <div class="col-3">
                    <label for="dob"> Date of Birth: </label>
                    <input type="date" class="form-control" name="dob" required>
                    </div>

                    </div>
                <!-- 2nd row end -->

                <!-- 3rd row start -->
                <div class="form-row">

                    <div class="col-3">
                    <label for="phone"> Phone No: </label>
                    <input type="tel" class="form-control" name="phone" maxlength="10" minlength="10" placeholder="0700000000"  required>
                    </div>

                    <div class="col-6">
                    <label for="address"> Address: </label>
                    <input type="textarea" class="form-control" name="address" placeholder="No, Street, Hometown."  required>
                    </div>

                    <div class="col-3">
                    <label for="ds"> Divisional Secretariat: </label>
                    <input type="text" name="ds" class="form-control" placeholder="Thirukkovil"  required>
                    </div>

                </div>
                <!-- 3rd row end -->

                <!-- 4th row start -->
                <div class="form-row">

                    <div class="col-3">
                    <label for="district"> District: </label>
                    <select class="custom-select" name="district" data-live-search="true" data-width="100%" required>
                    <option value=""> Choose</option>
                    <option value="Ampara"> Ampara </option>
                    <option value="Batticalo"> Batticaloa </option>
                    <option value="Trincomalee"> Trincomalee </option>
                    <option value="Jaffna"> Jaffna </option>
                    <option value="Vavuniya"> Vavuniya </option>
                    <option value="Killinochchi"> Killinochchi  </option>
                    <option value="Mullaitivu"> Mullaitivu </option>
                    <option value="Mannar"> Mannar </option>
                    <option value="Puttalam"> Puttalam </option>
                    <option value="Kurunegala"> Kurunegala </option>
                    <option value="Gampaha"> Gampaha </option>
                    <option value="Colombo"> Colombo </option>
                    <option value="Kalutara"> Kalutara </option>
                    <option value="Anuradhapura"> Anuradhapura </option>
                    <option value="Polonnaruwa"> Polonnaruwa </option>
                    <option value="Matale"> Matale	 </option>
                    <option value="Kandy"> Kandy </option>
                    <option value="Nuwara Eliya"> Nuwara Eliya </option>
                    <option value="Kegalle"> Kegalle </option>
                    <option value="Ratnapura"> Ratnapura </option>
                    <option value="Badulla"> Badulla </option>
                    <option value="Monaragala"> Monaragala </option>
                    <option value="Hambantota"> Hambantota </option>
                    <option value="Matara"> Matara </option>
                    <option value="Galle"> Galle </option>
                    </select>
                    </div>

                    <div class="col-3">
                    <label for="province"> Province: </label>
                    <select name="province" class="custom-select" required>
                    <option value=""> Choose</option>
                    <option value="Central"> Central </option>
                    <option value="Eastern"> Eastern </option>
                    <option value="Northen"> Northen </option>
                    <option value="Southern"> Southern </option>
                    <option value="Western"> Western </option>
                    <option value="North Western"> North Western </option>
                    <option value="North Central"> North Central </option>
                    <option value="Uva"> Uva </option>
                    <option value="Sabaragamuwa"> Sabaragamuwa </option>
                    </select>
                    </div>

                    <div class="col-2">
                    <label for="zip"> ZIP-Code:</label>
                    <input type="text" class="form-control" name="zip" placeholder="32420">
                    </div>

                    <div class="col-2">
                    <label for="blood"> Blood Group: </label>
                    <select name="blood" class="custom-select" required>
                    <option selected disabled> Choose</option>
                    <option value="A+"> A+ </option>
                    <option value="A-"> A- </option>
                    <option value="B+"> B+ </option>
                    <option value="B-"> B- </option>
                    <option value="C+"> C+ </option>
                    <option value="C-"> C- </option>
                    <option value="C-"> O+ </option>
                    <option value="C-"> O- </option>
                    <option value="AB+"> AB+ </option>
                    <option value="AB-"> AB- </option> 
                    </select>
                    </div>

                </div>
                <!-- 4th row end -->

                <!-- 5th row start -->
                <div class="form-row">



                </div>
                <!-- 5th row end -->
                <br>  
                <!-- 2 row end -->

                <!-- 3 row start -->
                <div class="row">
                <div class="col-sm">
                <div class="border-bottom border-primary">
                <h3>Enroll Information</h3>
                </div>
                </div>
                </div><br>

                
                
                <div class="form-row">

                    <div class="col-3">
                    <label for="cid"> Course Name: </label>
                    <select name="cid" class="custom-select" required>
                    <option selected disabled> Choose</option>
                    <option value="A+"> A+ </option>
                    <option value="A-"> A- </option>
                    <option value="B+"> B+ </option>
                    
                    </select>
                    </div>

                    <div class="col-3">
                    <label for="ayear"> Academic Year: </label>
                    <select name="ayear" class="custom-select" data-live-search="true" data-width="100%" required>
                    <option selected disabled> Choose</option>
                    <option value="A+"> A+ </option>
                    <option value="A-"> A- </option>
                    <option value="B+"> B+ </option>
                    
                    </select>
                    </div>

                    <div class="col-3">
                    <label for="mode"> Course Mode: </label>
                    <select name="mode" class="custom-select" required>
                    <option selected disabled> Choose</option>
                    <option value="Full">Full Time</option> 
                    <option value="Part">Part Time</option>
                    <option value="sort">Sort Time</option>
                    </select>
                    </div>

                    <div class="col-3">
                    <label for="regno"> Registration No: </label>
                    <input type="text" name="regno" class="form-control" placeholder="2018SLGTIBIT04" required>
                    </div>

                </div>
                <!-- 1st row end -->

                <!-- 2nd row start -->
                <div class="form-row">

                    <div class="col-3">
                    <label for="status"> Status:</label>
                    <select name="status" class="custom-select" required>
                    <option selected disabled>Choose</option>
                    <option value="Following">Following</option> 
                    <option value="Completed">Completed</option>
                    <option value="Dropout">Dropout</option>
                    <option value="Long Absent">Long Absent</option>
                    </select>
                    </div>

                    <div class="col-3">
                    <label for="enrolldate"> Enroll Date:</label>
                    <input type="date" class="form-control" name="enrolldate" required>
                    </div>

                    <div class="col-3">
                    <label for="exitdate"> Exit Date:</label>
                    <input type="date" class="form-control" name="exitdate" required>
                    </div> 

                </div>
                <!-- 2nd row end -->
                <br>
                <!-- 3 row end -->

                <!-- 4 row start -->
                <div class="row">
                <div class="col-sm">
                <div class="border-bottom border-primary">
                <h3>Emergency Contact Information</h3>
                </div>
                </div>
                </div><br>

                
                
                <div class="form-row">

                    <div class="col-3">
                    <label for="gname">Name :</label>
                    <input type="text" class="form-control" name="gname" placeholder="S Sathyaraj">
                    </div>

                    <div class="col-6">
                    <label for="gaddress">Address :</label>
                    <input type="text" class="form-control" name="gaddress" placeholder="117, Old Post Office Road, Vinayagapuram 02. Thirukkovil.">
                    </div>

                    <div class="col-3">
                    <label for="gphone">Phone No :</label>
                    <input type="tel" class="form-control" maxlength="10" minlength="10" name="gphone" placeholder="0700000000">
                    </div>

                </div>
                <!-- 1st row end -->

                <!-- 2nd row start -->
                <div class="form-row">

                    <div class="col-3">
                    <label for="grelation">Relationship :</label>
                    <select name="grelation" class="custom-select">
                    <option value=""> Choose Relationship</option>
                    <option value="mother"> Mother </option>
                    <option value="father"> Father </option>
                    <option value="brother"> Brother </option>
                    <option value="sister"> Sister </option>
                    <option value="guardian"> Guardian </option>
                    </select>
                    </div>

                </div>

                <div class="row">
                     <div class="col-11 "></div>
                     <div class="col-1">
                     <?php
                     if (isset($_GET['edit'])){
                         echo '<button type="submit" name="update" class="btn btn-outline-success">Update</button>';
                        }
                        else{
                            echo '<button type="submit" name="add" class="btn btn-outline-success">Add</button>';
                        }
                        ?>
                     </div>
                     </div>
                <!-- 2nd row end -->
                </form><br>
                <!-- 4 row end -->

                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>


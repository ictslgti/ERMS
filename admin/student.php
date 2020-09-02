<?php
$title = "Add Student | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result Management System (ERMS)-SLGTI";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../head.php"); ?>
    <?php include_once('../databases/config.php'); ?>

    <!-- Image-->
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
        #output_image {
            width: 0px;
            height: 0px;
            border: 0px solid black;
        }
    </style>
    <!-- Image-->

    <!-- for province ditrict filter-->
    <script src="/scripts/snippet-javascript-console.min.js?v=1"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- for province ditrict filter-->

</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <?php include_once("nav.php"); ?>

        <!-- insert  start-->
        <?php
        if (
            isset($_POST['add'])
            && !empty($_POST['regno'])
            && !empty($_POST['stitle'])
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
        ) {
            $regno = $_POST['regno'];
            $stitle = $_POST['stitle'];
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
                ('$regno','$stitle','$fullname','$ini_name','$gender','$civil','$email','$nic','$dob','$phone',
                '$address','$ds','$district','$province','$zip','$blood','$gname','$gaddress','$gphone','$grelation')";

            if (mysqli_query($con, $sqlstudent)) {
                echo '<div class="alert alert-success" role="alert">
                New record created successfully';
            } else {
                echo '<div class="alert alert-warning" role="alert">insert  ' . $sqlstudent . "<br>" . mysqli_error($con);
            }
        }

        if (
            isset($_POST['add'])
            && !empty($_POST['regno'])
            && !empty($_POST['cid'])
            && !empty($_POST['bid'])
            && !empty($_POST['ayear'])
            && !empty($_POST['mode'])
            && !empty($_POST['status'])
            && !empty($_POST['enrolldate'])
            && !empty($_POST['exitdate'])
        ) {
            $regno = $_POST['regno'];
            $cid = $_POST['cid'];
            $bid = $_POST['bid'];
            $ayear = $_POST['ayear'];
            $mode = $_POST['mode'];
            $status = $_POST['status'];
            $enrolldate = $_POST['enrolldate'];
            $exitdate = $_POST['exitdate'];

            $sqlenroll = "INSERT INTO student_enroll (id, course_id, batch_no, academic_year, course_mode, student_status,
                    enroll_date, exit_date) VALUES ('$regno','$cid','$bid','$ayear','$mode','$status','$enrolldate','$exitdate')";

            if (mysqli_query($con, $sqlenroll)) {
                echo 'And Insert Successfully
                    </div><button type="button" class="close" href="student.php" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                 </button>';
            } else {
                echo 'Error: </div> <button type="button" class="close" href="student.php" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button></div>' . $sqlenroll . "<br>" . mysqli_error($con);
            }
        }

        $id = null;
        $image = null;
        if (
            isset($_POST['add'])
            && !empty($_POST['regno'])
        ) {

            $regno = $_POST['regno'];
            $sta = $statusMsg = '';
            $sta = 'error';

            if (!empty($_FILES["image"]["name"])) {
                // Get file info 
                $fileName = basename($_FILES["image"]["name"]);
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                // Allow certain file formats 
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                if (in_array($fileType, $allowTypes)) {
                    $image = $_FILES['image']['tmp_name'];
                    $imgContent = addslashes(file_get_contents($image));
                    $sql = "INSERT INTO images (id,image) VALUES ('$id','$imgContent')";

                    if (mysqli_query($con, $sql)) {
                        echo "";
                    } else {

                        echo "";
                    }
                } else {
                    $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
                }
            } else {
                $statusMsg = 'Please select an image file to upload.';
            }
        }

        ?>
        <!-- insert  end -->

        <!-- edit  start -->
        <?php
        $student_id = $stitle = $full_name = $ini_name = $gender = $civil = $email = $nic = $dob = $phone = $address = $ds =
            $district = $province = $zip = $blood = $gname = $gaddress = $gphone = $grelation = $regno = $bid = $cid = $ayear =
            $mode = $status = $enrolldate = $exitdate = null;
        if (isset($_GET['edit'])) {
            $student_id = $_GET['edit'];
            $sql_student = "SELECT * FROM student LEFT JOIN student_enroll
                ON `student`.`id` = `student_enroll`.`id`
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
                $cid = $row['course_id'];
                $bid = $row['batch_no'];
                $ayear = $row['academic_year'];
                $mode = $row['course_mode'];
                $status = $row['student_status'];
                $enrolldate = $row['enroll_date'];
                $exitdate = $row['exit_date'];
            }
        }
        //update
        if (
            isset($_POST['update'])
            && !empty($_POST['stitle'])
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
            && !empty($_POST['img'])
            && !empty($_POST['gname'])
            && !empty($_POST['gaddress'])
            && !empty($_POST['gphone'])
            && !empty($_POST['grelation'])
        ) {
            $stitle = $_POST['stitle'];
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
            $img = $_POST['img'];
            $gname = $_POST['gname'];
            $gaddress = $_POST['gaddress'];
            $gphone = $_POST['gphone'];
            $grelation = $_POST['grelation'];

            $sql_students = "UPDATE `student` SET `title` = '$stitle', `full_name` = '$fullname', 
                    `name_with_initials` = '$ini_name', `gender` ='$gender', `civil_status` = '$civil', `email` = '$email', 
                    `nic` = '$nic', `date_of_birth` = '$dob', `phone_no` = '$phone', `address` = '$address', 
                    `divisional_secretariat` = '$ds', `district` = '$district', `province` = '$province', 
                    `zip_code` = '$zip', `blood_group` = '$blood', `guardian_name` = '$gname', 
                    `guardian_address` = '$gaddress', `guardian_phone_no` = '$gphone', `guardian_relationship` = '$grelation'
                    WHERE `student`.`id` = '$student_id'";

            if (mysqli_query($con, $sql_students)) {
                echo '<div class="alert alert-success" role="alert">
                                    Successfully Updated!
                                    </div> <button type="button" class="close" href="student.php" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                 </button></div>';
            } else {
                echo '<div class="alert alert-warning" role="alert"> Error updating record:' . $sql_students
                    . mysqli_error($con);
            }
        }

        if (
            isset($_POST['update'])
            && !empty($_POST['cid'])
            && !empty($_POST['bid'])
            && !empty($_POST['ayear'])
            && !empty($_POST['mode'])
            && !empty($_POST['status'])
            && !empty($_POST['enrolldate'])
            && !empty($_POST['exitdate'])
        ) {
            $cid = $_POST['cid'];
            $bid = $_POST['bid'];
            $ayear = $_POST['ayear'];
            $mode = $_POST['mode'];
            $status = $_POST['status'];
            $enrolldate = $_POST['enrolldate'];
            $exitdate = $_POST['exitdate'];

            $sqlenrolls = "UPDATE `student_enroll` SET `course_id` = '$cid', `batch_no` = '$bid', `academic_year` = '$ayear', `course_mode` = '$mode',
            `student_status` = '$status', `enroll_date` = '$enrolldate', `exit_date` = '$exitdate'  WHERE `student_enroll`.`id` = '$student_id'";

            if (mysqli_query($con, $sqlenrolls)) {
                // echo $sqlenrolls.'<div class="alert alert-success" role="alert">
                // And Insert Successfully
                // </div>';

            } else {
                echo ' And Failed: </div>' . $sqlenrolls
                    . mysqli_error($con);
            }
        }

        ?>
        <!-- edit  end -->

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
                                <div class="col-3">
                                </div>
                                <div class='col-1'>
                                    <a class='btn btn-outline-primary' href='./students.php'>ALL</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <h6 class="card-title">
                            </h6>

                            <!-- 1st row end -->

                            <form method="POST" action="">
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
                                        <label for="stitle"> Title: </label>
                                        <select name="stitle" class="custom-select" value="<?php echo $stitle; ?>" required>
                                            <option selected disabled>Choose</option>
                                            <option value="Mr" <?php if ($stitle == "Mr") echo 'selected'; ?>>Mr</option>
                                            <option value="Miss" <?php if ($stitle == "Miss") echo 'selected'; ?>>Miss</option>
                                            <option value="Mrs" <?php if ($stitle == "Mrs") echo 'selected'; ?>>Mrs</option>
                                        </select>
                                    </div>

                                    <div class="col-7">
                                        <label for="fullname"> Full Name: </label>
                                        <input type="text" class="form-control" name="fullname" placeholder="Sathyaseelan Sathursan" value="<?php echo $full_name; ?>" required>
                                    </div>

                                    <div class="col-3">
                                        <label for="ini_name"> Name with Initials: </label>
                                        <input type="text" class="form-control" name="ini_name" placeholder="S.Sathursan" value="<?php echo $ini_name; ?>" required>
                                    </div>

                                </div>
                                <!-- 1st row end -->

                                <!-- 2nd row start -->
                                <div class="form-row">

                                    <div class="col-2">
                                        <label for="custom-select"> Gender: </label>
                                        <select name="gender" class="custom-select" value="<?php echo $gender; ?>" required>
                                            <option selected disabled>Choose</option>
                                            <option value="Male" <?php if ($gender == "Male")  echo 'selected'; ?>>Male</option>
                                            <option value="Female" <?php if ($gender == "Female")  echo 'selected'; ?>>Female</option>
                                        </select>
                                    </div>

                                    <div class="col-2">
                                        <label for="civil"> Civil Status: </label>
                                        <select name="civil" class="custom-select" value="<?php echo $civil; ?>" required>
                                            <option selected disabled>Choose</option>
                                            <option value="Single" <?php if ($civil == "Single")  echo 'selected'; ?>>Single</option>
                                            <option value="Married" <?php if ($civil == "Married")  echo 'selected'; ?>>Married</option>
                                        </select>
                                    </div>

                                    <div class="col-3">
                                        <label for="email"> Email: </label>
                                        <div class="input-group-prepend">
                                            <input type="email" class="form-control" name="email" placeholder="ab2237243@gmail.com" value="<?php echo $email; ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <label for="nic"> NIC: </label>
                                        <input type="text" class="form-control" name="nic" max="12" min="10" placeholder="980000000V" value="<?php echo $nic; ?>" required>
                                    </div>

                                    <div class="col-3">
                                        <label for="dob"> Date of Birth: </label>
                                        <input type="date" class="form-control" name="dob" value="<?php echo $dob; ?>" required>
                                    </div>

                                </div>
                                <!-- 2nd row end -->

                                <!-- 3rd row start -->
                                <div class="form-row">

                                    <div class="col-3">
                                        <label for="phone"> Phone No: </label>
                                        <input type="tel" class="form-control" name="phone" maxlength="10" minlength="10" placeholder="0700000000" value="<?php echo $phone; ?>" required>
                                    </div>

                                    <div class="col-6">
                                        <label for="address"> Address: </label>
                                        <input type="textarea" class="form-control" name="address" placeholder="No, Street, Hometown." value="<?php echo $address; ?>" required>
                                    </div>

                                    <div class="col-3">
                                        <label for="ds"> Divisional Secretariat: </label>
                                        <input type="text" name="ds" class="form-control" placeholder="Thirukkovil" value="<?php echo $ds; ?>" required>
                                    </div>

                                </div>
                                <!-- 3rd row end -->

                                <!-- 4th row start -->
                                <div class="form-row">

                                    <div class="col-3">
                                        <label for="province"> Province: </label>
                                        <select name="province" id="province" class="custom-select" value="<?php echo $province; ?>" required>
                                            <option value=""> Choose</option>
                                            <option value="Central" <?php if ($province == "Central")  echo 'selected'; ?>> Central </option>
                                            <option value="Eastern" <?php if ($province == "Eastern")  echo 'selected'; ?>> Eastern </option>
                                            <option value="Northern" <?php if ($province == "Northen")  echo 'selected'; ?>> Northern </option>
                                            <option value="Southern" <?php if ($province == "Southern")  echo 'selected'; ?>> Southern </option>
                                            <option value="Western" <?php if ($province == "Western")  echo 'selected'; ?>> Western </option>
                                            <option value="North Western" <?php if ($province == "North Western")  echo 'selected'; ?>> North Western </option>
                                            <option value="North Central" <?php if ($province == "North Central")  echo 'selected'; ?>> North Central </option>
                                            <option value="Uva" <?php if ($province == "Uva")  echo 'selected'; ?>> Uva </option>
                                            <option value="Sabaragamuwa" <?php if ($province == "Sabaragamuwa")  echo 'selected'; ?>> Sabaragamuwa </option>
                                        </select>
                                    </div>

                                    <div class="col-3">
                                        <label for="district"> District: </label>
                                        <select class="custom-select" name="district" id="district" data-live-search="true" data-width="100%" value="<?php echo $district; ?>" required>
                                            <option value=""> Choose</option>
                                            <option value="Ampara" data-val="Eastern" <?php if ($district == "Ampara")  echo 'selected'; ?>> Ampara </option>
                                            <option value="Batticalo" data-val="Eastern" <?php if ($district == "Batticalo")  echo 'selected'; ?>> Batticalo </option>
                                            <option value="Trincomalee" data-val="Eastern" <?php if ($district == "Trincomalee")  echo 'selected'; ?>> Trincomalee </option>
                                            <option value="Jaffna" data-val="Northern" <?php if ($district == "Jaffna")  echo 'selected'; ?>> Jaffna </option>
                                            <option value="Vavuniya" data-val="Northern" <?php if ($district == "Vavuniya")  echo 'selected'; ?>> Vavuniya </option>
                                            <option value="Killinochchi" data-val="Northern" <?php if ($district == "Killinochchi")  echo 'selected'; ?>> Killinochchi </option>
                                            <option value="Mullaitivu" data-val="Northern" <?php if ($district == "Mullaitivu")  echo 'selected'; ?>> Mullaitivu </option>
                                            <option value="Mannar" data-val="Northern" <?php if ($district == "Mannar")  echo 'selected'; ?>> Mannar </option>
                                            <option value="Puttalam" data-val="North Western" <?php if ($district == "Puttalam")  echo 'selected'; ?>> Puttalam </option>
                                            <option value="Kurunegala" data-val="North Western" <?php if ($district == "Kurunegala")  echo 'selected'; ?>> Kurunegala </option>
                                            <option value="Gampaha" data-val="Western" <?php if ($district == "Gampaha")  echo 'selected'; ?>> Gampaha </option>
                                            <option value="Colombo" data-val="Western" <?php if ($district == "Colombo")  echo 'selected'; ?>> Colombo </option>
                                            <option value="Kalutara" data-val="Western" <?php if ($district == "Kalutara")  echo 'selected'; ?>> Kalutara </option>
                                            <option value="Anuradhapura" data-val="North Central" <?php if ($district == "Anuradhapura")  echo 'selected'; ?>> Anuradhapura </option>
                                            <option value="Polonnaruwa" data-val="North Central" <?php if ($district == "Polonnaruwa")  echo 'selected'; ?>> Polonnaruwa </option>
                                            <option value="Matale" data-val="Central" <?php if ($district == "Matale")  echo 'selected'; ?>> Matale </option>
                                            <option value="Kandy" data-val="Central" <?php if ($district == "Kandy")  echo 'selected'; ?>> Kandy </option>
                                            <option value="Nuwara Eliya" data-val="Central" <?php if ($district == "Nuwara Eliya")  echo 'selected'; ?>> Nuwara Eliya </option>
                                            <option value="Kegalle" data-val="Sabaragamuwa" <?php if ($district == "Kegalle")  echo 'selected'; ?>> Kegalle </option>
                                            <option value="Ratnapura" data-val="Sabaragamuwa" <?php if ($district == "Ratnapura")  echo 'selected'; ?>> Ratnapura </option>
                                            <option value="Badulla" data-val="Uva" <?php if ($district == "Badulla")  echo 'selected'; ?>> Badulla </option>
                                            <option value="Monaragala" data-val="Uva" <?php if ($district == "Monaragala")  echo 'selected'; ?>> Monaragala </option>
                                            <option value="Hambantota" data-val="Southern" <?php if ($district == "Hambantota")  echo 'selected'; ?>> Hambantota </option>
                                            <option value="Matara" data-val="Southern" <?php if ($district == "Matara")  echo 'selected'; ?>> Matara </option>
                                            <option value="Galle" data-val="Southern" <?php if ($district == "Galle")  echo 'selected'; ?>> Galle </option>
                                        </select>
                                    </div>

                                    <!-- for province ditrict filter-->
                                    <script type="text/javascript">
                                        // get first dropdown and bind change event handler
                                        $('#province').change(function() {
                                            // get optios of second dropdown and cache it
                                            var $options = $('#district')
                                                // update the dropdown value if necessary
                                                .val('')
                                                // get options
                                                .find('option')
                                                // show all of the initially
                                                .show();
                                            // check current value is not 0
                                            if (this.value != '0')
                                                $options
                                                // filter out options which is not corresponds to the first option
                                                .not('[data-val="' + this.value + '"],[data-val=""]')
                                                // hide them
                                                .hide();
                                        })
                                    </script>
                                    <!-- for province ditrict filter-->

                                    <div class="col-2">
                                        <label for="zip"> ZIP-Code:</label>
                                        <input type="text" class="form-control" name="zip" placeholder="32420" value="<?php echo $zip; ?>">
                                    </div>

                                    <div class="col-2">
                                        <label for="blood"> Blood Group: </label>
                                        <select name="blood" class="custom-select" value="<?php echo $blood; ?>" required>
                                            <option selected disabled> Choose</option>
                                            <option value="A+" <?php if ($blood == "A+")  echo 'selected'; ?>> A+ </option>
                                            <option value="A-" <?php if ($blood == "A-")  echo 'selected'; ?>> A- </option>
                                            <option value="B+" <?php if ($blood == "B+")  echo 'selected'; ?>> B+ </option>
                                            <option value="B-" <?php if ($blood == "B-")  echo 'selected'; ?>> B- </option>
                                            <option value="AB+" <?php if ($blood == "AB+")  echo 'selected'; ?>> AB+ </option>
                                            <option value="AB-" <?php if ($blood == "AB-")  echo 'selected'; ?>> AB- </option>
                                            <option value="O+" <?php if ($blood == "O+")  echo 'selected'; ?>> O+ </option>
                                            <option value="O-" <?php if ($blood == "O-")  echo 'selected'; ?>> O- </option>
                                        </select>
                                    </div>

                                    <div class="col-2">
                                        <label for="image"> Image: </label>
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="customFile" accept="image/*" onchange="preview_image(event)">
                                            <label class="custom-file-label" for="customFile"> Choose</label>
                                            <img id="output_image" />
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- 4th row end -->

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
                                        <select name="cid" class="custom-select" value="<?php echo $cid; ?>" required>
                                            <option selected disabled> Choose</option>
                                            <option value="A+" <?php if ($cid == "A+") echo 'selected'; ?>> A+ </option>
                                            <option value="A-" <?php if ($cid == "A-") echo 'selected'; ?>> A- </option>
                                            <option value="B+" <?php if ($cid == "B+") echo 'selected'; ?>> B+ </option>

                                        </select>
                                    </div>

                                    <div class="col-3">
                                        <label for="bid"> Batch No: </label>
                                        <select name="bid" class="custom-select" value="<?php echo $cid; ?>" required>
                                            <option selected disabled> Choose</option>
                                            <option value="01" <?php if ($bid == "01") echo 'selected'; ?>> 01 </option>
                                            <option value="02" <?php if ($bid == "02") echo 'selected'; ?>> 02 </option>
                                            <option value="03" <?php if ($bid == "03") echo 'selected'; ?>> 03 </option>

                                        </select>
                                    </div>

                                    <div class="col-3">
                                        <label for="ayear"> Academic Year: </label>
                                        <select name="ayear" class="custom-select" data-live-search="true" data-width="100%" value="<?php echo $ayear; ?>" required>
                                            <option selected disabled> Choose</option>
                                            <option value="A+" <?php if ($ayear == "A+") echo 'selected'; ?>> A+ </option>
                                            <option value="A-" <?php if ($ayear == "A-") echo 'selected'; ?>> A- </option>
                                            <option value="B+" <?php if ($ayear == "B+") echo 'selected'; ?>> B+ </option>

                                        </select>
                                    </div>

                                    <div class="col-3">
                                        <label for="mode"> Course Mode: </label>
                                        <select name="mode" class="custom-select" value="<?php echo $mode; ?>" required>
                                            <option selected disabled> Choose</option>
                                            <option value="Full" <?php if ($mode == "Full") echo 'selected'; ?>>Full Time</option>
                                            <option value="Part" <?php if ($mode == "Part") echo 'selected'; ?>>Part Time</option>
                                            <option value="sort" <?php if ($mode == "Sort") echo 'selected'; ?>>Sort Time</option>
                                        </select>
                                    </div>

                                </div>
                                <!-- 1st row end -->

                                <!-- 2nd row start -->
                                <div class="form-row">

                                    <div class="col-3">
                                        <label for="status"> Status:</label>
                                        <select name="status" class="custom-select" value="<?php echo $status; ?>" required>
                                            <option selected disabled>Choose</option>
                                            <option value="Following" <?php if ($status == "Following")  echo 'selected'; ?>>Following</option>
                                            <option value="Completed" <?php if ($status == "Completed")  echo 'selected'; ?>>Completed</option>
                                            <option value="Dropout" <?php if ($status == "Dropout")  echo 'selected'; ?>>Dropout</option>
                                            <option value="Long Absent" <?php if ($status == "Long Absent")  echo 'selected'; ?>>Long Absent</option>
                                        </select>
                                    </div>

                                    <div class="col-3">
                                        <label for="enrolldate"> Enroll Date:</label>
                                        <input type="date" class="form-control" name="enrolldate" value="<?php echo $enrolldate; ?>" required>
                                    </div>

                                    <div class="col-3">
                                        <label for="exitdate"> Exit Date:</label>
                                        <input type="date" class="form-control" name="exitdate" value="<?php echo $exitdate; ?>">
                                    </div>

                                    <div class="col-3">
                                        <label for="regno"> Registration No: </label>
                                        <input type="text" name="regno" class="form-control" placeholder="2018SLGTIBIT04" value="<?php echo $regno; ?>" required>
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
                                        <input type="text" class="form-control" name="gname" placeholder="S Sathyaraj" value="<?php echo $gname; ?>">
                                    </div>

                                    <div class="col-6">
                                        <label for="gaddress">Address :</label>
                                        <input type="text" class="form-control" name="gaddress" placeholder="117, Old Post Office Road, Vinayagapuram 02. Thirukkovil." value="<?php echo $gaddress; ?>">
                                    </div>

                                    <div class="col-3">
                                        <label for="gphone">Phone No :</label>
                                        <input type="tel" class="form-control" maxlength="10" minlength="10" name="gphone" placeholder="0700000000" value="<?php echo $gphone; ?>">
                                    </div>

                                </div>
                                <!-- 1st row end -->

                                <!-- 2nd row start -->
                                <div class="form-row">

                                    <div class="col-3">
                                        <label for="grelation">Relationship :</label>
                                        <select name="grelation" class="custom-select" value="<?php echo $gname; ?>">
                                            <option value=""> Choose Relationship</option>
                                            <option value="Mother" <?php if ($grelation == "Mother") echo 'selected' ?>> Mother </option>
                                            <option value="Father" <?php if ($grelation == "Father") echo 'selected' ?>> Father </option>
                                            <option value="Brother" <?php if ($grelation == "Brother") echo 'selected' ?>> Brother </option>
                                            <option value="Sister" <?php if ($grelation == "Sister") echo 'selected' ?>> Sister </option>
                                            <option value="Guardian" <?php if ($grelation == "Guardian") echo 'selected' ?>> Guardian </option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-11 "></div>
                                    <div class="col-1">
                                        <?php
                                        if (isset($_GET['edit'])) {
                                            echo '<button type="submit" name="update" class="btn btn-outline-success">Update</button>';
                                        } else {
                                            echo '<button type="submit" name="add" class="btn btn-outline-success">Add</button>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!-- 2nd row end -->
                            </form><br>
                            <!-- 4 row end -->

                        </div>
                        <div class="card-footer text-muted">

                        </div>
                    </div>

                    <!-- #1 Insert Your Content" -->
                </div>
        </main>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>
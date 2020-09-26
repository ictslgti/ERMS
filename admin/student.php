<?php
$title = "Add Student | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result Management System (ERMS)-SLGTI";
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once("../head.php"); ?>
<?php include_once('../databases/config.php'); ?>

<head>
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
            width: 100px;
            /* height: 0px;
            border: 0px solid black; */
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
        <?php //include_once("nav.php"); 
        ?>

        <!-- insert  start-->
        <?php
        //insert Student Table 
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
                New record created successfully ';
            } else {
                echo '<div class="alert alert-warning" role="alert"> Insert  ' . $sqlstudent . "<br>" . mysqli_error($con);
            }
        }
        //insert Student Table 

        //insert Student_enroll Table
        if (
            isset($_POST['add'])
            && !empty($_POST['regno'])
            && !empty($_POST['cid'])
            && !empty($_POST['bid'])
            && !empty($_POST['mode'])
            && !empty($_POST['status'])
            && !empty($_POST['enrolldate'])
            && !empty($_POST['exitdate'])
        ) {
            $regno = $_POST['regno'];
            $cid = $_POST['cid'];
            $bid = $_POST['bid'];
            $mode = $_POST['mode'];
            $status = $_POST['status'];
            $enrolldate = $_POST['enrolldate'];
            $exitdate = $_POST['exitdate'];

            $sqlenroll = "INSERT INTO student_enroll (id, course_code, batch_no, course_mode, student_status,
                    enroll_date, exit_date) VALUES ('$regno','$cid','$bid','$mode','$status','$enrolldate','$exitdate')";

            if (mysqli_query($con, $sqlenroll)) {
                echo ' And Insert Successfully
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>';
            } else {
                echo 'Error <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>' . $sqlenroll . "<br>" . mysqli_error($con);
            }
        }
        //insert Student_enroll Table 

        //insert Student_re_enroll Table
        if (
            isset($_POST['addre'])
            && !empty($_POST['regno'])
            && !empty($_POST['cid'])
            && !empty($_POST['bid'])
            && !empty($_POST['mode'])
            && !empty($_POST['status'])
            && !empty($_POST['enrolldate'])
            && !empty($_POST['exitdate'])
        ) {
            $regno = $_POST['regno'];
            $cid = $_POST['cid'];
            $bid = $_POST['bid'];
            $mode = $_POST['mode'];
            $status = $_POST['status'];
            $enrolldate = $_POST['enrolldate'];
            $exitdate = $_POST['exitdate'];

            $sqlenroll = "INSERT INTO student_enroll (id, course_code, batch_no, course_mode, student_status,
                    enroll_date, exit_date) VALUES ('$regno','$cid','$bid','$mode','$status','$enrolldate','$exitdate')";

            if (mysqli_query($con, $sqlenroll)) {
                echo '<div class="alert alert-success" role="alert">
                Re Enroll Insert Successfully
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>';
            } else {
                echo '<div class="alert alert-warning" role="alert">
                Error <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>' . $sqlenroll . "<br>" . mysqli_error($con);
            }
        }
        //insert Student_re_enroll Table
        ?>
        <!-- insert Student_Image Table -->
        <?php
        $regno = null;
        $image = null;

        if (
            isset($_POST['add'])
            && !empty($_POST['regno'])
        ) {
            $regno = $_POST['regno'];

            if (!empty($_FILES["image"]["name"])) {
                // Get file info 
                $fileName = basename($_FILES["image"]["name"]);
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                // Allow certain file formats 
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                if (in_array($fileType, $allowTypes)) {
                    $image = $_FILES['image']['tmp_name'];
                    $imgContent = addslashes(file_get_contents($image));
                    $sql = "INSERT INTO student_image (id,image) VALUES ('$regno','$imgContent')";

                    if (mysqli_query($con, $sql)) {
                        echo "<div class='alert alert-success' role='alert'>
                                insert success fully 
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                            </div>";
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>
                                This academic_year alredy submit 
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button></div>" . "<br>" . mysqli_error($con);
                    }
                } else {
                    echo '<div class="alert alert-danger" role="alert"> Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button></div>';
                }
            } else {
                // echo '<div class="alert alert-danger" role="alert"> Please select an image file to upload.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                //     <span aria-hidden="true">&times;</span>
                //     </button></div>';
            }
        }
        ?>
        <!-- insert Student_Image Table -->
        <!-- insert  end -->

        <!-- edit  start -->
        <?php
        $student_id = $stitle = $full_name = $ini_name = $gender = $civil = $email = $nic = $dob = $phone = $address = $ds =
            $district = $province = $zip = $blood = $gname = $gaddress = $gphone = $grelation = $regno = $cid = $bid =
            $mode = $status = $enrolldate = $exitdate = null;
        if (isset($_GET['edit'])) {
            $student_id = $_GET['edit'];

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
            }
        }
        //update Student Table
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
                <button type="button" class="close" href="student.php" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>';
            } else {
                echo '<div class="alert alert-warning" role="alert"> Error updating record: 
                <button type="button" class="close" href="student.php" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>' . $sql_students
                    . mysqli_error($con);
            }
        }
        //update Student Table

        //update Student_enroll Table
        if (
            isset($_POST['eupdate'])
            && !empty($_POST['cid'])
            && !empty($_POST['bid'])
            && !empty($_POST['mode'])
            && !empty($_POST['status'])
            && !empty($_POST['enrolldate'])
            && !empty($_POST['exitdate'])
        ) {
            $cid = $_POST['cid'];
            $bid = $_POST['bid'];
            $mode = $_POST['mode'];
            $status = $_POST['status'];
            $enrolldate = $_POST['enrolldate'];
            $exitdate = $_POST['exitdate'];

            $sqlenrolls = "UPDATE `student_enroll` SET `course_code` = '$cid', `batch_no` = '$bid', `course_mode` = '$mode',
            `student_status` = '$status', `enroll_date` = '$enrolldate', `exit_date` = '$exitdate'  WHERE `student_enroll`.`id` = '$student_id'";

            if (mysqli_query($con, $sqlenrolls)) {
                echo '<div class="alert alert-success" role="alert"> And Insert Successfully
                <button type="button" class="close" href="student.php" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>';
            } else {
                echo '<div class="alert alert-warning" role="alert"> And Failed: <button type="button" class="close" href="student.php" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>' . $sqlenrolls
                    . mysqli_error($con);
            }
        }
        //update Student_enroll Table

        //update Student_Image Table
        if (
            isset($_POST['update'])
            // && !empty($_POST['first'])
        ) {

            if (!empty($_FILES["image"]["name"])) {
                // Get file info 
                $fileName = basename($_FILES["image"]["name"]);
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                // Allow certain file formats 
                $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                if (in_array($fileType, $allowTypes)) {
                    $image = $_FILES['image']['tmp_name'];
                    $imgContent = addslashes(file_get_contents($image));
                    $sql = "UPDATE `erms`.`student_image` SET 
                    `image` = '$imgContent'
                    WHERE `student_image`.`id` ='$student_id'";


                    if (mysqli_query($con, $sql)) {
                        echo "<div class='alert alert-success' role='alert'>Image Inserted 
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button>
                    </div>";
                    } else {

                        echo "<div class='alert alert-danger' role='alert'>Image Insert Error  
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                    </button></div>";
                    }
                } else {
                    echo '<div class="alert alert-danger" role="alert"> Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button></div>';
                }
            } else {
                echo '<div class="alert alert-danger" role="alert"> Old image uploaded.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button></div>';
            }
        }

        ?>
        <!-- edit  end -->

        <main class="">
            <div class="container-fluid p-5">
                <!-- #1 Insert Your Content-->
                <div class="container">

                    <!-- card start -->
                    <div class="card">

                        <!-- card header start -->
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
                        <!-- card header end -->

                        <!-- card body start -->
                        <div class="card-body">
                            <h6 class="card-title"></h6>

                            <!-- form start -->
                            <form method="POST" action="" enctype="multipart/form-data">

                                <!-- personal end -->
                                <!-- 1 row start -->
                                <div class="form-row">
                                    <div class="col-sm">
                                        <div class="border-bottom border-primary">
                                            <h3>Personal Information</h3>
                                        </div>
                                    </div>
                                </div><br>
                                <!-- 1 row end -->

                                <!-- 2 row start -->
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
                                <!-- 2 row end -->

                                <!-- 3 row start -->
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
                                <!-- 3 row end -->

                                <!-- 4 row start -->
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
                                <!-- 4 row end -->

                                <!-- 5 row start -->
                                <div class="form-row">

                                    <div class="col-3">
                                        <label for="province"> Province: </label>
                                        <select name="province" id="province" class="custom-select" value="<?php echo $province; ?>" required>
                                            <option value=""> Choose</option>
                                            <option value="Central" <?php if ($province == "Central")  echo 'selected'; ?>> Central </option>
                                            <option value="Eastern" <?php if ($province == "Eastern")  echo 'selected'; ?>> Eastern </option>
                                            <option value="Northern" <?php if ($province == "Northern")  echo 'selected'; ?>> Northern </option>
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
                                            <input type="file" name="image" class="custom-file-input" id="customFile" accept="image/*" onchange="preview_image(event)"><br>
                                            <label class="custom-file-label" for="customFile"> Choose</label>
                                            <?php
                                            if (isset($_GET['edit'])) {
                                                if (isset($_POST['update'])) {
                                                    $result = $con->query("SELECT * FROM `student_image` WHERE `id` = '$student_id'");
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                                            <img id="output_image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
                                                    <?php
                                                        }
                                                    }
                                                } else {
                                                    ?>
                                                    <img id="output_image" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
                                                <?php
                                                }
                                                ?>
                                            <?php
                                            } else {
                                            ?>
                                                <img id="output_image" />
                                            <?php
                                            }
                                            ?>

                                            <!-- <img id="output_image" /> -->
                                        </div>
                                    </div>

                                </div>
                                <!-- 5 row end -->

                                <!-- 6 row start -->
                                <div class="form-row">
                                    <div class="col-sm">
                                        <div class="border-bottom border-primary">
                                            <h3>Emergency Contact Information</h3>
                                        </div>
                                    </div>
                                </div><br>
                                <!-- 6 row end -->

                                <!-- 7 row start -->
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
                                <!-- 7 row end -->

                                <!-- 8 row start -->
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
                                <!-- 8 row end -->

                                <!-- 9 row start -->
                                <div class="form-row">
                                    <div class="col-11 "></div>
                                    <div class="col-1">
                                        <?php
                                        if (isset($_GET['edit'])) {
                                            echo '<button type="submit" name="update" class="btn btn-outline-success">Update</button>';
                                        } else {
                                            // echo '<button type="submit" name="add" class="btn btn-outline-success">Add</button>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!-- 9 row end -->
                                <!-- personal end -->

                                <?php
                                if (isset($_GET['edit'])) {
                                    echo '</form>';
                                } else {
                                    // echo '<button type="submit" name="add" class="btn btn-outline-success">Add</button>';
                                }
                                ?>
                                <br>
                                <!-- </form> -->
                                <!-- form end -->

                                <!-- enroll start -->
                                <!-- 10 row start -->
                                <div class="form-row">
                                    <div class="col-sm">
                                        <div class="border-bottom border-primary">
                                            <h3>Enroll Information</h3>
                                        </div>
                                    </div>
                                </div><br>
                                <!-- 10 row end -->

                                <?php
                                if (isset($_GET['edit'])) {
                                ?>
                                    <!-- 11 row start -->
                                    <div class="form-row">
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
                                                        <td scope='col'>ACTIONS</td>
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
                                                            <td scope='col'>
                                                                <a class="btn btn-outline-warning btn-sm" href="student.php?edit=<?php echo $row['id'] ?>& course=<?php echo $row['course_code']; ?>">Edit</a>
                                                                <a class="btn btn-outline-danger btn-sm disabled" href="?edelete=<?php echo $row['id']; ?>">Delete</a>
                                                                <!-- data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"  -->
                                                            </td>
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
                                    <!-- 11 row end -->
                                    <?php

                                    if (isset($_GET['course'])) {
                                        $student_id = $_GET['edit'];
                                        $ccode = $_GET['course'];

                                        // echo $ccode;

                                        $sql_student = "SELECT * FROM student_enroll
                                        WHERE `student_enroll`.`id` = '$student_id' AND `student_enroll`.`course_code` = '$ccode'";
                                        $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {



                                    ?>


                                            <!-- edii form -->
                                            <form action="">
                                                <!-- 1 row start -->
                                                <div class="form-row">

                                                    <div class="col-3">
                                                        <label for="cid"> Course Name: </label>
                                                        <select name="cid" id="cid" class="custom-select action">
                                                            <?php
                                                            $course_name = '';
                                                            $query = "SELECT * FROM courses";
                                                            $result = mysqli_query($con, $query);
                                                            while ($row = mysqli_fetch_array($result)) {
                                                                $course_name .= '<option value="' . $row["code"] . '">' . $row["code"] . '</option>';
                                                            }
                                                            ?>
                                                            <option value="">Choose</option>
                                                            <?php echo $course_name; ?>

                                                        </select>
                                                    </div>

                                                    <div class="col-3">
                                                        <label for="bid"> Batch No: </label>
                                                        <select name="bid" id="bid" class="custom-select action">
                                                            <option value="" selected disabled>Choose</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-3">
                                                        <label for="mode"> Course Mode: </label>
                                                        <select name="mode" class="custom-select" value="" required>
                                                            <option selected disabled> Choose</option>
                                                            <option value="Full">Full Time</option>
                                                            <option value="Part">Part Time</option>
                                                            <option value="sort">Sort Time</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-3">
                                                        <label for="regno"> Registration No: </label>
                                                        <input type="text" name="regno" class="form-control" placeholder="2018SLGTIBIT04" value="<?php echo $regno; ?>" required disabled>
                                                    </div>

                                                </div>
                                                <!-- 1 row end -->

                                                <!-- 2 row start -->
                                                <div class="form-row">

                                                    <div class="col-3">
                                                        <label for="status"> Status:</label>
                                                        <select name="status" class="custom-select" value="" required>
                                                            <option selected disabled>Choose</option>
                                                            <option value="Following">Following</option>
                                                            <option value="Completed">Completed</option>
                                                            <option value="Dropout">Dropout</option>
                                                            <option value="Long Absent">Long Absent</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-3">
                                                        <label for="enrolldate"> Enroll Date:</label>
                                                        <input type="date" class="form-control" name="enrolldate" value="<?php echo $_GET['course'];; ?>" required>
                                                    </div>

                                                    <div class="col-3">
                                                        <label for="exitdate"> Exit Date:</label>
                                                        <input type="date" class="form-control" name="exitdate" value="<?php echo $row['exit_date']; ?>">
                                                    </div>

                                                    <div class="col-3">
                                                    </div>

                                                </div>
                                                <!-- 2 row end -->

                                                <div class="modal-footer">
                                                    <button class="btn btn-outline-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                        Close
                                                    </button>
                                                    <button type="submit" name="addre" class="btn btn-outline-success">Add</button>
                                                </div>

                                            </form>

                                            <!-- edii form -->



                                    <?php
                                        }
                                    }
                                    ?>

                                    <!-- 12 row start -->
                                    <div class="form-row">
                                        <!-- collapse start -->
                                        <p>
                                            <button class="btn btn-outline-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                Re Enroll
                                            </button>
                                        </p>

                                        <div class="col-12">

                                            <div class="collapse" id="collapseExample">
                                                <div class="card card-body">

                                                    <!-- collapse form start -->
                                                    <form action="">
                                                        <!-- 1 row start -->
                                                        <div class="form-row">

                                                            <div class="col-3">
                                                                <label for="cid"> Course Name: </label>
                                                                <select name="cid" id="cid" class="custom-select action">
                                                                    <?php
                                                                    $course_name = '';
                                                                    $query = "SELECT * FROM courses";
                                                                    $result = mysqli_query($con, $query);
                                                                    while ($row = mysqli_fetch_array($result)) {
                                                                        $course_name .= '<option value="' . $row["code"] . '">' . $row["code"] . '</option>';
                                                                    }
                                                                    ?>
                                                                    <option value="">Choose</option>
                                                                    <?php echo $course_name; ?>

                                                                </select>
                                                            </div>

                                                            <div class="col-3">
                                                                <label for="bid"> Batch No: </label>
                                                                <select name="bid" id="bid" class="custom-select action">
                                                                    <option value="" selected disabled>Choose</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-3">
                                                                <label for="mode"> Course Mode: </label>
                                                                <select name="mode" class="custom-select" value="" required>
                                                                    <option selected disabled> Choose</option>
                                                                    <option value="Full">Full Time</option>
                                                                    <option value="Part">Part Time</option>
                                                                    <option value="sort">Sort Time</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-3">
                                                                <label for="regno"> Registration No: </label>
                                                                <input type="text" name="regno" class="form-control" placeholder="2018SLGTIBIT04" value="<?php echo $regno; ?>" required disabled>
                                                            </div>

                                                        </div>
                                                        <!-- 1 row end -->

                                                        <!-- 2 row start -->
                                                        <div class="form-row">

                                                            <div class="col-3">
                                                                <label for="status"> Status:</label>
                                                                <select name="status" class="custom-select" value="" required>
                                                                    <option selected disabled>Choose</option>
                                                                    <option value="Following">Following</option>
                                                                    <option value="Completed">Completed</option>
                                                                    <option value="Dropout">Dropout</option>
                                                                    <option value="Long Absent">Long Absent</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-3">
                                                                <label for="enrolldate"> Enroll Date:</label>
                                                                <input type="date" class="form-control" name="enrolldate" value="" required>
                                                            </div>

                                                            <div class="col-3">
                                                                <label for="exitdate"> Exit Date:</label>
                                                                <input type="date" class="form-control" name="exitdate" value="">
                                                            </div>

                                                            <div class="col-3">
                                                            </div>

                                                        </div>
                                                        <!-- 2 row end -->

                                                        <div class="modal-footer">
                                                            <button class="btn btn-outline-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                                Close
                                                            </button>
                                                            <button type="submit" name="addre" class="btn btn-outline-success">Add</button>
                                                        </div>

                                                    </form>
                                                    <!-- collapse form end -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- collapse end -->
                                    </div>
                                    <!-- 12 row end -->
                                <?php
                                } else {
                                ?>
                                    <!-- 13 row start -->
                                    <div class="form-row">

                                        <div class="col-3">
                                            <label for="cid"> Course Name: </label>
                                            <select name="cid" id="cid" class="custom-select action">
                                                <?php
                                                $course_name = '';
                                                $query = "SELECT * FROM courses";
                                                $result = mysqli_query($con, $query);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $course_name .= '<option value="' . $row["code"] . '">' . $row["code"] . '</option>';
                                                }
                                                ?>
                                                <option value="">Choose</option>
                                                <?php echo $course_name; ?>
                                            </select>
                                        </div>

                                        <div class="col-3">
                                            <label for="bid"> Batch No: </label>
                                            <select name="bid" id="bid" class="custom-select action">
                                                <option value="" selected disabled>Choose</option>
                                            </select>
                                        </div>

                                        <div class="col-3">
                                            <label for="mode"> Course Mode: </label>
                                            <select name="mode" class="custom-select" value="" required>
                                                <option selected disabled> Choose</option>
                                                <option value="Full">Full Time</option>
                                                <option value="Part">Part Time</option>
                                                <option value="sort">Sort Time</option>
                                            </select>
                                        </div>

                                        <div class="col-3">
                                            <label for="regno"> Registration No: </label>
                                            <input type="text" name="regno" class="form-control" placeholder="2018SLGTIBIT04" value="" required>
                                        </div>

                                    </div>
                                    <!-- 13 row end -->

                                    <!-- 14 row start -->
                                    <div class="form-row">

                                        <div class="col-3">
                                            <label for="status"> Status:</label>
                                            <select name="status" class="custom-select" value="" required>
                                                <option selected disabled>Choose</option>
                                                <option value="Following">Following</option>
                                                <option value="Completed">Completed</option>
                                                <option value="Dropout">Dropout</option>
                                                <option value="Long Absent">Long Absent</option>
                                            </select>
                                        </div>

                                        <div class="col-3">
                                            <label for="enrolldate"> Enroll Date:</label>
                                            <input type="date" class="form-control" name="enrolldate" value="" required>
                                        </div>

                                        <div class="col-3">
                                            <label for="exitdate"> Exit Date:</label>
                                            <input type="date" class="form-control" name="exitdate" value="">
                                        </div>

                                        <div class="col-3">
                                        </div>

                                    </div>
                                    <!-- 14 row end -->

                                <?php
                                } ?>

                                <!-- 15 row start -->
                                <div class="form-row">
                                    <div class="col-11 "></div>
                                    <div class="col-1">
                                        <?php
                                        if (isset($_GET['edit'])) {
                                            // echo '<button type="submit" name="update" class="btn btn-outline-success">Update</button>';
                                        } else {
                                            echo '<button type="submit" name="add" class="btn btn-outline-success">Add</button>';
                                            // }
                                        ?>
                                    </div>
                                </div>
                                <!-- 15 row end -->

                            <?php
                                            echo '</form>';
                                        }
                            ?>
                            <!-- </form> -->
                            <!-- form end -->
                        </div>
                        <!-- card body end -->

                        <!-- card footer start -->
                        <!-- <div class="card-footer text-muted">
                        </div> -->
                        <!-- card footer end -->

                    </div>
                    <!-- card end -->
                </div>
                <!-- #1 Insert Your Content" -->
        </main>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>

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

<!-- course filter -->
<script>
    $(document).ready(function() {
        $('.action').change(function() {
            if ($(this).val() != '') {
                var action = $(this).attr("id");
                var query = $(this).val();
                var result = '';
                if (action == "cid") {
                    result = 'bid';
                }
                $.ajax({
                    url: "student.php",
                    method: "POST",
                    data: {
                        action: action,
                        query: query
                    },
                    success: function(data) {
                        $('#' + result).html(data);
                    }
                })
            }
        });
    });
</script>

<?php
//fetch.php
if (isset($_POST["action"])) {
    $connect = mysqli_connect("localhost", "root", "", "erms");
    $output = '';
    if ($_POST["action"] == "cid") {
        $query = "SELECT `batches`.`batch_no` FROM `batches` LEFT JOIN `courses` ON `batches`.`NVQ_level` = `courses`.`NVQ_level` AND 
  `batches`.`department_code` = `courses`.`department_code` WHERE `courses`.`code`='" . $_POST["query"] . "'";
        $result = mysqli_query($connect, $query);
        $output .= '<option value="" disabled selected>Choose</option>';
        while ($row = mysqli_fetch_array($result)) {
            $output .= '<option value="' . $row["batch_no"] . '">' . $row["batch_no"] . '</option>';
        }
    }
    echo $output;
}
?>

<!-- course filter -->
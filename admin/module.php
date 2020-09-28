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
<?php
$title = "Module | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
    <?php include_once("../config.php"); ?>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">

        <?php include_once("nav.php"); ?>

        <!-- <main class="page-content pt-2"> -->
        <!-- 1st row start -->

        <div class="container">

            <?php


            $code = null;
            $Name  = null;
            $Course_Name = null;
            $Learning_Hours  = null;
            $Lecture_Hours = null;
            $Self_Study_Hours   = null;
            $Semester_Id = null;
            $AIM  = null;
            $Learn = null;
            $Resources   = null;
            $Reference   = null;
            $practical = null;


            if (isset($_GET['edit'])) {
                $id = $_GET['edit'];
                $sql = "select * from modules where code='$id' ; ";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    $code = $row['code'];
                    $Name = $row['name'];
                    $Semester_Id = $row['semester_id'];
                    $Course_Name = $row['course_code'];
                    $Learning_Hours = $row['learning_hours'];
                    $Lecture_Hours = $row['lecture_hours'];
                    $Self_Study_Hours = $row['self_study_hours'];
                    $AIM = $row['aim'];
                    $Learn = $row['learn'];
                    $Resources = $row['resources'];
                    $Reference = $row['references'];
                    $practical = $row['practical_hour'];
                }
            }
            ?>
            <!-- insert -->

            <?php
            if (
                isset($_POST['submit'])
                && !empty($_POST['code'])
                && !empty($_POST['name'])
                && !empty($_POST['Semester_Id'])
                && !empty($_POST['Course_Name'])
                && !empty($_POST['Learning_Hours'])
                && !empty($_POST['Lecture_Hours'])
                && !empty($_POST['Self_Study_Hours'])


            ) {
                $code = $_POST['code'];
                echo $code;
                $Name = $_POST['name'];
                $Semester_Id = $_POST['Semester_Id'];
                $Course_Name  = $_POST['Course_Name'];
                $Learning_Hours = $_POST['Learning_Hours'];
                $Lecture_Hours = $_POST['Lecture_Hours'];
                $Self_Study_Hours = $_POST['Self_Study_Hours'];
                $practical = $_POST['practical_hour'];
                $AIM = $_POST['AIM'];
                $Learn = $_POST['Learn'];
                $Resources = $_POST['Resources'];
                $References = $_POST['References'];


                $sql = "INSERT INTO `modules` (`code`, `Name`, `Semester_Id`, `Course_code`, `practical_hour`,`Learning_Hours`, `Lecture_Hours`, `Self_Study_Hours`, `AIM`, `Learn`, `Resources`, `References`) 
            VALUES ('$code', '$Name', '$Semester_Id', '$Course_Name', '$practical','$Learning_Hours', '$Lecture_Hours', '$Self_Study_Hours', '$AIM', '$Learn', '$Resources', '$References'); ";

                if (mysqli_query($con, $sql)) {
                    echo "
            <div class='alert alert-success' role='alert'>
            insert success fully 
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                    echo "
       <div class='alert alert-danger' role='alert'>
       This module alredy submit 
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
                }
            }





            ?>
            <!-- update -->
            <?php

            if (
                isset($_POST['save'])
                && !empty($_POST['code'])

            ) {


                $code = $_POST['code'];
                $Name = $_POST['name'];
                $Semester_Id = $_POST['Semester_Id'];
                $Course_Name  = $_POST['Course_Name'];
                $Learning_Hours = $_POST['Learning_Hours'];
                $Lecture_Hours = $_POST['Lecture_Hours'];
                $Self_Study_Hours = $_POST['Self_Study_Hours'];
                $AIM = $_POST['AIM'];
                $Learn = $_POST['Learn'];
                $Resources = $_POST['Resources'];
                $References = $_POST['References'];

                $sql = "UPDATE `modules` SET `name` = '$Name',`semester_id` = '$Semester_Id',`learning_hours` = '$Learning_Hours'
                ,`self_study_hours` = '$Self_Study_Hours',`lecture_hours` = '$Lecture_Hours',`practical_hour` = '$practical',
                `aim` = '$AIM',`learn` = '$Learn',`resources` = '$Resources',`references` = '$References'
                 WHERE `modules`.`code` = '$code';";

                if (mysqli_query($con, $sql)) {
                    echo "
       <div class='alert alert-success' role='alert'>
       update success fully 
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
                    echo "
       <div class='alert alert-danger' role='alert'>
       This academic_year alredy submit 
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
                }
            }
            ?>
            <!-- update -->




            <div class="card  mb-3">
                <div class="card-header ">
                    <div class="row">
                        <div class="col">
                            <h4>Module</h4>
                        </div>
                        <div class="col-auto">
                            <a href="modules.php" class="btn btn-outline-primary">Modules</a>
                        </div>

                    </div>
                </div>
                <div class="card-body ">
                    <div class="card  mb-3">

                        <div class="card-body ">
                            <form method="POST" action="">
                                <div class="row">
                                    <div class="col-sm">
                                        <b>Code</b> <br>
                                        <div class="form-group">
                                            <div class="input-group input-group-sm mb-3">
                                                <?php
                                                if (isset($_GET['edit'])) {
                                                        ?>
                                                    <input type="text" readonly placeholder="M02" value="<?php echo $code; ?>" name="code" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                                                <?php
                                            } else {
                                                ?>
                                                    <input type="text" placeholder="M02" value="<?php echo $code; ?>" name="code" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                                                <?php
                                            }
                                        ?>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm">
                                        <div class="form-group">
                                            <b>Name</b> <br>
                                            <div class="form-group">
                                                <div class="input-group input-group-sm mb-3">
                                                    <input type="text" placeholder="Webprogramming" value="<?php echo $Name; ?>" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 1 row end -->
                                <div class="row">
                                    <div class="col-sm">
                                        <b>Semester Id</b> <br>
                                        <div class="form-group">
                                            <div class="input-group input-group-sm mb-3">

                                                <select name="Semester_Id" class="custom-select" id="inputGroupSelect01" id="validationCustom04" required>
                                                    <?php
                                                    if (isset($_GET['edit'])) {
                                                        ?>
                                                        <option selected value="<?php echo $Semester_Id ?>"><?php echo $Semester_Id ?></option>
                                                        <option disabled value="">Choose Semester Id </option>
                                                        <option value="Semester 01">Semester 01</option>
                                                        <option value="Semester 02">Semester 02</option>
                                                    <?php
                                                } else {
                                                    ?>
                                                        <option selected disabled value="">Choose Semester Id </option>
                                                        <option value="Semester 01">Semester 01</option>
                                                        <option value="Semester 02">Semester 02</option>
                                                    <?php
                                                }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm">
                                        <div class="form-group">
                                            <b>Course Name</b> <br>
                                            <div class="form-group">
                                                <div class="input-group input-group-sm mb-3">

                                                    <select name=" Course_Name" class="custom-select" id="inputGroupSelect01" id="validationCustom04" required>
                                                        <?php
                                                        if (isset($_GET['edit'])) {
                                                            ?>
                                                            <?php
                                                            $result1 = $con->query("select c.name,c.code from courses c inner join modules m on c.code=m.course_code and m.code='$id'; ");
                                                            if ($row1 = $result1->fetch_assoc()) {
                                                                unset($dno);
                                                                $dno = $row1['c.name'];
                                                                $cod = $row1['c.code'];
                                                                echo '<option value="'.$cod.'" >'.$dno.'</option>';
                                                        }
                                                        ?>

                                                            <option disabled value="">Choose course</option>
                                                            <?php
                                                            $result = $con->query("SELECT * FROM `courses`");
                                                            while ($row = $result->fetch_assoc()) {
                                                                unset($dno);
                                                                $dno = $row['name'];
                                                                $cod = $row['code'];
                                                                
                                                                echo '<option value="'.$cod.'"  >'.$dno.'</option>';
                                                              
                                                        }
                                                    } else {
                                                        ?>
                                                            <option selected disabled value="">course</option>
                                                            <?php
                                                            $result = $con->query("SELECT * FROM `courses` ");
                                                            while ($row = $result->fetch_assoc()) {
                                                                unset($dno);
                                                                $dno = $row['name'];
                                                                $cod = $row['code'];
                                                                echo '<option value="'. $cod .'"  >' . $dno . '</option>';
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>

                                <!-- 2 row end -->

                                <div class="row">
                                    <div class="col-sm">
                                        <b> Learning Hours</b> <br>
                                        <div class="form-group">
                                            <div class="input-group input-group-sm mb-3">
                                                <input type="number" value="<?php echo $Learning_Hours; ?>" placeholder="10" name="Learning_Hours" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">hours</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm">
                                        <div class="form-group">
                                            <b>Lecture Hours</b> <br>
                                            <div class="form-group">
                                                <div class="input-group input-group-sm mb-3">
                                                    <input type="number" value="<?php echo $Lecture_Hours; ?>" placeholder="10" name="Lecture_Hours" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">hours</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>

                                <!-- 3 row end -->


                                <div class="row">
                                    <div class="col-sm">
                                        <b>Practical Hours</b> <br>
                                        <div class="form-group">
                                            <div class="input-group input-group-sm mb-3">
                                                <input type="number" value="<?php echo $practical; ?>" placeholder="10" name="practical_hour" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">hours</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm">
                                        <div class="form-group">
                                            <b>Self Study Hours</b> <br>
                                            <div class="form-group">
                                                <div class="input-group input-group-sm mb-3">
                                                    <input type="number" value="<?php echo $Self_Study_Hours; ?>" placeholder="10" name="Self_Study_Hours" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">hours</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>

                                <!-- 4 row end -->
                                <!-- 6 row start -->
                                <div class="row">
                                    <div class="col-sm">
                                        <b>Module_aim</b>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <textarea name="AIM" id="" cols="30" rows="10"><?php echo $AIM; ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm">
                                        <b>Learning _Outcomes</b>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <textarea name="Learn" id="" cols="30" rows="10"><?php echo $Learn; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <b>Resources</b>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <textarea name="Resources" id="" cols="30" rows="10"><?php echo $Resources; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <b> References </b>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <textarea name="References" id="" cols="30" rows="10"><?php echo $Reference; ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <!-- end -->
                                <div class="card-footer ">
                                    <div class="row">
                                        <div class="col-11 "></div>
                                        <div class="col-1">
                                            <?php
                                            if (isset($_GET['edit'])) {
                                                ?>
                                                <button type="submit" name="save" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
                                                    Save
                                                </button>
                                            <?php
                                        } else {
                                            ?>
                                                <button type="submit" name="submit" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
                                                    Add
                                                </button>
                                            <?php
                                        }
                                        ?>

                                        </div>
                                    </div>
                                </div>




                        </div>
                        </form>



                    </div>
                    <!-- #1 Insert Your Content" -->
                </div>
                </main>
            </div>
            <?php include_once("../script.php"); ?>
</body>

</html>

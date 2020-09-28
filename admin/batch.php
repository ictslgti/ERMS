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
$title = "Batch | Online Examination Result Management System | SLGTI";
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
        <!-- card start -->
        <div class="container">
            <!-- insert start -->
            <?php

            $department = null;
            $year = null;
            $batchno = null;
            $nvq = null;
            $id = null;
            if (isset($_GET['edit'])) {
                $id = $_GET['edit'];

                $sql = "SELECT * FROM `batches` WHERE `id`= '$id' ";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    $department = $row['department_code'];
                    $year = $row['Academic_year'];
                    $batchno = $row['batch_no'];
                    $nvq = $row['NVQ_level'];
                }
            }


            if (
                isset($_POST['submit'])
                && !empty($_POST['department'])
                && !empty($_POST['nvq'])
                && !empty($_POST['year'])
                && !empty($_POST['batchno'])
            ) {

                $department = $_POST['department'];
                $nvq = $_POST['nvq'];
                $year = $_POST['year'];
                $batchno = $_POST['batchno'];


                $sql = "INSERT INTO batches (batch_no,department_code,NVQ_level,Academic_year)
    VALUES 
    ('$batchno','$department', 
    '$nvq', 
    '$year')
    ";

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
       This academic_year alredy submit 
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
                }
            }
            ?>
            <!-- insert end -->

            <!-- update -->
            <?php

            if (
                isset($_POST['save'])
                && !empty($_POST['department'])
                && !empty($_POST['nvq'])
                && !empty($_POST['year'])
                && !empty($_POST['batchno'])

            ) {

                $department = $_POST['department'];
                $nvq = $_POST['nvq'];
                $year = $_POST['year'];
                $batchno = $_POST['batchno'];

                $sql = "UPDATE `batches` SET `department_code` = '$department',`Academic_year` = '$year',`NVQ_level` = '$nvq' WHERE `batches`.`id` = '$id';";

                if (mysqli_query($con, $sql)) {
                    echo "
       <div class='alert alert-success' role='alert'>
       update success fully 
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
                } else {

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




            <form action="" method="post">
                <div class="card  mb-3">
                    <div class="card-header bg-transparent ">
                        <div class="row">
                            <div class="col">
                                <h4>Batch</h4>
                            </div>
                            <div class="col-auto"> <a href="batches.php" class="btn btn-outline-primary">Batches</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">

                        <div class="card  mb-3">

                            <div class="card-body ">
                                <!-- 1st row -->

                                <div class="row ">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            Department <br>
                                            <div class="input-group input-group-sm mb-3">

                                                <select class="custom-select" name="department" id="inputGroupSelect01" id="validationCustom04" required>
                                                    <?php
                                                    if (isset($_GET['edit'])) {
                                                        ?>
                                                        <option selected value="<?php echo $department; ?>">
                                                            <?php echo $department; ?></option>
                                                        <option disabled value="">Choose Department</option>
                                                        <?php
                                                        $result = $con->query("SELECT * FROM `departments` ORDER BY `departments`.`code` ASC");
                                                        while ($row = $result->fetch_assoc()) {
                                                            unset($dno);
                                                            $dno = $row['code'];
                                                            $na = $row['name'];
                                                            echo '<option value="'.$dno .'"  >' . $na . '</option>';
                                                        }
                                                    } else {
                                                        ?>
                                                        <option selected disabled value="">Choose Department</option>
                                                        <?php
                                                        $result = $con->query("SELECT * FROM `departments` ORDER BY `departments`.`code` ASC");
                                                        while ($row = $result->fetch_assoc()) {
                                                            unset($dno);
                                                            $na = $row['name'];
                                                            $dno = $row['code'];
                                                            echo '<option value="'.$dno.'"  >' . $na . '</option>';
                                                        }
                                                    }
                                                    ?>


                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            NVQ LEVEL <br>
                                            <div class="input-group input-group-sm mb-3">

                                                <select class="custom-select" name="nvq" id="inputGroupSelect01" id="validationCustom04" required>
                                                    <?php
                                                    if (isset($_GET['edit'])) {
                                                        ?>
                                                        <option selected value="<?php echo $nvq; ?>"><?php echo $nvq; ?>
                                                        </option>
                                                        <option disabled value="">Choose NVQ Level</option>
                                                        <option value="NVQ-04">NVQ-04</option>
                                                        <option value="NVQ-05 Bridging">NVQ-05 Bridging</option>
                                                        <option value="NVQ-05">NVQ-05</option>
                                                        <option value="NVQ-06">NVQ-06</option>
                                                        <option value="NVQ-07">NVQ-07</option>
                                                    <?php
                                                } else {
                                                    ?>
                                                        <option selected disabled value="">Choose NVQ Level</option>
                                                        <option value="NVQ-04">NVQ-04</option>
                                                        <option value="NVQ-05 Bridging">NVQ-05 Bridging</option>
                                                        <option value="NVQ-05">NVQ-05</option>
                                                        <option value="NVQ-06">NVQ-06</option>
                                                        <option value="NVQ-07">NVQ-07</option>
                                                    <?php
                                                }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 1st row -->

                                <!-- 2nd row -->
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            Academicyear <br>
                                            <div class="input-group input-group-sm mb-3">

                                                <select class="custom-select" name="year" id="inputGroupSelect01" id="validationCustom04" required>
                                                    <?php
                                                    if (isset($_GET['edit'])) {
                                                        ?>
                                                        <option selected value="<?php echo $year; ?>"><?php echo $year; ?>
                                                        </option>
                                                        <option disabled value="">Choose Academicyear</option>
                                                        <?php
                                                        $result = $con->query("SELECT `academic_year` FROM `academic_year` ORDER BY `academic_year`.`academic_year` ASC");
                                                        while ($row = $result->fetch_assoc()) {
                                                            unset($year);
                                                            $year = $row['academic_year'];
                                                            echo '<option value="'.$year.'"  >' . $year . '</option>';
                                                        }
                                                        ?>
                                                    <?php
                                                } else {
                                                    ?>
                                                        <option selected disabled value="">Choose Academicyear</option>
                                                        <?php
                                                        $result = $con->query("SELECT `academic_year` FROM `academic_year` ORDER BY `academic_year`.`academic_year` ASC");
                                                        while ($row = $result->fetch_assoc()) {
                                                            unset($year);
                                                            $year = $row['academic_year'];
                                                            echo '<option value="'.$year.'"  >' . $year . '</option>';
                                                        }
                                                        ?>

                                                    <?php
                                                }
                                                ?>




                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        Batch no <br>
                                        <div class="form-group">
                                            <div class="input-group input-group-sm mb-3">
                                                <?php
                                                if (isset($_GET['edit'])) {
                                                    ?>
                                                    <input type="number" readonly name="batchno" class="form-control" value="<?php echo $batchno; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                                                <?php
                                            } else {
                                                ?>
                                                    <input type="number" name="batchno" class="form-control" value="<?php echo $batchno; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                                                <?php
                                            }
                                            ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 2nd row -->
                            </div>

                        </div>


                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-11 "></div>
                            <div class="col-1">
                                <?php
                                if (isset($_GET['edit'])) {
                                    ?>
                                    <button type="submit" name="save" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
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
        <!-- card end  -->
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>

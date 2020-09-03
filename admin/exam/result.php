<?php
$title = ' ERMS | Result Sheet';
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../../head.php"); ?>
    <?php include_once("../../config.php"); ?>
    <?php include_once("../nav.php"); ?>
</head>

<body>
    <div class="container">
        <?php
        if (isset($_POST['submit'])) {
            ?>
           <div class='alert alert-success' role='alert'>
       Details available
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>
        <?php
    }
    ?>
        <div class="card border-light mb-3">
            <div class="card-header">
                <h3> <?php echo " $title" ?></h3>
            </div>
            <div class="card-body s">


                <?php
                if (isset($_POST['submit'])) {
                    $department = $_POST['department'];
                    $nvq = $_POST['nvq'];
                    $type = $_POST['type'];
                    $batch = $_POST['batch'];
                }
                ?>

                <!-- 1st row -->
                <form action="" method="POST">
                    <div class="row">
                        <div class="col">
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInput'>Department</label>
                                </div>
                                <select class='custom-select' name="department" id='inputGroupSelect01' id='validationServer02' required>

                                    <option selected disabled value="">Choose Department</option>
                                    <?php
                                    $result = $con->query("SELECT `dept_id` FROM `departments`");
                                    while ($row = $result->fetch_assoc()) {
                                        unset($dno);
                                        $dno = $row['dept_id'];
                                        echo '<option value=" ' . $dno . '"  >' . $dno . '</option>';
                                    }

                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInput'>NVQ Level</label>
                                </div>
                                <select class='custom-select' name="nvq" id='inputGroupSelect01' id='validationServer02' required>
                                    <option selected disabled value="">Choose NVQ Level</option>
                                    <option value="NVQ LEVEL 4">NVQ LEVEL 4</option>
                                    <option value="BRIDGING LEVEL 5">BRIDGING LEVEL 5</option>
                                    <option value="NVQ LEVEL 5">NVQ LEVEL 5</option>
                                    <option value="NVQ LEVEL 6">NVQ LEVEL 6</option>
                                    <option value="NVQ LEVEL 7">NVQ LEVEL 7</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- 1st row -->

                    <!-- 2nd row -->
                    <div class="row">
                        <div class="col">
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>

                                    <label for='exampleInputEmail1'>Exams type</label>
                                </div>
                                <select class='custom-select' name="type" id='inputGroupSelect01' id='validationServer0' required>
                                    <option selected disabled>Select Exams</option>
                                    <option value='INSTITUT'>INSTITUT</option>
                                    <option value='TVEC'>TVEC</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInput'>Batch</label>
                                </div>
                                <select class='custom-select' name="batch" id='inputGroupSelect01' id='validationServer02' required>
                                    <option selected disabled value="">Choose Batch</option>
                                    <?php
                                    $result = $con->query("select DISTINCT batch_no from student_enroll;");
                                    while ($row = $result->fetch_assoc()) {
                                        unset($dno);
                                        $dno = $row['batch_no'];
                                        echo '<option value=" ' . $dno . '"  >' . $dno . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd row -->
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-auto">
                        <?php
                        if (isset($_POST['submit'])) {
                            ?>
                            <a href="resultsheet.php?dno=<?php echo ("$department"); ?>& nvq=<?php echo ("$nvq"); ?> & type=<?php echo ("$type"); ?> & batch=<?php echo ("$batch"); ?>" 
                            class="btn btn-primary">View Result</a>
                        <?php
                    } else {
                        ?>
                            <button type="submit" name="submit" class="btn btn-primary">Check Details </button>
                        <?php
                    }
                    ?>

                    </div>
                </div>
            </div>
            </form>
        </div>

        <?php include_once("../../script.php"); ?>
</body>

</html>
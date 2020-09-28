<?php
$title = ' ERMS | Result Sheet';
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../head.php"); ?>
    <?php include_once("../config.php"); ?>
    <?php include_once("nav.php"); ?>
    <script>
        function getdepartment() {
            var selectdepartment = document.getElementById("department").value;
            $.ajax({
                url: 'result_ajax.php',
                data: 'department=' + selectdepartment,
                success: function(data) {
                    $('#batch').html(data);
                }

            });
        }

        function getexametype() {
            var selectdepartment = document.getElementById("exametype").value;
            $.ajax({
                url: 'result_ajax.php',
                data: 'exametype=' + selectdepartment,
                success: function(data) {
                    $('#Exams_type').html(data);
                }

            });
        }
    </script>
</head>

<body>
<?php
    //departments
    $departments = '';
    $query = "SELECT * FROM departments";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        $departments .= '<option value="' . $row["code"] . '">' . $row["name"] . '</option>';
    }
    ?>
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
                                <select class='custom-select' name="department" id="department" id='inputGroupSelect01' id='validationServer02' onchange="getdepartment()" required>
                                    <?php echo $departments;?>
                                </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInput'>Batch</label>
                                </div>
                                <select class='custom-select' name="batch" id="batch" id='inputGroupSelect01' id='validationServer02' required>
                                    <option selected disabled value="">Choose Batch</option>
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
                                    <label for='exampleInput'>NVQ Level</label>
                                </div>
                                <select class='custom-select' name="nvq" id='inputGroupSelect01' id='validationServer02' required>
                                    <option selected disabled value="">Choose NVQ Level</option>

                                    <option value='1'>NVQ Level-4</option>
                                    <option value='2'>NVQ Level-5</option>
                                    <option value='3'>Bridging</option>
                                </select>
                            </div>
                        </div>

                        <div class="col">
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>

                                    <label for='exampleInputEmail1'>Exams type</label>
                                </div>
                                <select class='custom-select' name="type" id="Exams_type" id='inputGroupSelect01' id='validationServer0' required>
                                    <option selected disabled>Select Exams</option>
                                    <option value='1'>INSTITUTE</option>
                                    <option value='2'>TVEC</option>
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
                            <a href="resultsheet.php?dno=<?php echo ("$department"); ?>& nvq=<?php echo ("$nvq"); ?> & type=<?php echo ("$type"); ?> & batch=<?php echo ("$batch"); ?>" class="btn btn-primary">View Result</a>
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

        <?php include_once("../script.php"); ?>
</body>

</html>
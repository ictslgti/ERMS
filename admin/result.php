<?php
if (isset($_GET['logout']) && isset($_SESSION['username'])) {
    unset($_SESSION['username']);
    header('Location: .././index.php');
}
?>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: .././index.php');
}
?>

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

    <!-- course batch fiter -->
    <?php
    $output = "";
    // course
    if (isset($_GET['department'])) {
        $id = $_GET['department'];
        $query = "select distinct batch_no from exams_result where course='$id'";
        $result = mysqli_query($con, $query);
        $output .= '<option selected disabled value="">Choose batch</option>';
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= '<option value="' . $row["batch_no"] . '">' . $row["batch_no"] . '</option>';
        }
        echo $output;
    }
    // course

    //exame type

    // if (isset($_GET['exametype'])) {
    //     $id= $_GET['exametype'];
    //     $query = "select distinct exams from exams where exametype='$id'";//select distinct exams from exams_result where batch_no=
    //     $result = mysqli_query($con, $query);
    //     $output .= '<option selected disabled value="">Select Exams type</option>';
    //     while ($row = mysqli_fetch_assoc($result)) {
    //       $output .= '<option value="' . $row["Exams_type"] . '">' . $row["Exams_type"] . '</option>';
    //     }
    //     echo $output;
    //   }
    ?>
    <script>
        function getdepartment() {
            var selectdepartment = document.getElementById("department").value;
            $.ajax({
                url: 'result.php',
                data: 'department=' + selectdepartment,
                success: function(data) {
                    $('#batch').html(data);
                }

            });
        }

        // function getexametype() {
        //     var selectdepartment = document.getElementById("exametype").value;
        //     $.ajax({
        //         url: 'result.php',
        //         data: 'exametype=' + selectdepartment,
        //         success: function(data) {
        //             $('#Exams_type').html(data);
        //         }

        //     });
        // }
    </script>
    <!-- course batch fiter -->

</head>

<body>
    <?php
    //courses
    $courses = '';
    $query = "SELECT * FROM courses";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        $courses .= '<option value="' . $row["code"] . '">' . $row["code"] . '</option>';
    }
    ?>
    <div class="container">
        <?php
        //if (isset($_POST['submit'])) {
        ?>
        <!-- <div class='alert alert-success' role='alert'>
                Details available
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div> -->
        <?php
        // }
        ?>
        <div class="card border-light mb-3">
            <div class="card-header">
                <h3> <?php echo " $title" ?></h3>
            </div>
            <div class="card-body s">


                <?php
                if (isset($_POST['submit'])) {
                    $course = $_POST['department'];
                    // $nvq = $_POST['nvq'];
                    $type = $_POST['type'];
                    $batch = $_POST['batch'];
                }
                ?>

                <!-- 1st row -->
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-4">
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInput'>Course</label>
                                </div>
                                <select class='custom-select' name="department" id="department" id='inputGroupSelect01' id='validationServer02' onchange="getdepartment()" required>
                                    <option selected disabled value="">Choose Course</option>
                                    <?php echo $courses; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInput'>Batch</label>
                                </div>
                                <select class='custom-select action' name="batch" id="batch" id='inputGroupSelect01' id='validationServer02' required>
                                    <option selected disabled value="">Choose Batch</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>

                                    <label for='exampleInputEmail1'>Exams type</label>
                                </div>
                                <select class='custom-select' name="type" id="Exams_type" id='inputGroupSelect01' id='validationServer0' required>
                                    <option selected disabled>Choose Exams</option>
                                    <option value='INSTITUT'>INSTITUTE</option>
                                    <option value='TVEC'>TVEC</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <!-- 1st row -->

                    <!-- 2nd row -->
                    <!-- <div class="row">
                        
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

                        <div class="col-6">
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>

                                    <label for='exampleInputEmail1'>Exams type</label>
                                </div>
                                <select class='custom-select' name="type" id="Exams_type" id='inputGroupSelect01' id='validationServer0' required>
                                    <option selected disabled>Choose Exams</option>
                                    <option value='1'>INSTITUTE</option>
                                    <option value='2'>TVEC</option>
                                </select>
                            </div>
                        </div>

                    </div> -->
                    <!-- 2nd row -->
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-auto">
                        <?php
                        if (isset($_POST['submit'])) {
                        ?>
                            <a href="resultsheet.php?course=<?php echo $course; ?> & batch=<?php echo $batch; ?> & type=<?php echo $type; ?>" class="btn btn-primary">View Result</a>
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
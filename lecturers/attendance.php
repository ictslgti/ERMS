<?php
$title = ' ERMS | SLGTI Attendance';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: .././index.php');
}
$user = $_SESSION['username'];
?>

<?php

if (isset($_GET['logout']) && isset($_SESSION['username'])) {
    unset($_SESSION['username']);
    header('Location: .././index.php');
}
?>

<head>
    <?php include_once('.././head.php');
    include_once('../config.php');
    ?>
</head>

<body>
    <?php
    $user = $_SESSION['username'];
    //session
    $lecturers_id = '';
    $query = "SELECT * FROM lecturer where email='$user'";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $lecturers_id = $row['id'];
    }
    ?>
    <?php
    $semester = null;
    if (isset($_GET['semester'])) {
        $semester = $_GET['semester'];
    }
    ?>
    <main class='page-content pt-2'>
        <?php include_once('nav.php');
        ?>
        <div id='overlay' class='overlay'></div>
        <div class='container-fluid p-5'>
            <!-- #1 Insert Your Content-->
            <div class='row'>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3> <?php echo " $title" ?></h3>
                        </div>
                        <div class="card-body">

                            <!-- #1 Insert Your Content-->


                            <div class="container" style="margin-top:10px; overflow: hidden;">
                                <div class="card">
                                    <div class="card-header">

                                        <form action="" method="POST">
                                            <div class="row">
                                                <div class="dropdown">
                                                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="show details" name="show_date">
                                                        Attendance Review
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="attendance.php">Class-wise</a>
                                                        <a class="dropdown-item" href="attendance_month.php">Month-wise</a>
                                                        <a class="dropdown-item" href="attendance_semester.php">Semester-wise</a>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <select name="cid" id="cid" class="custom-select action">
                                                        <?php
                                                        $course_name = '';
                                                        $query = "SELECT * FROM courses";
                                                        $result = mysqli_query($con, $query);
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            $course_name .= '<option value="' . $row["code"] . '">' . $row["code"] . '</option>';
                                                        }
                                                        ?>
                                                        <option value="" selected disabled>Choose Level</option>
                                                        <?php echo $course_name; ?>
                                                    </select>
                                                </div>


                                                <div class="col-2">
                                                    <select name="bid" id="bid" class="custom-select action mr-sm-2">
                                                        <option value="" selected disabled>Choose Batch</option>
                                                    </select>
                                                </div>

                                                <div class="col-2">
                                                    <button type="submit" class="btn btn-primary mb-2" id="">Find</button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>

                                    <div class="card-body">

                                        <div class="table-responsive">


                                            <div class="row">
                                                <div class="form-group col-md-12 table-responsive">
                                                    <table class="table align-middle table-striped">


                                                        <div class="row">
                                                            <div class="form-group col-md-12 table-responsive">
                                                                <table class="table align-middle">
                                                                    <thead class='thead-light'>

                                                                        <tr>
                                                                            <?php
                                                                            $lec = null;

                                                                            ?>

                                                                            <th scope='col'>Reg No.</th>
                                                                            <?php
                                                                            for ($x = 1; $x <= 20; $x += 1) {
                                                                            ?>
                                                                                <th scope='col'><?php echo "$x"; ?></th>
                                                                            <?php } ?>
                                                                            <th scope='col'>Total</th>
                                                                        </tr>



                                                                        <!-- if -->
                                                                        <?php
                                                                        if (isset($_GET['submit'])) {

                                                                        ?>

                                                                            <!-- array -->
                                                                            <?php
                                                                            $student_id = null;
                                                                            $status = null;

                                                                            if (isset($_GET['student_id'])) {
                                                                                $student_id = $_GET['student_id'];
                                                                                $status = $_GET['status'];
                                                                            }
                                                                            ?>
                                                                            <!-- array -->

                                                                            <!-- student_id array -->
                                                                            <?php

                                                                            $sql = mysqli_query($con, "SELECT DISTINCT student_id FROM student_attendance group by student_id");

                                                                            while ($row = mysqli_fetch_array($sql)) {
                                                                                $s_ids[] = $row['student_id'];
                                                                            }
                                                                            foreach ($s_ids as $idss) {
                                                                                // echo "$idss";
                                                                            }
                                                                            ?>
                                                                            <!-- student_id array  -->

                                                                            <!-- status array -->
                                                                            <?php

                                                                            $sql = mysqli_query($con, "SELECT DISTINCT status FROM student_attendance group by student_id");

                                                                            while ($row = mysqli_fetch_array($sql)) {
                                                                                $s_ids[] = $row['status'];
                                                                            }
                                                                            foreach ($s_ids as $idss) {
                                                                                // echo "$idss";
                                                                            }
                                                                            ?>
                                                                            <!-- status array  -->

                                                                        <?php
                                                                        } else {
                                                                        ?>

                                                                            <?php
                                                                            $student_id = null;
                                                                            $status = null;

                                                                            if (isset($_GET['student_id'])) {
                                                                                $student_id = $_GET['student_id'];
                                                                                $status = $_GET['status'];
                                                                            }
                                                                            ?>
                                                                            <!-- array -->

                                                                            <!-- student_id array -->
                                                                            <?php

                                                                            $sql = mysqli_query($con, "SELECT DISTINCT student_id FROM student_attendance group by student_id");

                                                                            while ($row = mysqli_fetch_array($sql)) {
                                                                                $s_ids[] = $row['student_id'];
                                                                            }
                                                                            foreach ($s_ids as $idss) {
                                                                                // echo "$idss";
                                                                            }
                                                                            ?>
                                                                            <!-- student_id array  -->

                                                                            <!-- status array -->
                                                                            <?php

                                                                            $sql = mysqli_query($con, "SELECT DISTINCT status FROM student_attendance group by student_id");

                                                                            while ($row = mysqli_fetch_array($sql)) {
                                                                                $s_ids[] = $row['status'];
                                                                            }
                                                                            foreach ($s_ids as $idss) {
                                                                                // echo "$idss";
                                                                            }
                                                                            ?>
                                                                            <!-- status array  -->


                                                                            <?php
                                                                            // $sql = " SELECT student_id,status from student_attendance group by student_id";
                                                                            // $result = mysqli_query($con, $sql);
                                                                            // while ($row = mysqli_fetch_assoc($result)) {
                                                                            ?>
                                                                            <!-- <tr>
                                                                                <td><?php //echo $row['student_id'] 
                                                                                    ?></td>

                                                                                <td>
                                                                                    <?php
                                                                                    // if ($row['status'] == 'present') {
                                                                                    //     echo "P";
                                                                                    // } else {
                                                                                    //     echo 'AB';
                                                                                    // }
                                                                                    ?>
                                                                                </td>

                                                                            </tr> -->
                                                                        <?php
                                                                            // } 
                                                                        }
                                                                        ?>

                                                                        <tr>
                                                                            <td>Total attendance</td>




                                                                        </tr>

                                                                    </thead>

                                                                </table>
                                                            </div>
                                                        </div>
                                                        <!-- end        -->
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

</body>

</html>

<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="css/datepicker.css" />

<div class="modal" id="formModal">
    <div class="modal-dialog">
        <form method="post" id="attendance_form">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="modal_title"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            </div>
    </div>
    <div class="form-group" id="student_details">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
            </table>
        </div>
    </div>
</div>
</main>

<?php include_once("../script.php");
?>
</body>

</html>

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
                    url: "sample.php",
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

<!-- script -->
<script>
    function myFunction() {
        document.getElementById("demo").style.color = "red";
    }
</script>
<!-- script -->

<?php
//fetch.php
if (isset($_POST["action"])) {
    $connect = mysqli_connect("localhost", "root", "", "erms");
    $output = '';
    if ($_POST["action"] == "cid") {
        $query = "SELECT `batches`.`batch_no` FROM `batches` LEFT JOIN `courses` ON `batches`.`NVQ_level` = `courses`.`NVQ_level` AND 
  `batches`.`department_code` = `courses`.`department_code` WHERE `courses`.`code`='" . $_POST["query"] . "'";
        $result = mysqli_query($connect, $query);
        $output .= '<option value="" disabled selected>Choose Batch</option>';
        // $output .= '<a href="" disabled selected> Choose</a><br>';
        while ($row = mysqli_fetch_array($result)) {
            $output .= '<option value="' . $row["batch_no"] . '">' . $row["batch_no"] . '</option>';
            // $output .= '<a href="?module=' . $row['batch_no'] . '">' . $row['batch_no'] . '</a><br>';
        }
    }
    echo $output;
}
?>

<!-- course filter -->
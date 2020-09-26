<?php
$title = "View Students | Online Examination Result Management System | SLGTI";
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

        <!-- delete start -->
        <?php
        if (isset($_GET['delete'])) {
            $student_id = $_GET['delete'];
            $sql_delete = "DELETE FROM `student` WHERE `student`.`id` = '$student_id'";
            if (mysqli_query($con, $sql_delete)) {
                echo '<div class="alert alert-success" role="alert">
                Successfully Deleted!
                </div>';
            } else {
                echo "Error deleting record: " . mysqli_error($con);
            }
        }
        ?>
        <!-- delete end -->

        <main class="">
            <div class="container-fluid p-5">
                <!-- #1 Insert Your Content-->
                <div class="container">

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
                                                <td scope='col'>ACTIONS</td>
                                            </tr>
                                            <?php
                                            $sql = "SELECT * FROM student_enroll WHERE id = '2018slgtibit04' ORDER BY course_code desc";
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
                                                        <a class="btn btn-outline-warning btn-sm" href="student.php?eedit=<?php echo $row['id']; ?>">Edit</a>
                                                        <a class="btn btn-outline-danger btn-sm disabled" href="?edelete=<?php echo $row['id']; ?>">Delete</a>
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
                    <!-- 1st row end -->

                    <!-- #1 Insert Your Content" -->
                </div>
        </main>
    </div>

    <?php include_once("../script.php"); ?>
</body>

</html>
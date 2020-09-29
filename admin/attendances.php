<?php
$title = "Dashboard | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../head.php"); ?>
    <?php include_once("../config.php"); ?>
    <style>
        .c {
            margin-top: 10px;
            margin-bottom: 10px;
            margin-right: 15px;
            margin-left: 15px;
        }
    </style>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <nav id="sidebar" class="sidebar-wrapper">
            <?php include_once("nav.php"); ?>
        </nav>
        <main class="page-content pt-2">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5">
                <!-- #1 Insert Your Content-->
                <div class="container">
                    <?php
                    $sql = 'SELECT * FROM `attendance`';
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                        <div class="row">
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                                <div class="card col-2 c">

                                    <div class="card-header"><?php echo $row['date'] . "<br>" ?>
                                        <?php echo "Time" . $row['time'] ?>
                                    </div>
                                    <div class="card-body ">
                                        <?php echo $row['module_id'] . "<br>" ?>
                                        <?php echo "Achchuthan" ?>
                                    </div>
                                    <div class="card-footer bg-transparent border-success">
                                        <div class="btn-group btn-sm" role="group" aria-label="Basic example">
                                            <a href="attendance.php?edit=<?php echo $row['id'] ?>" class="btn btn-outline-warning"> <i class="far fa-edit"></i> </a>
                                            <a href="?delete=',$row['batch_no'],'" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i> </a>
                                            <a href="lec_attedance.php?code='<?php echo $row['code'] ?> & date='<?php echo $row['attendance_date'] ?> 
                                            & time='<?php echo $row['attendance_time'] ?>& batch_no='<?php echo $row['batch_no'] ?>'" class="btn btn-outline-success"><i class="fas fa-user-plus"></i> </a>
                                            <!-- <a href="?delete=',$row['batch_no'],'" class="btn btn-outline-success"><i class="fas fa-user-plus"></i> </a> -->
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        } else {
                            echo 'no rows';
                        }
                        ?>
                        <!-- delete -->
                        <?php
                        if (isset($_GET['delete'])) {
                            $id = $_GET['delete'];
                            $sql = "DELETE FROM `attendance` WHERE `batches`.`id` = '$id'";
                            if (mysqli_query($con, $sql)) {
                                echo "
                                <div class='alert alert-success' role='alert'>
                                delete success fully 
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>";
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($con);
                            }
                        }
                        ?>
                        <!-- delete -->


                        </div>
                </div>
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>
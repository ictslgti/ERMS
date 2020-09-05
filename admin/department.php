<?php
$title = "Add Department | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../head.php"); ?>
    <?php include_once("../config.php"); ?>
</head>

<body>

    <div class="page-wrapper toggled bg2 border-radius-on light-theme">

        <?php include_once("nav.php"); ?>

        <!-- <main class="page-content pt-2"> -->
        <!-- 1st row start -->

        <div class="container">
            <?php
            $id = null;

            $code = null;
            $d_name = null;
            if (isset($_GET['edit'])) {
                $id = $_GET['edit'];

                $sql = "SELECT * FROM `departments` WHERE `id`= '$id' ";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    $code = $row['code'];
                    $d_name = $row['name'];
                }
            }
            ?>

            <!-- insert  -->
            <?php

            if (
                isset($_POST['submit'])
                && !empty($_POST['code'])
                && !empty($_POST['d_name'])
            ) {
                $code = $_POST['code'];
                $d_name = $_POST['d_name'];


                $sql = "INSERT INTO departments (code,name)
    VALUES 
    ('$code', 
    '$d_name' 
    )
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

            <!-- insert  -->



            <!-- update -->
            <?php

            if (
                isset($_POST['save'])
                && !empty($_POST['code'])
                && !empty($_POST['d_name'])

            ) {

                $code = $_POST['code'];
                $d_name = $_POST['d_name'];

                $sql = "UPDATE `departments` SET `name` = '$d_name' WHERE `departments`.`code` = '$code';";

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
                            <h4>Department</h4>
                        </div>
                        <div class="col-auto">
                            <a href="departments.php" class="btn btn-outline-primary">Departments</a>
                        </div>

                    </div>
                </div>
                <div class="card-body ">
                    <div class="card  mb-3">

                        <div class="card-body ">
                            <form method="POST" action="department.php">
                                <div class="row">
                                    <div class="col-sm">
                                        Code <br>
                                        <div class="form-group">
                                            <div class="input-group input-group-sm mb-3">
                                                <?php
                                                if (isset($_GET['edit'])) {
                                                        ?>
                                                    <input type="text" name="code" placeholder="ICT" readonly value="<?php echo $code; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                                                <?php
                                            } else {
                                                ?>
                                                    <input type="text" name="code" placeholder="ICT" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                                                <?php

                                            }
                                        ?>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm">
                                        <div class="form-group">
                                            Name <br>
                                            <div class="form-group">
                                                <div class="input-group input-group-sm mb-3">
                                                    <input type="text" name="d_name" placeholder="Inotormation communication technology" value="<?php echo $d_name; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- 2 row end -->
                                    </div>

                                </div>


                        </div>
                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-11 "></div>
                                <div class="col-1">
                                    <?php
                                    if (isset($_GET['edit'])) {
                                        ?>
                                        <button type="submit" name="save" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
                                            save
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

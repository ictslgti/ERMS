<?php
$title = "Courses | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
    <?php include_once("../config.php"); ?>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">

        <?php include_once("nav.php"); ?>

        <!-- <main class="page-content pt-2"> -->
        <!-- 1st row start -->

        <div class="container">
            <!-- delete -->
            <?php
            if (isset($_GET['delete'])) {
                $id = $_GET['delete'];
                $sql = "DELETE FROM `courses` WHERE `courses`.`id` = '$id'";
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
            <br>
            <form action="">
                <div class="card  mb-3">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col">
                                <h4>Course</h4>
                            </div>
                            <div class="col-auto">
                               
                            </div>

                        </div>
                    </div>


                    <div class="card-body ">
                        <form method="POST">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <div class="table-responsive">

                                        <table class='table align-middle'>
                                            <thead class='bg-primary text-light'>
                                                <tr>
                                                    <th scope='col'>code</th>
                                                    <th scope='col'>name</th>
                                                    <th scope='col'>Level</th>
                                                    <th scope='col'>Department</th>
                                                    <th scope='col'></th>
                                                </tr>

                                            </thead>
                                            <tbody>



                                                <?php

                                                if (isset($_GET['view'])) {
                                                    $view = $_GET['view'];
                                                    $sql = "SELECT * FROM `courses` where department_code='$view'";
                                                } else {
                                                    $sql = 'SELECT * FROM `courses`';
                                                }
                                                $result = mysqli_query($con, $sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo '<tr>
            <td>', $row['code'], '</td>
            <td>', $row['name'], '</td>
            <td>', $row['NVQ_level'], '</td>
            <td>', $row['department_code'], '</td>
            
            
            <td>
            <div class="row">
            <div class="col"></div>
            <div class="col-auto">
            <div class="btn-group btn-sm" role="group" aria-label="Basic example">
            
            <a href="modules.php?view=', $row['code'], '" class="btn btn-success"><b>modules</b> </a>
            </div>
            </div>
          </div>
            </td>
        </tr>';
                                                    }
                                                } else {
                                                    echo 'no rows';
                                                }
                                                ?>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <br>
                    <!-- 2 row end -->
                </div>



                <!-- 1st row end -->
                <!-- <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5"> -->
                <!-- #1 Insert Your Content-->
                <!-- <div class="container"> -->
                <!-- 2 row start -->



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

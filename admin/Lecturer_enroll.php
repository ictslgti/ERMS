<?php
$title = "Lec_Enrolement | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
    <?php include_once("../config.php"); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- course -->
    <script>
        function getcourse() {
            var selectcourse = document.getElementById("course").value;
            $.ajax({
                url: 'lecturer_enroll_ajax.php',
                data: 'course=' + selectcourse,
                success: function(data) {
                    $('#module').html(data);
                }

            });
        }
    </script>
    <!-- course -->

    <!-- batch -->
    <script>
        function getbatch() {
            var selectcourse = document.getElementById("course").value;
            $.ajax({
                url: 'lecturer_enroll_ajax.php',
                data: 'cou=' + selectcourse,
                success: function(data) {
                    $('#batch').html(data);
                }

            });
        }
    </script>
    <!-- batch -->

    <!-- batch -->
    <script>
        function getlecturer() {
            var selectcourse = document.getElementById("course").value;
            $.ajax({
                url: 'lecturer_enroll_ajax.php',
                data: 'courses=' + selectcourse,
                success: function(data) {
                    $('#lecturer').html(data);
                }

            });
        }
    </script>
    <!-- batch -->

    <script>
        function getselectvalue() {
            var selectmodule = document.getElementById("module").value;


            $.ajax({
                url: 'lecturer_enroll_ajax.php',
                data: 'module=' + selectmodule,
                success: function(data) {
                    $('#demo').html(data);
                }

            });
        }
    </script>
</head>

<body>
    <?php
    //course
    $courses = '';
    $query = "SELECT * FROM courses";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        $courses .= '<option value="' . $row["code"] . '">' . $row["name"] . '</option>';
    }
    //  course  
    ?>

    <div class="page-wrapper toggled bg2 border-radius-on light-theme">

        <?php include_once("nav.php"); ?>

        <!-- <main class="page-content pt-2"> -->
        <!-- 1st row start -->
        <div class="container">

            <?php
            $batch = null;
            $batch_no = null;
            $module = null;
            $module_name = null;
            $lecturer = null;
            $first = null;
            $last = null;
            $course = null;
            if (isset($_GET['edit'])) {
                $id = $_GET['edit'];
                $query = "select c.name as course,m.name,m.id as module,b.id as batch,l.id as lec,b.batch_no,l.first_name,l.last_name from batches b,modules m,lecturer l,lecturer_enroll le,courses c where c.code=m.course_code 
                            and le.module=m.id and le.batch=b.id and le.lecturer=l.id and le.id=$id;";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                    $course = $row['course'];
                    $module_name = $row['name'];
                    $module = $row['module'];
                    $batch_no = $row['batch_no'];
                    $batch = $row['batch'];
                    $lecturer = $row['lec'];
                    $first = $row['first_name'];
                    $last = $row['last_name'];
                }
            }
            ?>

            <?php
            if (
                isset($_POST['submit'])
                && !empty($_POST['module'])
                && !empty($_POST['batch'])
                && !empty($_POST['lecturer'])
            ) {

                $module = $_POST['module'];
                $batch = $_POST['batch'];
                $lecturer = $_POST['lecturer'];

                $sql = "INSERT INTO `lecturer_enroll`(module,batch,lecturer)
VALUES 
('$module', 
'$batch', 
$lecturer
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
This course alredy submit 
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
</button>
</div>";
                }
            }
            ?>


            <br>
            <form action="" method="POST">
                <div class="card  mb-3">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col">
                                <h4>Module Enrollment</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="card  mb-3">

                            <div class="card-body ">
                                <form method="POST" action="">
                                    <div class="row">

                                        <div class="col-sm">
                                            <div class="form-group">
                                                Course Name <br>
                                                <div class="form-group">
                                                    <div class="input-group input-group-sm mb-3">

                                                        <select class="custom-select" id="course" name="course" id="inputGroupSelect01" id="validationCustom04" onchange="getcourse()" required>
                                                            <?php
                                                            if (isset($_GET['edit'])) {
                                                            ?>
                                                                <option value="" selected disabled><?php echo $course; ?></option>
                                                            <?php
                                                                echo $courses;
                                                            } else {
                                                            ?>
                                                                <option value="" selected disabled> select Course</option>
                                                                <?php echo $courses; ?>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                Module Name <br>
                                                <div class="form-group">
                                                    <div class="input-group input-group-sm mb-3">

                                                        <select class="custom-select" id="module" name="module" id="inputGroupSelect01" id="validationCustom04" onchange="getbatch(),getselectvalue()" required>
                                                            <?php
                                                            if (isset($_GET['edit'])) {
                                                            ?>
                                                                <option value="" selected disabled><?php echo $module_name; ?></option>
                                                            <?php

                                                            } else {
                                                            ?>
                                                                <option value="" selected disabled> select module</option>

                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>




                                    </div>


                                    <div class="row">


                                        <div class="col-sm">
                                            Batch <br>
                                            <div class="form-group">
                                                <div class="input-group input-group-sm mb-3">

                                                    <select class="custom-select" id="batch" name="batch" onchange="getlecturer()" id="inputGroupSelect01" id="validationCustom04" required>
                                                        <?php
                                                        if (isset($_GET['edit'])) {
                                                        ?>
                                                            <option value="" selected disabled><?php echo $batch_no; ?></option>
                                                        <?php

                                                        } else {
                                                        ?>
                                                            <option value="" selected disabled> select Batch</option>

                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-sm">
                                            Lecturer <br>
                                            <div class="form-group">
                                                <div class="input-group input-group-sm mb-3">

                                                    <select class="custom-select" id="lecturer" name="lecturer" id="inputGroupSelect01" id="validationCustom04" required>
                                                        <?php
                                                        if (isset($_GET['edit'])) {
                                                        ?>
                                                            <option value="" selected disabled><?php echo $first . $last; ?></option>
                                                        <?php

                                                        } else {
                                                        ?>
                                                            <option value="" selected disabled> select lecturer</option>

                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="card-footer ">
                                <div class="row">
                                    <div class="col-11 "></div>
                                    <div class="col-1">
                                        <?php if (isset($_GET['edit'])) {
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
            </form>

            <div class="table-responsive-sm">
                <table class="table ">
                    <thead class="p-3 mb-2 bg-primary text-white">
                        <tr>
                            <th scope="col">module</th>
                            <th scope="col">batch</th>
                            <th scope="col">lecturer</th>

                            <th scope="col">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col-auto"><a href="Lecturer_enroll.php">
                                            <?php
                                            if (isset($_GET['edit'])) {
                                            ?>
                                                <i class="fa fa-plus-square-o" style="font-size:24px;color:red"></i>
                                            <?php
                                            } else {
                                            ?>
                                            <?php
                                            }
                                            ?>

                                        </a></div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = 'select le.id,m.name,b.batch_no,l.first_name,l.last_name from batches b,modules m,lecturer l,lecturer_enroll le where le.module=m.id and le.batch=b.id and le.lecturer=l.id;';
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                <td>', $row['name'], '</td>
            <td>', "batches" . $row['batch_no'], '</td>
            
            <td>', $row['first_name'] . $row['last_name'], '</td>
            
            <td>
            <div class="row">
<div class="col"></div>
<div class="col-auto">
<div class="btn-group btn-sm" role="group" aria-label="Basic example">
            <a href="?edit=', $row['id'], '" class=" btn btn-sm" style="background-color: #ffaa00 ;" ><i class="far fa-edit" style="color: #ffffff;"></i> </a> 
            <a href="?delete=', $row['id'], '" class="btn btn-sm" style="background-color: #bf0502;"> <i class="far fa-trash-alt" style="color: #ffffff;"></i> </a>
            
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
        <!-- #1 Insert Your Content" -->
    </div>
    </main>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>
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
$title = "Assessments | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../head.php"); ?>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php include_once("../config.php"); ?>

    <style>
        .test:after {
            content: '\2807';
            font-size: 18px;
            font-weight: bold;
        }
    </style>
    <!-- department -->
    <script>
        function getdepartment() {
            var selectdepartment = document.getElementById("department").value;
            $.ajax({
                url: 'assessment_ajax.php',
                data: 'department=' + selectdepartment,
                success: function(data) {
                    $('#course').html(data);
                }

            });
        }
    </script>
    <!-- department -->

    <!-- department table-->
    <script>
        function getdepartmenttable() {
            var selectdepartment = document.getElementById("department").value;
            $.ajax({
                url: 'assessmenttable_ajax.php',
                data: 'depart=' + selectdepartment,
                success: function(data) {
                    $('#demo').html(data);
                }

            });
        }
    </script>
    <!-- department table -->

    <!-- course -->
    <script>
        function getcourse() {
            var selectcourse = document.getElementById("course").value;
            $.ajax({
                url: 'assessment_ajax.php',
                data: 'course=' + selectcourse,
                success: function(data) {
                    $('#module').html(data);
                }

            });
        }
    </script>
    <!-- course -->

    <!-- course table-->
    <script>
        function getcoursetable() {
            var selectcourse = document.getElementById("course").value;
            $.ajax({
                url: 'assessmenttable_ajax.php',
                data: 'cour=' + selectcourse,
                success: function(data) {
                    $('#demo').html(data);
                }
            });
        }
    </script>
    <!-- course table -->

    <!-- module table-->
    <script>
        function getmoduletable() {
            var selectmodule = document.getElementById("module").value;
            $.ajax({
                url: 'assessmenttable_ajax.php',
                data: 'modu=' + selectmodule,
                success: function(data) {
                    $('#demo').html(data);
                }
            });
        }
    </script>
    <!-- module table -->


    <!-- batch -->
    <script>
        function getbatch() {
            var selectcourse = document.getElementById("course").value;
            $.ajax({
                url: 'assessment_ajax.php',
                data: 'cou=' + selectcourse,
                success: function(data) {
                    $('#batch').html(data);
                }

            });
        }
    </script>
    <!-- batch -->


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

    <div class="page-wrapper toggled bg2 border-radius-on light-theme">

        <?php include_once("nav.php"); ?>

        <!-- <main class="page-content pt-2"> -->
        <!-- 1st row start -->

        <div class="container">
            <br>
            <form action="" method="post">
                <div class="card  mb-3">
                    <div class="card-header ">
                        <h1>Assessments</h1>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    Department <br>
                                    <div class="input-group input-group-sm mb-3">

                                        <select class="custom-select" onchange="getdepartment(),getdepartmenttable()" name="department" id="department" id="inputGroupSelect01" id="validationCustom04" required>

                                            <option selected disabled value="">Choose department</option>
                                            <?php echo $departments ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    Course <br>
                                    <div class="input-group input-group-sm mb-3">

                                        <select class="custom-select" onchange="getcourse(),getcoursetable()" name="course" id="course" id="inputGroupSelect01" id="validationCustom04" required>

                                            <option selected disabled value="">Choose course</option>


                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    Module <br>
                                    <div class="input-group input-group-sm mb-3">

                                        <select class="custom-select" onchange="getmoduletable(),getbatch()" name="module" id="module" id="inputGroupSelect01" id="validationCustom04" required>

                                            <option selected disabled value="">Choose Module</option>


                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    Batch <br>
                                    <div class="input-group input-group-sm mb-3">

                                        <select class="custom-select" name="batch" id="batch" id="inputGroupSelect01" id="validationCustom04" required>
                                            <option selected disabled value="">Choose batch</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <div class="table-responsive">
                                    <table class='table align-middle' name="demo" id="demo">
                                        <thead class='bg-primary text-light'>
                                            <tr>

                                                <th scope='col'>Name</th>
                                                <th scope='col'>Module</th>
                                                <th scope='col'>Batch</th>
                                                <th scope='col'></th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <div>

                                                <?php
                                                $corr = null;
                                                $sql = 'select a.department_code, a.type,a.id,a.names,m.name,b.batch_no,b.NVQ_level from assessments a inner join modules m on a.module=m.id inner join batches b on b.id=a.batch';
                                                $result = mysqli_query($con, $sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {


                                                                        echo '<tr>
                                        <td>', $row['names'] . " " . "<span class='badge badge-dark'>" . $row['type'] . "</span>", '</td>
                                        <td>', $row['name'], '</td>
                                        <td>', $row['NVQ_level'] . '-batch-' . $row['batch_no'] . "<span class='badge badge-dark'>" . $row['department_code'] . "</span>", '</td>
                        
                                             <td>
                                        <div class="row">
                                        <div class="col"></div>
                                        <div class="col-auto">
                                        <div class="btn-group btn-sm" role="group" aria-label="Basic example">';

                                                        echo '<a href="assessment_result.php?id=' . $row['id'] . '" class="btn btn-sm" style="background-color: #0097c4 ; color: #ffffff;" > See  Result </a>';



                                                        echo '  </div>
                                            </div>
                                            </div>

                                                        
                                                        </td>
                                                    </tr>';
                                                    }
                                                } else {
                                                    echo 'no rows';
                                                }
                                                ?>
                                            </div>
                                        </tbody>
                                    </table>
                                </div>

                            </div>


                        </div>
                        <div class="card-footer ">
                            <div class="row">
                                <div class="col">

                                    <h1></h1>
                                </div>
                                <div class="col-auto">

                                </div>
                            </div>
                        </div>
                        <!-- #1 Insert Your Content" -->
                    </div>
                    </main>
                </div>
                <?php include_once("../script.php"); ?>
</body>

</html>

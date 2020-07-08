<?php
$title = "Add Academicyear | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>


<?php
include_once('../config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">

        <?php include_once("nav.php"); ?>

        <!-- <main class="page-content pt-2"> -->
        <!-- 1st row start -->

        <div class="container">

            <br>
            <div class="card  mb-3">
                <div class="card-header ">
                    <div class="row">
                        <div class="col">
                            <h4>Academicyear</h4>
                        </div>
                        <div class="col-auto">
                            <a href="Academicyears.php" class="btn btn-outline-primary">Academicyears</a>
                        </div>

                    </div>
                </div>
                <div class="card-body ">
                    <div class="card  mb-3">
                        <div class="card-body ">
                            <form method="POST" action="Academicyear.php">

                                <div class="row">
                                    <div class="col-sm">
                                        Academicyear <br>
                                        <div class="form-group">
                                            <div class="input-group input-group-sm mb-3">
                                                <input type="text" name="academicyear" class="form-control"
                                                    aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-sm" id="validationServer01"
                                                    required>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm">
                                        <div class="form-group">
                                            Year Status <br>
                                            <div class="input-group input-group-sm mb-3">

                                                <select class="custom-select" name="status" id="inputGroupSelect01"
                                                    id="validationCustom04" required>
                                                    <option selected disabled value="">Choose Year Status </option>
                                                    <option value="Active">Active</option>
                                                    <option value="Completed">Completed</option>
                                                    <option value="plan">plan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <!-- 2 row end -->


                                <div class="row">
                                    <div class="col-sm">
                                        Semester1 Start Date <br>
                                        <div class="form-group">
                                            <div class="input-group input-group-sm mb-3">
                                                <input type="date" name="semi1start" class="form-control"
                                                    aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-sm" id="validationServer01"
                                                    required>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm">
                                        <div class="form-group">
                                            Semester1 End Date <br>
                                            <div class="input-group input-group-sm mb-3">
                                                <input type="date" name="semi1end" class="form-control"
                                                    aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-sm" id="validationServer01"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                </div>
                                <!-- 3 row end -->


                                <div class="row">
                                    <div class="col-sm">
                                        Semester2 Start Date <br>
                                        <div class="form-group">
                                            <div class="input-group input-group-sm mb-3">
                                                <input type="date" name="semi2start" class="form-control"
                                                    aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-sm" id="validationServer01"
                                                    required>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm">
                                        <div class="form-group">
                                            Semester2 End Date <br>
                                            <div class="input-group input-group-sm mb-3">
                                                <input type="date" name="semi2end" class="form-control"
                                                    aria-label="Sizing example input"
                                                    aria-describedby="inputGroup-sizing-sm" id="validationServer01"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                </div>




                        </div>


                    </div>
                    <div class="card-footer ">
                        <div class="row">
                            <div class="col-11 "></div>
                            <div class="col-1">
                                <button type="submit" name="submit" class="btn btn-outline-success" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>




                </div>
                </form>

                <?php
if(
    isset($_POST['submit'])  
    && !empty($_POST['academicyear'])
    && !empty($_POST['status'])
    && !empty($_POST['semi1start'])
    && !empty($_POST['semi1end'])
    && !empty($_POST['semi2start'])
    && !empty($_POST['semi2end'])
    
){
    
    $year = $_POST['academicyear'];
    $status=$_POST['status'];
    $semi1start = $_POST['semi1start'];
    $semi1end = $_POST['semi1end'];
    $semi2start = $_POST['semi2start'];
    $semi2end = $_POST['semi2end'];

    $sql = "INSERT INTO academic_year (academic_year,academic_year_status, 1semi_startdate, 1semi_enddate,2semi_startdate,2semi_enddate)
    VALUES 
    ('$year','$status', 
    '$semi1start', 
    '$semi1end','$semi2start','$semi2end')
    ";

   if (mysqli_query($con, $sql)) {
       echo "New record created successfully";
   } else {
       echo "This academic_year alredy submit";
   }
}       
?>

            </div>
            <!-- #1 Insert Your Content" -->
        </div>
        </main>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>
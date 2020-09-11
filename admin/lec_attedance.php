<?php
$title = "Attendance | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../head.php"); ?>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <?php include_once("nav.php"); ?>
        <div class="container">
            <!-- content -->
            <br>
            <div class="card border-secondary mb-3">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm">
                            <h1>Attendance</h1>
                        </div>
                    </div>
                </div>
                <div class="card-body text-dark">
                    <!-- first row -->
                    <div class="row">
                        <div class="col">
                            <p>Date -: 2020-10-08</p>
                            <p>Time -: 12.30</p>
                            <p>Lecture -: Y.Achchuthan</p>
                        </div>
                        <div class="col-auto">
                            <p>module -: M07</p>
                            <p>Batch -: 05</p>
                            <p></p>
                        </div>
                    </div>
                    <!-- first row end -->
                    <hr>
                    <!-- seond row -->
                    <div class="row">
                        <div class="col"><h6>Name</h6></div>
                        <div class="col-auto"><h6>status</h6></div>
                    </div>

             <hr>
                    <div class="row">
                        <div class="col">Sithamparanathan sumanan</div>
                        <div class="col-auto"><input type="checkbox"></div>
                    </div>
<hr>
                    <div class="row">
                        <div class="col">Sathijaseelan sathursan</div>
                        <div class="col-auto"><input type="checkbox"></div>
                    </div>
<hr>
                    <div class="row">
                        <div class="col">Ramachandran Kogilavani</div>
                        <div class="col-auto"><input type="checkbox"></div>
                    </div>
<hr>
                    <div class="row">
                        <div class="col">Balasubramaniyan kiriya</div>
                        <div class="col-auto"><input type="checkbox"></div>
                    </div>
                    <!-- second end -->

                </div>
                <div class="card-footer bg-transparent border-secondary">
                    <div class="row">
                        <div class="col" ><input type="submit" value="add" class="btn btn-outline-primary"></div>
                        <div class="col-auto">click all select<input type="checkbox"></div>
                    </div>
                </div>
            </div>

            <!-- content -->
        </div>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>
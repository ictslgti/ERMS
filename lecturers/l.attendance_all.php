<?php
// session_start();
// if (!isset($_SESSION['username'])) {
//     header('Location: .././index.php');
// }
?>
<?php
$title = ' ERMS | SLGTI Attendance';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php include_once('.././head.php');
    include_once('../config.php');
    ?>
</head>

<body>
    <main class='page-content pt-2'>
        <?php include_once('nav.php');
        ?>
        <div id='overlay' class='overlay'></div>
        <div class='container-fluid p-5'>
            <!-- #1 Insert Your Content-->



            <div class="container">

                <!-- 1st row start -->
                <div class="row">
                    <div class="col-sm">
                        <div class="border border-primary rounded text-center">
                            <h2>Student's Attendence | SLGTI</h2>
                        </div>
                    </div>
                </div>
                <br>
                <!-- 1st row end -->

                <form method="POST" action="">
                    <div class="row">
                        <div class='col-7'>
                            <div class='form-group col-md'>

                                <div class='form-group col-md'>
                                    <h4>ALL Students</h4>
                                </div>

                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <h5>CHOOSE LEVEL</h5>
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            LEVEL
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#">LEVEL 04</a>
                                            <a class="dropdown-item" href="#">LEVEL 05</a>
                                            <a class="dropdown-item" href="#">LEVEL 06</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                                    <h5>CHOOSE BATCH</h5>
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            BATCH
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#">BATCH 01</a>

                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </form>

                <div class="row">
                    <div class="form-group col-md-12 table-responsive">
                        <table class="table align-middle">
                            <thead class='thead-light'>


                                <tr>

                                    <th scope='col'>Reg No.</th>
                                    <th scope='col'>1st Lec</th>
                                    <th scope='col'>2nd Lec</th>
                                    <th scope='col'>3rd Lec</th>
                                    <th scope='col'>4th Lec</th>
                                    <th scope='col'>5th Lec</th>
                                    <th scope='col'>6th Lec</th>
                                    <th scope='col'>7th Lec</th>
                                    <th scope='col'>8th Lec</th>
                                    <th scope='col'>9th Lec</th>
                                    <th scope='col'>10th Lec</th>

                                    <th scope='col'>Total Lec</th>
                                </tr>
                                <?php
                                $sql = " select student_id,status from student_attendance group by student_id";
                                $result = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['student_id'] ?></td>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <td scope="row"><?php echo $row['status'] ?></td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                <?php
                                }
                                ?>
                                <tr>
                                    <td>Total attendance</td>
                                    <td>05</td>
                                    <td>04</td>
                                    <td>01</td>
                                    <td>05</td>
                                    <td>04</td>
                                    <td>04</td>
                                    <td>04</td>
                                    <td>04</td>
                                    <td>05</td>
                                    <td>05</td>


                                    <td>25</td>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>



                <!-- #1 Insert Your Content" -->
            </div>
    </main>

    <?php include_once("../script.php");
    ?>
</body>

</html>
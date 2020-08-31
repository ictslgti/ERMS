<?php
$title = ' ERMS | SLGTI(page Title)';
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
                                <ul class='nav nav-tabs'>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='./attendance_all.php'>All Moduels</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link active' href='./attendance.php'>Selected Moduel</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" name="module" aria-expanded="false">Module</a>
                                        <div class="dropdown-menu">
                                            <?php
                                                $sql = "select * from attendance GROUP BY module ";
                                                $result = $con->query($sql);
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {

                                                        echo '<a class="dropdown-item" href="#">', $row['module'], '</a>';
                                                    }
                                                } else {
                                                    echo 'no rows';
                                                }
                                            ?>
                                            

                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="row">
                    <div class="form-group col-md-12 table-responsive">
                        <table class='table align-middle '>
                            <thead class='thead-light'>
                                <tr>
                                    <th scope='col'>DATE</th>
                                    <th scope='col'>TIME</th>
                                    <th scope='col'>STATUS</th>
                                </tr>
                                <?php
                                $sql = " select date(date),time(date),status from attendance where student_id='2018ICTBIT01'";
                                $result = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>


                                    <tr>
                                        <td scope='col'><?php echo $row['date(date)']; ?></td>
                                        <td scope='col'><?php echo $row['time(date)']; ?></td>
                                        <td scope='col'><?php echo $row['status']; ?></td>

                                    <?php
                                }
                                    ?>


                                    </tr>
                                    <table>
                                        <?php
                                        $sql = " select count(status) as take_session,session from attendance where student_id='2018ICTBIT01'";
                                        $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $per = $row['take_session']; + $row['session'];

                                        ?>
                                            <tr>
                                                <td style="text-align: right">Points over taken sessions:</td>
                                                <td> <?php echo $row['session']; ?><?php echo "/"; ?> <?php echo $row['take_session']; ?></td>

                                            <?php
                                        }
                                            ?>
                                            </tr>
                                            <?php
                                            $sql = " select count(status) as take_session,session from attendance where student_id='2018ICTBIT01' group by module";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {

                                                $per = (($row['take_session'] / $row['session']) * 100) . "%";
                                            ?>
                                                <tr>
                                                    <td style="text-align: right">Percentage over taken sessions:</td>

                                                    <td><?php echo ($per); ?></td>

                                                <?php
                                            }
                                                ?>
                                                </tr>
                                    </table>
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
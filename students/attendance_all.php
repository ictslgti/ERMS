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
                                        <a class='nav-link active' href='./attendance_all.php'>ALL Moduels</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='./attendance.php'>Selected Moduel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="row">
                    <div class="form-group col-md-12 table-responsive">
                    <table class="table align-middle">
                        <thead class='thead-light'>
                            <tr>
                                <th scope='col'>Moduels</th>
                                <th scope='col'>Points over taken session</th>
                                <th scope='col'>All session</th>
                                <th scope='col'>Percentage over taken session</th>
                                <th ></th>
                            </tr>
                            <?php
                            $sql = "SELECT * FROM attendance";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                            <tr>
                                <td scope='col'><?php echo $row['module'];?></td>
                                <td scope='col'><?php echo $row['taken_session'];?></td>
                                <td scope='col'><?php echo $row['all_session'];?></td>
                                <td scope="col"><?php echo (($row['taken_session']/$row['all_session'])*100)."%"; ?></td>
                                <?php
                                    }?>

                            </tr>
                            <tr>
                                <td scope='col'>Average attendance</td>
                                <td scope='col'></td>
                                <td scope='col'></td>
                                <td scope='col'>00%</td>
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

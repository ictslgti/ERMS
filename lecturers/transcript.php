<?php
$title = ' ERMS | SLGTI(TRANSCRIPT)';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php include_once('.././head.php');
   include_once('../databases/config.php');
    ?>
    
</head>

<body>
    <main class='page-content pt-2'>
        <?php include_once('nav.php');  
        ?>
        <div id='overlay' class='overlay'></div>
        <div class='container-fluid p-5'>
            <!-- #1 Insert Your Content-->
            <div class='row'>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3> <?php echo " $title" ?></h3>
                        </div>
                        <div class="card-body">

                            <!-- #1 Insert Your Content-->

                            
                <div class="form-group col-md-12 table-responsive">
                                    <table class='table align-middle ' id="myTable">
                                        <thead class='thead-light'>
                                            <tr>
                                                <th scope='col'>Registration No</th>
                                                <th scope='col'>Student Name</th>
                                                <th scope='col'>Enrolled Course</th>
                                                <th scope='col'>Batch</th>
                                                <th scope='col'>ACTIONS</th> 
                                            </tr>
                                            <?php
                                            $sql = "SELECT 
                                            `student`.`id`,`student`.`full_name`,
                                            `student`.`phone_no`,student_enroll.course_code,student_enroll.batch_no
                                            FROM student 
                                            LEFT JOIN student_enroll
                                            ON `student`.`id` = `student_enroll`.`id`
                                            ORDER BY `id` ASC";
                                            $result = mysqli_query($con, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <tr>
                                                    <td scope='col'>
                                                        <?php echo $row['id']; ?>
                                                    </td>
                                                    <td scope='col'>
                                                        <?php echo $row['full_name']; ?>
                                                    </td>
                                                    <td scope='col'>
                                                    <?php echo $row['course_code']; ?>
                                                    </td>
                                                    <td scope='col'>
                                                    <?php echo $row['batch_no']; ?>
                                                    </td>
                                                    <td scope='col'>
                                                    <a class="btn btn-info" href="student_transcript.php?id=<?php echo $row['id']; ?>">View Transcript</a>
                                                    </td>
                                                <?php
                                            }
                                                ?>
                                                </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                               

</div>
                    </div>
                </div>
            </div> <!-- #1 Insert Your Content" -->
        </div>
    </main>

    <?php include_once("../script.php");
    ?>
</body>

</html>
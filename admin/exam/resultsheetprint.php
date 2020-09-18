<?php
$title = "kishok | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php include_once("../../head.php"); ?>
    <?php include_once("../../config.php"); ?>
    <style>
        th {
            font-size: 12px;
            border: 1px solid black;
        }

        td {
            font-size: 12px;
            border: 1px solid black;
        }
    </style>

</head>

<body>


    <?php
    $d_id = null;
    $nvq = null;
    $type = null;
    $batch = null;
    if (isset($_GET['dno'])) {
        $d_id = $_GET['dno'];
        $nvq = $_GET['nvq'];
        $type = $_GET['type'];
        $batch = $_GET['batch'];
        // echo $d_id . "<br>";
        // echo $nvq . "<br>";
        // echo $batch . "<br>";
        // echo $type . "<br>";
    }
    ?>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">

        <?php include_once("../nav.php"); ?>
        <!-- id array -->
        <?php

        $sql = mysqli_query($con, "SELECT DISTINCT student_id FROM exams_result");

        while ($row = mysqli_fetch_array($sql)) {
            $s_ids[] = $row['student_id'];
        }
        foreach ($s_ids as $idss) {
            // echo "$idss";
        }
        ?>
        <!-- id array  -->


        <!-- subject array -->
        <?php
        $sql1 = mysqli_query($con, "SELECT DISTINCT module FROM exams_result");

        while ($row1 = mysqli_fetch_array($sql1)) {
            $subjects[] = $row1['module'];
        }
        ?>
        <!-- subject array  -->
        <div>
            <p></p>
        </div>
        <div>
            <p style="text-align: center; font-size: 30px;"> SLGTI-KILLINOCHI</p>

        </div>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Student_id</th>
                    <th>Name</th>
                    <th>Nic</th>
                    <?php
                    foreach ($subjects as $subject) {
                        echo "<th>$subject</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php

                    $length = count($s_ids);
                    // echo $length;
                    $length1 = count($subjects);
                    // echo $length1;
                    for ($i = 0; $i < $length; $i++) {
                        $s_ids_val = $s_ids[$i];
                        $sql4 = " select id,name_with_initials,nic from student where id='$s_ids_val';";
                        $result = mysqli_query($con, $sql4);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<td>', $row['id'], '</td>';
                                echo '<td>', $row['name_with_initials'], '</td>';
                                echo '<td>', $row['nic'], '</td>';
                            }
                        }
                    ?>

                        <?php
                        for ($s = 0; $s < $length1; $s++) {
                            $s_ids_val = $s_ids[$i];
                            $subjects_val = $subjects[$s];
                            $sql3 = "select e.marks from student_enroll s inner join exams_result e on s.id=e.student_id and e.student_id='$s_ids_val' and e.module='$subjects_val'";
                            $result = mysqli_query($con, $sql3);
                            if (mysqli_num_rows($result) > 0) {
                                if ($row = mysqli_fetch_assoc($result)) {


                                    // echo $row['marks'];
                                    echo '<td>', $row['marks'], '</td>';
                                }
                            }
                        }
                        ?>
                </tr>
            <?php
                    }
            ?>


            </tbody>
        </table>

        <div class="text-center">
            <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
        </div>

    </div>
    <?php include_once("../../script.php"); ?>
</body>

</html>
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
            <div class='row'>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3> <?php echo " $title" ?></h3>
                        </div>
                        <div class="card-body">

                            <!-- #1 Insert Your Content-->


                            <div class="container" style="margin-top:10px">
                                <div class="card">
                                    <div class="card-header">

                                        <form action="" method="POST">
                                            <div class="row">

                                                <div class="col-2">
                                                    <select name="cid" id="cid" class="custom-select action">
                                                        <?php
                                                        $course_name = '';
                                                        $query = "SELECT * FROM courses";
                                                        $result = mysqli_query($con, $query);
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            $course_name .= '<option value="' . $row["code"] . '">' . $row["code"] . '</option>';
                                                        }
                                                        ?>
                                                        <option value="" selected disabled>Choose Level</option>
                                                        <?php echo $course_name; ?>
                                                    </select>
                                                </div>


                                                <div class="col-2">
                                                    <select name="bid" id="bid" class="custom-select action mr-sm-2">
                                                        <option value="" selected disabled>Choose Batch</option>
                                                    </select>
                                                </div>

                                                <div class="col-2">
                                                    <button type="submit" class="btn btn-primary mb-2">Find</button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>

                                    <div class="card-body">

                                        <div class="table-responsive">


                                            <div class="row">
                                                <div class="form-group col-md-12 table-responsive">
                                                    <table class="table align-middle table-striped">


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
                                                                            <!-- <th scope='col'>9th Lec</th> -->
                                                                            <!-- <th scope='col'>10th Lec</th> -->

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
                                                                            <!-- <td>05</td> -->
                                                                            <!-- <td>05</td> -->


                                                                            <td>25</td>
                                                                        </tr>

                                                                    </thead>

                                                                </table>
                                                            </div>
                                                        </div>
                                                        <!-- end        -->
                                                    </table>
                                                </div>
                                            </div>





                                        </div>
                                    </div>
                                </div>

</body>

</html>

<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="css/datepicker.css" />

<div class="modal" id="formModal">
    <div class="modal-dialog">
        <form method="post" id="attendance_form">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="modal_title"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            </div>
    </div>
    <div class="form-group" id="student_details">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
            </table>
        </div>
    </div>
</div>
</main>

<?php include_once("../script.php");
?>
</body>

</html>

<!-- course filter -->
<script>
    $(document).ready(function() {
        $('.action').change(function() {
            if ($(this).val() != '') {
                var action = $(this).attr("id");
                var query = $(this).val();
                var result = '';
                if (action == "cid") {
                    result = 'bid';
                }
                $.ajax({
                    url: "sample.php",
                    method: "POST",
                    data: {
                        action: action,
                        query: query
                    },
                    success: function(data) {
                        $('#' + result).html(data);
                    }
                })
            }
        });
    });
</script>

<?php
//fetch.php
if (isset($_POST["action"])) {
    $connect = mysqli_connect("localhost", "root", "", "erms");
    $output = '';
    if ($_POST["action"] == "cid") {
        $query = "SELECT `batches`.`batch_no` FROM `batches` LEFT JOIN `courses` ON `batches`.`NVQ_level` = `courses`.`NVQ_level` AND 
  `batches`.`department_code` = `courses`.`department_code` WHERE `courses`.`code`='" . $_POST["query"] . "'";
        $result = mysqli_query($connect, $query);
        $output .= '<option value="" disabled selected>Choose Batch</option>';
        // $output .= '<a href="" disabled selected> Choose</a><br>';
        while ($row = mysqli_fetch_array($result)) {
            $output .= '<option value="' . $row["batch_no"] . '">' . $row["batch_no"] . '</option>';
            // $output .= '<a href="?module=' . $row['batch_no'] . '">' . $row['batch_no'] . '</a><br>';
        }
    }
    echo $output;
}
?>

<!-- course filter -->
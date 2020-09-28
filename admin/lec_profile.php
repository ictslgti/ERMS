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
$title = "Academicyear | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../head.php"); ?>
    <?php include_once("../config.php"); ?>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Roboto", sans-serif
        }

        tr,
        th,
        table {
            text-align: center;
            font-weight: bold;
        }
    </style>
    <style>
        img {
            width: 100%;
            height: 18vw;
            object-fit: cover;
        }
    </style>
</head>

<body class="w3-light-grey">
    <?php
    if ($_GET['edit']) {
        $id = $_GET['edit'];
    }
    ?>


    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <?php include_once("nav.php"); ?>

        <br>
        <div class="container">
            <form action="" method="post">
                <div class="card  mb-3">
                    <div class="card-header bg-transparent ">
                        <div class="row">
                            <div class="col"> </div>
                            <div class="col-auto">
                                <a href="lecturer.php?edit=<?php echo $id; ?> " class="btn btn-outline-info"> Edit </a>
                                <a href="lecturers.php" class="btn btn-outline-primary">View lecturers</a>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="container">
                                <div class="w3-content w3-margin-top" style="max-width:1400px;">

                                    <div class="w3-row-padding">
                                        <div class="w3-third">
                                            <div class="w3-white w3-text-grey w3-card-4">
                                                <div class="w3-display-container">
                                                    <?php
                                                    if (isset($_GET['edit'])) {
                                                        $id = $_GET['edit'];
                                                        $result = $con->query("SELECT * FROM `lecturer` WHERE id = $id");
                                                    ?>
                                                        <?php if ($result->num_rows > 0) {
                                                            while ($row = $result->fetch_assoc()) {

                                                        ?>


                                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style="width:100%;" />
                                                                <div class="p-3 mb-2 bg-info text-white"><?php echo ($row['first_name']); ?> <?php echo ($row['last_name']); ?></div>
                                                </div>
                                                <div class="w3-container">

                                                    <br>
                                                    <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo ($row['position']); ?></p>
                                                    <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo ($row['address']); ?></p>
                                                    <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo ($row['email']); ?></p>
                                                    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo ($row['telephone']); ?></p>


                                                    <br>
                                                </div>
                                            </div><br>


                                        </div>


                                        <div class="w3-twothird">

                                            <div class="w3-container w3-card w3-white w3-margin-bottom">
                                                <h2 class="w3-text-grey w3-padding-16">Personal details</h2>
                                                <div class="col-md-12">
                                                    <div class="row w3-text-grey w3-padding-10">
                                                        <div class="col">
                                                            <label>Staff_ID</label>
                                                        </div>
                                                        <div class="col">
                                                            <p><?php echo ($row['id']); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row w3-text-grey w3-padding-10">
                                                        <div class="col">
                                                            <label>Staff_Name</label>
                                                        </div>
                                                        <div class="col">
                                                            <p><?php echo ($row['first_name']); ?> <?php echo ($row['last_name']); ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="row w3-text-grey w3-padding-10">
                                                        <div class="col">
                                                            <label>Department</label>
                                                        </div>
                                                        <div class="col">
                                                            <p><?php echo ($row['department_code']); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row w3-text-grey w3-padding-10">
                                                        <div class="col">
                                                            <label>Address</label>
                                                        </div>
                                                        <div class="col">
                                                            <p><?php echo ($row['address']); ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="row w3-text-grey w3-padding-10">
                                                        <div class="col">
                                                            <label>Date_of_birth</label>
                                                        </div>
                                                        <div class="col">
                                                            <p><?php echo ($row['dob']); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row w3-text-grey w3-padding-10">
                                                        <div class="col">
                                                            <label>NIC</label>
                                                        </div>
                                                        <div class="col">
                                                            <p><?php echo ($row['nic']); ?></p>
                                                        </div>
                                                    </div>


                                                    <div class="row w3-text-grey w3-padding-10">
                                                        <div class="col">
                                                            <label>Email</label>
                                                        </div>
                                                        <div class="col">
                                                            <p><?php echo ($row['email']); ?></p>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="row w3-text-grey w3-padding-10">
                                                        <div class="col">
                                                            <label>phone no</label>
                                                        </div>
                                                        <div class="col">
                                                            <p><?php echo ($row['telephone']); ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="row w3-text-grey w3-padding-10">
                                                        <div class="col">
                                                            <label>Date_of_Join</label>
                                                        </div>
                                                        <div class="col">
                                                            <p><?php echo ($row['date_of_join']); ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="row w3-text-grey w3-padding-10">
                                                        <div class="col">
                                                            <label>Gender</label>
                                                        </div>
                                                        <div class="col">
                                                            <p><?php echo ($row['gender']); ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="row w3-text-grey w3-padding-10">
                                                        <div class="col">
                                                            <label>EPF NO</label>
                                                        </div>
                                                        <div class="col">
                                                            <p><?php echo ($row['epf_no']); ?>5</p>
                                                        </div>
                                                    </div>

                                                    <div class="row w3-text-grey w3-padding-10">
                                                        <div class="col">
                                                            <label>Position</label>
                                                        </div>
                                                        <div class="col">
                                                            <p><?php echo ($row['position']); ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="row w3-text-grey w3-padding-10">
                                                        <div class="col">
                                                            <label>Type</label>
                                                        </div>
                                                        <div class="col">
                                                            <p><?php echo ($row['type']); ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="row w3-text-grey w3-padding-10">
                                                        <div class="col">
                                                            <label>Status</label>
                                                        </div>
                                                        <div class="col">
                                                            <p><?php echo ($row['status']); ?></p>
                                                        </div>
                                                    </div>


                                                </div>

                                    <?php
                                                            }
                                                        }
                                                    }
                                    ?>
                                            </div>
                                        </div>
                                        <footer>
                                            <div class="card">
                                                <div class="card-body">
                                                    <?php
                                                    $result1 = $con->query("select m.name,b.batch_no from lecturer_enroll le inner join modules m on le.module=m.id inner join batches b on b.id=le.batch and le.lecturer=$id;");

                                                    if ($result1->num_rows > 0) {
                                                        while ($row1 = $result1->fetch_assoc()) {
                                                            $row1['name'];
                                                            $row1['batch_no'];
                                                    ?>


                                                            <div class="row w3-text-grey w3-padding-10">
                                                                <div class="col">
                                                                    <label><?php echo ($row1['name']); ?></label>
                                                                </div>
                                                                <div class="col">
                                                                    <p><?php echo "batch" . " " . ($row1['batch_no']); ?></p>
                                                                </div>
                                                            </div>

                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                    </div>
                                    <div class=" row p-3 mb-2 bg-primary text-white  h6">
                                        <div class="col">Powered by Srinlanka German Training Institue</div>
                                        <div class="col-auto"> </div>
                                    </div>
                                    </footer>
                                </div>
                            </div>

                        </div>
                        <?php include_once("../script.php"); ?>
</body>

</html>

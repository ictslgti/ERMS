<?php
$title = ' ERMS | Result Sheet';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php include_once('.././head.php');
    // include_once('../config.php');
    ?>
</head>

<body>
    <main class='page-content pt-2'>
        <?php include_once('../nav.php');
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
                            <h1>
                            <div class="row">
                        <div class="col-sm">
                            <div class="border border-primary rounded text-center">
                            <h2>Student's Results Sheet</h2>
                            </div>
                        </div>
                    </div>
                    <br>
                <!-- 1st row end -->
                <div class='modal-body'>

                <form method='POST' action=''>
                    <div class='row '>
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>

                            <label for='exampleInputEmail1'>Exams type</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer01' required>
                                    <option value=''>Select Exams</option>
                                    <option value='1'>INSTITUTE</option>
                                    <option value='2'>TVEC</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInputEmail1'>Department</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01'>
                                    <option value=''>Select Department</option>
                                    <option value='1'>Information Communication Technology</option>
                                    <option value='2'>Automotive & Technology</option>
                                    <option value='3'>Construction Technology</option>
                                    <option value='4'>Electrical Technology</option>
                                    <option value='5'>Food Technology</option>
                                    <option value='6'>Mechanical Technology</option>
                                </select>
                            </div>
                        </div>
                       
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInput'>Batch</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option selected>select batch...</option>
                                    <option value='1'>batch 1</option>
                                    <option value='2'>batch 2</option>
                                    <option value='3'>batch 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class='row '>

                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInput'>semester</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option value=''>Select Semester</option>
                                    <option value='1'>1 st semester</option>
                                    <option value='2'>2 nd semester</option>
                                    <option value='3'>3 rd semester</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInput'>NVQ Level</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option value=''>Select Level</option>
                                    <option value='1'>NVQ Level-4</option>
                                    <option value='2'>NVQ Level-5</option>
                                    <option value='3'>Bridging</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInput'>Type</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option value=''>Select Type</option>
                                    <option value='1'>THEORY</option>
                                    <option value='2'>PRACTICAL</option>
                                </select>
                            </div>
                        </div>
                    </div> -->

                    <!-- button-->
                    <div class='row '>
                        <div class='col-md'>
                            <h3 class='text-primary'></h3>
                        </div>
                        <div class='col-md'>

                        </div>
                        <div class='col-md-auto modal-footer'>
                            <button type='submit' name='search' class='btn btn-primary btn btn-sm '>SEARCH</button>
                        </div>
                    </div>

                            </h1><!-- #1 Insert Your Content-->
                        </div>
                    </div>
                </div>
            </div> <!-- #1 Insert Your Content" -->
        </div>
    </main>

    <?php include_once("../../script.php");
    ?>
</body>

</html>
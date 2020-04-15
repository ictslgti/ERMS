<?php
$title = 'Exams Results | ';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php include_once('./head.php');
    ?>
    <?php
    include_once('config.php');
    ?>
</head>

<body>
    <div class='page-wrapper toggled bg2 border-radius-on light-theme'>
        <nav id='sidebar' class='sidebar-wrapper'>
            <?php include_once('nav.php');
            ?>
        </nav>
        <main class='page-content pt-2 '>
            <?php include_once('exam/nav_bar.php');
            include_once('exam/exresu_nav.php');
            include_once('exam/search_tab.php')
            ?>
            <div id='overlay' class='overlay'></div>
            <div class='container-fluid p-5'>

                <!-- #1 Insert Your Content-->

                <!-- sql -->
                <!-- #2 Insert Your Content" -->


                <!-- Heding -->
                <!-- #3 Insert Your Content" -->
                <div class="row">
                    <div class="col-sm">
                        <h3 class="text-secondary">Updates Exams Results</h3>
                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-md-auto pr-4">

                        <button type=" button" class="btn btn-primary btn btn-sm" data-toggle="modal" data-target="#search_tab">Search</button>
                    </div>
                </div>
                <br>
                <!-- #1 Insert Your Content-->
                <div class="row">
                    <div class="col-md-2 col-sm-4">
                        <h6>Exams :-</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">TVEC</h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Module</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">MO7<span class="badge badge-dark">Practical</span></h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Betch</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">Betch-4 <span class="badge badge-dark">2018/2025</span></h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Date </h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">00/00/0000</h6>
                    </div>

                    <!-- <div class="col-md-2 col-sm-4">
                        <h6>Mobile No.</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">0702090100</h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Address</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">No-04,Nilaveli,Trincomalee.</h6>
                    </div> -->
                </div>
                <br>
                <!-- #3 Insert Your Content" -->
                <form method='POST' action=''>
                    <div class="row">
                        <div class="form-group col-md-12 table-responsive">
                            <table class='table align-middle'>
                                <thead class='bg-primary text-light'>
                                    <tr>
                                        <th scope='col'>NO</th>
                                        <th scope='col'>REG NO</th>
                                        <th scope='col'>INDEX NO</th>
                                        <th scope='col'>STUDENT NAME</th>
                                        <th scope='col'>ATTEMPT </th>
                                        <th scope='col'>MARKS</th>
                                        <th scope='col'>STATUS</th>
                                        <th scope='col'>VIEW</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope='row'>1</th>
                                        <td>2018ICTBIT01</td>
                                        <td>2018ICTBIT01</td>
                                        <td>Mohamed Sakkoor Eashath</td>
                                        <td><select class='custom-select' id='inputGroupSelect01' id='validationServer01' required>
                                                <option value=''>Select</option>
                                                <option value='1'>1 st</option>
                                                <option value='2'>2 nd</option>
                                                <option value='3'>3 rd</option>
                                        </td>
                                        <td>
                                            <input type='text' class='form-control' placeholder='Marks' id='validationServer02' required aria-label='marks' aria-describedby='addon-wrapping' maxlength="5" size="6">
                                        </td>
                                        <td><span class=' badge badge-success'>PASS</span></td>
                                        <td><button type='button' name='view' class='btn btn-warning btn btn-sm '>View</button></td>

                                    </tr>
                                </tbody>
                            </table>
                            <!-- button -->
                            <div class='row'>
                                <div class='col-md'>
                                    <h3 class='text-primary'></h3>
                                </div>
                                <div class='col-md'>

                                </div>
                                <div class='col-md-auto'>
                                    <button type='submit' name='cancel' class='btn btn-danger btn btn-sm '>CANCEL</button>
                                    <button type='submit' name='save' class='btn btn-primary btn btn-sm '>SAVE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- #4 Insert Your Content" -->
                <!-- #5 Insert Your Content" -->
            </div>

        </main>
    </div>
    <?php include_once('script.php');
    ?>
</body>

</html>
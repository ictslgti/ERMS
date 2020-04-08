<?php
$title = 'Dashboard | Online Examination Result Management System | SLGTI';
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
            include_once('exam/add_exam.php');
            ?>
            <div id='overlay' class='overlay'></div>
            <div class='container-fluid p-5'>

                <!-- #1 Insert Your Content-->
               
                <!-- sql -->
                <!-- #2 Insert Your Content" -->

                <br>
                <!-- Heding -->
                <!-- <div class="row ">
                    <div class="col-md">
                        <h4 class="text-wrap text-center text-primary">UPDATE STUDENTS RESULTS</h4>
                    </div>
                </div>
                <br> -->
                <!-- #3 Insert Your Content" -->
                <form method='POST' action=''>
                    <div class='row '>
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <!-- <label class = 'input-group-text' for = 'inputGroupSelect01'>Exams type</label> -->
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
                                    <!-- <label class = 'input-group-text' for = 'inputGroupSelect01' id = 'validationServer02' required>Department</label> -->
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
                                    <!-- <label class = 'input-group-text' for = 'inputGroupSelect01'>Course</label> -->
                                    <label for='exampleInputEmail1'>Course</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option value=''>Select Course</option>
                                    <option value='1'>NVQ LEVEL-4</option>
                                    <option value='2'>BRIDGING LEVEL-5</option>
                                    <option value='3'>NVQ LEVEL-5</option>
                                    <option value='4'>NVQ LEVEL-6</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <!-- <label class = 'input-group-text' for = 'inputGroupSelect01'>Academic Year</label> -->
                                    <label for='exampleInputEmail1'>Academic Year</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option value=''>Select Year...</option>
                                    <option value='1'>2016</option>
                                    <option value='2'>2017</option>
                                    <option value='3'>2018</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class='row '>
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <!-- <label class = 'input-group-text' for = 'inputGroupSelect01'>betch</label> -->
                                    <label for='exampleInput'>Academic Year</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option selected>select betch...</option>
                                    <option value='1'>betch 1</option>
                                    <option value='2'>betch 2</option>
                                    <option value='3'>betch 3</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <!-- <label class = 'input-group-text' for = 'inputGroupSelect01'>semester</label> -->
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
                                    <!-- <label class = 'input-group-text' for = 'inputGroupSelect01'>Module</label> -->
                                    <label for='exampleInput'>Module</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option value=''>Select Module</option>
                                    <option value='1'>EMP-MO1</option>
                                    <option value='2'>EMP-MO2</option>
                                    <option value='3'>EMP-MO3</option>
                                    <option value='4'>MO4</option>
                                    <option value='5'>MO5</option>
                                    <option value='6'>MO6</option>
                                    <option value='7'>MO7</option>
                                    <option value='8'>MO8</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <!-- <label class = 'input-group-text' for = 'inputGroupSelect01'>Type</label> -->
                                    <label for='exampleInput'>Type</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option value=''>Select Type</option>
                                    <option value='1'>THEORY</option>
                                    <option value='2'>PRACTICAL</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- button-->
                    <div class='row '>
                        <div class='col-md'>
                            <h3 class='text-primary'></h3>
                        </div>
                        <div class='col-md'>

                        </div>
                        <div class='col-md-auto pr-0'>
                            <button type='submit' name='search' class='btn btn-primary'>SEARCH</button>
                        </div>
                    </div>
                </form>
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
                                <td><input type='text' class='form-control' placeholder='Marks' id='validationServer02' required aria-label='marks' aria-describedby='addon-wrapping'></td>
                                <td><span class='badge badge-success'>PASS</span></td>
                                <td><button type='submit' name='view' class='btn btn-warning btn-sm'>View</button></td>

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
                            <button type='submit' name='cancel' class='btn btn-danger'>CANCEL</button>
                            <button type='submit' name='save' class='btn btn-primary'>SAVE</button>
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
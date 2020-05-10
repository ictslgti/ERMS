<?php
$title = "View Student | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../head.php"); ?>
    <?php include_once('../databases/config.php'); ?>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
            <?php include_once("nav.php"); ?>

        <main class="">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5">
                <!-- #1 Insert Your Content-->
                <div class="container">

                <!-- 1st row start -->
                <div class="row">
                     <div class="col-sm">
                     <div class="border border-primary rounded text-center">
                     <h2>Student's Information | SLGTI</h2>
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
                <a class='nav-link active' href='./students.php'>ALL</a>
                </li>
                <li class='nav-item'>
                <a class='nav-link' href='./student.php'>Add New</a>
                </li>
                </ul>
                </div>
                </div>
                <div class='col-3'>
                <input class="form-control mr-sm-2" type="search" placeholder="Registration No." aria-label="Search">
                </div>
                <div class='col-2'>
                <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
                </div>
                </form>
                
                <div class="row">
                    <div class="form-group col-md-12 table-responsive">
                    <table class='table align-middle '>
                    <thead class='thead-dark'>
                        <tr>
                            <th scope='col'>Registration No</th>
                            <th scope='col'>Student Name</th>
                            <th scope='col'>Enrolled Course</th>
                            <th scope='col'>Batch</th>
                            <th scope='col'>Contact Number</th>
                            <th scope='col'>ACTIONS</th>
                        </tr>
                        <tr>
                            <td scope='col'>
                            <?php
                            $sqlstudent = "SELECT id FROM student"; 
                            $result = mysqli_query($con,$sqlstudent);
                            if (mysqli_num_rows($result) > 0) 
                            {  
                                while($col = mysqli_fetch_assoc($result)) 
                                {  
                                    echo $col['id']."<br>";
                                } 
                            } 
                            else 
                            { 
                                echo "0 results"; 
                            }
                            ?>
                            </td>
                            <td scope='col'>
                            <?php
                            $sqlstudent = "SELECT full_name FROM student"; 
                            $result = mysqli_query($con,$sqlstudent);
                            if (mysqli_num_rows($result) > 0) 
                            {  
                                while($col = mysqli_fetch_assoc($result)) 
                                {  
                                    echo $col['full_name']."<br>";
                                } 
                            } 
                            else 
                            { 
                                echo "0 results"; 
                            }
                            ?>
                            </td>
                            <td scope='col'>
                            <?php
                            $sqlstudent = "SELECT course_id FROM student_enroll"; 
                            $result = mysqli_query($con,$sqlstudent);
                            if (mysqli_num_rows($result) > 0) 
                            {  
                                while($col = mysqli_fetch_assoc($result)) 
                                {  
                                    echo $col['course_id']."<br>";
                                } 
                            } 
                            else 
                            { 
                                echo "0 results"; 
                            }
                            ?>
                            </td>
                            <td scope='col'>
                            <?php
                            $sqlstudent = "SELECT course_id FROM student_enroll"; 
                            $result = mysqli_query($con,$sqlstudent);
                            if (mysqli_num_rows($result) > 0) 
                            {  
                                while($col = mysqli_fetch_assoc($result)) 
                                {  
                                    echo $col['course_id']."<br>";
                                } 
                            } 
                            else 
                            { 
                                echo "0 results"; 
                            }
                            ?>
                            </td>
                            <td scope='col'>
                            <?php
                            $sqlstudent = "SELECT phone_no FROM student"; 
                            $result = mysqli_query($con,$sqlstudent);
                            if (mysqli_num_rows($result) > 0) 
                            {  
                                while($col = mysqli_fetch_assoc($result)) 
                                {  
                                    echo $col['phone_no']."<br>";
                                } 
                            } 
                            else 
                            { 
                                echo "0 results"; 
                            }
                            ?>
                            </td>
                            <td scope='col'>ACTIONS</td>
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
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>
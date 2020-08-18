<?php
$title = ' ERMS | Exams';
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
                <div class="col-md">
                    <div class="card">
                        <div class="card-header">
                            <h3> <?php echo " $title" ?></h3>
                        </div>
                        <div class="card-body">

                            <!-- #1 Insert Your Content-->

                            <div class='row'>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Department :-<b>ICT</b></label>
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Betch :-<b>Betch 04</b></label>
                                </div>
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Academic Year :-<b>2018/2020</b></label>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Module Code :-<b>M07</b></label><span class="badge badge-pill badge-success">Practical</span>
                                </div>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Module Name :-<b>Web Programming</b></label>
                                </div>
                                <div class='col-md-4'>
                                    <label for="exampleInputEmail1">Semester :-<b>1 st</b></label>
                                </div>
                            </div>
                            <!-- modal-->


                            <!-- end modal-->
                            <!-- db coneection-->
                            
<!-- view  start -->

        <!-- view  end -->

                            <!-- add exam sql-->



                            <br>
                            <div class='row'>
                                <div class="form-group col-md-12 table-responsive ">
                                    <table class='table table-md'>
                                        <thead class='table-active text-dark'>
                                            <tr>
                                                <th scope='col'>NO</th>
                                                <th scope='col'>INDEX NO</th>
                                                <th scope='col'>REG NO</th>
                                                <th scope='col'>STUDENTS NAME</th>
                                                <th scope='col'>RESULT</th>
                                                <th scope='col'>ATTEMPT</th>
                                                <th scope='col'>ACTIONS</th>

                                            </tr>
                                        </thead>
                                        <?php
        
        if (isset($_GET['view'])) {
            $student_id = $_GET['view'];
            $sql_student = "SELECT * FROM student LEFT JOIN student_enroll
                ON `student`.`id` = `student_enroll`.`id`
                WHERE `student`.`id` = '2018slgtibit01'";
            $result_student = mysqli_query($con, $sql_student);
            $row = mysqli_fetch_assoc($result_student);
            if (mysqli_num_rows($result_student) == 1) {
               echo 
          
                                       ' <tr>
                                            
                                            <td>1 </td>
                                            <td > ',$row[`student`.'id'], '</td>
                                            <td> ', $row[`student`.'id'], '</td>
                                            <td> ', $row[`student`.'full_name'], '</td>
                                            <td><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" style="width: 50%;"></td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>1 st</option>
                                                        <option>2 nd</option>
                                                        <option>3 rd</option>

                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                            <a href="studentview.php?view=', $row['id'], '" class = "btn btn-warning btn-group btn btn-sm " > View  </td>
                                        </tr>' ;
                                    }
                                    } else {
                                        echo 'no rows';
                                    }
                                    ?>
                                        <tbody>



                                        </tbody>
                                        
                                    </table>
                                    <div class='modal-footer'>
                                                                <button type='button' class='btn btn-warning btn btn-sm ' >Close</button>
                                                                <button type='submit' name='Update' class='btn btn-primary btn btn-sm ' >
                                                                    Update
                                                                </button>
                                                            </div>
                                </div>
                            </div>
                            <!-- #1 Insert Your Content-->
                        </div>
                        <div class="card-footer text-muted">


                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
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
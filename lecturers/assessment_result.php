<?php
$title = "Academicyear | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
    <?php include_once("../config.php"); ?>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <?php include_once("nav.php"); ?>
        <!-- card start -->
        <br>
        <div class="container">
            <?php
            $sumanana=null;
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = "select b.batch_no,m.name as module,a.names ,c.name as course,c.code,a.type from assessments a inner join batches b on a.batch=b.id inner join modules m on m.id=a.module inner join courses c on m.course_code=c.code and a.id='$id';";
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($result)) {
                    $batch = $row['batch_no'];
                    $module = $row['module'];
                    $name = $row['names'];
                    $course = $row['course'];
                    $type = $row['type'];
                    $c_code = $row['code'];
                }
            }
            ?>



<?php
        if (isset($_POST['save'])) {
            //start
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = " select st.id from student s,student_enroll st where s.id=st.id and batch_no=$batch and course_code='$c_code'";
                $sql_multi = null;
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $name = 'reg' . $row['id'];
                        $res = 'res' . $row['id'];
                        $att = 'att' . $row['id'];
                        $value = $_POST[$name];
                        $value2 = $_POST[$res];
                        $value3 = $_POST[$att];
                        $sql_multi .= "INSERT INTO  `student_assessments`(`assessment_id`,`student_id`,`marks`,`attempt`) 
                                                     VALUES ('$id','$value','$value2','$value3');";
                    }
                }
            }
           
            //end

            if (mysqli_multi_query($con, $sql_multi)) {
                echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong></strong> insert success fully !
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>   
  ';
            } else {

                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
        }


        ?>

            <form action="" method="post">
                <div class="card  mb-1">
                    <div class="card-header bg-transparent ">
                        <div class="row">
                            <div class="col">
                                <h4>Assessment_Result</h4>
                            </div>
                            <div class="col-auto">

                                <a href="assessments.php" class="btn btn-outline-primary">Assessments</a> </div>
                        </div>
                    </div>
                    <div class="card-body ">

                        <div class="card mb-1">
                            <div class="card-body ">
                                <div class="container-fluid p-2">
                                    <!-- #1 Insert Your Content-->
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12">
                                            <h6>Name</h6>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <h6 class="text-muted"><?php echo $name; ?>|<span class="badge badge-dark"><?php echo $type; ?></span></h6>
                                        </div>

                                        <div class="col-md-2 col-sm-12">
                                            <h6>Module</h6>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <h6 class="text-muted"><?php echo $module; ?></h6>
                                        </div>

                                        <div class="col-md-2 col-sm-12">
                                            <h6>Batch</h6>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <h6 class="text-muted"><?php echo $batch; ?> <span class="badge badge-dark"></span></h6>
                                        </div>

                                        <div class="col-md-2 col-sm-12">
                                            <h6>Course </h6>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <h6 class="text-muted"><?php echo $course; ?></h6>
                                        </div>
                                       

                                        
                                    </div>



                                </div>
                            </div>
                        </div>
                        <br>




                        <form method='POST' action='assessment_result.php'>
                            <div class='row'>
                                <div class='form-group col-md-12 table-responsive'>
                                    <table class='table align-middle'>
                                        <thead class='bg-primary text-light'>
                                            <tr>

                                                <th scope='col'>REG NO</th>
                                                <th scope='col'>STUDENT NAME</th>
                                                <th scope='col'>MARKS</th>
                                                <th scope='col'>ATTEMPT</th>
                                                <th scope='col'></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $sql = " select st.marks,st.attempt,st.student_id,s.name_with_initials from student_assessments st,student s where st.student_id=s.id and st.assessment_id=$id; ";
                                            $result = mysqli_query($con, $sql);
                                            if (mysqli_num_rows($result) >0) {
                                                $sumanana="sumanan";
                                                if(isset($_GET['edit']))
                                                {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo '<tr>
                                                        <td><input readonly name="reg', $row['student_id'], '" value="', $row['student_id'], '" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" ></td>
                                                    <td>', $row['name_with_initials'], '</td>
                                                    <td><input type="number" name="res', $row['id'], '" value="', $row['marks'], '" min="0" max="100" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"  ></td>
                                                    <td>
                                                    <div class="form-group">
                                                        <select class="form-control" id="exampleFormControlSelect1" style="width: 50%;" name="att', $row['id'], '" >
                                                        <option value="',$row['attempt'],'" selected disabled>',$row['attempt'],'</option>    
                                                        <option value="1">1 st</option>
                                                            <option  value="2">2 nd</option>
                                                            <option  value="3">3 rd</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                        <td>
                                                        <div class="row">
                                                        <div class="col"></div>
                                                        <div class="col-auto">
                                                        <a href="studentview.php?view=' . $row['student_id'] . '" class="btn btn-sm" style="background-color: #0097c4 ; color: #ffffff;" > student info </a>
                                                        </div>
                                                        <div>
                                                        </td>
                                                        </tr>';
                                                    }
                                                }
                                                else
                                                {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<tr>
                                                    <td>', $row['student_id'], '</td>
                                                    <td>', $row['name_with_initials'], '</td>
                                                    <td>', $row['marks'], '</td>
                                                    <td>', $row['attempt'], '</td>
                                                    <td>
                                                    <div class="row">
                                                    <div class="col"></div>
                                                    <div class="col-auto">
                                                    <a href="studentview.php?view=' . $row['student_id'] . '" class="btn btn-sm" style="background-color: #0097c4 ; color: #ffffff;" > student info </a>
                                                    </div>
                                                    <div>
                                                    </td>
                                                    </tr>';
                                                }
                                            }
                                            } else {
                                                $sql1="select st.id,s.name_with_initials from student s,student_enroll st where s.id=st.id and batch_no=$batch and course_code='$c_code'";
                                                $result1 = mysqli_query($con, $sql1);
                                                if (mysqli_num_rows($result1) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result1)) {
                                                        echo '<tr>
                                                    <td><input readonly name="reg', $row['id'], '" value="', $row['id'], '" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" ></td>
                                                    <td>', $row['name_with_initials'], '</td>
                                                    <td><input type="number" name="res', $row['id'], '" value="0" min="0" max="100" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"  ></td>
                                                    <td>
                                                    <div class="form-group">
                                                        <select class="form-control" id="exampleFormControlSelect1" style="width: 50%;" name="att', $row['id'], '" >
                                                            <option value="1">1 st</option>
                                                            <option  value="2">2 nd</option>
                                                            <option  value="3">3 rd</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                <div class="row">
                                                <div class="col"></div>
                                                <div class="col-auto">
                                                <a href="studentview.php?view=' . $row['id'] . '" class="btn btn-sm" style="background-color: #0097c4 ; color: #ffffff;" > student info </a>
                                            </div>
                                            <div>
                                            </td>
                                                </tr>';
                                                    }
    
    
                                                    }
                                            }
                                            ?>
                                        </tbody>
                                        
                                    </table>
                                    <?php
                                    if(isset($_GET['edit']))
                                    {
                                        ?>
                                        <button type='button' class='btn btn-warning btn btn-sm '>Close</button>
                                        <button type='submit' name='update' class='btn btn-primary btn btn-sm '>
                                           update
                                        </button>
                                        <?php
                                    }
                                    else
                                    {
                                    if($sumanana=='sumanan')
                                    {
                                     echo '<a href="assessment_result.php?edit=', $id, '&& id=',$id,'" class="btn btn-sm" style="background-color: #0097c4 ; color: #ffffff;" > Edit </a>';
                                    }
                                    else
                                    {
                                        ?>
                                             <button type='button' class='btn btn-warning btn btn-sm '>Close</button>
                                            <button type='submit' name='save' class='btn btn-primary btn btn-sm '>
                                               Save
                                            </button>
                                        <?php
                                    }
                                }
                                    ?>
                                    

                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- card end  -->
                </div>
                <?php include_once("../script.php"); ?>
</body>

</html>
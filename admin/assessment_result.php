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

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query = "select b.batch_no,m.name as module,a.names ,c.name as course,a.type from assessments a inner join batches b on a.batch=b.id inner join modules m on m.id=a.module inner join courses c on m.course_code=c.code and a.id='$id';";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        $batch=$row['batch_no'];
        $module=$row['module'];
        $name=$row['names'];
        $course=$row['course'];
        $type=$row['type'];
    }
}
    ?>

<form action=""method="post">
<div class="card  mb-1" >
      <div class="card-header bg-transparent ">
      <div class="row">
      <div class="col"> <h4>Assessment_Result</h4> </div>
      <div class="col-auto"> 
      
      <a href="assessments.php" class="btn btn-outline-primary">Assessments</a> </div>
      </div>
      </div>
      <div class="card-body ">

      <div class="card mb-1" >  
      <div class="card-body "> 
      <div class="container-fluid p-2">
                <!-- #1 Insert Your Content-->
                <div class="row">
                    <div class="col-md-2 col-sm-12">
                        <h6>Name</h6>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h6 class="text-muted"><?php echo $name;?>|<span class="badge badge-dark"><?php echo $type;?></span></h6>
                    </div>

                    <div class="col-md-2 col-sm-12">
                        <h6>Module</h6>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h6 class="text-muted"><?php echo $module;?></h6>
                    </div>

                    <div class="col-md-2 col-sm-12">
                        <h6>Batch</h6>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h6 class="text-muted"><?php echo $batch;?> <span class="badge badge-dark"></span></h6>
                    </div>

                    <div class="col-md-2 col-sm-12">
                        <h6>Course </h6>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h6 class="text-muted"><?php echo $course;?></h6>
                    </div>

                    <div class="col-md-2 col-sm-12">
                        <h6>Attempt </h6>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h6 class="text-muted">01</h6>
                    </div>

                    <div class="col-md-2 col-sm-12">
                        <h6>Date </h6>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h6 class="text-muted"><input type='date'disabled value="2020-02-02"></h6>
                    </div>

                    <div class="col-md-2 col-sm-12">
                        <h6>Attempt </h6>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h6 class="text-muted">02</h6>
                    </div>

                    <div class="col-md-2 col-sm-12">
                        <h6>Date </h6>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h6 class="text-muted"><input type='date'disabled value="2020-02-15"></h6>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <h6>Attempt </h6>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h6 class="text-muted">03</h6>
                    </div>

                    <div class="col-md-2 col-sm-12">
                        <h6>Date </h6>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h6 class="text-muted"><input type='date'></h6>
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
$sql = 'select a.student_id,a.marks,a.attempt,s.name_with_initials from student_assessments a inner join student s on a.student_id=s.id where assessment_id="'.$id.'";';
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>
            <td>',$row['student_id'],'</td>
            <td>',$row['name_with_initials'],'</td>
            <td>',$row['marks'],'</td>
            <td>',$row['attempt'],'</td>
            <td>
            <div class="row">
            <div class="col"></div>
            <div class="col-auto">
            <a href="studentview.php?view='. $row['student_id']. '" class="btn btn-sm" style="background-color: #0097c4 ; color: #ffffff;" > student info </a>
        </div>
        <div>
        </td>
            </tr>';
    }
}
else{
    echo 'no rows';
}
?>  
                </tbody>
            </table>
            
            
        </div>
    </div>
</form>      
</div>
       <!-- card end  -->
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>

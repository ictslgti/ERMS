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
    <style>
tr,th,table{
    text-align: center;
    font-weight:bold;
}
</style>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <?php include_once("nav.php"); ?>
       <!-- card start -->
        <br>
<div class="container">
<?php 
$id=$_GET['id'];
$s_id=null;
$name=null;
$batch=null;
$year=null;
$course=null;
$module=null;
if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $sql = "SELECT id, name_with_initials FROM STUDENT;";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_assoc($result);
        $s_id = $row['id'];
        $name = $row['name_with_initials'];
        $batch = $row['batch_no'];
        $year = $row['academic_year'];
        $course = $row['course_id'];
        $module = $row['module'];
        
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
                        <h6>Assessment</h6>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h6 class="text-muted">01</h6>
                    </div>

                    <div class="col-md-2 col-sm-12">
                        <h6>Module</h6>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h6 class="text-muted"><?php echo $module;?><span class="badge badge-dark">Practical</span></h6>
                    </div>

                    <div class="col-md-2 col-sm-12">
                        <h6>Batch</h6>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h6 class="text-muted"><?php echo $batch;?> <span class="badge badge-dark">2018/2025</span></h6>
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
              <form action=""method="POST">
                <button class="btn btn-outline-primary btn btn-sm "> <a href="?Add"> Add Result </a></button>
                <button class="btn btn-outline-primary btn btn-sm "> <a href="?Edit"> Edit Result </a></button>
                </form>
                <br>
<?php
if(isset($_GET['id']))
{
  ?>  
    <form method='POST' action='assessment_result.php'>
    <div class='row'>
        <div class='form-group col-md-12 table-responsive'>
            <table class='table align-middle'>
                <thead class='bg-primary text-light'>
                    <tr>
                        <th scope='col'>REG NO</th>
                        <th scope='col'>STUDENT NAME</th>
                        <th scope='col'>MARKS</th>
                        <th scope='col'>ATTEMPT </th>
                        

                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php
                    echo $id;
$sql = "SELECT s.id, s.name_with_initials, se.batch_no, b.academic_year, se.course_id, ae.module
FROM student s
INNER JOIN student_enroll se ON s.id = se.id
INNER JOIN batch b ON b.batch_no = se.batch_no
INNER JOIN assessments ae ON ae.batch = se.batch_no
WHERE ae.id =$id;";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>
            <td>',$row['id'],'</td>
            <td>',$row['name_with_initials'],'</td>';
           ?>
                   <td>
                            <input type='text' class='form-control' placeholder='Marks' id='validationServer02' required aria-label='marks' aria-describedby='addon-wrapping' maxlength='5' size='6'>
                        </td>
                        <td><select class='custom-select' id='inputGroupSelect01' id='validationServer01' required>
                                                <option value=''disabled selected>Select</option>
                                                <option value='1'>1 st</option>
                                                <option value='2'>2 nd</option>
                                                <option value='3'>3 rd</option>
                                        </td>
                        
                                       
                    </tr>
           <?php 
    }
}
else
{
    echo "sumanan";
}
?>

                        
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

<?php
}
elseif(isset($_GET['Edit']))
{
?>

<form method='POST' action='assessment_result.php'>
    <div class='row'>
        <div class='form-group col-md-12 table-responsive'>
            <table class='table align-middle'>
                <thead class='bg-primary text-light'>
                    <tr>
                        <th scope='col'>NO</th>
                        <th scope='col'>REG NO</th>
                        <th scope='col'>STUDENT NAME</th>
                        <th scope='col'>MARKS</th>
                        <th scope='col'>ATTEMPT </th>
                        

                    </tr>
                </thead>
                <tbody>
                    
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
    
<?php
}
else
{
?>
<form method='POST' action='assessment_result.php'>
    <div class='row'>
        <div class='form-group col-md-12 table-responsive'>
            <table class='table align-middle'>
                <thead class='bg-primary text-light'>
                    <tr>
                        <th scope='col'>NO</th>
                        <th scope='col'>REG NO</th>
                        <th scope='col'>STUDENT NAME</th>
                        <th scope='col'>MARKS</th>
                        <th scope='col'>STATUS</th>

                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
            
            
        </div>
    </div>
</form>   
<?php
}
?>
                 
    
    
</div>
       <!-- card end  -->
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>

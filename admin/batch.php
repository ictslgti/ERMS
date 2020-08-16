<?php
$title = "Batch | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
    <?php include_once("../config.php"); ?>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <?php include_once("nav.php"); ?>
       <!-- card start -->
<div class="container">
<!-- insert stat -->
<?php

$department=null;
$year=null;
$batchno=null;
$nvq=null;

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    
    $sql = "SELECT * FROM `academic_year` WHERE `academic_year`= '$id' ";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_assoc($result);
        $year = $row['academic_year'];
        $status = $row['academic_year_status'];
        $semi1start = $row['1semi_startdate'];
        $semi1end = $row['1semi_enddate'];
        $semi2start = $row['2semi_startdate'];
        $semi2end = $row['2semi_enddate'];


    }
}


if(
    isset($_POST['submit'])  
    && !empty($_POST['department'])
    && !empty($_POST['nvq'])
    && !empty($_POST['year'])
    && !empty($_POST['batchno'])
){
    
    $department = $_POST['department'];
    $nvq=$_POST['nvq'];
    $year = $_POST['year'];
    $batchno = $_POST['batchno'];
    

    $sql = "INSERT INTO batch (batch_no,department_code,NVQ_level,Academic_year)
    VALUES 
    ('$batchno','$department', 
    '$nvq', 
    '$year')
    ";

   if (mysqli_query($con, $sql)) {
       echo "
       <div class='alert alert-success' role='alert'>
       insert success fully 
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
   } else {
       
       echo "
       <div class='alert alert-danger' role='alert'>
       This academic_year alredy submit 
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
   }
}       
?>
        <!-- insert end -->




<form action=""method="post">
<div class="card  mb-3" >
      <div class="card-header bg-transparent ">
      <div class="row">
      <div class="col"> <h4>Batch</h4> </div>
      <div class="col-auto"> <a href="batches.php" class="btn btn-outline-primary">Batches</a> </div>
      </div>
      </div>
      <div class="card-body ">
         
            <div class="card  mb-3" >
                 
                  <div class="card-body ">
                    <!-- 1st row -->

                <div class="row "> 
                  <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                     Department  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" name="department" id="inputGroupSelect01"id="validationCustom04" required>
                            <option selected disabled value="">Choose Department</option>
                            <?php
                            $result = $con->query("SELECT `department_code` FROM `departments` ORDER BY `departments`.`department_code` ASC");
                            while ($row = $result->fetch_assoc()) {
                              unset($dno);
                              $dno = $row['department_code'];
                              echo '<option value=" '.$dno.'"  >'.$dno.'</option>';
                          }
                            ?>
                          </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                     NVQ LEVEL  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" name="nvq" id="inputGroupSelect01"id="validationCustom04" required>
                            <option selected disabled value="">Choose NVQ Level</option>
                            <option value="1">NVQ-04</option>
                            <option value="2">BRIDGING</option>
                            <option value="1">NVQ-05</option>
                            <option value="1">NVQ-06</option>
                            <option value="1">NVQ-07</option>
                          </select>
                          </div>
                        </div>
                      </div>
                      </div>
                      
                <!-- 1st row -->
                
                <!-- 2nd row -->
                <div class="row"> 
                  <div class="col-md-6 col-sm-6 col-xs-6">
                     <div class="form-group">
                     Academicyear  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" name="year" id="inputGroupSelect01"id="validationCustom04" required>
                            <option selected disabled value="">Choose Academicyear</option>
                            <?php
                            $result = $con->query("SELECT `academic_year` FROM `academic_year` ORDER BY `academic_year`.`academic_year` ASC");
                            while ($row = $result->fetch_assoc()) {
                              unset($year);
                              $year = $row['academic_year'];
                              echo '<option value=" '.$year.'"  >'.$year.'</option>';
                          }
                            ?>
                          </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-6">
                      Batch no <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="number" name="batchno" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                          </div>
                        </div>
                      </div>
                      </div>
                    
                <!-- 2nd row -->
                  </div>
                  
    </div>


      </div>
      <div class="card-footer">
      <div class="row">
                     <div class="col-11 "></div>
                     <div class="col-1">
                     <button type="submit" name="submit" class="btn btn-outline-success" data-toggle="modal"
                                data-target="#exampleModal">
                                Add
                            </button>
                     </div>
                     </div>
      </div>
    </div>
    </form>
</div>
       <!-- card end  -->
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>






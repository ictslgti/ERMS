<?php
$title = "Add Department | Online Examination Result Management System | SLGTI";
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
       
        <!-- <main class="page-content pt-2"> -->
            <!-- 1st row start -->

         <div class="container"> 
         <?php
         $id=null;
         $code = null;
         $name = null;
         $Duration_Of_Course = null;
         $Duration_Of_OJT = null;
         $NVQ_Level = null;
         $Department = null;
        
        $code = null;
        $name = null;
        $Duration_Of_Course = null;
        $Duration_Of_OJT = null;
        $NVQ_Level = null;
        $Department = null;

         if(isset($_GET['edit'])){
            $id = $_GET['edit'];
            echo $id;
            $sql = "SELECT * FROM `courses` WHERE `code`= '$id' ";
            $result = mysqli_query($con,$sql);
            if(mysqli_num_rows($result)==1){
                $row = mysqli_fetch_assoc($result);
                $code = $row['code'];
                $name = $row['name'];
                $Duration_Of_Course = $row['Duration_Of_Course'];
                $Duration_Of_OJT = $row['Duration_Of_OJT'];
                $NVQ_Level = $row['NVQ_Level'];
                $Department= $row['department'];
                
            }
        }
         ?>
         

        <!-- insert -->

        <?php
        


        if(isset($_POST['submit'])
        && !empty($_POST['code'])
        && !empty($_POST['name'])
        && !empty($_POST['Duration_Of_Course'])
        && !empty($_POST['Duration_Of_OJT'])
        && !empty($_POST['NVQ_Level'])
        && !empty($_POST['Department'])
        ){
            
            $code = $_POST['code'];  
            $name = $_POST['name'];
            $Duration_Of_Course =$_POST['Duration_Of_Course'];
            $Duration_Of_OJT  =$_POST['Duration_Of_OJT'];
            $NVQ_Level=$_POST['NVQ_Level'];
            $Department   =$_POST['Department'];
            
            $sql = "INSERT INTO `courses` (`code`, `name`, `Duration_Of_Course`, `Duration_Of_OJT`, `NVQ_Level`, `Department`)
            VALUES 
            ('$code', 
            '$name', 
            $Duration_Of_Course,
            $Duration_Of_OJT,
            '$NVQ_Level',
            '$Department '
            )
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


        <!-- insert -->
<!-- update -->
<?php

if(

       isset($_POST['save'])  
    && !empty($_POST['code'])
    && !empty($_POST['name'])
    && !empty($_POST['Duration_Of_Course'])
    && !empty($_POST['Duration_Of_OJT'])
    && !empty($_POST['NVQ_Level'])
    && !empty($_POST['Department'])

    
){
    

    $code = $_POST['code'];  
    $code = $_POST['code'];  
    $name = $_POST['name'];
    $Duration_Of_Course =$_POST['Duration_Of_Course'];
    $Duration_Of_OJT  =$_POST['Duration_Of_OJT'];
    $NVQ_Level=$_POST['NVQ_Level'];
    $Department   =$_POST['Department'];      

    $sql = "UPDATE `courses` SET `code` = '$code',`name` = '$d_name' WHERE `courses`.`id` = '$id';";
  
   if (mysqli_query($con, $sql)) {
       echo "
       <div class='alert alert-success' role='alert'>
       update success fully 
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
   } else {
       
       echo "
       <div class='alert alert-danger' role='alert'>
       This coure alredy submit 
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
   }
}   
?>
            <!-- update -->



         <br>
            <div class="card  mb-3" >
                <div class="card-header ">
                <div class="row"> 

                      
                <div class="col"><h4>Course</h4></div>
                <div class="col-auto">
                <a href="courses.php" class="btn btn-outline-primary">Courses</a>
                </div>

                </div>
                </div>
                <div class="card-body ">
                <div class="card  mb-3">
                   
                    <div class="card-body ">
                    <form method="POST" >
                     <div class="row">
                     <div class="col-sm">
                     Code  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                     
                        <input type="text" placeholder="5it" value="<?php echo $code;?>" name="code" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        <div class="input-group-prepend">
                        
                    </div>
                        </div>
                         </div>
                     </div>
                    

                     <div class="col-sm">
                     <div class="form-group">
                     Name  <br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" placeholder="information communication technology" name="name" value="<?php echo $name;?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                     <br>
                    </div>
<!-- 2 row end -->


                    <div class="row">
                     <div class="col-sm">
                     Duration Of Course  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" placeholder="12" name="Duration_Of_Course" value="<?php echo $Duration_Of_Course;?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">months</span>
                    </div>
                        </div>
                         </div>
                     </div>
                    

                     <div class="col-sm">
                     <div class="form-group">
                     Duration Of OJT  <br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" placeholder="6" name="Duration_Of_OJT"  value="<?php echo $Duration_Of_OJT;?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">months</span>
  </div>
                        </div>
                         </div>
                     </div>
                     <br>
                     
                    </div>
                   <!-- 3 row end -->


                   <div class="row">
                     <div class="col-sm">
                     NVQ Level  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
  
                        <select name="NVQ_Level"class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected value="<?php echo $NVQ_Level;?>"><?php echo $NVQ_Level;?></option>
                        <?php
                        if(isset($_GET['edit']))
                        {
                        ?>
                         <option  disabled value="">Choose  NVQ_Level  </option>
                        <?php
                        }
                        else
                        {
                          ?>
                          <option selected disabled value="">Choose  NVQ_Level  </option>
                          <?php
                        }
                        ?>
                            <option value="NVQ-04">NVQ-04</option>
                            <option value="NVQ-05 Bridging">NVQ-05 Bridging</option>
                            <option value="NVQ-05">NVQ-05</option>
                            <option value="NVQ-06">NVQ-06</option>
                            <option value="NVQ-07">NVQ-07</option>
                            
                        </select>
                        </div>
                         </div>
                     </div>
                    

                     <div class="col-sm">
                     <div class="form-group">
                     Department  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select name="Department" class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <?php
                            if(isset($_GET['edit']))
                            {
                              ?>
                                                    <option selected value="<?php echo $Department;?>">
                                                        <?php echo $Department;?></option>
                                                    <option disabled value="">Choose Department</option>
                                                    <?php
                            $result = $con->query("SELECT `department_code` FROM `departments` ORDER BY `departments`.`department_code` ASC");
                            while ($row = $result->fetch_assoc()) {
                              unset($dno);
                              $dno = $row['department_code'];
                              echo '<option value=" '.$dno.'"  >'.$dno.'</option>';
                            }
                          }
                          else
                          {
                            ?>
                                                    <option selected disabled value="">Choose Department</option>
                                                    <?php
                          $result = $con->query("SELECT `department_code` FROM `departments` ORDER BY `departments`.`department_code` ASC");
                          while ($row = $result->fetch_assoc()) {
                            unset($dno);
                            $dno = $row['department_code'];
                            echo '<option value=" '.$dno.'"  >'.$dno.'</option>';
                          }
                            }
                            ?>
                        </select>
                        </div>
                         </div>
                     </div>
                     <br>
                     
                    </div>




                    </div>

                    
                </div>
                <?php

if(isset($_GET['edit']))
{
    ?>
    <div class="card-footer ">
    <div class="row">
        <div class="col-11 "></div>
        <div class="col-1">
            <button type="submit" name="save" class="btn btn-outline-primary" data-toggle="modal"
                data-target="#exampleModal">
                Save
            </button>
        </div>
    </div>
</div>
    <?php
}

else{
    ?>
    <div class="card-footer ">
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
    <?php
}

?>
                
                    
                     
                     
                     </div>




</form>


                    


                </div>
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>

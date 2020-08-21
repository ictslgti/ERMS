<?php
$title = "Module | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
    <?php include_once("../config.php");?>            
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        
            <?php include_once("nav.php"); ?>
       
        <!-- <main class="page-content pt-2"> -->
            <!-- 1st row start -->

         <div class="container"> 

         <?php
         

         $code = null;
         $Name  = null;
         $Course_Name = null;
         $Learning_Hours  = null;
         $Lecture_Hours = null;
         $Self_Study_Hours   = null;
         $AIM  = null;
         $Learn = null;
         $Resources   = null;
         $References   = null;


         
         if(isset($_GET['edit'])){
            $id = $_GET['edit'];
            $sql = "SELECT * FROM `modules` WHERE `code`= '$id' ";
            $result = mysqli_query($con,$sql);
            if(mysqli_num_rows($result)==1){
                $row = mysqli_fetch_assoc($result);
                $code = $row['code'];
                $Name = $row['Name'];
                $Course_Name = $row['Course_Name'];
                $Learning_Hours = $row['Learning_Hours'];
                $Lecture_Hours = $row['Lecture_Hours'];
                $Self_Study_Hours = $row['Self_Study_Hours'];
                $AIM = $row['AIM'];
                $Learn = $row['Learn'];
                $Resources = $row['Resources'];
                $Reference = $row['References'];


                
            }
        }
         ?>
         <!-- insert -->

         <?php
        if(isset($_POST['submit'])
        && !empty($_POST['code'])
        && !empty($_POST['name'])
        && !empty($_POST['Semester_Id'])
        && !empty($_POST['Course_Name'])
        && !empty($_POST['Learning_Hours'])
        && !empty($_POST['Lecture_Hours'])
        && !empty($_POST['Self_Study_Hours'])
        && !empty($_POST['AIM'])
        && !empty($_POST['Learn'])
        && !empty($_POST['Resources'])
        && !empty($_POST['References'])
       
)
{
            $code = $_POST['code'];  
            $Name = $_POST['name'];
            $Semester_Id =$_POST['Semester_Id'];
            $Course_Name  =$_POST['Course_Name'];
            $Learning_Hours=$_POST['Learning_Hours'];
            $Lecture_Hours=$_POST['Lecture_Hours'];
            $Self_Study_Hours=$_POST['Self_Study_Hours'];
            $AIM =$_POST['AIM'];
            $Learn=$_POST['Learn'];
            $Resources=$_POST['Resources'];
            $References=$_POST['References'];
    
            $sql = "INSERT INTO `modules` (`code`, `Name`, `Semester_Id`, `Course_Name`, `Learning_Hours`, `Lecture_Hours`, `Self_Study_Hours`, `AIM`, `Learn`, `Resources`, `References`) 
            VALUES ('$code', '$Name', '$Semester_Id', '$Course_Name', '$Learning_Hours', '$Lecture_Hours', '$Self_Study_Hours', '$AIM', '$Learn', '$Resources', '$References'); "
           ;

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
       This module alredy submit 
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
        }


}

       


        
?>
<!-- update -->
<?php

if(
     isset($_POST['save'])  
    && !empty($_POST['code'])
    && !empty($_POST['name'])
    && !empty($_POST['Semester_Id'])
    && !empty($_POST['Course_Name'])
    && !empty($_POST['Learning_Hours'])
    && !empty($_POST['Lecture_Hours'])
    && !empty($_POST['Self_Study_Hours'])
    && !empty($_POST['AIM'])
    && !empty($_POST['Learn'])
    && !empty($_POST['Resources'])
    && !empty($_POST['References'])

    
){
    
    
    $code = $_POST['code'];  
    $Name = $_POST['name'];
    $Semester_Id =$_POST['Semester_Id'];
    $Course_Name  =$_POST['Course_Name'];
    $Learning_Hours=$_POST['Learning_Hours'];
    $Lecture_Hours=$_POST['Lecture_Hours'];
    $Self_Study_Hours=$_POST['Self_Study_Hours'];
    $AIM =$_POST['AIM'];
    $Learn=$_POST['Learn'];
    $Resources=$_POST['Resources'];
    $References=$_POST['References'];
    
    $sql = "UPDATE `moduless` SET `code` = '$code',`Name` = '$Name' WHERE `modules`.`code` = '$code';";
  
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
       This academic_year alredy submit 
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
   }
}   
?>
            <!-- update -->



         
            <div class="card  mb-3" >
                <div class="card-header ">
                <div class="row">
                <div class="col"><h4>Module</h4></div>
                <div class="col-auto">
                <a href="modules.php" class="btn btn-outline-primary">Modules</a>
                </div>

                </div>
                </div>
                <div class="card-body ">
                <div class="card  mb-3">
                   
                    <div class="card-body ">
                    <form method="POST" action="">
                     <div class="row">
                     <div class="col-sm">
                     Code  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" value="<?php echo $code;?>"  name="code" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                    

                     <div class="col-sm">
                     <div class="form-group">
                     Name  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" value="<?php echo $Name;?>"  name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                    </div>
                    </div>
                    <!-- 1 row end -->
                    <div class="row">
                     <div class="col-sm">
                     Semester Id  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
  
                        <select name="Semester_Id" class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Semester Id  </option>
                            <option value="1">Semester 01</option>
                            <option value="2">Semester 02</option>
                            
                        </select>
                        </div>
                         </div>
                     </div>
                    

                     <div class="col-sm">
                     <div class="form-group">
                     Course Name  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
  
                        <select name=" Course_Name"  class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Course </option>
                            <option value="1">ICT</option>
                            <option value="2">AUT</option>
                            <option value="2">CON</option>
                        </select>
                        </div>
                         </div>
                     </div>
                     
                     
                    </div>

                    
                </div>

                <!-- 2 row end -->

                <div class="row">
                     <div class="col-sm">
                     Learning Hours <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="number" name="Learning_Hours"   class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                    

                     <div class="col-sm">
                     <div class="form-group">
                     Lecture Hours  <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="number" name="Lecture_Hours" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                     
                     
                    </div>

                    
                </div>

                <!-- 3 row end -->


                <div class="row">
                     <div class="col-sm">
                     Practical Hours <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="number" name="Practical_Hours" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                    

                     <div class="col-sm">
                     <div class="form-group">
                     Self Study Hours <br>
                     <div class="form-group">
                     <div class="input-group input-group-sm mb-3">
                        <input type="number" name="Self_Study_Hours" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                     
                     
                    </div>

                    
                </div>

                <!-- 4 row end -->
<!-- 6 row start -->
<div class="row">
                     <div class="col-sm">
                    Module_aim
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <textarea name="AIM"  id="" cols="30" rows="10"></textarea>
                         </div>
                         </div>
                     </div>
                    
                     <div class="col-sm">
                    Learning _Outcomes
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <textarea name="Learn" id="" cols="30" rows="10"></textarea>
                         </div>
                         </div>
                     </div>
                     <div class="col-sm">
                    Resources
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <textarea name="Resources" id="" cols="30" rows="10"></textarea>
                         </div>
                         </div>
                     </div>
                     <div class="col-sm">
                    References
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <textarea name="References" id="" cols="30" rows="10"></textarea>
                         </div>
                         </div>
                     </div>
                 
                     </div>


<!-- end -->
                <div class="card-footer "><div class="row">
                     <div class="col-11 "></div>
                     <div class="col-1">
                     <button type="submit" name="submit" class="btn btn-outline-success" data-toggle="modal"
                                data-target="#exampleModal">
                                Add
                            </button>
                     </div></div>
                </div>
                
                    
                     
                     
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

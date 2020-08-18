<?php
$title = "lecturer | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../head.php"); ?>
    <?php include_once("../config.php"); ?>
    <script type='text/javascript'>
        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
<style>
#wrapper
{
 text-align:center;
 margin:0 auto;
 padding:0px;
}
#output_image
{
 width:230px;
 height: 260px;
 border: 1px solid black;
}
</style>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        
            <?php include_once("nav.php"); ?>
       
        <!-- <main class="page-content pt-2"> -->
            <!-- 1st row start -->

         <div class="container"> 


<!-- insert -->
<?php
$first=null;
$last=null;
$dob=null;
$nic=null;
$phoneno=null;
$email=null;
$gender=null;
$epf=null;
$address=null;
$department=null;
$join=null;
$position=null;
$type=null;
$status=null;
$image=null;
if(isset($_POST['submit'])
&& !empty($_POST['first'])
&& !empty($_POST['last'])
)
{
    
    $first = $_POST['first']; 
    $last = $_POST['last']; 
    $dob = $_POST['dob'];
    $nic = $_POST['nic'];  
    $phoneno=$_POST['phoneno'];
    $email = $_POST['email']; 
    $gender = $_POST['gender']; 
    $epf = $_POST['epf']; 
    $address = $_POST['address']; 
    $department = $_POST['department'];
    $join = $_POST['join']; 
    $position = $_POST['position'];
    $type = $_POST['type'];  
    $status = $_POST['status']; 
    $sta = $statusMsg = ''; 
    $sta = 'error'; 


   
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
           $sql = "INSERT INTO lecturer (department_code,first_name,last_name,address,
           dob,nic,email,telephone,date_of_join,gender,epf_no,position,type,status,image)
    VALUES 
    ('$department','$first','$last','$address','$dob','$nic','$email','$phoneno','$join','$gender','$epf', 
    '$position','$type','$status','$imgContent')";

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
            
             
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    }       
}
?>
<!-- insert -->
             <br>
         <form action="" method="POST" enctype="multipart/form-data"> 
            <div class="card  mb-3" >
                <div class="card-header ">
                <div class="row">
                <div class="col"><h4>Lecture</h4></div>
                <div class="col-auto">
                <a href="lecturers.php" class="btn btn-outline-primary">Lecturers</a>
                </div>

                </div>
                </div>
                <div class="card-body ">
                <div class="card  mb-3">
                   
                    <div class="card-body ">
<!-- 2nd start -->
<div class="row">
                     <div class=col-2>
                            <div id="wrapper">
                                <img id="output_image" />
                                <input type="file" name="image" accept="image/*" onchange="preview_image(event)"><br>
                            </div>
                     </div>
                     <div class=col-1></div>
                     <div class="col-9">
                     <!-- 2-1 row start -->
                     
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     First name <br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" name="first"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     Last name <br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" name="last" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                     </div>
                     </div>
                     </div>
                     
                     <!-- 2-1 row end -->

                     <!-- 2-2 row start -->
                     
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     DOB<br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="date" name="dob" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     NIC <br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" name="nic" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                     </div>
                     </div>
                     </div>
                     
                     <!-- 2-2 row end -->

                     <!-- 2-3 row start -->
                     
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     Phone number <br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="number" name="phoneno" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     Email <br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                     </div>
                     </div>
                     </div>
                    
                     <!-- 2-3 row end -->

                     <!-- 2-4 row start -->
                     
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     Gender  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" name="gender" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Gender  </option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                        </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     EPF no <br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" name="epf" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                     </div>
                     </div>
                     </div>
                     <br>
                     <!-- 2-4 row end -->
                     
                     </div>
                </div>
                <!-- 2nd end -->
                <!-- 3rd row start -->
                <div class=row>
                <div class="col-sm">
                     <div class="form-group">
                     Address <br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" name="address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                     </div>
                     </div>
                     <div class="col-sm">
                     <div class="form-group">
                     Department  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" name="department" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Department  </option>
                            <option value="ICT">ICT</option>
                            <option value="CON">CON</option>
                            <option value="MEC">MEC</option>
                        </select>
                        </div>
                     </div>
                     </div>

                </div>

                <!-- 3rd row end -->

             
                <!-- 4rd row start -->
                <div class=row>
                <div class="col-sm">
                     <div class="form-group">
                     Join date<br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="date" name="join" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                     </div>
                     </div>
                     <div class="col-sm">
                     <div class="form-group">
                     Poisition  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" name="position" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Poisition  </option>
                            <option value="Admin">Admin</option>
                            <option value="HOD">HOD </option>
                            <option value="Lecturer">Lecturer</option>
                            <option value="Traniee">Traniee</option>
                        </select>
                        </div>
                     </div>
                     </div>

                </div>

                <!-- 4rd row end -->
                

                <!-- 5rd row start -->
                <div class=row>
                <div class="col-sm">
                     <div class="form-group">
                     Type  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" name="type" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Type  </option>
                            <option value="Permanend staff">Permanend staff</option>
                            <option value="Visiting staff">Visiting staff </option>
                            <option value="On contracted staff">On contracted staff</option>
                            
                        </select>
                        </div>
                     </div>
                     </div>
                     <div class="col-sm">
                     <div class="form-group">
                     Status  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" name="status" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  status  </option>
                            <option value="Working staff">Working staff</option>
                            <option value=">Derminated">Derminated </option>
                            <option value="Resigned">Resigned</option>
                            
                        </select>
                        </div>
                     </div>
                     </div>

                </div>
                    </div>

                    <div class="card-footer "><div class="row">
                     <div class="col-11 "></div>
                     <div class="col-1">
                     <button type="submit" name="submit" class="btn btn-outline-success" data-toggle="modal"
                                data-target="#exampleModal">
                                Add
                            </button>
                     </div></div>
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


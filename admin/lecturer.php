<?php
$title = "lecturer | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
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
             <br>
         <form action=""> 
            <div class="card  mb-3" >
                <div class="card-header ">
                <div class="row">
                <div class="col"><h4>Lecture</h4></div>
                <div class="col-auto">
                <button type="submit" class="btn btn-outline-primary">Lecturers</button>
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
                                <input type="file" accept="image/*" onchange="preview_image(event)"><br>
                            </div>
                     </div>
                     <div class=col-1></div>
                     <div class="col-9">
                     <!-- 2-1 row start -->
                     
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     ID <br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     Name <br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
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
                        <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     NIC <br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
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
                        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     Email <br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
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
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Gender  </option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="2">Others</option>
                        </select>
                        </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     EPF no <br>
                     <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
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
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                     </div>
                     </div>
                     <div class="col-sm">
                     <div class="form-group">
                     Department  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Department  </option>
                            <option value="1">ICT</option>
                            <option value="2">CON</option>
                            <option value="2">MEC</option>
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
                        <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"id="validationServer01" required>
                        </div>
                     </div>
                     </div>
                     <div class="col-sm">
                     <div class="form-group">
                     Poisition  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Poisition  </option>
                            <option value="1">Admin</option>
                            <option value="2">HOD </option>
                            <option value="2">Lecturer</option>
                            <option value="2">Traniee</option>
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
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Type  </option>
                            <option value="1">Permanend staff</option>
                            <option value="2">Visiting staff </option>
                            <option value="2">On contracted staff</option>
                            <
                        </select>
                        </div>
                     </div>
                     </div>
                     <div class="col-sm">
                     <div class="form-group">
                     Status  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  status  </option>
                            <option value="1">Working staff</option>
                            <option value="2">Derminated </option>
                            <option value="2">Resigned</option>
                            
                        </select>
                        </div>
                     </div>
                     </div>

                </div>
                    </div>

                    <div class="card-footer "><div class="row">
                     <div class="col-11 "></div>
                     <div class="col-1">
                     <button type="submit" class="btn btn-outline-success" data-toggle="modal"
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


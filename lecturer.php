<?php
$title = "Dashboard | Online Examination Result Management System | SLGTI";
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
        <nav id="sidebar" class="sidebar-wrapper">
            <?php include_once("nav.php"); ?>
        </nav>
        <main class="page-content pt-2">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5">
                <!-- #1 Insert Your Content-->
                   <!-- 1st row start -->
                    <div class="row">
                     <div class="col-11">
                     <div class="text-primary ">
                     <h1>Add lecturer</h1>
                     </div>
                    </div>
                    <div class="col-1">
                    <button type="button" class="btn btn-outline-primary">view</button>
                    </div>
                    </div>
                <!-- 1st row end -->
                <hr>
                <form method="POST" action="">
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
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">ID</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"> Name</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                     </div>
                     </div>
                     </div>
                     <br>
                     <!-- 2-1 row end -->

                     <!-- 2-2 row start -->
                     
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">DOB</span>
                       </div>
                        <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1"> NIC</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                     </div>
                     </div>
                     </div>
                     <br>
                     <!-- 2-2 row end -->

                     <!-- 2-3 row start -->
                     
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Phone No</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Email</span>
                       </div>
                        <input type="email" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                     </div>
                     </div>
                     </div>
                     <br>
                     <!-- 2-3 row end -->

                     <!-- 2-4 row start -->
                     
                     <div class="row">
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Gender</span>
                       </div>
                       <select class="custom-select" id="inputGroupSelect01" name="Assess">
                        
                        <option value="1">Male</option>
                        <option value="1">Female</option>
                        <option value="1">Other</option>
                        </select>
                         </div>
                         </div>
                     </div>
                    
                       
                
                
                     
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">EPF number</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
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
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Address</span>
                       </div>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                     </div>
                     </div>
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Department</span>
                       </div>
                       <select class="custom-select" id="inputGroupSelect01" name="Assess">
                       <option value="1" selected>Choose Department</option>
                        <option value="1">ICT</option>
                        <option value="1">FOOD</option>
                        <option value="1">MEGANICAL</option>
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
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Join Date</span>
                       </div>
                        <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                         </div>
                     </div>
                     </div>
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Position</span>
                       </div>
                       <select class="custom-select" id="inputGroupSelect01" name="Assess">
                       <option value="1" selected>Choose Position</option>
                        <option value="1">Director</option>
                        <option value="1">Deputy Principal(Academics)</option>
                        <option value="1">Deputy Principal(Industrial)</option>
                        <option value="1">Registrar</option>
                        <option value="1">Accountant</option>
                        <option value="1">Senior Lecturer</option>
                        <option value="1">Lecturer GR I</option>
                        <option value="1">Lecturer GR II</option>
                        <option value="1">Instructor GR I</option>
                        <option value="1">Instructor GR II</option>
                        <option value="1">Instructor GR III</option>
                        <option value="1">Head Of Department</option>
                        <option value="1">Human Resourse Officer</option>
                        <option value="1">Management Assistant GR II</option>
                        <option value="1">Wardan</option>
                        <option value="1">Librarian</option>
                        </select>
                         </div>
                     </div>
                     </div>

                </div>

                <!-- 4rd row end -->
                <br>

                <!-- 5rd row start -->
                <div class=row>
                <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Type</span>
                       </div>
                       <select class="custom-select" id="inputGroupSelect01" name="Assess">
                       <option value="1" selected>Choose Type</option>
                        <option value="1">Permanend Staff</option>
                        <option value="1">On Contracd</option>
                        <option value="1">Vicitting Lecture</option>
                        </select>
                         </div>
                     </div>
                     </div>
                     <div class="col-sm">
                     <div class="form-group">
                     <div class="input-group mb-3">
                         <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">Status</span>
                       </div>
                       <select class="custom-select" id="inputGroupSelect01" name="Assess">
                       <option value="1" selected>Choose Status</option>
                        <option value="1">Working Staff</option>
                        <option value="1">Derminated</option>
                        <option value="1">Resigned</option>
                        
                        
                        </select>
                         </div>
                     </div>
                     </div>

                </div>

                <!-- 5rd row end -->
                <div class="row">
                <div class="col-11">
                </div>
                <div class="col-1">
                <button type="button" class="btn btn-outline-success " >Add</button>

                </div>
                </div>

                
               </form>
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>


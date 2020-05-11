<?php
$title = "Add Department | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        
            <?php include_once("nav.php"); ?>
       
        
            <div class="container"> 
             <br>
         <form action=""> 
            <div class="card  mb-3" >
                <div class="card-header ">
                <div class="row">
                <div class="col"><h4>Module</h4></div>
                <div class="col-auto">
                <a href="module.php" class="btn btn-outline-primary">New</a>
                </div>

                </div>
                </div>
            <div class="card-body ">
                


                    <form method="POST">
                <div class="row">
                    <div class="form-group col-md-12">
                    <div class="table-responsive">
                    
                    <table class='table align-middle'>
                        <thead class='bg-primary text-light'>
                            <tr class="h5">
                                <th scope='col'>ID</th>
                                <th scope='col'>CODE</th>
                                <th scope='col'>NAME</th>
                                <th scope='col'>SEMESTER</th>
                                <th scope='col'>OPTION</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                        <tr>
                        <td><h6>01</h6></td>
                        <td><h6>M07</h6></td>
                        <td><h6>WEB PROGRAMMING</h6></td>
                        <td><h6>2</h6></td>
                        <td class="alig">
                        <h2></h2>
            
            <div class="w3-dropdown-hover">
                <a class="">...</a>
                <div class="w3-dropdown-content w3-bar-block w3-border">
                <a class="dropdown-item" href="#"><img src="https://img.icons8.com/android/18/000000/edit.png"/>  Edit</a>
                <a class="dropdown-item" href="#"><img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/>Delete</a>
                </div>
            </div>

                        
</div>
</td>
                        </tbody>
                    </table>
                    
                    </div>
                    </div>
                </div>
                </form>
                    
                     </div>
                     <br>
                     <!-- 2 row end -->
                    </div>
                   
                   
                
                <!-- 1st row end -->
            <!-- <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5"> -->
                <!-- #1 Insert Your Content-->
                <!-- <div class="container"> -->
                    <!-- 2 row start -->
                    
                     
                     
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


































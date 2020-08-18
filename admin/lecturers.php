<?php
$title = "Dashboard | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
</head>

<body>

<?php 
// Include the database configuration file  
require_once '../Config.php'; 
 
// Get image data from database 
$result = $con->query("SELECT * FROM lecturer"); 
?>

    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <nav id="sidebar" class="sidebar-wrapper">
            <?php include_once("nav.php"); ?>
        </nav>
        <main class="page-content pt-2">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5">
                <!-- #1 Insert Your Content-->
                <div class="container">


                <div class="card border-secondary mb-3 ">
  <div class="card-header bg-transparent border-secondary">

  <h1> Lecturers </h1>
  </div>
  <div class="card-body text-secondary">
  <?php if($result->num_rows > 0){ ?> 
    <div class="row"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <div class="card col-3" style="margin-bottom: 10px; margin-top: 10px;">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" style="width:100%; height:66%;" /> 
  <div class="card-body">
    
    <h6 class="card-text"><?php echo ($row['first_name']); ?> <?php echo ($row['last_name']); ?></h6>
    <p class="card-text"><?php echo ($row['position']); ?> of <?php echo ($row['department_code']); ?></p>
    <a href="#" class="btn btn-primary">See more details</a>
  </div>
</div>
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>
  </div>
</div>



                

                </div>
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>










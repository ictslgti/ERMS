<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: .././index.php');
}
?>
<?php 

if (isset($_GET['logout']) && isset($_SESSION['username']) ) {
    unset($_SESSION['username']);  
    header('Location: .././index.php');         
}
?>
<?php
$title = "Dashboard | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
    <style>
    .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
    </style>
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
<div class="row">
<div class="col"><h1> Lecturers </h1></div>
<div class="col-auto">
<a href="lecturer.php" class="btn btn-outline-primary">New</a>
</div>
</div>
  
  </div>
  <div class="card-body text-secondary">
  
  <?php if($result->num_rows > 0){ ?> 
    <div class="row"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <div class="card col-3">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="card-img-top img-fluid" /> 
  <div class="card-body">
    
    <h6 class="card-text"><?php echo ($row['first_name']); ?> <?php echo ($row['last_name']); ?></h6>
    <p class="card-text"><?php echo ($row['position']); ?> of <?php echo ($row['department_code']); ?></p>

    <?php
    $id=$row['id'];
    ?>
    <a href="lec_profile.php?edit=<?php echo ("$id"); ?>" class="btn btn-primary">See more details</a>
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










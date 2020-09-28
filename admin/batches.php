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
$title = "Batch | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../head.php"); ?>
    <?php include_once("../config.php"); ?>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
   .test:after {
  content: '\2807';
  font-size: 18px;
  font-weight:bold;
  }
    </style>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <?php include_once("nav.php"); ?>
       <!-- card start -->
<div class="container">
<!-- delete -->
<?php
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $nv=$_GET['nvq'];
    $de=$_GET['dep'];
    $sql = "DELETE FROM `batches` WHERE `batches`.`batch_no` = '$id' and `batches`.`department_code` = '$de' and `batches`.`NVQ_level` = '$nv'";
    if(mysqli_query($con,$sql)){
        echo "
       <div class='alert alert-success' role='alert'>
       delete success fully 
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>
<!-- delete -->
<form action=""method="post">
<div class="card  mb-3" >
      <div class="card-header bg-transparent ">
      <div class="row">
      <div class="col"> <h4>Batches</h4> </div>
      <div class="col-auto"> 
      
      <a href="batch.php" class="btn btn-outline-primary">New</a> </div>
      </div>
      </div>
      <div class="card-body ">
         
      <div class="table-responsive-sm">
    <table class="table ">
    <thead class="p-3 mb-2 bg-primary text-white">
      <tr>
        <th scope="col">Batch No</th>
        <th scope="col">Department</th>
        <th scope="col">NVQ_level</th>
        <th scope="col">Academic_year</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    <?php
$sql = 'SELECT * FROM `batches`';
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>
            <td>',"batches".$row['batch_no'],'</td>
            <td>',$row['department_code'],'</td>
            <td>',$row['NVQ_level'],'</td>
            <td>',$row['Academic_year'],'</td>
            <td>
            <div class="row">
<div class="col"></div>
<div class="col-auto">
<div class="btn-group btn-sm" role="group" aria-label="Basic example">
            <a href="batch.php?edit=', $row['id'], '" class=" btn btn-sm" style="background-color: #ffaa00 ;" ><i class="far fa-edit" style="color: #ffffff;"></i> </a> 
            <a href="?delete=', $row['id'], '" class="btn btn-sm" style="background-color: #bf0502;"> <i class="far fa-trash-alt" style="color: #ffffff;"></i> </a>
            <a href="students.php?batch=', $row['batch_no'], '" class="btn btn-sm" style="background-color: #0097c4 ; color: #ffffff;" > student info </a>
          </div>
</div>
</div>
            </td>
        </tr>';
    }
}
else{
    echo 'no rows';
}
?>  
      
      
    </tbody>
  </table>
  </div>   
                  


        
    </div>
       <!-- card end  -->
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>






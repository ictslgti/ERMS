<?php
$title = "Academicyears | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
    <?php include_once("../config.php"); ?>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
tr,th,table{
    text-align: center;
    font-weight:bold;
}
</style>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <?php include_once("nav.php"); ?>
       <!-- card start -->
        <br>
<div class="container">

<!-- delete -->
<?php
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "select Academic_year from batch where Academic_year='$id';";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        ?>
       <div class='alert alert-warning' role='alert'>
       This academic_year already allocate batches so not delete this academic_year.
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>
        <?php
    }
    else{
    $sql = "DELETE FROM `academic_year` WHERE `academic_year`.`academic_year` = '$id'";
    if(mysqli_query($con,$sql)){
        echo 'Record was deleted';
    }else{
        echo 'Try again';
    }
}
}
?>
<!-- delete -->
<form action=""method="post">
<div class="card  mb-3" >
      <div class="card-header bg-transparent ">
      <div class="row">
      <div class="col"> <h4>Academicyears</h4> </div>
      <div class="col-auto"> 
      
      <a href="Academicyear.php" class="btn btn-outline-primary">New</a> </div>
      </div>
      </div>
      <div class="card-body ">
         
           
                 
    
    <div class="table-responsive-sm">
    <table class="table ">
    <thead class="p-3 mb-2 bg-primary text-white">
      <tr>
        <th scope="col">Academicyear</th>
        <th scope="col">Status</th>
        <th scope="col">1semi_startdate</th>
        <th scope="col">1semi_enddate</th>
        <th scope="col">2semi_startdate</th>
        <th scope="col">2semi_enddate</th>
        <th scope="col">Options</th>

      </tr>
    </thead>
    <tbody>
    <?php
$sql = 'SELECT * FROM `academic_year`';
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>
            <td>',$row['academic_year'],'</td>
            <td>',$row['academic_year_status'],'</td>
            <td>',$row['1semi_startdate'],'</td>
            <td>',$row['1semi_enddate'],'</td>
            <td>',$row['2semi_startdate'],'</td>
            <td>',$row['2semi_enddate'],'</td>
            <td>
            <div class="row">
<div class="col"></div>
<div class="col-auto">
<div class="btn-group btn-sm" role="group" aria-label="Basic example">
            <a href="batch.php?edit=', $row['academic_year'], '" class=" btn btn-sm" style="background-color: #ffaa00 ;" ><i class="far fa-edit" style="color: #ffffff;"></i> </a> 
            <a href="?delete=', $row['academic_year'], '" class="btn btn-sm" style="background-color: #bf0502;"> <i class="far fa-trash-alt" style="color: #ffffff;"></i> </a>
            <a href="batches.php?id=', $row['academic_year'], '" class="btn btn-sm" style="background-color: #0097c4 ; color: #ffffff;" > batches</a>
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
    </form>
</div>
       <!-- card end  -->
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>






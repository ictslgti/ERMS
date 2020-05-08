<?php
$title = "Batch | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <?php include_once("nav.php"); ?>
       <!-- card start -->
<div class="container">
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
         
            <div class="card  mb-3" >
                 
                  <div class="card-body ">
                  <a href="batches.php?all" ><h6>view all details</h6></a>
                  <br>
                  <?php
if(isset($_GET['all']))
{
    echo ' 
    <div class="table-responsive-sm">
    <table class="table ">
    <thead class="p-3 mb-2 bg-primary text-white">
      <tr>
        <th scope="col">Department</th>
        <th scope="col">NVQ Level</th>
        <th scope="col">Academicyear</th>
        <th scope="col">Batch no</th>
        <th scope="col">options</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">ICT</th>
        <td>NVQ-05</td>
        <td>2019/2020</td>
        <td>4</td>
        <td><div class="btn-group">
        <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h5>...</h5>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/android/18/000000/edit.png"/>  Edit</a>
            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/>Delete</a>
            
            <div class="dropdown-divider"></div>
        </div>
        </div></td>
      </tr>
      <tr>
        <th scope="row">ICT</th>
        <td>NVQ-05</td>
        <td>2019/2020</td>
        <td>5</td>
        <td><div class="btn-group">
        <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h5>...</h5>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/android/18/000000/edit.png"/>  Edit</a>
            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/>Delete</a>
            
            <div class="dropdown-divider"></div>
        </div>
        </div></td>
      </tr>
      <tr>
        <th scope="row">ICT</th>
        <td>Bridging</td>
        <td>2019/2020</td>
        <td>3</td>
        <td><div class="btn-group">
        <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h5>...</h5>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/android/18/000000/edit.png"/>  Edit</a>
            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/>Delete</a>
            
            <div class="dropdown-divider"></div>
        </div>
        </div></td>
      </tr>
      <tr>
        <th scope="row">ICT</th>
        <td>NVQ-05</td>
        <td>2018/2019</td>
        <td>3</td>
        <td><div class="btn-group">
        <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h5>...</h5>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/android/18/000000/edit.png"/>  Edit</a>
            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/>Delete</a>
            
            <div class="dropdown-divider"></div>
        </div>
        </div></td>
      </tr>
      <tr>
        <th scope="row">ICT</th>
        <td>Bridging</td>
        <td>2018/2019</td>
        <td>3</td>
        <td><div class="btn-group">
        <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h5>...</h5>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/android/18/000000/edit.png"/>  Edit</a>
            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/>Delete</a>
            
            <div class="dropdown-divider"></div>
        </div>
        </div></td>
      </tr>
      <tr>
      <th scope="row">Mechanical</th>
      <td>NVQ-05</td>
      <td>2018/2019</td>
      <td>3</td>
      <td><div class="btn-group">
      <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <h5>...</h5>
      </a>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="#"><img src="https://img.icons8.com/android/18/000000/edit.png"/>  Edit</a>
          <a class="dropdown-item" href="#"><img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/>Delete</a>
          
          <div class="dropdown-divider"></div>
      </div>
      </div></td>
      </tr>
    </tbody>
  </table>
  </div>';
}
else
{
    echo'
    <div class="table-responsive-sm">
    <table class="table ">
    <thead class="p-3 mb-2 bg-primary text-white">
      <tr>
        <th scope="col">Department</th>
        <th scope="col">NVQ Level</th>
        <th scope="col">Academicyear</th>
        <th scope="col">Batch no</th>
        <th scope="col">options</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">ICT</th>
        <td>NVQ-05</td>
        <td>2019/2020</td>
        <td>4</td>
        <td><div class="btn-group">
        <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h5>...</h5>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/android/18/000000/edit.png"/>  Edit</a>
            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/>Delete</a>
            
            <div class="dropdown-divider"></div>
        </div>
        </div></td>
      </tr>
      <tr>
        <th scope="row">ICT</th>
        <td>NVQ-05</td>
        <td>2019/2020</td>
        <td>5</td>
        <td><div class="btn-group">
        <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h5>...</h5>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/android/18/000000/edit.png"/>  Edit</a>
            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/>Delete</a>
            
            <div class="dropdown-divider"></div>
        </div>
        </div></td>
      </tr>
      <tr>
        <th scope="row">ICT</th>
        <td>Bridging</td>
        <td>2019/2020</td>
        <td>3</td>
        <td><div class="btn-group">
        <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h5>...</h5>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/android/18/000000/edit.png"/>  Edit</a>
            <a class="dropdown-item" href="#"><img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/>Delete</a>
            
            <div class="dropdown-divider"></div>
        </div>
        </div></td>
      </tr>
      
    </tbody>
  </table>
  </div>';
}
?>

                
      
      </div>
    </div>
    </form>
</div>
       <!-- card end  -->
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>






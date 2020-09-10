<?php
$title = "Assessments | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <?php include_once("../config.php"); ?>

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
       
        <!-- <main class="page-content pt-2"> -->
            <!-- 1st row start -->

         <div class="container"> 
             <br>



             
         <form action=""> 
            <div class="card  mb-3" >
                <div class="card-header ">
                <div class="row">
                <div class="col"><h4>Assessments</h4></div>
                <div class="col-auto">
                <a href="assessment.php" class="btn btn-outline-primary">New</a>
                </div>

                </div>
                </div>
                <div class="card-body ">
                <div class="row">
                    <div class="form-group col-md-12">
                    <div class="table-responsive">
                    <table class='table align-middle'>
                        <thead class='bg-primary text-light'>
                            <tr>
                            
                                <th scope='col'>Name</th>
                                <th scope='col'>Module</th>
                                <th scope='col'>Batch</th>
                                <th scope='col'></th>
                                

                            </tr>
                        </thead>
                        <tbody>
                            <?php
            $sql = 'select a.department_code, a.type,a.id,a.names,m.name,a.batch,b.NVQ_level from assessments a inner join modules m on a.module=m.id inner join batches b on b.id=a.batch';
            $result = mysqli_query($con,$sql);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
            echo '<tr>
            <td>',$row['names']." "."<span class='badge badge-dark'>".$row['type']."</span>",'</td>
            <td>',$row['name'],'</td>
            <td>',$row['NVQ_level'].'-batch-'.$row['batch']."<span class='badge badge-dark'>".$row['department_code']."</span>",'</td>
            
            <td>
<div class="row">
<div class="col"></div>
<div class="col-auto">
<div class="btn-group btn-sm" role="group" aria-label="Basic example">
            <a href="batch.php?edit=',$row['id'],'" class="btn btn-warning btn btn-sm" ><img src="https://img.icons8.com/android/18/000000/edit.png"/> </a> 
            <a href="?delete=',$row['id'],'" class="btn btn-danger btn btn-sm"> <img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/> </a>
            <a href="assessment_result.php?id=',$row['id'],'" class="btn btn-success btn btn-sm"> Add result </a>
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
                    
                   
                </div>
                <div class="card-footer ">
                <div class="row">
                     <div class="col">
                     
                         <h1></h1>
                     </div>
                     <div class="col-auto">
                     
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

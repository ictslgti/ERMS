<?php
$title = "Courses | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
    <?php include_once("../config.php"); ?>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        
            <?php include_once("nav.php"); ?>
       
        <!-- <main class="page-content pt-2"> -->
            <!-- 1st row start -->

         <div class="container"> 
                  <!-- delete -->
<?php
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM `courses` WHERE `courses`.`code` = '$code'";
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
             <br>
         <form action=""> 
            <div class="card  mb-3" >
                <div class="card-header ">
                <div class="row">
                <div class="col"><h4>Course</h4></div>
                <div class="col-auto">
                <a href="course.php" class="btn btn-outline-primary">New</a>
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
                                <th scope='col'>code</th>
                                <th scope='col'>name</th>
                                <th scope='col'>Duration_Of_Course</th>
                                <th scope='col'>Duration_Of_OJT</th>
                                <th scope='col'>NVQ_Level</th>
                                <th scope='col'>Department</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                        
            

                        <?php
$sql = 'SELECT * FROM `courses`';
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>
            <td>',$row['code'],'</td>
            <td>',$row['name'],'</td>
            <td>',$row['Duration_Of_Course'],'</td>
            <td>',$row['Duration_Of_OJT'],'</td>
            <td>',$row['NVQ_Level'],'</td>
            <td>',$row['Department'],'</td>
            
            
            <td>
            <div class="btn-group btn-sm" role="group" aria-label="Basic example">
            <a href="course.php?edit=',$row['code'],'" class="btn btn-warning" > Edit </a> 
            <a href="?delete=',$row['code'],'" class="btn btn-danger"> Delete </a>
            
          </div>
            </td>
        </tr>';
    }
}
else{
    echo 'no rows';
}
?>  



            <div class="w3-dropdown-hover">
                <a class="">...</a>
                <div class="w3-dropdown-content w3-bar-block w3-border">
                <a class="dropdown-item" href="#"><img src="https://img.icons8.com/android/18/000000/edit.png"/>  Edit</a>
                <a class="dropdown-item" href="#"><img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/>Delete</a>
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






































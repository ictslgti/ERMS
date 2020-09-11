<?php
$title = ' Result | SLGTI(page Title)';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php include_once('../head.php');
    include_once('../config.php');
    ?>
</head>

 <body>
 <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        
            <?php include_once("nav.php"); ?>
           
            
         
                
              
                
<div class="card border-success mb-3" >
  <div class="card-header bg-transparent border-success">View Result</div>
  <div class="card-body text-success">
  <div class="table-responsive">
                    
                    <table class='table align-middle'>
                        <thead class='bg-primary text-light'>
                            <tr class="h5">
                                <th scope='col'>Index No</th>
                                <th scope='col'>Name</th>
                                <th scope='col'>Nic</th>
                                <th scope='col'>Assesment1<span class="badge badge-pill badge-dark m-1">T</span></th>
                                <th scope='col'>Assesment2<span class="badge badge-pill badge-dark m-1">P</span></th>
                                <th scope='col'>Total</th>
                                <th scope='col'>Percentage%</th>

                            </tr>
                            
                        </thead>
                        <tbody>
                        <tr>
                        <td><h6>2018/ICT/BIT22</h6></td>
                        <td><h6>B.Kiriya</h6></td>
                        <td><h6>966683007V</h6></td>
                        <td><h6>58</h6></td>
                        <td><h6>78</h6></td>
                        <td class="alig">
                        <h2></h2>
          
</td>
</tbody>
                    </table>
    
  </div>
  



                
              
                   
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>
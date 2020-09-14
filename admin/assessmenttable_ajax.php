<?php
//departmenttable
include_once("../config.php");
if (isset($_GET['depart'])) {
      $_GET['depart'];
      $sql = 'select a.department_code, a.type,a.id,a.names,m.name,b.batch_no,b.NVQ_level from assessments a inner join modules m on a.module=m.id inner join batches b on b.id=a.batch and a.department_code="'.$_GET['depart'].'"';
      $output='
      <thead class="bg-primary text-light">
      <tr>

          <th scope="col">Name</th>
          <th scope="col">Module</th>
          <th scope="col">Batch</th>
          <th scope="col"></th>


      </tr>
    </thead>';
    echo $output;
      $result = mysqli_query($con, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            
           $output1= '
             <tr>
            <td>'. $row['names'] . " " . "<span class='badge badge-dark'>" . $row['type'] . "</span>". '</td>
            <td>'. $row['name']. '</td>
            <td>'. $row['NVQ_level'] . '-batch-' . $row['batch_no'] . "<span class='badge badge-dark'>" . $row['department_code'] . "</span>". '</td>
            
            <td>
              <div class="row">
              <div class="col"></div>
              <div class="col-auto">
              <div class="btn-group btn-sm" role="group" aria-label="Basic example">
              <a href="assessment_result.php?id='. $row['id']. '" class="btn btn-sm" style="background-color: #0097c4 ; color: #ffffff;" > see result </a>
          </div>
            </div>
            </div>
            </td>
        </tr>
        
        
        ';
        echo $output1;
        }
      } 
      
}
//department table


//coursetable
if (isset($_GET['cour'])) {
       $_GET['cour'];
      $sql = 'select a.department_code, a.type,a.id,a.names,m.name,b.batch_no,b.NVQ_level from assessments a inner join modules m on a.module=m.id inner join batches b on b.id=a.batch and m.course_code="'.$_GET['cour'].'"';
      $output='
      <thead class="bg-primary text-light">
      <tr>

          <th scope="col">Name</th>
          <th scope="col">Module</th>
          <th scope="col">Batch</th>
          <th scope="col"></th>


      </tr>
    </thead>';
    echo $output;
      $result = mysqli_query($con, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            
           $output1= '
             <tr>
            <td>'. $row['names'] . " " . "<span class='badge badge-dark'>" . $row['type'] . "</span>". '</td>
            <td>'. $row['name']. '</td>
            <td>'. $row['NVQ_level'] . '-batch-' . $row['batch_no'] . "<span class='badge badge-dark'>" . $row['department_code'] . "</span>". '</td>
            
            <td>
              <div class="row">
              <div class="col"></div>
              <div class="col-auto">
              <div class="btn-group btn-sm" role="group" aria-label="Basic example">
              <a href="assessment_result.php?id='. $row['id']. '" class="btn btn-sm" style="background-color: #0097c4 ; color: #ffffff;" > see result </a>
          </div>
            </div>
            </div>
            </td>
        </tr>
        
        
        ';
        echo $output1;
        }
      } 
      
}
//course table



//moduletable
if (isset($_GET['modu'])) {
  $_GET['modu'];
 $sql = 'select a.department_code, a.type,a.id,a.names,m.name,b.batch_no,b.NVQ_level from assessments a inner join modules m on a.module=m.id inner join batches b on b.id=a.batch and m.id="'.$_GET['modu'].'"';
 $output='
 <thead class="bg-primary text-light">
 <tr>

     <th scope="col">Name</th>
     <th scope="col">Module</th>
     <th scope="col">Batch</th>
     <th scope="col"></th>


 </tr>
</thead>';
echo $output;
 $result = mysqli_query($con, $sql);
 if (mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_assoc($result)) 
   {
       
      $output1= '
        <tr>
       <td>'. $row['names'] . " " . "<span class='badge badge-dark'>" . $row['type'] . "</span>". '</td>
       <td>'. $row['name']. '</td>
       <td>'. $row['NVQ_level'] . '-batch-' . $row['batch_no'] . "<span class='badge badge-dark'>" . $row['department_code'] . "</span>". '</td>
       
       <td>
         <div class="row">
         <div class="col"></div>
         <div class="col-auto">
         <div class="btn-group btn-sm" role="group" aria-label="Basic example">
       <a href="assessment_result.php?id='. $row['id']. '" class="btn btn-sm" style="background-color: #0097c4 ; color: #ffffff;" > see result </a>
     </div>
       </div>
       </div>
       </td>
   </tr>
   
   
   ';
   echo $output1;
   }
 } 
 
}
//course table
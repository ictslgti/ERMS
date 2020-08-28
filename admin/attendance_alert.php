<?php
include_once('../config.php');
include_once("../script.php");
include_once("../head.php");
$sql = 'select count(module) as taken_session,all_session,module,((count(module)/all_session))*100 as percentage,IF((((count(module)/all_session))*100) >=80, "PASS","FAIL")
 as status from attendance where student_id="2018ICTBIT01" and status="Fail" group by module;';
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        $module = $row['module'];
        $status=$row['status'];
       if ($status==='FAIL'){
        }echo"
            <div class='alert alert-danger' role='alert'>
            Your attetance is LOW $module
        </div>"; 
        }
        }
else{
    echo 'all are correct';
}
?>   
                                          
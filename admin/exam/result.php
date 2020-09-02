<?php
$title = ' ERMS | Result Sheet';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php 
    $index =null;
    $name= null;
    $nic=null;
    include_once('.././head.php');
    include_once('../../config.php');
    // include_once('../config.php');
    ?>
    <style>
    th{
    text-align: center;
    font-size:10px;
    background-color:black;
    color:white;
}
tr{
    text-align: center;
    font-size:16px;}


.si{
    margin-left:10%;
    margin-right:10%;
}
    </style>
</head>

<body>
    <main class='page-content pt-2'>
        <?php include_once('../nav.php');
        ?>
        <div id='overlay' class='overlay'></div>
        
            <!-- #1 Insert Your Content-->
            <div class='si'>
            <div class='row'>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3> <?php echo " $title" ?></h3>
                        </div>
                        <div class="card-body">

                            <!-- #1 Insert Your Content-->
                            <h1>
                            <div class="row">
                        <div class="col-sm">
                            <div class="border border-primary rounded text-center">
                            <h2>Student's Results Sheet</h2>
                            </div>
                        </div>
                    </div>
                    <br>
                <!-- 1st row end -->
                <div class='modal-body'>

                <form method='POST' action=''>
                    <div class='row '>
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>

                            <label for='exampleInputEmail1'>Exams type</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer0' required>
                                    <option value=''>Select Exams</option>
                                    <option value='1'>INSTITUTE</option>
                                    <option value='2'>TVEC</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInput'>Department</label>
                                </div>
                                 <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option value=''>Select Department</option>
                                    <option value='1'>Information Communication Technology</option>
                                    <option value='2'>Automotive & Technology</option>
                                    <option value='3'>Construction Technology</option>
                                    <option value='4'>Electrical Technology</option>
                                    <option value='5'>Food Technology</option>
                                    <option value='6'>Mechanical Technology</option>
                                </select>
                            </div>
                        </div>
                       
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInput'>Batch</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option selected>select batch...</option>
                                    <option value='1'>batch 1</option>
                                    <option value='2'>batch 2</option>
                                    <option value='3'>batch 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class='row '>

                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInput'>semester</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option value=''>Select Semester</option>
                                    <option value='1'>1 st semester</option>
                                    <option value='2'>2 nd semester</option>
                                    <option value='3'>3 rd semester</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInput'>NVQ Level</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option value=''>Select Level</option>
                                    <option value='1'>NVQ Level-4</option>
                                    <option value='2'>NVQ Level-5</option>
                                    <option value='3'>Bridging</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInput'>Type</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option value=''>Select Type</option>
                                    <option value='1'>THEORY</option>
                                    <option value='2'>PRACTICAL</option>
                                </select>
                            </div>
                        </div>-->
                    </div> 
                        <div class="table-responsive-sm">
                        <table class="table">
                        <thead class="table-bordered ">
                            <tr>
                            <th>Index no</th>
                            <th>Name</th>
                            <th>NIC</th>
                            <?php
                        $sql = 'select DISTINCT module_name from exam_result; ';
                        $result = mysqli_query($con,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo '<th>',$row['module_name'],'</th>';
                            }
                        }
                        else{
                            echo 'no rows';
                        }
                        ?> 
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo $index;?></td>
                            <td><?php echo $name;?></td>
                            <td><?php echo $nic;?></td>
                            
                            </tr>
                        </tbody>

                        </table>
                        </div>
                             <!-- button-->
                    
                        </div>
                    </div>
                </div>
            </div> <!-- #1 Insert Your Content" -->
        </div>
        </div>
    </main>

    <?php include_once("../../script.php");
    ?>
</body>

</html>
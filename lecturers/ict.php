<?php
$title = ' ERMS | SLGTI(page Title)';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php include_once('.././head.php');
//    include_once('config.php');
    ?>
    <?php include_once('../databases/config.php'); ?>
  
</head>

<body>
    <main class='page-content pt-2'>
        <?php include_once('nav.php');
        ?>
        <div id='overlay' class='overlay'></div>
        <div class='container-fluid p-5'>
            <!-- #1 Insert Your Content-->
            <!DOCTYPE html>
            <html>
            <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <style>
            /* .btn {
            background-color: green;
            border: none;
            color: white;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 20px;
            }
            .btn2 {
                background-color:blue;
                border: none;
                color: white;
                padding: 10px 20px;
                cursor: pointer;
                font-size: 20px;

            }

            /* Darker background on mouse-over */
            .btn:hover {
            background-color: green;
            }
            .btn2:hover{  
                background-color:blue;
            } */
            </style>
            </head>
            <body>

            <!-- <h1>EXCEL MARKS ENTRY FORM</h1>
            </body>
            

            <div class="card" style="width: 120rem;">
            
            <div class="card-body">
                <h5 class="card-title"> File to Import</h5>
               



                <?php
                //  require 'PHPExcel-1.8/classes/PHPExcel/IOFactory.php';
                // //mysql database
                // $servername = "localhost";
                // $username ="root";
                // $password ="";
                // $dbname ="erms_database";

                // if(isset($_POST['upload'])){
                //     $inputfilename = $_FILES['file']['tmp_name'];
                //     $exceldata = array();


                //     $con = mysqli_connect($servername,$username,$password,$dbname);

                //     if(!$con){
                //         die("connection failed:" . mysqli_connect_error());
                //     }

                //     try{
                //         $inputfiletype = PHPExcel_IOFactory::identify($inputfilename);
                //         $objReader = PHPExcel_IOFactory::createReader($inputfiletype);
                //         $objPHPExcel = $objReader->load($inputfilename);


                //     }
                //     catch(exception $e)
                //     {
                //         die('error loading file"'.pathinfo($inputfilename,PATHINFO_BASENAME).'": '.$e->getMessage());
                //     }
                    
                //     $sheet = $objPHPExcel->getSheet(0);
                //     $highestrow = $sheet->getHighestRow();
                //     $highestColumn = $sheet->getHighestColumn();

                //     for ($row = 1; $row <= $highestrow; $row++){
                        
                //         $rowData = $sheet->rageToArray('A' .$row . ':' .$highestColumn . $row, NULL, TRUE, FALSE);

                //         $sql ="INSERT INTO excel_marks(Student_id,Student_name,NIC_number,MOD01,MOD02,MOD03,MOD04,MOD05,MOD06,MOD07,MOD08,Percentage,Status)
                //                VALUES('".$rowData[0][0]."','".$rowData[0][1]."','".$rowData[0][2]."','".$rowData[0][3]."','".$rowData[0][4]."','".$rowData[0][5]."','".$rowData[0][6]."','".$rowData[0][7]."')";
                        
                //         if(mysqli_query($con,$sql)){
                //             $exceldata[] = $rowData[0];

                //         }
                //         else{
                //             echo"Error:".$sql."<br>".mysqli_error($conn);
                //         }


                //     }
                    

                //     echo"<table border='1'>";
                //     foreach($exceldata as $excel_marks_entry => $excelraw)
                //     {
                //         echo"<tr>";
                //         foreach($excelraw as $excelcolumn)
                //         {
                //             echo"<td>".$excelcolumn."</td>";
                //         }
                //         echo"</tr>";
                //     }
                //     echo"</table>";

                //     mysqli_close($con);
                // }
                ?> 
                <html>
                <head>
                <title>Import Excel</title>
                </head>
                <body>
                       <form action="" method="POST"
                       enctype="multipart/form-data">

                    <input type="file" name="file">

                    <input type="submit" name='upload' value ="upload"> -->
                </form>
                </body>
                </html>
                <br>
                <br>


                 

               
                <html>  
                <head>  
                <title>Export MySQL data to Excel </title> 
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                
                <link rel="stylesheet" type="text/css" href="style.css"> 
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
                </head>  
                <body> 
               
                <?php
                $connect = mysqli_connect("localhost", "root", "", "erms_database");
                $sql = "select * from excel_marks";  
                $result = mysqli_query($connect, $sql);
                ?> 
                <div class="container">  
                <br />  
                <br />  
                <br />  
                <div class="table-responsive">  
                    <h2 align="center">Information Communication Technology</h2><br /> 
                    <table class="table table-bordered">
                    <tr>  
                                        <th>Student_id</th>  
                                        <th>Student_name</th>  
                                        <th>NIC_number</th>  
                                       <th>module</th>
                                       <th>batch</th>
                                       <th>Status</th>
                                       <th>Percentage</th>
                                    </tr>
                    <?php

                   $sql = "SELECT `student_assessments`.`student_id`,`student`.`name_with_initials`,`student_assessments`.`marks`,
                   modules.code,student.nic,student_enroll.batch_no FROM `student_assessments` INNER JOIN student ON 
                   student_assessments.student_id=student.id INNER JOIN assessments ON student_assessments.assessment_id=assessments.id 
                   INNER JOIN modules ON assessments.module=modules.id
                   INNER JOIN student_enroll ON student_enroll.id=student_assessments.student_id";

                   $result = mysqli_query($con, $sql);
                   while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    
<tr>  
                                        <td><?php echo $row['student_id']; ?></td>
                                        <td><?php echo $row['name_with_initials']; ?></td>
                                        <td><?php echo $row['nic']; ?></td>
                                       <td><?php echo $row['code']; ?></td>
                                       <td><?php echo $row['batch_no']; ?></td>
                                       <td><?php  
                                       if ($row['marks'] > 50) {
                                                     echo "Pass";
                                                 } else {
                                                 echo "Fail";
                                            } ?></td>
                                       <td><?php echo $row['marks'].'%'; ?></td>
                                    </tr>
                                    <?php
                   }
                                    ?>
                    </table>
                    <br />
                    <form method="post" action="export.php">
                    <input type="submit" name="export" class="btn btn-success" value="Export" />
                    </form>
                </div>  
                </div>  
                </body>  
                </html>
                            
                <!-- <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button> -->
                </div>
            </div> 
                </html>
                
           
            


                            <!-- #1Insert Your Content-->
                            
            </div> <!-- #1 Insert Your Content" -->
        </div>
    </main>

    <?php include_once("../script.php");
    ?>
</body>

</html>
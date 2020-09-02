<?php
include_once('config.php');

$sql = "CREATE TABLE attendance 
( 
    attendance_id INT(11)PRIMARY KEY,UNSIGNED AUTO_INCREMENT, 
    student_id VARCHAR(20) NOT NULL,  FOREIGN KEY (stident_id) REFERENCES tbl_student (student_id),
    status EMUE('Presnt','Absent') NOT NULL,
    attendance_date DATE&TIME NOT NULL, 
    lecture_id VARCHAR(20) NOT NULL, FOREIGN KEY (lecture_id) REFERENCES tbl_lecture (lecture_id),

)";

$sql = "CREATE TABLE batch 
( 
    batch_id INT(11)PRIMARY KEY,UNSIGNED AUTO_INCREMENT,
    batch VARCHAR(20) NOT NULL,  
)";

$sql = "CREATE TABLE lecturer 
( 
    lecturer_id INT(11)PRIMARY KEY,
    lecturer_name VARCHAR(150) NOT NULL,  

)";
$sql = "CREATE TABLE student
( 
    student_id VARCHAR(20)PRIMARY KEY,
    student_name VARCHAR(150) NOT NULL,  
	student_batch VARCHAR(20) NOT NULL,
)";

if (mysqli_query($con, $sql)) {
    echo 'Table was created successfully';
} else {
    echo 'Error creating table: ' . mysqli_error($con);
}
 
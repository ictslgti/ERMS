<?php
include_once('config.php');

$sql = "CREATE TABLE attendance 
( 
    lecturer_id VARCHAR(20)PRIMARY KEY,-- UNSIGNED AUTO_INCREMENT PRIMARY KEY , 
    student_id VARCHAR(20) NOT NULL,  --FOREIGN KEY (module) REFERENCES module(module_name),
    module VARCHAR(50) NOT NULL,
    status INT NOT NULL,
    academic_year INT NOT NULL,
    date&time DATE&TIME NOT NULL, 
    department VARCHAR(20) NOT NULL,
    level INT NOT NULL,
    SEMESTER VARCHAR(15) NOT NULL,
    taken_session INT NOT NULL,
    all_session INT NOT NULL,
    batch INT NUT NULL
)";

if (mysqli_query($con, $sql)) {
    echo 'Table was created successfully';
} else {
    echo 'Error creating table: ' . mysqli_error($con);
}

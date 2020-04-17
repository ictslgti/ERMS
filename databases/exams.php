<?php
include_once('config.php');

$sql = "CREATE TABLE exams 
( 
    exam_id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY , 
    exam VARCHAR(8) NOT NULL, 
    dept_name VARCHAR(60) NOT NULL FOREIGN KEY (dept_name) REFERENCES departments(department_name), 
    course VARCHAR(30) NOT NULL FOREIGN KEY (course) REFERENCES courses(course_name), 
    semester VARCHAR(15) NOT NULL FOREIGN KEY (semester) REFERENCES module(semester_id),
    module VARCHAR(8) NOT NULL FOREIGN KEY (module) REFERENCES module(module_name),
    exam_type VARCHAR(10) NOT NULL)
";
if (mysqli_query($con, $sql)) {
    echo 'Table was created successfully';
} else {
    echo 'Error creating table: ' . mysqli_error($con);
}

<?php 
include_once( 'config.php' );

$sql = "CREATE TABLE student
( 
id varchar (15) NOT NULL PRIMARY KEY,
title varchar(5),
full_name varchar(60),
name_with_initials varchar(30),
gender varchar(10),
civil_status varchar(10),
email varchar(50),
nic varchar(13),
date_of_birth date,
phone_no int(10),
address varchar(50),
divisional_secretariat varchar(20),
district varchar(20),
province varchar(15),
zip_code varchar(10),
blood_group varchar(5),
guardian_name varchar(30),
guardian_address varchar(100),
guardian_phone_no int(10),
guardian_relationship varchar(20) )
";

if ( mysqli_query( $con, $sql ) ) {
    echo 'Table student created successfully';
} else {
    echo 'Error creating table: ' . mysqli_error( $con );
}


$sql = "CREATE TABLE student_enroll
( 
id varchar (15) NOT NULL PRIMARY KEY,
course_id varchar(3) NOT NULL ,
batch_no  varchar(15) NOT NULL ,
academic_year varchar(10) NOT NULL ,
course_mode varchar(10),
student_status varchar(15) ,
enroll_date date  ,
exit_date date  )
";

if ( mysqli_query( $con, $sql ) ) {
    echo 'Table student_enroll created successfully';
} else {
    echo 'Error creating table: ' . mysqli_error( $con );
}

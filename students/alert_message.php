<?php
$title = ' ERMS | SLGTI( Attendance)';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>

<?php
include_once('../config.php');
include_once("../script.php");
include_once("../head.php");
// $sql = 'select count(code) as taken_session,code,((count(code)/all_session))*100 as percentage,IF((((count(code)/all_session))*100) >=80, "PASS","FAIL")
//  as status from attendance where student_id="2018ICTBIT01" and status="Fail" group by code;';

$sql = "SELECT student_attendance.student_id,student.name_with_initials,student_attendance.status,
 attendance.code
 FROM student_enroll INNER JOIN student ON student_enroll.id=student.id INNER JOIN 
 student_attendance ON student_enroll.id=student_attendance.student_id INNER JOIN attendance on
  attendance.attendance_id=student_attendance.id where student_attendance.student_id='2018slgtibit05' GROUP BY student_enroll.id";

$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $module = $row['code'];
        $status = $row['status'];
        // $status = number_format(($row['Take'] / $row['Total']) * 100, 2);
        // echo $status;
        // $status=$row['status'];
        if ($status == 'Absent') {
            echo "<div class='alert alert-danger' role='alert'>
            Yesterday you not come : $module
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
        </div>";
        } else {
        //     echo "<div class='alert alert-success' role='alert'>
        //     Your attetance is Correct
        //     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        //         <span aria-hidden='true'>&times;</span>
        //         </button>
        // </div>";
        }
    }
}
?>      
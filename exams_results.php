<?php
$title = 'Dashboard | Online Examination Result Management System | SLGTI';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang = 'en'>

<head>
<?php include_once( './head.php' );
?>
</head>

<body>
<div class = 'page-wrapper toggled bg2 border-radius-on light-theme'>
<nav id = 'sidebar' class = 'sidebar-wrapper'>
<?php include_once( 'nav.php' );
?>
</nav>
<main class = 'page-content pt-2'>
<div id = 'overlay' class = 'overlay'></div>
<div class = 'container-fluid p-2'>
<!-- #1 Insert Your Content-->
<section class = 'mb-40 pt-2 mx-auto'>
<div class = 'container-fluid p-2 '>

<div class = 'row'>
<div class = 'col-lg-4 col-md-4 col-sm-4'>
<h3 class = 'text-primary'> Welcome </h3>
</div>
<div class = 'col-lg-4 col-md-4 col-sm-4'>
<div class = 'input-group' id = 'serching'>

<input type = 'text' class = 'form-control primary-input border border-primary border-top-0 border-left-0 border-right-0' placeholder = 'Search'>
</div>
</div>
<div class = 'col-lg-2 col-md-2 col-sm-2'></div>
<div class = 'col-lg-2 col-md-2 col-sm-2'>
<div class = 'col-sm '> <a href = 'add_exams.php'>
<div class = 'text-primary '>
<svg class = 'bi bi-plus-circle-fill' width = '3em' height = '3em' viewBox = '0 0 16 16' fill = 'currentColor' xmlns = 'http://www.w3.org/2000/svg'>
<path fill-rule = 'evenodd' d = 'M16 8A8 8 0 110 8a8 8 0 0116 0zM8.5 4a.5.5 0 00-1 0v3.5H4a.5.5 0 000 1h3.5V12a.5.5 0 001 0V8.5H12a.5.5 0 000-1H8.5V4z' clip-rule = 'evenodd'/>
</svg>

Add Exams</div>
</div></a>
</div>

</div>
<br>
<div class = 'row'>
<div class = 'col-lg-12'>
</div>
</div>
<div class = 'row'>

<div class = 'col-lg-3 col-md-3 col-sm-3 shadow-lg p-3 mb-5 bg-white rounded'>
<a href = '#' class = 'd-block'>
<div class = 'white-box single-summery'>
<div class = 'd-flex justify-content-between'>
<div>
<h3>Student</h3>
<p class = 'mb-0'>Total Students</p>
</div>
<h1 class = 'primary'>
75
</h1>
</div>
</div>
</a>
</div>

<div class = 'col-lg-3 col-md-3 col-sm-3 shadow-lg p-3 mb-5 bg-white rounded'>
<a href = '#' class = 'd-block'>
<div class = 'white-box single-summery'>
<div class = 'd-flex justify-content-between'>
<div>
<h3>Lecturer</h3>
<p class = 'mb-0'>Total Lecturer</p>
</div>
<h1 class = 'primary'>
3
</h1>
</div>
</div>
</a>
</div>

<div class = 'col-lg-3 col-md-3 col-sm-3 shadow-lg p-3 mb-5 bg-white rounded'>
<a href = '#' class = 'd-block'>
<div class = 'white-box single-summery'>
<div class = 'd-flex justify-content-between'>
<div>
<h3>Courses</h3>
<p class = 'mb-0'>Total Courses</p>
</div>
<h1 class = 'primary'>
21
</h1>
</div>
</div>
</a>
</div>

<div class = 'col-lg-3 col-md-3 col-sm-3 shadow-lg p-3 mb-5 bg-white rounded'>
<a href = '#' class = 'd-block'>
<div class = 'white-box single-summery'>
<div class = 'd-flex justify-content-between'>
<div>
<h3>Staffs</h3>
<p class = 'mb-0'>Total Staffs</p>
</div>
<h1 class = 'primary'>
1
</h1>
</div>
</div>
</a>
</div>
</div>
</div>
</section>
<!-- Heding -->
<div class = 'form-group col-md-12 col-sm '>
<div>
<div class = 'text-wrap text-center text-primary'>
<h4>UPDATE STUDENTS RESULTS</h4>
</div>
</div>
</div>

<!-- new exams add form-->
<form method = 'POST' action = ''>
<div class = 'row'>
<!-- select Exams Type -->
<div class = 'col-sm mb-3'>
<div class = 'input-group mb-3'>
<div class = 'input-group-prepend '>
<label class = 'input-group-text' for = 'inputGroupSelect01'>Exams Type</label>
</div>
<select class = 'custom-select' id = 'inputGroupSelect01' id = 'validationServer01' required>
<option value = ''>Select Exams</option>
<option value = '1'>INSTITUTE</option>
<option value = '2'>TVEC</option>
</select>
</div>
</div>
<!-- select department -->
<div class = 'col-sm'>
<div class = 'input-group mb-3 '>
<div class = 'input-group-prepend'>
<label class = 'input-group-text' for = 'inputGroupSelect01'>Department</label>
</div>
<select class = 'custom-select' id = 'inputGroupSelect01' id = 'validationServer02' required>
<option value = ''>Select Department</option>
<option value = '1'>Information Communication Technology</option>
<option value = '2'>Automotive & Technology</option>
<option value = '3'>Construction Technology</option>
<option value = '4'>Electrical Technology</option>
<option value = '5'>Food Technology</option>
<option value = '6'>Mechanical Technology</option>
</select>
</div>
</div>

<!-- Select Course -->
<div class = 'col-sm'>
<div class = 'input-group mb-3'>
<div class = 'input-group-prepend'>
<label class = 'input-group-text' for = 'inputGroupSelect01'>Course</label>
</div>
<select class = 'custom-select' id = 'inputGroupSelect01' id = 'validationServer03' required>
<option value = ''>Select Course</option>
<option value = '1'>NVQ LEVEL-4</option>
<option value = '2'>BRIDGING LEVEL-5</option>
<option value = '3'>NVQ LEVEL-5</option>
<option value = '4'>NVQ LEVEL-6</option>
</select>
</div>
</div>

</div>
<br>
<!--, , , , , , , , , , , , , , , , , , , , , , ............................, , , , , , , , , , , , , , , , , , ,  -->
<div class = 'row'>
<!-- Select Semester -->
<div class = 'col-sm'>
<div class = 'input-group mb-3'>
<div class = 'input-group-prepend'>
<label class = 'input-group-text' for = 'inputGroupSelect01'>Semester</label>
</div>
<select class = 'custom-select' id = 'inputGroupSelect01' id = 'validationServer04' required>
<option value = ''>Select Semester</option>
<option value = '1'>1 st semester</option>
<option value = '2'>2 nd semester</option>
<option value = '3'>3 rd semester</option>

</select>
</div>
</div>
<!-- select module -->
<div class = 'col-sm'>
<div class = 'input-group mb-3 '>
<div class = 'input-group-prepend '>
<label class = 'input-group-text' for = 'inputGroupSelect01'>Module</label>
</div>
<select class = 'custom-select' id = 'inputGroupSelect01' id = 'validationServer05' required>
<option value = ''>Select Module</option>
<option value = '1'>EMP-MO1</option>
<option value = '2'>EMP-MO2</option>
<option value = '3'>EMP-MO3</option>
<option value = '4'>MO4</option>
<option value = '5'>MO5</option>
<option value = '6'>MO6</option>
<option value = '7'>MO7</option>
<option value = '8'>MO8</option>
</select>
</div>
</div>
<div class = 'col-sm'>
<div class = 'input-group mb-3 '>
<div class = 'input-group-prepend '>
<label class = 'input-group-text' for = 'inputGroupSelect01'>Type</label>
</div>
<select class = 'custom-select' id = 'inputGroupSelect01' id = 'validationServer06' required>
<option value = ''>Select Type</option>
<option value = '1'>THEORY</option>
<option value = '2'>PRACTICAL</option>
</select>
</div>
</div>

</div>
<br>
<div class = 'row'>
<div class = 'input-group mb-3 '>
<div class = 'col-5'></div>
<div class = 'col-6'>

</div>
<div class = 'col-2'><button type = 'submit' class = 'btn btn-primary'>SEARCH</button></div>
</div>
<div>
</form>

<table class = 'table mb-3 p-3'>
<thead>
<tr>
<th scope = 'col'>NO</th>
<th scope = 'col'>REG NO</th>
<th scope = 'col'>INDEX NO</th>
<th scope = 'col'>STUDENTS NAME</th>
<th scope = 'col'>SEMESTER</th>
<th scope = 'col'>MODULE</th>
<th scope = 'col'>TYPE</th>
<th scope = 'col'>ATTEMPT</th>
<th scope = 'col'>MARKS</th>
<th scope = 'col'>STATUS</th>
</tr>
</thead>
<tbody>
<tr>
<th scope = 'row'>1</th>
<td>2018ICTBIT01</th>
<td>2018ICTBIT01</td>
<td>N Nufail</td>
<td>1 st Semester</td>
<td>MO-7</td>
<td>PRACTICAL</td>
<td>
<select class = 'custom-select' id = 'inputGroupSelect01'>
<option>Select</option>
<option value = '1' selected>1 st</option>
<option value = '2'>2 nd</option>
<option value = '3'>3 rd</option>
</td>
<td><input type = 'text' class = 'form-control' placeholder = 'Marks' aria-label = 'marks'
aria-describedby = 'addon-wrapping'> </td>
<td><span class = 'badge badge-success'>PASS</span></td>

</tr>
<tr>
<th scope = 'row'>2</th>
<td>2018ICTBIT02</th>
<td>2018ICTBIT02</td>
<td>S Sumana</td>
<td>1 st Semester</td>
<td>MO-7</td>
<td>PRACTICAL</td>
<td>
<select class = 'custom-select' id = 'inputGroupSelect01'>
<option>Select</option>
<option value = '1' selected>1 st</option>
<option value = '2'>2 nd</option>
<option value = '3'>3 rd</option>
</td>
<td><input type = 'text' class = 'form-control' placeholder = 'Marks' aria-label = 'marks'
aria-describedby = 'addon-wrapping'> </td>
<td><span class = 'badge badge-success'>PASS</span></td>
</tr>
<tr>
<th scope = 'row'>3</th>
<td>2018ICTBIT05</th>
<td>2018ICTBIT05</td>
<td>P Kishok</td>
<td>1 st Semester</td>
<td>MO-7</td>
<td>PRACTICAL</td>
<td>
<select class = 'custom-select' id = 'inputGroupSelect01'>
<option>Select</option>
<option value = '1' selected>1 st</option>
<option value = '2'>2 nd</option>
<option value = '3'>3 rd</option>
</td>
<td><input type = 'text' class = 'form-control' placeholder = 'Marks' aria-label = 'marks'
aria-describedby = 'addon-wrapping'> </td>
<td><span class = 'badge badge-success'>PASS</span></td>
</tr>
<tr>
<th scope = 'row'>4</th>
<td>2018ICTBIT08</th>
<td>2018ICTBIT08</td>
<td>N Jawsi</td>
<td>1 st Semester</td>
<td>MO-7</td>
<td>PRACTICAL</td>
<td>
<select class = 'custom-select' id = 'inputGroupSelect01'>
<option>Select</option>
<option value = '1' selected>1 st</option>
<option value = '2'>2 nd</option>
<option value = '3'>3 rd</option>
</td>
<td><input type = 'text' class = 'form-control' placeholder = 'Marks' aria-label = 'marks'
aria-describedby = 'addon-wrapping'> </td>
<td><span class = 'badge badge-success'>PASS</span></td>
</tr>
<tr>
<th scope = 'row'>5</th>
<td>2018ICTBIT09</th>
<td>2018ICTBIT09</td>
<td>M Regy Kodvin </td>
<td>1 st Semester</td>
<td>MO-7</td>
<td>PRACTICAL</td>
<td>
<select class = 'custom-select' id = 'inputGroupSelect01'>
<option>Select</option>
<option value = '1' selected>1 st</option>
<option value = '2'>2 nd</option>
<option value = '3'>3 rd</option>
</td>
<td><input type = 'text' class = 'form-control' placeholder = 'Marks' aria-label = 'marks'
aria-describedby = 'addon-wrapping'> </td>
<td><span class = 'badge badge-success'>PASS</span></td>
</tr>
<tr>
<th scope = 'row'>6</th>
<td>2018ICTBIT10</th>
<td>2018ICTBIT10</td>
<td>N Kavin</td>
<td>1 st Semester</td>
<td>MO-7</td>
<td>PRACTICAL</td>
<td>
<select class = 'custom-select' id = 'inputGroupSelect01'>
<option>Select</option>
<option value = '1' selected>1 st</option>
<option value = '2'>2 nd</option>
<option value = '3'>3 rd</option>
</td>
<td><input type = 'text' class = 'form-control' placeholder = 'Marks 99' aria-label = 'marks'
aria-describedby = 'addon-wrapping'> </td>
<td><span class = 'badge badge-success'>PASS</span></td>
</tr>
<tr>
<th scope = 'row'>7</th>
<td>2018ICTBIT14</th>
<td>2018ICTBIT14</td>
<td>M S Eashath</td>
<td>1 st Semester</td>
<td>MO-7</td>
<td>PRACTICAL</td>
<td>
<select class = 'custom-select' id = 'inputGroupSelect01'>
<option>Select</option>
<option value = '1'>1 st</option>
<option value = '2' selected>2 nd</option>
<option value = '3'>3 rd</option>
</td>
<td>
<input type = 'text' class = 'form-control' placeholder = 'Marks 40 ' aria-label = 'marks'
aria-describedby = 'addon-wrapping'> </td>
<td><span class = 'badge badge-danger'>FAIL</span></td>
</tr>
<tr>
<th scope = 'row'>8</th>
<td>2018ICTBIT02</th>
<td>2018ICTBIT02</td>
<td>S Sathursan</td>
<td>2 nd Semester</td>
<td>MO-7</td>
<td>PRACTICAL</td>
<td>
<select class = 'custom-select' id = 'inputGroupSelect01'>
<option>Select</option>
<option value = '1'>1 st</option>
<option value = '2' selected>2 nd</option>
<option value = '3'>3 rd</option>
</td>
<td><input type = 'text' class = 'form-control' placeholder = 'Marks' aria-label = 'marks'
aria-describedby = 'addon-wrapping'> </td>
<td><span class = 'badge badge-success'>PASS</span></td>
</tr>
</tbody>
</table>

<!-- #col3 -->

<div class = 'row '>
<div class = 'input-group mb-3 p-3 '>
<div class = 'col-2'>
<a class = 'btn btn-primary' href = "exams_dashbord.php" role = 'button'>BACK</a>
<!-- <button type = 'button' class = 'btn btn-primary'>BACK</button> -->
</div>
<div class = 'col-8 text-wrap text-center text-primary'>

</div>
<div class = 'col-2'>
<button type = 'button' class = 'btn btn-danger'>CANCEL</button>

<!-- <button type = 'button' class = 'btn btn-primary'>SAVE</button> -->
<!-- Button trigger modal -->
<button type = 'submit' class = 'btn btn-primary' data-toggle = 'modal'
data-target = '#exampleModal'>
SAVE
</button>

<!-- Modal -->
<!-- <div class = 'modal fade' id = 'exampleModal' tabindex = '-1' role = 'dialog'
aria-labelledby = 'exampleModalLabel' aria-hidden = 'true'>
<div class = 'modal-dialog' role = 'document'>
<div class = 'modal-content'>
<div class = 'modal-header'>
<h5 class = 'modal-title' id = 'exampleModalLabel'>SAVE</h5>
<button type = 'submit' class = 'close' data-dismiss = 'modal' aria-label = 'Close'>
<span aria-hidden = 'true'>&times;
</span>
</button>
</div>
<div class = 'modal-body'>
Are You Sure To Save
</div>
<div class = 'modal-footer'>
<button type = 'button' class = 'btn btn-secondary'
data-dismiss = 'modal'>Close</button>
<button type = 'submit' class = 'btn btn-primary'>Save changes</button>
</div>
</div>
</div>
</div>
</div>-->
</div>
</div>
</div>

</div>

<!-- #1 Insert Your Content" -->
    </div>
    </main>
    </div>
    <?php include_once("script.php" );
?>
</body>

</html>
<?php
$title = "Dashboard | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <nav id="sidebar" class="sidebar-wrapper">
            <?php include_once("nav.php"); ?>
        </nav>
        <main class="page-content pt-2">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-2">
                <!-- #1 Insert Your Content-->
                <div class="row">
                    <div class="form-group col-md-12">
                    <div class="d-flex flex-row bd-highlight mb-3 bg-primary text-white">
                    <!-- Resul Over View Btn -->
                    <div class="btn-group">
  <button type="button" class="btn btn-primary">RESULT OVERVIEW</button>
  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <!-- <span class="sr-only">Toggle Dropdown</span> -->
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">CHART VIEW RESULT</a>
    <a class="dropdown-item" href="#">DEPARTMENT VICE</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Others</a>
  </div>
</div>
                         <!-- Exams Add Btn -->
<div class="btn-group">
  <button type="button" class="btn btn-primary">ADD EXAMS</button>
  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <!-- <span class="sr-only">Toggle Dropdown</span> -->
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">INSTITUTE EXAMS</a>
    <a class="dropdown-item" href="#">TVEC EXAMS</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Others</a>
  </div>
</div>
                                                  <!-- Result Update  Btn -->
<div class="btn-group">
  <button type="button" class="btn btn-primary">RESULT UPDATE</button>
  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
      <a class="dropdown-item" href="update_exams_result.php">UPDATE RSULT</a>
    <!-- <a class="dropdown-item" href="#">INSTITUTE EXAMS</a>
    <a class="dropdown-item" href="#">TVEC EXAMS</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Others</a> -->
  </div>
</div>
                         </div>
                     </div>
                </div>

                <!-- Heding -->
                <div class="form-group col-md-12 ">
                    <div >
                     <div class="text-wrap text-center text-primary" >
                     <h4 >UPDATE STUDENTS RESULTS</h4>
                </div>
                    </div>
                    </div>

                <!-- new exams add form-->
                 <form method="POST" action="">
                 <div class="row">
                 <!-- select Exams Type -->
                 <div class="col-sm">
                   <div class="input-group mb-3 ">
                     <div class="input-group-prepend ">
                     <label class="input-group-text" for="inputGroupSelect01">Exams Type</label>
                       </div>
                       <select class="custom-select" id="inputGroupSelect01" >
                       <option selected>Select Exams</option>
                        <option value="1">INSTITUTE</option>
                         <option value="2">TVEC</option>
                      </select>
                     </div>
                   </div>
                     <!-- select department -->
                   <div class="col-sm">
                   <div class="input-group mb-3 ">
                     <div class="input-group-prepend">
                     <label class="input-group-text" for="inputGroupSelect01">Department</label>
                       </div>
                       <select class="custom-select" id="inputGroupSelect01" >
                       <option selected>Select Department</option>
                        <option value="1">Information Communication Technology</option>
                         <option value="2">Automotive & Technology</option>
                        <option value="3">Construction Technology</option>
                        <option value="4">Electrical Technology</option>
                        <option value="5">Food Technology</option>
                        <option value="6">Mechanical Technology</option>
                      </select>
                     </div>
                      </div>

                      <!-- Select Course -->
                   <div class="col-sm">
                   <div class="input-group mb-3">
                     <div class="input-group-prepend">
                     <label class="input-group-text" for="inputGroupSelect01">Course</label>
                       </div>
                       <select class="custom-select" id="inputGroupSelect01">
                       <option selected>Select Course</option>
                        <option value="1">NVQ LEVEL-4</option>
                         <option value="2">BRIDGING LEVEL-5</option>
                        <option value="3">NVQ LEVEL-5</option>
                        <option value="4">NVQ LEVEL-6</option>
                      </select>
                     </div>
                      </div>
                     
                      </div>
                    <br>
                     <!--,,,,,,,,,,,,,,,,,,,,,,............................,,,,,,,,,,,,,,,,,,,  -->
                      <div class="row">
                       <!-- Select Semester -->
                       <div class="col-sm">
                   <div class="input-group mb-3">
                     <div class="input-group-prepend">
                     <label class="input-group-text" for="inputGroupSelect01">Semester</label>
                       </div>
                       <select class="custom-select" id="inputGroupSelect01">
                       <option selected>Select Semester</option>
                        <option value="1">1 st semester</option>
                         <option value="2">2 nd semester</option>
                        <option value="3">3 rd semester</option>

                      </select>
                     </div>
                      </div>
  <!-- select module -->
  <div class="col-sm">
                   <div class="input-group mb-3 ">
                     <div class="input-group-prepend ">
                     <label class="input-group-text" for="inputGroupSelect01">Module</label>
                       </div>
                       <select class="custom-select" id="inputGroupSelect01">
                       <option selected>Select Module</option>
                        <option value="1">EMP-MO1</option>
                         <option value="2">EMP-MO2</option>
                        <option value="3">EMP-MO3</option>
                        <option value="4">MO4</option>
                        <option value="5">MO5</option>
                         <option value="6">MO6</option>
                        <option value="7">MO7</option>
                        <option value="8">MO8</option>
                      </select>
                     </div>
                   </div>
<div class="col-sm">
                   <div class="input-group mb-3 ">
                     <div class="input-group-prepend ">
                     <label class="input-group-text" for="inputGroupSelect01">Type</label>
                       </div>
                       <select class="custom-select" id="inputGroupSelect01">
                       <option selected>Select Type</option>
                        <option value="1">THEORY</option>
                        <option value="2">PRACTICAL</option>
                      </select>
                     </div>
                   </div>

                  </div>
                  <br>
                    

                  
                <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">REG NO</th>
      <th scope="col">INDEX NO</th>
      <th scope="col">STUDENTS NAME</th>
      <th scope="col">SEMESTER</th>
      <th scope="col">MODULE</th>
      <th scope="col">TYPE</th>
      <th scope="col" >ATTEMPT</th>
      <th scope="col">MARKS</th>
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>2018ICTBIT01</th>
      <td>2018ICTBIT01</td>
      <td>N Nufail</td>
      <td>1 st Semester</td>
      <td>MO-7</td>
      <td>PRACTICAL</td>
      <td>
                       <select class="custom-select" id="inputGroupSelect01">
                       <option >Select</option>
                        <option value="1" selected>1 st</option>
                         <option value="2">2 nd</option>
                         <option value="3">3 rd</option>
      </td>
      <td ><input type="text" class="form-control" placeholder="Marks" aria-label="marks" aria-describedby="addon-wrapping"> </td>
      <td><span class="badge badge-success">PASS</span></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>2018ICTBIT02</th>
      <td>2018ICTBIT02</td>
      <td>S Sumana</td>
      <td>1 st Semester</td>
      <td>MO-7</td>
      <td>PRACTICAL</td>
      <td>
                       <select class="custom-select" id="inputGroupSelect01">
                       <option >Select</option>
                        <option value="1" selected>1 st</option>
                         <option value="2">2 nd</option>
                         <option value="3">3 rd</option>
      </td>
      <td ><input type="text" class="form-control" placeholder="Marks" aria-label="marks" aria-describedby="addon-wrapping"> </td>
      <td><span class="badge badge-success">PASS</span></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>2018ICTBIT05</th>
      <td>2018ICTBIT05</td>
      <td>P Kishok</td>
      <td>1 st Semester</td>
      <td>MO-7</td>
      <td>PRACTICAL</td>
      <td>
                       <select class="custom-select" id="inputGroupSelect01">
                       <option >Select</option>
                        <option value="1" selected>1 st</option>
                         <option value="2">2 nd</option>
                         <option value="3">3 rd</option>
      </td>
      <td ><input type="text" class="form-control" placeholder="Marks" aria-label="marks" aria-describedby="addon-wrapping"> </td>
      <td><span class="badge badge-success">PASS</span></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>2018ICTBIT08</th>
      <td>2018ICTBIT08</td>
      <td>N Jawsi</td>
      <td>1 st Semester</td>
      <td>MO-7</td>
      <td>PRACTICAL</td>
      <td>
                       <select class="custom-select" id="inputGroupSelect01">
                       <option >Select</option>
                        <option value="1" selected>1 st</option>
                         <option value="2">2 nd</option>
                         <option value="3">3 rd</option>
      </td>
      <td ><input type="text" class="form-control" placeholder="Marks" aria-label="marks" aria-describedby="addon-wrapping"> </td>
      <td><span class="badge badge-success">PASS</span></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>2018ICTBIT09</th>
      <td>2018ICTBIT09</td>
      <td>M R Kodvin</td>
      <td>1 st Semester</td>
      <td>MO-7</td>
      <td>PRACTICAL</td>
      <td>
                       <select class="custom-select" id="inputGroupSelect01">
                       <option >Select</option>
                        <option value="1" selected>1 st</option>
                         <option value="2">2 nd</option>
                         <option value="3">3 rd</option>
      </td>
      <td ><input type="text" class="form-control" placeholder="Marks" aria-label="marks" aria-describedby="addon-wrapping"> </td>
      <td><span class="badge badge-success">PASS</span></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>2018ICTBIT10</th>
      <td>2018ICTBIT10</td>
      <td>N Kavin</td>
      <td>1 st Semester</td>
      <td>MO-7</td>
      <td>PRACTICAL</td>
      <td>
                       <select class="custom-select" id="inputGroupSelect01">
                       <option >Select</option>
                        <option value="1" selected>1 st</option>
                         <option value="2">2 nd</option>
                         <option value="3">3 rd</option>
      </td>
      <td ><input type="text" class="form-control" placeholder="Marks 99" aria-label="marks" aria-describedby="addon-wrapping"> </td>
      <td><span class="badge badge-success">PASS</span></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>2018ICTBIT14</th>
      <td>2018ICTBIT14</td>
      <td>M S Eashath</td>
      <td>1 st Semester</td>
      <td>MO-7</td>
      <td>PRACTICAL</td>
      <td>
                       <select class="custom-select" id="inputGroupSelect01">
                       <option >Select</option>
                        <option value="1" >1 st</option>
                         <option value="2" selected>2 nd</option>
                         <option value="3">3 rd</option>
      </td>
      <td >
      <input type="text" class="form-control" placeholder="Marks 40 "  aria-label="marks" aria-describedby="addon-wrapping"> </td>
      <td><span class="badge badge-danger">FAIL</span></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>2018ICTBIT02</th>
      <td>2018ICTBIT02</td>
      <td>S Sathursan</td>
      <td>2 nd Semester</td>
      <td>MO-7</td>
      <td>PRACTICAL</td>
      <td>
                       <select class="custom-select" id="inputGroupSelect01">
                       <option >Select</option>
                        <option value="1" >1 st</option>
                         <option value="2" selected>2 nd</option>
                         <option value="3">3 rd</option>
      </td>
      <td ><input type="text" class="form-control" placeholder="Marks" aria-label="marks" aria-describedby="addon-wrapping"> </td>
      <td><span class="badge badge-success">PASS</span></td>
    </tr>
  </tbody>
</table>

                      <!-- #col3 -->

                      
                  <div class="row">
                      <div class="col-2">
                      <a class="btn btn-primary" href=""add_exams.php role="button">BACK</a>
                      <!-- <button type="button" class="btn btn-primary">BACK</button> -->
                      </div>
                      <div class="col-8 text-wrap text-center text-primary">
                     
                      </div>
                        <div class="col-2">
                        <button type="button" class="btn btn-danger">CANCEL</button>
                        


                        <!-- <button type="button" class="btn btn-primary">SAVE</button> -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
SAVE
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SAVE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure To Save
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                        </div>
                         </div>
                </div>
                      </div>
                  <!-- #row2 -->
                  
                   </form>
                   
            </div>
            
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>

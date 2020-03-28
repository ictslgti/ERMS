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
    <!-- <span class="sr-only">Toggle Dropdown</span> -->
  </button>
  <div class="dropdown-menu">
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
                     <h4 >ADD NEW INSTITUTE EXAMS</h4>
                </div>
                    </div>
                    </div>

                <!-- new exams add form-->
                 <form method="POST" action="">
                 <div class="row">
                     <!-- select department -->
                   <div class="col-sm">
                   <div class="input-group mb-3 ">
                     <div class="input-group-prepend">
                     <label class="input-group-text" for="inputGroupSelect01">Department</label>
                       </div>
                       <select class="custom-select" id="inputGroupSelect01">
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
                      </div>
                    <br>
                     <!--,,,,,,,,,,,,,,,,,,,,,,............................,,,,,,,,,,,,,,,,,,,  -->
                      <div class="row">
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
<!-- select module -->
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
                    

                  <div class="row">
                      <div class="col-2">
                      <button type="button" class="btn btn-primary">BACK</button>
                      </div>
                      <div class="col-8 text-wrap text-center text-primary">
                     <h4 >LAST EXAMS UPDATES</h4>
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
                  
                <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">DEPARTMENT</th>
      <th scope="col">COURSE</th>
      <th scope="col">SEMESTER</th>
      <th scope="col">MODULE</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Information Communication Technology</td>
      <td>NVQ-LEVEL-5</td>
      <td>1 st semester</td>
      <td>MO-7 <span class="badge badge-dark">P</span></td>
      
      
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Automotive & Technology</td>
      <td>NVQ-LEVEL-5</td>
      <td>1 st semester</td>
      <td>MO-7 <span class="badge badge-dark">P</span></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Construction Technology</td>
      <td>NVQ-LEVEL-5</td>
      <td>1 st semester</td>
      <td>MO-6 <span class="badge badge-dark">T</span></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Electrical Technology</td>
      <td>NVQ-LEVEL-5</td>
      <td>1 st semester</td>
      <td>MO-7 <span class="badge badge-dark">P</span></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Food Technology</td>
      <td>NVQ-LEVEL-5</td>
      <td>1 st semester</td>
      <td>MO-5<span class="badge badge-dark">P</span></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Mechanical Technology</td>
      <td>NVQ-LEVEL-4</td>
      <td>1 st semester</td>
      <td>MO-4 <span class="badge badge-dark">T</span></td>
    </tr>
  </tbody>
</table>
                      <!-- #col3 -->
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

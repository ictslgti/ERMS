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
                <section class='mb-40 pt-2 mx-auto'>
                    <div class='container-fluid p-2 '>

                    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4">
      <h3 class="text-primary"> Welcome </h3>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 ">
    <div class="input-group" id="serching">
   
    <input type="text" class="form-control primary-input border border-primary border-top-0 border-left-0 border-right-0" placeholder="Search">  
    </div>
    </div>
<div class="col-lg-1 col-md-1 col-sm-1 "></div>
<div class="col-lg-3 col-md-3 col-sm-3">
    <div class="col-sm "> <a href="exams_results.php">
    <div class="text-primary ">
    <svg class="bi bi-plus-circle-fill" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zM8.5 4a.5.5 0 00-1 0v3.5H4a.5.5 0 000 1h3.5V12a.5.5 0 001 0V8.5H12a.5.5 0 000-1H8.5V4z" clip-rule="evenodd"/>
</svg>    
    
   Add Exams Result</div>
    </div></a>
  </div>
                      
                        </div>
                        <br>
                        <div class='row'>
                            <div class='col-lg-12'>
                            </div>
                        </div>
                        <div class='row'>

                        <div class='col-lg-3 col-md-3 col-sm-3 shadow-lg p-3 mb-5 bg-white rounded'>
                                <a href='#' class='d-block'>
                                    <div class='white-box single-summery'>
                                        <div class='d-flex justify-content-between'>
                                            <div>
                                                <h3>Student</h3>
                                                <p class='mb-0'>Total Students</p>
                                            </div>
                                            <h1 class='primary'>
                                                320
                                            </h1>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            

                            <div class='col-lg-3 col-md-3 col-sm-3 shadow-lg p-3 mb-5 bg-white rounded'>
                                <a href='#' class='d-block'>
                                    <div class='white-box single-summery'>
                                        <div class='d-flex justify-content-between'>
                                            <div>
                                                <h3>Lecturer</h3>
                                                <p class='mb-0'>Total Lecturer</p>
                                            </div>
                                            <h1 class='primary'>
                                                39
                                            </h1>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class='col-lg-3 col-md-3 col-sm-3 shadow-lg p-3 mb-5 bg-white rounded'>
                                <a href='#' class='d-block'>
                                    <div class='white-box single-summery'>
                                        <div class='d-flex justify-content-between'>
                                            <div>
                                                <h3>Department</h3>
                                                <p class='mb-0'>Total Department</p>
                                            </div>
                                            <h1 class='primary'>
                                                6
                                            </h1>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class='col-lg-3 col-md-3 col-sm-3 shadow-lg p-3 mb-5 bg-white rounded'>
                                <a href='#' class='d-block'>
                                    <div class='white-box single-summery'>
                                        <div class='d-flex justify-content-between'>
                                            <div>
                                                <h3>Staffs</h3>
                                                <p class='mb-0'>Total Staffs</p>
                                            </div>
                                            <h1 class='primary'>
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
                <div class="form-group col-md-12 ">
                    <div>
                        <div class="text-wrap text-center text-primary">
                            <h4>ADD NEW EXAMS</h4>
                        </div>
                    </div>
                </div>

                <!-- new exams add form-->
                <form method="POST" action="" class="needs-validation">
                    <div class="row">
                        <!-- select Exams Type -->
                        <div class="col-sm">
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend ">
                                    <label  class="input-group-text" for="inputGroupSelect01">Exams Type</label>
                                </div>
                                <select class="custom-select" required id="inputGroupSelect01" id="validationServer01" required>
                                    <option value="">Select Exams</option>
                                    <option value="1">INSTITUTE</option>
                                    <option value="2">TVEC</option>
                                </select>
                                <!-- <div class="invalid-feedback">Select valide Exams Type</div> -->
                            </div>
                        </div>
                        <!-- select department -->
                        <div class="col-sm">
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Department</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" id="validationServer02" required>
                                    <option value="">Select Department</option>
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
                                <select class="custom-select" id="inputGroupSelect01" id="validationServer03" required>
                                    <option value="">Select Course</option>
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
                                <select class="custom-select" id="inputGroupSelect01" id="validationServer04" required>
                                    <option value="">Select Semester</option>
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
                                <select class="custom-select" id="inputGroupSelect01" id="validationServer05" required>
                                    <option value="">Select Module</option>
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
                                <select class="custom-select" id="inputGroupSelect01" id="validationServer06" required>
                                    <option value="">Select Type</option>
                                    <option value="1">THEORY</option>
                                    <option value="2">PRACTICAL</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <br>


                    <div class="row ">
                      <div class="input-group mb-3 ">  
                        <div class="col-2">
                            <a class="btn btn-primary" href="exams_dashbord.php" role="button">BACK</a>
                            <!-- <button type="button" class="btn btn-primary">BACK</button> -->
                        </div>
                        <div class="col-8 text-wrap text-center text-primary">
                            <h4>LAST EXAMS UPDATES</h4>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-danger">CANCEL</button>



                            <!-- <button type="button" class="btn btn-primary">SAVE</button> -->
                            <!-- Button trigger modal -->
                            <button type="submit" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">
                                SAVE
                            </button>

                            <!-- Modal -->
                            <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">SAVE</h5>
                                            <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are You Sure To Save
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>-->
                    </div>
            </div>
</div>
</form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Exams</th>
                        <th scope="col">DEPARTMENT</th>
                        <th scope="col">COURSE</th>
                        <th scope="col">SEMESTER</th>
                        <th scope="col">MODULE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <th scope="col">TVEC</th>
                        <td>Information Communication Technology</td>
                        <td>NVQ-LEVEL-5</td>
                        <td>1 st semester</td>
                        <td>MO-7 <span class="badge badge-dark">P</span></td>



                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <th scope="col">TVEC</th>
                        <td>Automotive & Technology</td>
                        <td>NVQ-LEVEL-5</td>
                        <td>1 st semester</td>
                        <td>MO-7 <span class="badge badge-dark">P</span></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <th scope="col">INSTITUTE</th>
                        <td>Construction Technology</td>
                        <td>NVQ-LEVEL-5</td>
                        <td>1 st semester</td>
                        <td>MO-6 <span class="badge badge-dark">T</span></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <th scope="col">TVEC</th>
                        <td>Electrical Technology</td>
                        <td>NVQ-LEVEL-5</td>
                        <td>1 st semester</td>
                        <td>MO-7 <span class="badge badge-dark">P</span></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <th scope="col">INSTITUTE</th>
                        <td>Food Technology</td>
                        <td>NVQ-LEVEL-5</td>
                        <td>1 st semester</td>
                        <td>MO-5<span class="badge badge-dark">P</span></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <th scope="col">INSTITUTE</th>
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


    </div>

    <!-- #1 Insert Your Content" -->
    </div>
    </main>
    </div>
    <?php include_once("script.php"); ?>
    <!-- script -->
    <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>

</html>
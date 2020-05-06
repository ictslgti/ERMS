 <!-- modal-->

 <!-- Extra large modal -->

 <div class='modal fade bd-exams-modal-lg' tabindex='-1' style="opacity: 0.9;" id="add_exam" role='dialog' aria-labelledby='myExtraLargeModalLabel' aria-hidden='true'>
     <div class='modal-dialog modal-lg' role='document'>
         <div class='modal-content'>
             <div class='modal-header'>
                 <h5 class='modal-title' id='exampleModalLabel'>ADD NEW EXAMS</h5>
                 <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                     <span aria-hidden='true'>&times;
                     </span>
                 </button>
             </div>
             <!-- new exams add form-->
             <div class='modal-body'>
                 <form method='POST' action='' class='needs-validation'>
                     <div class='row'>
                         <!-- select Exams Type -->
                         <div class='col-sm'>
                             <div class='input-group-sm '>
                                 <div class='input-group-prepend '>
                                     <!-- <label class='input-group-text' for='inputGroupSelect01'>Exams Type</label> -->
                                     <label for='exampleInputEmail1'>Exams</label>
                                 </div>
                                 <select class='custom-select' required id='inputGroupSelect01' id='validationServer01' required name='exams'>
                                     <option value=''>Select Exams</option>
                                     <option value='INSTITUTE'>INSTITUTE</option>
                                     <option value='TVEC'>TVEC</option>
                                 </select>
                                 <!-- <div class = 'invalid-feedback'>Select valide Exams Type</div> -->
                             </div>
                         </div>
                         <!-- select department -->
                         <div class='col-md'>
                             <div class='input-group-sm  sm-3 '>
                                 <div class='input-group-prepend'>
                                     <!-- <label class='input-group-text' for='inputGroupSelect01'>Department</label> -->
                                     <label for='exampleInputEmail1'>Department</label>
                                 </div>
                                 <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required name='department'>
                                     <option value=''>Select Department</option>
                                     <option value='Information Communication Technology'>Information Communication Technology</option>
                                     <option value='Automotive & Technology'>Automotive & Technology</option>
                                     <option value='Construction Technology'>Construction Technology</option>
                                     <option value='Electrical Technology'>Electrical Technology</option>
                                     <option value='Food Technology'>Food Technology</option>
                                     <option value='Mechanical Technology'>Mechanical Technology</option>
                                 </select>
                             </div>
                         </div>

                         <!-- Select Course -->
                         <div class='col-md'>
                             <div class='input-group-sm  mb-3'>
                                 <div class='input-group-prepend'>
                                     <!-- <label class='input-group-text' for='inputGroupSelect01'>Course</label> -->
                                     <label for='exampleInputEmail1'>Course</label>
                                 </div>
                                 <select class='custom-select' id='inputGroupSelect01' id='validationServer03' required name='course'>
                                     <option value=''>Select Course</option>
                                     <option value='NVQ LEVEL-4'>NVQ LEVEL-4</option>
                                     <option value='BRIDGING LEVEL-5'>BRIDGING LEVEL-5</option>
                                     <option value='LEVEL-5'>NVQ LEVEL-5</option>
                                     <option value='LEVEL-6'>NVQ LEVEL-6</option>
                                 </select>
                             </div>
                         </div>

                     </div>
                     <br>
                     <!--, , , , , , , , , , , , , , , , , , , , , , ............................, , , , , , , , , , , , , , , , , , ,  -->
                     <div class='row'>
                         <!-- Select Semester -->
                         <div class='col-md'>
                             <div class='input-group-sm  mb-3'>
                                 <div class='input-group-prepend'>
                                     <!-- <label class='input-group-text' for='inputGroupSelect01'>Semester</label> -->
                                     <label for='exampleInputEmail1'>Semester</label>
                                 </div>
                                 <select class='custom-select' id='inputGroupSelect01' id='validationServer04' required name='semester'>
                                     <option value=''>Select Semester</option>
                                     <option value='1 st'>1 st semester</option>
                                     <option value='2 nd'>2 nd semester</option>
                                     <option value='3 rd'>3 rd semester</option>

                                 </select>
                             </div>
                         </div>
                         <!-- select module -->
                         <div class='col-md'>
                             <div class='input-group-sm  mb-3 '>
                                 <div class='input-group-prepend '>
                                     <!-- <label class='input-group-text' for='inputGroupSelect01'>Module</label> -->
                                     <label for='exampleInputEmail1'>Module</label>
                                 </div>
                                 <select class='custom-select' id='inputGroupSelect01' id='validationServer05' required name='module'>
                                     <option value=''>Select Module</option>
                                     <option value='EMP-MO1'>EMP-MO1</option>
                                     <option value='EMP-MO2'>EMP-MO2</option>
                                     <option value='EMP-MO3'>EMP-MO3</option>
                                     <option value='MO4'>MO4</option>
                                     <option value='MO5'>MO5</option>
                                     <option value='MO5'>MO6</option>
                                     <option value='MO7'>MO7</option>
                                     <option value='MO8'>MO8</option>
                                 </select>
                             </div>
                         </div>
                         <div class='col-md'>
                             <div class='input-group-sm mb-3 '>
                                 <div class='input-group-prepend '>
                                     <!-- <label class='input-group-text' for='inputGroupSelect01'>Type</label> -->
                                     <label for='exampleInputEmail1'>Type</label>
                                 </div>
                                 <select class='custom-select' id='inputGroupSelect01' id='validationServer06' required name='type'>
                                     <option value=''>Select Type</option>
                                     <option value='T'>THEORY</option>
                                     <option value='P'>PRACTICAL</option>
                                 </select>
                             </div>
                         </div>

                     </div>

                     <div class='row '>
                         <div class='input-group  '>
                             <div class='col-10'></div>
                             <div class='col-2'>

                                 <!-- Button trigger modal -->

                                 <div class='modal-footer'>
                                     <button type='button' class='btn btn-warning btn btn-sm ' data-dismiss='modal'>Close</button>
                                     <button type='submit' name='submit' class='btn btn-primary btn btn-sm ' data-toggle='modal' data-target='#exampleModal'>
                                         SAVE
                                     </button>
                                 </div>

                             </div>
                         </div>

                     </div>
                 </form>
             </div>
             <!-- form end-->
         </div>
     </div>
 </div>

 <!-- end modal-->
 <!-- db coneection-->
 <!-- add exam sql-->


 <?php
    if (
        isset($_POST['submit'])
        && !empty($_POST['exams'])
        && !empty($_POST['department'])
        && !empty($_POST['course'])
        && !empty($_POST['semester'])
        && !empty($_POST['module'])
        && !empty($_POST['type'])

    ) {
        $exams = $_POST['exams'];
        $department = $_POST['department'];
        $course = $_POST['course'];
        $semester = $_POST['semester'];
        $module = $_POST['module'];
        $type = $_POST['type'];

        $sql = "INSERT INTO exams (exam, dept_name, course,semester,module,exam_type)
    VALUES 
    ('$exams', 
    '$department', 
    '$course',
    '$semester', 
    '$module', 
    '$type')
    ";

        if (mysqli_query($con, $sql)) {
            echo '
                  <div class="row">
                  <div class="col-md alert alert-success alert-dismissible fade show " role="alert">
                  Succesfully Created..........
                  
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  <button type = "submit" name = "edite" class = "btn btn-warning btn btn-sm ">View</button>
                  </div>
                 
                  </div>
                  
                  ';
        } else {
            echo 'Error: ' . $sql . '<br>' . mysqli_error($con);
        }
    }

    ?>
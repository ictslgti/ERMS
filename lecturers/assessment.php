<?php
$title = " Add Assessment| Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<?php include_once("./head.php"); ?>
<?php include_once("../config.php"); ?>
<?php
//departments
$departments = '';
$query = "SELECT * FROM departments";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($result)) {
  $departments .= '<option value="' . $row["code"] . '">' . $row["name"] . '</option>';
}
?>

<?php
//academic
$academic = '';
$query = "select distinct Academic_year from batches";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($result)) {
  $academic .= '<option value="' . $row["Academic_year"] . '">' . $row["Academic_year"] . '</option>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
  </script>
  <!-- department.course,module -->
  <script>
    $(document).ready(function() {
      $('.action').change(function() {
        if ($(this).val() != '') {
          var action = $(this).attr("id");
          var query = $(this).val();
          var result = '';
          if (action == "department") {
            result = 'course';
          } else if (action == "course") {
            result = 'module';
          } else if (action == "module") {
            result = 'percenta';
          } else if (action == "academic") {
            result = 'batch';
          }


          $.ajax({
            url: "assessment_ajax.php",
            method: "POST",

            data: {
              action: action,
              query: query
            },
            success: function(data) {
              $('#' + result).html(data);
            }
          })
        }
      });
    });
  </script>


  <!-- batch -->
  <script>
    function getbatch() {
      var selectcourse = document.getElementById("course").value;
      $.ajax({
        url: 'assessment_ajax.php',
        data: 'cou=' + selectcourse,
        success: function(data) {
          $('#batch').html(data);
        }

      });
    }
  </script>
  <!-- batch -->



  <script>
    function getselectvalue() {
      var selectmodule = document.getElementById("module").value;
      var selectbatch = document.getElementById("batch").value;

      $.ajax({
        url: 'assessment_ajax.php',
        data: 'batch=' + selectbatch + '&' + 'module=' + selectmodule,
        success: function(data) {
          $('#demo').html(data);
        }

      });
    }
  </script>
</head>

<body>

  <?php

  ?>

  <div class="page-wrapper toggled bg2 border-radius-on light-theme">

    <?php include_once("nav.php"); ?>

    <!-- <main class="page-content pt-2"> -->
    <!-- 1st row start -->

    <div class="container">
      <?php
      $department = null;
      $type = null;
      $batchno = null;
      $course = null;
      $module = null;
      $percen = null;
      $assess = null;
      $dept_name = null;
      $id = null;
      if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $sql = "select names,batch as batch_no,module as module_no,department_code as dept_no,(select batch_no from batches where id in(select batch from assessments where id='$id')) 
as batch,(select name from modules where id in(select module from assessments where id='$id')) as module,
(select name from courses where code in (select course_code from modules where id in 
(select module from assessments where id='$id'))) as course,(select name from departments where code in 
(select department_code from assessments where id='$id')) 
as department,type,percentage from assessments where id='$id'; ";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_assoc($result);
          $names = $row['names'];
          $batch = $row['batch'];
          $batch_no=$row['batch_no'];
          $course = $row['course'];
          $module = $row['module'];
          $dept_no = $row['dept_no'];
          $module_no = $row['module_no'];
          $type = $row['type'];
          $percen = $row['percentage'];
          $department = $row['department'];
        }
      }




      //  insert start 
      if (
        isset($_POST['submit'])
        && !empty($_POST['department'])

      ) {
        $department = $_POST['department'];
        $batchno = $_POST['batch'];
        $type = $_POST['type'];
        $course = $_POST['course'];
        $module = $_POST['module'];
        $percen = $_POST['per'];
        $assess = $_POST['assess'];

        $sql = "INSERT INTO assessments (names,batch,module,type,Percentage,department_code)
    VALUES 
    ('$assess','$batchno', '$module', '$type','$percen','$department')
    ";
        if (mysqli_query($con, $sql)) {
          echo "
       <div class='alert alert-success' role='alert'>
       insert success fully 
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($con);
          echo "
       <div class='alert alert-danger' role='alert'>
       This academic_year alredy submit 
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
        }
      }
      ?>
      <!-- insert end -->


      <?php
      //  update start 
      if (
        isset($_POST['save'])
      ) {
        $department = $_POST['department'];
        $batchno = $_POST['batch'];
        $type = $_POST['type'];
        $course = $_POST['course'];
        $module = $_POST['module'];
        $percen = $_POST['per'];
        $assess = $_POST['assess'];

        $sql = "update assessments set names='$assess',batch='$batch',module='$module',type='$type',percentage='$percen',department_code='$department' where id='$id'; ";

        if (mysqli_query($con, $sql)) {
          echo "
       <div class='alert alert-success' role='alert'>
       update success fully 
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($con);
          echo "
       <div class='alert alert-danger' role='alert'>
       This academic_year alredy submit 
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
        }
      }
      ?>
      <!-- update end -->

      <div class="card  mb-3">
        <div class="card-header ">
          <div class="row">
            <div class="col">
              <h4>Assessment</h4>
            </div>
            <div class="col-auto">
              <a href="assessments.php" class="btn btn-outline-primary">Assessments</a>
            </div>

          </div>
        </div>
        <div class="card-body ">
          <div class="card  mb-3">

            <div class="card-body ">
              <form action="" method="POST">
                <div class="row">

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      Department <br>
                      <div class="input-group input-group-sm mb-3">
                        <select name="department" id="department" class="form-control action" required>
                          <?php
                          if (isset($_GET['edit'])) {
                            ?>
                            <option value="<?php echo $dept_no; ?>" selected><?php echo $department; ?></option>
                            <option value="">Select Department</option>
                            <?php echo $departments; ?>
                          <?php
                        } else {
                          ?>
                            <option value="">Select Department</option>
                            <?php echo $departments; ?>
                          <?php
                        }
                        ?>
                        </select>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      Course <br>
                      <div class="input-group input-group-sm mb-3">
                        <select name="course" id="course" class="form-control action" required>
                          <?php
                          if (isset($_GET['edit'])) {
                            ?>
                            <option value="<?php echo $course; ?>" selected><?php echo $course; ?></option>
                            <option value="">Select course</option>

                          <?php
                        } else {
                          ?>
                            <option value="">Select course</option>

                          <?php
                        }
                        ?>
                        </select>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- 2 row end   -->


                <!-- 3 row start   -->
                <div class="row">

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      Module <br>
                      <div class="input-group input-group-sm mb-3">
                        <select name="module" id="module" class="form-control action" onchange="getbatch()" required>
                          <?php
                          if (isset($_GET['edit'])) {
                            ?>
                            <option value="<?php echo $module_no; ?>" selected><?php echo $module; ?></option>
                            <option value="">Select module</option>
                          <?php
                        } else {
                          ?>
                            <option value="">Select module</option>
                          <?php
                        }
                        ?>
                        </select>
                      </div>
                    </div>
                  </div>




                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      Assessment_name <br>
                      <div class="input-group input-group-sm mb-3">
                        <?php
                        if (isset($_GET['edit'])) {
                          ?>

                          <input type="text" value="<?php echo $names; ?>" name="assess" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                        <?php
                      } else {
                        ?>
                          <input type="text" name="assess" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                        <?php
                      }
                      ?>


                      </div>
                    </div>
                  </div>
                </div>
                <!-- 3 row end   -->


                <!-- 4 row start   -->
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      Batch <br>
                      <div class="input-group input-group-sm mb-3">

                        <select class="custom-select" name="batch" id="batch" id="inputGroupSelect01" id="validationCustom04" onchange="getselectvalue()" required>

                          <<?php
                            if (isset($_GET['edit'])) {
                              ?> <option value="<?php echo $batch_no; ?>" selected><?php echo $batch; ?></option>
                              <option value="">Select batch</option>

                            <?php
                          } else {
                            ?>
                              <option value="">Select batch</option>
                            <?php
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- 4 row end   -->



                <!-- 5th row stat -->
                <div class="row">

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      Type <br>
                      <div class="input-group input-group-sm mb-3">

                        <select class="custom-select" name="type" id="inputGroupSelect01" id="validationCustom04" required>
                          <?php
                          if (isset($_GET['edit'])) {
                            ?>
                            <option selected value="<?php echo $type; ?>"><?php echo $type; ?> </option>
                            <option disabled value="">Choose Type </option>
                            <option value="Practical">Practical</option>
                            <option value="Theroy">Theroy</option>

                          <?php
                        } else {
                          ?>
                            <option selected disabled value="">Choose Type </option>
                            <option value="Practical">Practical</option>
                            <option value="Theroy">Theroy</option>

                          <?php
                        }
                        ?>



                        </select>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-6 col-sm-6 col-xs-6">
                    Percentage <br>
                    <div class="form-group">
                      <div class="input-group input-group-sm mb-3">
                        <?php
                        if (isset($_GET['edit'])) {
                          ?>

                          <input type="number" value="<?php echo $percen; ?>" name="per" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                        <?php
                      } else {
                        ?>
                          <input type="number" name="per" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                        <?php
                      }
                      ?>

                      </div>
                    </div>
                  </div>

                </div>
                <div class="card-footer ">
                  <div class="row">
                    <div class="col-11 "></div>
                    <div class="col-1">

                      <?php
                      if (isset($_GET['edit'])) {
                        ?>
                        <button type="submit" name="save" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
                          Save
                        </button>
                      <?php
                    } else {
                      ?>
                        <button type="submit" name="submit" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
                          Add
                        </button>
                      <?php
                    }
                    ?>

                    </div>
                  </div>
                </div>
              </form>
              <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                  <p id="demo"></p>
                </div>
                <div class="col-3"></div>
              </div>


            </div>
          </div>
          <!-- #1 Insert Your Content" -->
        </div>
        </main>
      </div>
      <?php include_once("../script.php");

      ?>

</body>

</html>

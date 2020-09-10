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
  $departments .= '<option value="' .$row["code"] . '">' . $row["name"] . '</option>';
 
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
          }
          else if (action == "module") {
            result = 'percenta';
          }
          else if (action == "academic") {
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
    var course_id = 0;
var postBodyElement = null;
$('#batch').on('click', function () {
  $.ajax({
    method: 'POST',
    url:"assessment_ajax.php",
    data: {
      course_id: course_id,
      module: $('#module').val(),
      batch: $('#batch').val(),
      _token: token
    }
  })
});
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

      ?>

      <!-- insert start -->
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

        $sql = "SELECT * FROM `assessments` WHERE `batch`= '$id' ";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) == 1) {
          $row = mysqli_fetch_assoc($result);
          $department = $row['department_code'];
          $year = $row['Academic_year'];
          $batchno = $row['batch_no'];
          $nvq = $row['NVQ_level'];
        }
      }


      if (
        isset($_POST['submit'])
        && !empty($_POST['department'])
        && !empty($_POST['course'])
        && !empty($_POST['batch'])
        && !empty($_POST['module'])
        && !empty($_POST['type'])
        && !empty($_POST['per'])
      ) {
        $department = $_POST['department'];
        $batchno = $_POST['batch'];
        $type = $_POST['type'];
        $course = $_POST['course'];
        $module = $_POST['module'];
        $percen = $_POST['per'];
        $assess = $_POST['assess'];
        $academ=$_POST['academic'];
        $sql = "INSERT INTO assessments (name,batch,module,type,Percentage,Academic_year,department_code)
    VALUES 
    ('$assess','$batchno', '$module', '$type','$percen','$academ','$department')
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
                        <select name="department" id="department" class="form-control action">
                          <option value="">Select Department</option>
                          <?php echo $departments; ?>
                        </select>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      Course <br>
                      <div class="input-group input-group-sm mb-3">
                        <select name="course" id="course" class="form-control action">
                          <option value="">Select course</option>
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
                        <select name="module" id="module" class="form-control action">
                          <option value="">Select module</option>
                        </select>
                      </div>
                    </div>
                  </div>




                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      Assessment_name <br>
                      <div class="input-group input-group-sm mb-3">

                        <input type="text" name="assess" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- 3 row end   -->


                <!-- 4 row start   -->
                <div class="row">

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      Academic_year <br>
                      <div class="input-group input-group-sm mb-3">
                        <select class="form-control action" name="academic" id="academic" id="inputGroupSelect01" id="validationCustom04" required>
                        <option value="">Select Academic_year</option>
                          <?php echo $academic; ?>
                        </select>
                      </div>
                    </div>
                  </div>



                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      Batch <br>
                      <div class="input-group input-group-sm mb-3">

                        <select class="custom-select" name="batch" id="batch" id="inputGroupSelect01" id="validationCustom04" required>
                          
                        <option value="">Select Batch</option>
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
                          <option selected disabled value="">Choose Type </option>
                          <option value="Practical">Practical</option>
                          <option value="Theroy">Theroy</option>

                        </select>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-6 col-sm-6 col-xs-6">
                    Percentage <br>
                    <div class="form-group">
                      <div class="input-group input-group-sm mb-3">
                        <input type="number" name="per" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="validationServer01" required>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="card-footer ">
                  <div class="row">
                    <div class="col-11 "></div>
                    <div class="col-1">
                      <button type="submit" name="submit" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
                        Add
                      </button>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-3"></div>
                  <div class="col-6">
                      <table name="percenta" id="percenta"></table>
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


      </form>







</body>

</html>

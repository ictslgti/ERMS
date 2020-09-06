<?php
$title = " Add Assessment| Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>

<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "erms");
$country = '';
$query = "SELECT * FROM departments";
$result = mysqli_query($connect, $query);
while ($row = mysqli_fetch_array($result)) {
  $country .= '<option value="' . $row["code"] . '">' . $row["name"] . '</option>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("./head.php"); ?>
  <?php include_once("../config.php"); ?>
  <style>
    table,
    th,
    td {
      padding: 5px;
      border: 1px solid black;
      text-align: center;
    }
  </style>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
  </script>
  <script>
    $(document).ready(function() {
      $('#bonus').change(function() {
        document.write($("#bonus option:selected").text());
      });
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
        && !empty($_POST['name'])
        && !empty($_POST['course'])
        && !empty($_POST['batch'])
        && !empty($_POST['module'])
        && !empty($_POST['type'])
        && !empty($_POST['per'])
      ) {
          $department = $_POST['name'];
          $batchno = $_POST['batch'];
          $type = $_POST['type'];
          $course = $_POST['course'];
          $module = $_POST['module'];
          $percen = $_POST['per'];
          $assess = $_POST['assess'];

          $sql = "INSERT INTO assessments (name,batch,module,type,Percentage)
    VALUES 
    ('$assess','$batchno', '$module', '$type','$percen')
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
                        <select name="name" id="name" class="form-control action">
                          <option value="">Select Department</option>
                          <?php echo $country; ?>
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
                        <select name="module" id="module" class="form-control">
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

                        <select class="custom-select" id="inputGroupSelect01" id="validationCustom04" required>
                          <?php
                          if (isset($_GET['edit'])) {
                            ?>
                            <option selected value="<?php echo $name; ?>"><?php echo $name; ?>
                            </option>
                            <option disabled value="">Choose Academic_year</option>
                            <?php
                            $result = $con->query("SELECT `academic_year` FROM `academic_year`");
                            while ($row = $result->fetch_assoc()) {
                              unset($name);
                              $name = $row['academic_year'];
                              echo '<option value=" ' . $name . '"  >' . $name . '</option>';
                            }
                            ?>
                          <?php
                        } else {
                          ?>
                            <option selected disabled value="">Choose Academic_year</option>
                            <?php
                            $result = $con->query("SELECT `academic_year` FROM `academic_year`");
                            while ($row = $result->fetch_assoc()) {
                              unset($name);
                              $name = $row['academic_year'];
                              echo '<option value=" ' . $name . '"  >' . $name . '</option>';
                            }
                            ?>

                          <?php
                        }
                        ?>
                        </select>
                      </div>
                    </div>
                  </div>



                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      Batch <br>
                      <div class="input-group input-group-sm mb-3">

                        <select class="custom-select" name="batch" id="inputGroupSelect01" id="validationCustom04" required>
                          <?php
                          if (isset($_GET['edit'])) {
                            ?>
                            <option selected value="<?php echo $name; ?>"><?php echo $name; ?>
                            </option>
                            <option disabled value="">Choose batch</option>
                            <?php
                            $result = $con->query("SELECT `batch_no` FROM `batch`");
                            while ($row = $result->fetch_assoc()) {
                              unset($name);
                              $name = $row['batch_no'];
                              echo '<option value=" ' . $name . '"  >' . $name . '</option>';
                            }
                            ?>
                          <?php
                        } else {
                          ?>
                            <option selected disabled value="">Choose batch</option>
                            <?php
                            $result = $con->query("SELECT `batch_no` FROM `batch`");
                            while ($row = $result->fetch_assoc()) {
                              unset($name);
                              $name = $row['batch_no'];
                              echo '<option value=" ' . $name . '"  >' . $name . '</option>';
                            }
                            ?>

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
                  <div class="col-9">

                  </div>
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
      <script>
        $(document).ready(function() {
          $('.action').change(function() {
            if ($(this).val() != '') {
              var action = $(this).attr("id");
              var query = $(this).val();
              var result = '';
              if (action == "name") {
                result = 'course';
              } else {
                result = 'module';
              }
              $.ajax({
                url: "assessment_fetch.php",
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
</body>

</html>

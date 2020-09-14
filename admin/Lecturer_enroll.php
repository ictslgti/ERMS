<?php
$title = "Lec_Enrolement | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
    <?php include_once("../config.php"); ?>
   <!-- course -->
   <script>
        function getcourse() {
            var selectcourse = document.getElementById("course").value;
            $.ajax({
                url: 'lecturer_enroll_ajax.php',
                data: 'course=' + selectcourse,
                success: function(data) {
                    $('#module').html(data);
                }

            });
        }
    </script>
    <!-- course -->

    <!-- batch -->
    <script>
        function getbatch() {
            var selectcourse = document.getElementById("course").value;
            $.ajax({
                url: 'lecturer_enroll_ajax.php',
                data: 'cou=' + selectcourse,
                success: function(data) {
                    $('#batch').html(data);
                }

            });
        }
    </script>
    <!-- batch -->

    <!-- batch -->
    <script>
        function getlecturer() {
            var selectcourse = document.getElementById("course").value;
            $.ajax({
                url: 'lecturer_enroll_ajax.php',
                data: 'courses=' + selectcourse,
                success: function(data) {
                    $('#lecturer').html(data);
                }

            });
        }
    </script>
    <!-- batch -->

    <script>
    function getselectvalue() {
      var selectmodule = document.getElementById("module").value;
      

      $.ajax({
        url: 'lecturer_enroll_ajax.php',
        data: 'module=' + selectmodule,
        success: function(data) {
          $('#demo').html(data);
        }

      });
    }
  </script>
</head>

<body>
<?php
    //course
    $courses = '';
    $query = "SELECT * FROM courses";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
        $courses .= '<option value="' . $row["code"] . '">' . $row["name"] . '</option>';
    }
    //  course  
    ?>
    
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">

        <?php include_once("nav.php"); ?>

        <!-- <main class="page-content pt-2"> -->
        <!-- 1st row start -->

        <div class="container">

<?php
 if (
    isset($_POST['submit'])
    && !empty($_POST['module'])
    && !empty($_POST['batch'])
    && !empty($_POST['lecturer'])
) {

    $module = $_POST['module'];
    $batch = $_POST['batch'];
    $lecturer = $_POST['lecturer'];
   
    $sql = "INSERT INTO `lecturer_enroll`(module,batch,lecturer)
VALUES 
('$module', 
'$batch', 
$lecturer
)
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
        echo "
<div class='alert alert-danger' role='alert'>
This course alredy submit 
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
</button>
</div>";
    }
}
?>


            <br>
            <form action="" method="POST">
                <div class="card  mb-3">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col">
                                <h4>Module Enrollment</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="card  mb-3">

                            <div class="card-body ">
                                <form method="POST" action="">
                                    <div class="row">

                                        <div class="col-sm">
                                            <div class="form-group">
                                                Course Name <br>
                                                <div class="form-group">
                                                    <div class="input-group input-group-sm mb-3">

                                                        <select class="custom-select" id="course" name="course" id="inputGroupSelect01" id="validationCustom04" onchange="getcourse()" required>
                                                        <option value="" selected disabled> select Course</option>
                                                        <?php echo $courses;?>   
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                Module Name <br>
                                                <div class="form-group">
                                                    <div class="input-group input-group-sm mb-3">

                                                        <select class="custom-select" id="module" name="module" id="inputGroupSelect01" id="validationCustom04" onchange="getbatch(),getselectvalue()" required>
                                                           <option value=""> select module</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>




                                    </div>


                                    <div class="row">


                                        <div class="col-sm">
                                            Batch <br>
                                            <div class="form-group">
                                                <div class="input-group input-group-sm mb-3">

                                                    <select class="custom-select" id="batch" name="batch" onchange="getlecturer()" id="inputGroupSelect01" id="validationCustom04" required>
                                                      <option value=""> select batch</option>  
                                                    </select>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-sm">
                                            Lecturer <br>
                                            <div class="form-group">
                                                <div class="input-group input-group-sm mb-3">

                                                    <select class="custom-select" id="lecturer" name="lecturer" id="inputGroupSelect01" id="validationCustom04" required>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                              <div id="demo"></div>
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
            </form>



        </div>
        <!-- #1 Insert Your Content" -->
    </div>
    </main>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>

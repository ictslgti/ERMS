  <?php
  $title = ' ERMS | SLGTI(Exams Result Report)';
  $description = 'Online Examination Result  Management System (ERMS)-SLGTI';
  ?>
  <!DOCTYPE html>
  <html lang='en'>

  <head>
    <?php include_once('../head.php');
    include_once('../config.php');
    ?>
  </head>

  <body>
    <main class='page-content pt-2'>
      <?php //include_once('nav.php');
      ?>
      <div id='overlay' class='overlay'></div>
      <div class='container-fluid p-5'>
        <!-- #1 Insert Your Content-->

        <div class='row'>
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h3> <?php echo " $title" ?> </h3>
              </div>
              <div class="card-body">

                <div class='row'>
                  <div class="col-md-6">



                    <div class="card-body">

                      <?php
                      $sql = "SELECT * FROM student";
                      $result = $con->query($sql);
                      if ($result->num_rows > 1) {
                        while ($row = $result->fetch_assoc()) {

                          $full_name = $row['full_name'];
                          $name_with_initials = $row['name_with_initials'];
                          $id = $row['id'];
                          $nic = $row['nic'];
                          // $semester = $row['semester'];
                          // $module = $row['module'];
                          // $exam_type = $row['exam_type'];
                          // $attempt = $row['attempt'];
                          // $marks = $row['marks'];
                        }
                      }
                      ?>
                      <div class="row">
                        <div class="col-md-4">
                          <label for="exampleInputEmail1"><b>Full Name :- </b><?php echo $full_name; ?></label>
                        </div>
                        <div class="col-md-4">
                          <label for="exampleInputEmail1"><b>Name with Initial :- </b><?php echo $name_with_initials; ?></label>
                        </div>
                        <div class="col-md-4">
                          <label for="exampleInputEmail1"><b> Student Id :- </b><?php echo $id; ?></label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <label for="exampleInputEmail1"><b> NIC Number :- </b><?php echo $nic; ?></label>
                        </div>
                        <!-- <div class="col-md-4">
                       <label for="exampleInputEmail1"><b>Course :- </b></label>
                     </div>
                     <div class="col-md-4">
                       <label for="exampleInputEmail1"><b>Batch :- </b></label>
                     </div>
                     <div class="col-md-4">
                       <label for="exampleInputEmail1"><b>Academic Year :- </b></label>
                     </div> -->
                      </div>

                      <!-- #1 Insert Your Content-->

                      <table class="table">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">NO</th>
                            <th scope="col">MODULE_CODE</th>
                            <th scope="col">MODULE_NAME</th>
                            <th scope="col">EXAM_TYPE</th>
                            <th scope="col">ATTEMPT</th>
                            <th scope="col">RESULT</th>
                          </tr>
                        </thead>

                        <tbody>

                          <?php
                          $sql = "SELECT * FROM modules";
                          $result = $con->query($sql);
                          if ($result->num_rows > 1) {
                            while ($row = $result->fetch_assoc()) {

                              $code = $row['code'];
                              $name = $row['name'];
                              echo '
                              <tr>
                              <td></td>
                              <div class="row">
                                 <div class="col-md-4">
                                 <td>
                                 '?>
                                  <label for="exampleInputEmail1"><?php echo $code; ?></label>
                                  <?php
                                  echo '
                                  </td>
                              </div>
                                 <div class="col-md-4">
                                 <td>
                                 '?>

                                   <label for="exampleInputEmail1"><?php echo $name; ?></label>

                                   <?php
                                   echo '
                                   </td>
                                 </div>
  
                            </div>
                            </tr>';
                            }
                          }

                          ?>

                          

                        </tbody>
                      </table>

                      <!-- #1 Insert Your Content-->
                    </div>

                    <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>

                  </div>
                </div>
              </div> <!-- #1 Insert Your Content" -->
            </div>
    </main>

    <?php include_once("../script.php");
    ?>
  </body>

  </html>
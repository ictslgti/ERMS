<?php
$title = "Academicyear | Online Examination Result Management System | SLGTI";
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
            <div class="container-fluid p-5">
                <!-- #1 Insert Your Content-->
                <?php  
                  $title ="
                  <h4 class='text-primary'>ERMS|<span class='text-secondary'>Academic Years</span></h4>";
                 include_once('exam/nav_bar.php');
            
                 ?>

                <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand"></a>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                    <a href="Academicyear.php"  class="btn btn-outline-primary my-2 my-sm-0 m-1">Add new</a>
                </form>
                </nav>

<br>
                    <form method="POST">
                <div class="row">
                    <div class="form-group col-md-12">
                    <div class="table-responsive">
                    
                    <table class='table align-middle'>
                        <thead class='bg-primary text-light'>
                            <tr>
                                <th scope='col'>Year</th>
                                <th scope='col'>Status</th>
                                <th scope='col'>semi 1 start</th>
                                <th scope='col'>semi 1 end</th>
                                <th scope='col'>semi 2 start</th>
                                <th scope='col'>semi 2 end</th>
                                <th scope='col'>Options</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-danger">
                                <th scope='row'>2018/2019</th>
                                <td>Completed</td>
                                <td>2017.02.25</td>
                                <td>2017.08.25</td>
                                <td>2017.09.30</td>
                                <td>2020.03.30</td>
                                <td>
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
                                View details
                                </button>
                                
                                </td>

                            </tr>
                            
                            <tr class="table-success">
                                <th scope='row'>2019/2020</th>
                                <td>Active</td>
                                <td>2017.02.25</td>
                                <td>2017.08.25</td>
                                <td>2017.09.30</td>
                                <td>2020.03.30</td>
                                <td>
                                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
                                Edit details
                                </button>
                                
                                </td>

                            </tr>

                            <tr class="table-success">
                                <th scope='row'>2020/2021</th>
                                <td>Active</td>
                                <td>2017.02.25</td>
                                <td>2017.08.25</td>
                                <td>2017.09.30</td>
                                <td>2020.03.30</td>
                                <td>
                                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
                                Edit details
                                </button>
                                
                                </td>

                            </tr>
                            
                            <tr class="table-info">
                                <th scope='row'>2020/2021</th>
                                <td>Plan</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>
                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal" name="add">
                           Edit details
                            </button>
                                
                                </td>

                            </tr>

                        </tbody>
                    </table>
                    
                    </div>
                    </div>
                </div>
                </form>
 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLabel">Academic Year</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


      <!-- content -->
      <form method="POST" action="">
      <div class="row"> 
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Academic Year </label>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="validationServer01" required>
              </div>
            </div>
          </div>

          <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01"> Year Status</label>
            </div>
              <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                <option selected disabled value="">Choose Academic Year Status</option>
                <option value="1">Completed</option>
                <option value="2">Active</option>
              </select>
              </div>
            </div>
          </div>
          </div>
          <br>

   
   <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon3">Semester1 Start Date</span>
                  </div>
                  <input type="date" id="birthday" name="Assessment_Date"class="form-control" id="basic-url" aria-describedby="basic-addon3" id="validationServer06" required>
                  </div>
            </div>
          </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon3">Semester1 End Date</span>
                  </div>
                  <input type="date" id="birthday" name="Assessment_Date"class="form-control" id="basic-url" aria-describedby="basic-addon3" id="validationServer06" required>
                  </div>
            </div>
          </div>
        
   </div>
      <br>

      <div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon3">Semester2 Start Date</span>
                  </div>
                  <input type="date" id="birthday" name="Assessment_Date"class="form-control" id="basic-url" aria-describedby="basic-addon3" id="validationServer06" required>
                  </div>
            </div>
          </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon3">Semester2 End Date</span>
                  </div>
                  <input type="date" id="birthday" name="Assessment_Date"class="form-control" id="basic-url" aria-describedby="basic-addon3" id="validationServer06" required>
                  </div>
            </div>
          </div>
        </div>
  
      <br>
   </form>
   <!-- contect -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save </button>
      </div>
    </div>
  </div>
</div>



                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>

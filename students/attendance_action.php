<?php
$title = ' ERMS | SLGTI(page Title)';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php include_once('.././head.php');
    // include_once('../config.php');
    ?>
</head>

<body>
    <main class='page-content pt-2'>
        <?php include_once('nav.php');
        ?>
        <div id='overlay' class='overlay'></div>
        <div class='container-fluid p-5'>
            <!-- #1 Insert Your Content-->
            <div class='row'>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3> <?php echo " $title" ?></h3>
                        </div>
                        <div class="card-body">

                            <!-- #1 Insert Your Content-->

                                                               
<div class="container" style="margin-top:10px">
  <div class="card">
   <div class="card-header">
      <div class="row">
        <div class="col-md-9">Attendance List</div>
        <div class="col-md-3" align="right">
          <button type="button" id="chart_button" class="btn btn-primary btn-sm">Chart</button>
          </div>
          <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Attendance Review
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="#">Module-wise</a>
    <a class="dropdown-item" href="#">Month-wise</a>
    <a class="dropdown-item" href="#">Semester-wise</a>
  </div>
</div>  
      </div>
    </div>
   <div class="card-body">
    <div class="table-responsive">
    <table class="table align-middle">
                        <thead class='thead-light'>
                            <tr>
                                <th scope='col'>Course</th>
                                <th scope='col'>Date</th>
                                <th scope='col'>Taken sessions</th>
                                <th scope='col'>Points</th>
                                <th ccrop='col'>Remarks</th>
                            </tr>
                            <tr>
                                <td scope='col'>Basic Computer Application</td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>12</td>
                                <td scope='col'>12/10</td>
                                <td scope='col'>85.0%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Fundamentals of Software Programming </td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>25</td>
                                <td scope='col'>25/23</td>
                                <td scope='col'>87.0%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Communication Skill </td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>45</td>
                                <td scope='col'>45/37</td>
                                <td scope='col'>85.8%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Fundamentals of Graphic Design </td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>17</td>
                                <td scope='col'>17/17</td>
                                <td scope='col'>100%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Fundamentals of Networking</td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>96</td>
                                <td scope='col'>96/83</td>
                                <td scope='col'>100%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Introduction to Database Systems</td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>24</td>
                                <td scope='col'>24/20</td>
                                <td scope='col'>85.7%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Static Web Page Designing</td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>81</td>
                                <td scope='col'>81/75</td>
                                <td scope='col'>91.0%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Database Systems I</td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>81</td>
                                <td scope='col'>81/75</td>
                                <td scope='col'>87.4%</td>
                            </tr>
                            <tr>
                                <td scope='col'>System Analysis and Design </td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>45</td>
                                <td scope='col'>45/40</td>
                                <td scope='col'>89.5%</td>
                            </tr>
                            <tr>
                                <td scope='col'>Web Programming</td>
                                <td scope='col'> Thu 9 Jul 2020</td>
                                <td scope='col'>33</td>
                                <td scope='col'>33/28</td>
                                <td scope='col'>90.0%</td>
                            </tr>
                            <tr>
                                <th>Average attendance</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th >90.9%</th>
                            </tr>
                        </thead>
                    <tbody>
                        <tbody>
                        </tbody>
                     </table>
    </div>
   </div>
</body>
</html>

                            <!-- #1 Insert Your Content-->
                        </div>
                    </div>
                </div>
            </div> <!-- #1 Insert Your Content" -->
        </div>
    </main>

    <?php include_once("../script.php");
    ?>
</body>

</html>
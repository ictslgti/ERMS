<?php
$title = "Dashboard | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
<!-- Sample chart -->
    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'ICT', 'CONT','MECHA', 'ELECT', 'FOOT' , 'AUTO'],
          ['2016',  20,  12,    10,    22,    31   ,   12],
          ['2017',  12,  34,    14,    33,    5    ,  12],
          ['2018',  10,  12,    19,    22,    3    ,  22],
          ['2019',  29,  12,    15,    21,    11   ,   14 ],
          ['2020',  15,  33,    19,    12,    12   ,   14 ],
         
        ]);

        var options = {
          title: 'STUDENTS PASS RATINGS',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
   -->



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
<div class="col-lg-2 col-md-2 col-sm-2 "></div>
<div class="col-lg-2 col-md-2 col-sm-2">
    <div class="col-sm "> 
    <div class="text-primary  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <svg class="bi bi-plus-circle-fill" width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zM8.5 4a.5.5 0 00-1 0v3.5H4a.5.5 0 000 1h3.5V12a.5.5 0 001 0V8.5H12a.5.5 0 000-1H8.5V4z" clip-rule="evenodd"/>
</svg>   <b>Select</b> </div>
<div class="dropdown-menu">
    <a class="dropdown-item" href="add_exams.php">Add Exams</a>
    <a class="dropdown-item" href="exams_results.php">Update Results</a>
    <a class="dropdown-item" href="exams_dashbord.php">Home</a>
  </div>
    
   
    </div>
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

                <!-- #1 Insert Your Content" -->
                <!-- <div class="row">
                    <div class="form-group col-md-12">

                    
                    <div id="curve_chart" style="width: 1200px; height: 500px"></div>

                    </div>
                </div> -->


                <section class="mt-50">
    <div class="container-fluid p-2">
        <div class="row">
            <div class="col-lg-10 ">
                <div class="main-title">
                    <h3 class="mb-30">Notice Board</h3>
                </div>
            </div>
            <div class="col-lg-2 pull-right text-right">
                <a href="#" class="primary-btn small fix-gr-bg"> <span class="ti-plus pr-2"></span> Add </a>
            </div>

            <div class="col-lg-12 shadow-lg p-3 mb-5 bg-white rounded">
                <table class="school-table-style w-100">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                                                                            <tr>
                                    <td>
                                     
                                        21st octo, 2018

                                    </td>
                                    <td>Level -5 Bridging Start</td>
                                    <td>
                                        <a href="#" title="View notice"  class="primary-btn small tr-bg modalLink" data-modal-size="modal-lg">View</a>
                                    </td>
                                </tr>
                                                                <tr>
                                    <td>
                                     
                                        1st Apr, 2020

                                    </td>
                                    <td>Following Level 5</td>
                                    <td>
                                        <a href="#" title="View notice"  class="primary-btn small tr-bg modalLink" data-modal-size="modal-lg">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                     
                                        1st Apr, 2023

                                    </td>
                                    <td>Following Level 5 3rd Year </td>
                                    <td>
                                        <a href="#" title="View notice"  class="primary-btn small tr-bg modalLink" data-modal-size="modal-lg">View</a>
                                    </td>
                                </tr>
                                                </tbody>
            </table>
        </div>
    </div>
</div>
</section>



            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>

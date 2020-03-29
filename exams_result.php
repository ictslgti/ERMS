<?php
$title = "Dashboard | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
<!-- Sample chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
  



</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <nav id="sidebar" class="sidebar-wrapper">
            <?php include_once("nav.php"); ?>
        </nav>
        <main class="page-content pt-2">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-2">

                <!-- #1 Insert Your Content--><div class="row">
                    <div class="form-group col-md-12">
                        <div class="d-flex flex-row bd-highlight mb-3 bg-primary text-white">
                            <!-- Resul Over View Btn -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">RESULT OVERVIEW</button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!-- <span class="sr-only">Toggle Dropdown</span> -->
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="exams_result.php">CHART VIEW RESULT</a>
                                    <a class="dropdown-item" href="#">DEPARTMENT VICE</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Others</a>
                                </div>
                            </div>
                            <!-- Exams Add Btn -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">EXAMS</button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!-- <span class="sr-only">Toggle Dropdown</span> -->
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="add_exams.php">ADD EXAMS</a>
                                    <a class="dropdown-item" href="#">EDITE EXAMS</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Others</a>
                                </div>
                            </div>
                            <!-- Result Update  Btn -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">RESULT UPDATE</button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="update_exams_result.php">UPDATE RSULT</a>
                                    <!-- <a class="dropdown-item" href="#">TVEC EXAMS</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Others</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- #1 Insert Your Content" -->
                <div class="row">
                    <div class="form-group col-md-12">

                    
                    <div id="curve_chart" style="width: 1200px; height: 500px"></div>

                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>

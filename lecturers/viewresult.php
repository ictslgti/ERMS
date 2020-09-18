<?php
$title = ' Result | SLGTI(page Title)';
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
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">

        <?php include_once("nav.php"); ?>
        <div class="container">
            <br>
            <form action="">
                <!-- <div class="card  mb-3" >
                <div class="card-header ">
                <div class="row">
                <div class="col"><h4>Course</h4></div>
                <div class="col-auto">
                <a href="course.php" class="btn btn-outline-primary">New</a>
                </div> -->

        </div>
    </div>

    <div class="">

        <div class="card border-success mb-3">
            <div class="card-header bg-transparent border-success">View Result</div>
            <div class="card-body ">
                <div class="table-responsive">
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
                        <div class="col-3">Module Code :- </div>
                        <div class="col-3">Batch :- </div>
                    </div>

                    <div class="row">
                        <div class="col-3">Deparment :- </div>
                        <div class="col-3">NVQ Level :- </div>
                    </div>


                    <table border="1px black" class='table align-middle'>
                        <thead class='thead-dark text-light'>

                            <!-- <tr>

                                <th>No</th>
                                <th>Index</th>
                                <th>Name</th>

                                <th colspan="6">writting test</th>

                                <th colspan="2">presentation</th>

                                <th colspan="2"> Assignment</th>

                                <th colspan="3">project</th>

                                <th rowspan="2">Average</th>

                            </tr> -->

                        </thead>

                        <tr>

                                <th>No</th>
                                <th>Index No</th>
                                <th>Name</th>

                                <th colspan="6" style="text-align: center;">writting test (30%)</th>

                                <th colspan="2" style="text-align: center;">presentation(15%)</th>

                                <th colspan="2" style="text-align: center;"> Assignment<br> (Individual)(15%)</th>

                                <th colspan="3" style="text-align: center;">project (Individual)(40%)</th>

                                <th style="text-align: center;">Average(%)</th>

                            </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>

                            <th style="transform: rotate(90deg),">Assessment1</th>
                            <th style="transform: rotate(90deg),">Assessment2</th>
                            <th style="transform: rotate(90deg),">Assessment3</th>
                            <th style="transform: rotate(90deg),">Assessment4</th>
                            <th style="transform: rotate(90deg),">Assessment5</th>
                            <th style="transform: rotate(90deg),">Average</th>

                           
                            <th>presentation</th>
                            <th>Avarage</th>

                            <th>Test plan</th>
                            <th>Avarage</th>

                            <th>prograss Review</th>
                            
                            <th colspan="2" >Avarage</th>
                            <td></td>

                        </tr>

                        <tr>

                            <th>01</th>
                            <th>Nufail</th>
                            <th>2018ictbit30</th>

                            <th>90</th>
                            <th>50</th>
                            <th>40</th>
                            <th>25</th>
                            <th>35</th>

                            <th>10</th>
                            <th>68</th>

                            <th>85</th>
                            <th>98</th>

                            <th>56</th>
                            <th>65</th>
                            <th>58</th>
                            
                             

                        </tr>

                        <tr>

                            <th>02</th>
                            <th>Sathursan</th>
                            <th>2018ictbit30</th>

                            <th>90</th>
                            <th>50</th>
                            <th>40</th>
                            <th>25</th>
                            <th>35</th>

                            <th>10</th>
                            <th>68</th>

                            <th>85</th>
                            <th>98</th>

                            <th>56</th>
                            <th>65</th>
                            <th>58</th>

                            

                        </tr>

                        <tr>

                            <th>03</th>
                            <th>kokila</th>
                            <th>2018ictbit30</th>
                            
                            <th>90</th>
                            <th>50</th>
                            <th>40</th>
                            <th>25</th>
                            <th>35</th>
                            <th>10</th>
                            <th>68</th>
                            <th>85</th>
                            <th>98</th>
                            <th>56</th>
                            <th>65</th>
                            <th>58</th>

                        </tr>

                        <tr>

                            <th>04</th>
                            <th>Loshani</th>
                            <th>2018ictbit30</th>
                            <th>90</th>
                            <th>50</th>
                            <th>40</th>
                            <th>25</th>
                            <th>35</th>
                            <th>10</th>
                            <th>68</th>
                            <th>85</th>
                            <th>98</th>
                            <th>56</th>
                            <th>65</th>
                            <th>58</th>

                        </tr>

                        <tr>

                            <th>05</th>
                            <th>sumanan</th>
                            <th>2018ictbit30</th>
                            <th>90</th>
                            <th>50</th>
                            <th>40</th>
                            <th>25</th>
                            <th>35</th>
                            <th>10</th>
                            <th>68</th>
                            <th>85</th>
                            <th>98</th>
                            <th>56</th>
                            <th>65</th>
                            <th>58</th>

                        </tr>

                        <tr>

                            <th>06</th>
                            <th>godwin</th>
                            <th>2018ictbit30</th>
                            <th>90</th>
                            <th>50</th>
                            <th>40</th>
                            <th>25</th>
                            <th>35</th>
                            <th>10</th>
                            <th>68</th>
                            <th>85</th>
                            <th>98</th>
                            <th>56</th>
                            <th>65</th>
                            <th>58</th>

                        </tr>





                        <!-- <tr class="h5">
                                <th scope='col'>Index No</th>
                                <th scope='col'>Name</th>
                                <th scope='col'>Nic</th>
                                <th scope='col'>Assesment1<span class="badge badge-pill badge-dark m-1">T</span></th>
                                <th scope='col'>Assesment2<span class="badge badge-pill badge-dark m-1">P</span></th>
                                <th scope='col'>Total</th>
                                <th scope='col'>percentage%</th>

                            </tr>
                            
                        </thead>
                        <tbody>
                        <tr>
                        <td><h6>2018/ICT/BIT22</h6></td>
                        <td><h6>B.Kiriya</h6></td>
                        <td><h6>966683007V</h6></td>
                        <td><h6>58</h6></td>
                        <td><h6>78</h6></td>
                        <td class="alig">
                        <h2></h2> -->

                        <!-- <div class="w3-dropdown-hover">
                <a class="">...</a>
                <div class="w3-dropdown-content w3-bar-block w3-border">
                <a class="dropdown-item" href="#"><img src="https://img.icons8.com/android/18/000000/edit.png"/>  Edit</a>
                <a class="dropdown-item" href="#"><img src="https://img.icons8.com/windows/18/000000/delete-forever.png"/>Delete</a>
                </div>
            </div> -->

                        </tbody>
                    </table>



                </div>

            </div>



        </div>

        <!-- #1 Insert Your Content" -->
    </div>

    </main>
    </div>
    <div class="card-footer ">
        <div class="row">
            <div class="col-11 "></div>
            <div class="col-1">
                <button type="submit" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">



                    <a href="viewresult.php">print</a>
                </button>



            </div>
        </div>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>
<?php
$title = 'Dashboard | Online Examination Result Management System | SLGTI';
$description = 'Online Examination Result  Management System (ERMS)-SLGTI';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <?php include_once('./head.php');
    ?>
</head>

<body>
    <div class='page-wrapper toggled bg2 border-radius-on light-theme'>
        <nav id='sidebar' class='sidebar-wrapper'>
            <?php include_once('nav.php');
            ?>
        </nav>
        <main class='page-content pt-2'>
            <?php include_once('exam/nav_bar.php');
            ?>
            <?php include_once('exam/dash_nav.php');
            ?>
            <div id='overlay' class='overlay'></div>
            <div class='container-fluid p-2'>

                <!-- #1 Insert Your Content-->
                <section class='mb-40 pt-2 mx-auto'>
                    <div class='container-fluid p-2 tab-pane active' id="profile">
                        <div class=' row '>
                            <div class=' col-md shadow-lg bg-white rounded'>
                                <a href='#' class='d-block text-decoration-none'>
                                    <div class='white-box single-summery'>
                                        <div class='d-flex justify-content-between'>
                                            <div>
                                                <h3>Student</h3>
                                                <p class='mb-0'>Total Students</p>
                                            </div>
                                            <h1 class='primary'>
                                                75
                                            </h1>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class='col-md shadow-lg bg-white rounded'>
                                <a href='#' class='d-block text-decoration-none'>
                                    <div class='white-box single-summery'>
                                        <div class='d-flex justify-content-between'>
                                            <div>
                                                <h3>Lecturer</h3>
                                                <p class='mb-0'>Total Lecturer</p>
                                            </div>
                                            <h1 class='primary'>
                                                3
                                            </h1>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class='col-md shadow-lg bg-white rounded'>
                                <a href='#' class='d-block text-decoration-none'>
                                    <div class='white-box single-summery'>
                                        <div class='d-flex justify-content-between'>
                                            <div>
                                                <h3>Courses</h3>
                                                <p class='mb-0'>Total Courses</p>
                                            </div>
                                            <h1 class='primary'>
                                                21
                                            </h1>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class='col-md shadow-lg bg-white rounded'>
                                <a href='#' class='d-block text-decoration-none'>
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
                <section class="mt-50">
                    <div class="container-fluid p-2">
                        <div class="row">
                            <div class="col-lg-10 ">
                                <div class="main-title">
                                    <h3 class="mb-30">Notice Board</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 pull-right text-right">
                                <a href="#' class='primary-btn small fix-gr-bg'> <span class='ti-plus pr-2"></span> Add </a>
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
                                                <a href="#' title='View notice'  class='primary-btn small tr-bg modalLink' data-modal-size='modal-lg">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                1st Apr, 2020
                                            </td>
                                            <td>Following Level 5</td>
                                            <td>
                                                <a href="#' title='View notice'  class='primary-btn small tr-bg modalLink' data-modal-size='modal-lg">View</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                1st Apr, 2023
                                            </td>
                                            <td>Following Level 5 3rd Year </td>
                                            <td>
                                                <a href="#' title='View notice'  class='primary-btn small tr-bg modalLink' data-modal-size='modal-lg">View</a>
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
    <?php include_once("script.php");
    ?>
</body>

</html>
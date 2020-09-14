<?php
$title = "Dashboard | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php     include_once('head.php');
        //   include_once('dashboard/dash-cdn.php');    
        //   include_once("../databases/config.php");
    //    include_once('../config.php');
    //    include_once('../config.php');
    ?>
</head>

<body>
    <?php include_once('admin/nav.php'); ?>
    <main class="page-content pt-2">
        <div id="overlay" class="overlay"></div>
        <!-- <div class="container-fluid p-5"> -->
        <!-- #1 Insert Your Content-->
        <div class="card text-center">
            <div class="card-header">
                Profile
            </div>
            <div class="card-body">
                <img src="https://api.naiglobal.com/api/userimages?userId=697&imageType=profile"
                    class="rounded float-center" style="width: 10vw; height: 10vw; " alt="...">
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="jumbotron">
                <h1 class="display-4">Kavi</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                    attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.
                </p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
        <!-- #1 Insert Your Content" -->
        <!-- </div> -->
    </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>
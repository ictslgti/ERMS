   <?php
    $title = ' ERMS | SLGTI(student record)';
    $description = 'Online Examination Result  Management System (ERMS)-SLGTI';
    ?>
   <!DOCTYPE html>
   <html lang='en'>

   <head>
       <?php include_once('.././head.php');
        //include_once('../config.php');
        ?>
   </head>

   <body>
       <main class='page-content pt-2'>

           <div id='overlay' class='overlay'></div>
           <div class='container-fluid p-5'>
               <!-- #1 Insert Your Content-->
               <div class="container">


                   <div class='row' style="text-align: center; border: 2px solid #aaa; background-color:rgba(0,0,0,.03)">
                       <div class="col">
                           <div class="">
                               <div class="card-header " style="text-align: center;">
                                   <h4>Examination Results </h4>
                               </div>
                               <div>
                                   <p>
                                       Welcome to the Examination results publishing Service Offered by <br>
                                       SLGTI. Results of all the TVEC Examinations Conducted by TVEC are <br>
                                       Published Thorough this Service.
                                   </p>
                               </div>
                               <div class="">
                                   <!-- #1 Insert Your Content-->
                                   <div class="main-wrapper">

                                       <div class="login-bg-color bg-black-300">

                                           <div class="row">
                                               <div class="col-sm">

                                               </div>
                                               <div class="col-md-4 col-md-offset-4">
                                                   <div class="panel login-box">
                                                       <div class="panel-heading">
                                                           <div class="panel-title text-center">
                                                           </div>
                                                       </div>
                                                       <div class="panel-body p-20">



                                                           <form action="" method="post">
                                                               <div class="form-group">
                                                                   <div class="row">
                                                                       <div class="col">

                                                                           <input type="text" class="form-control" id="regno" placeholder="Enter Your NIC Number" autocomplete="off" name="regno">
                                                                           <div class="form-group mt-20">
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                                   <div class="row">

                                                                   </div>
                                                                   <div class="row">
                                                                       <div class="col-4">
                                                                       </div>
                                                                       <div class="col-4">
                                                                           <a type="submit" class="btn btn-success btn-labeled pull-right" href="exams_report.php">Search<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></a>
                                                                       </div>

                                                                   </div>
                                                                   <br>

                                                                   <div>
                                                                       Only For SLGTI Students
                                                                   </div>
                                                                   <br>
                                                                   <div>
                                                                       <p>Copyright &COPY; 2019 This Work is Licensed Under a MIT License</p>
                                                                   </div>
                                                           </form>

                                                       </div>


                                                       <hr>

                                                   </div>
                                               </div>
                                               <!-- /.panel -->
                                           </div>
                                           <div class="col-sm">

                                           </div>
                                           <!-- /.col-md-6 col-md-offset-3 -->
                                       </div>
                                       <!-- /.row -->
                                   </div>
                                   <!-- /. -->

                               </div>


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
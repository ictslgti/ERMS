 <?php
  $title = ' ERMS | SLGTI(Exams Result Report)';
  $description = 'Online Examination Result  Management System (ERMS)-SLGTI';
  ?>
 <!DOCTYPE html>
 <html lang='en'>

 <head>
   <?php include_once('../head.php');
    //include_once('../config.php');
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
               <h3> <?php echo " $title" ?> </h3>
             </div>
             <div class="card-body">
               <div class='row'>
                 <div class="col-md-6">
                   <div>
                     <select class="custom-select" name="batch" id="inputGroupSelect01" id="validationCustom04" required>
                       <option value="0">Examination Method </option>
                       <option value="1">TVEC Examination</option>
                       <option value="2">INSTITUTE Examination</option>
                     </select>
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div>
                     <select class="custom-select" name="batch" id="inputGroupSelect01" id="validationCustom04" required>
                       <option value="0">Select Semester </option>
                       <option value="1">Semi 1</option>
                       <option value="2">Semi 2</option>
                     </select>
                   </div>
                 </div>

                 <div class="card-body">


                   <div class='row'>
                     <div class="col-md-4">
                       <label for="exampleInputEmail1"><b>Full Name :- </b>Ameerdeen Haseena</label>
                     </div>
                     <div class="col-md-4">
                       <label for="exampleInputEmail1"><b>Name with Initial :- </b>A.Haseena</label>
                     </div>
                     <div class='col-md-4'>
                       <label for="exampleInputEmail1"><b> Student Id :- </b>2018/Ict/Bit17</label>
                     </div>
                   </div>
                   <div class='row'>
                     <div class='col-md-4'>
                       <label for="exampleInputEmail1"><b> NIC Number :- </b>966962550v</label>
                     </div>
                     <div class='col-md-4'>
                       <label for="exampleInputEmail1"><b>Course :- </b>Information and Communication Technology</label>
                     </div>
                     <div class='col-md-4'>
                       <label for="exampleInputEmail1"><b>Batch :- </b>04</label>
                     </div>
                     <div class='col-md-4'>
                       <label for="exampleInputEmail1"><b>Academic Year :- </b>2018/2020</label>
                     </div>
                   </div>
                   <!-- #1 Insert Your Content-->




                   <table class="table">
                     <thead class="thead-light">
                       <tr>
                         <th scope="col">No</th>
                         <th scope="col">Module Code</th>
                         <th scope="col">Module Name</th>
                         <th scope="col">Attempt</th>
                         <th scope="col">Result</th>

                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <th scope="row">1</th>
                         <td>MO6</td>
                         <td>Database system</td>
                         <td>1st</td>
                         <td>Fail</td>


                       </tr>
                       <tr>
                         <th scope="row">2</th>
                         <td>MO6</td>
                         <td>Local Area Network</td>
                         <td>2nd</td>
                         <td>Pass</td>

                       </tr>
                       <tr>
                         <th scope="row">3</th>
                         <td>MO7</td>
                         <td>Web Programming</td>
                         <td>3rd</td>
                         <td>Pass</td>

                       </tr>
                       <tr>
                         <th scope="row">4</th>
                         <td>MO6</td>
                         <td>Software Testing</td>
                         <td>1st</td>
                         <td>Pass</td>

                       </tr>

                       <tr>
                         <th scope="row">5</th>
                         <td>MO6</td>
                         <td>Planning and Scheduling Work at Workplace</td>
                         <td>1st</td>
                         <td>Fail</td>

                       </tr>

                       <tr>
                         <th scope="row">6</th>
                         <td>MO1</td>
                         <td>Manage Workplace Communication</td>
                         <td>1st</td>
                         <td>Fail</td>

                       </tr>
                     </tbody>
                   </table>
                   <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>

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
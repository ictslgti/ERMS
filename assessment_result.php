<?php
$title = "Add Assessment | Online Examination Result Management System | SLGTI";
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
            <?php  
                  $title ="
                  <h4 class='text-primary'>ERMS|<span class='text-secondary'>Assessments Result</span></h4>";
                 include_once('exam/nav_bar.php');
            
                 ?>

                
            <div class="container-fluid p-5">
                <!-- #1 Insert Your Content-->
                <div class="row">
                    <div class="col-md-2 col-sm-4">
                        <h6>Assessment</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">01</h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Module</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">MO7<span class="badge badge-dark">Practical</span></h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Batch</h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">Batch-4 <span class="badge badge-dark">2018/2025</span></h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Course </h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">5it</h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Attempt </h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">01</h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Date </h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted"><input type='date'disabled value="2020-02-02"></h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Attempt </h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">02</h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Date </h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted"><input type='date'disabled value="2020-02-15"></h6>
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <h6>Attempt </h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted">03</h6>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <h6>Date </h6>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h6 class="text-muted"><input type='date'></h6>
                    </div>
                </div>
                <br>
                <form action=""method="POST">
                <button class="btn btn-outline-primary btn btn-sm "> <a href="?Add"> Add Result </a></button>
                </form>
                <br>

<?php
if(isset($_GET['Add']))
{
  ?>  
    <form method='POST' action='assessment_result.php'>
    <div class='row'>
        <div class='form-group col-md-12 table-responsive'>
            <table class='table align-middle'>
                <thead class='bg-primary text-light'>
                    <tr>
                        <th scope='col'>NO</th>
                        <th scope='col'>REG NO</th>
                        <th scope='col'>STUDENT NAME</th>
                        <th scope='col'>MARKS</th>
                        <th scope='col'>ATTEMPT </th>
                        <th scope='col'>STATUS</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope='row'>1</th>
                        <td>2018ICTBIT30</td> 
                        <td>S.Sumanan</td>
                        <td>
                            <input type='text' class='form-control' placeholder='Marks' id='validationServer02' required aria-label='marks' aria-describedby='addon-wrapping' maxlength='5' size='6'>
                        </td>
                        <td><select class='custom-select' id='inputGroupSelect01' id='validationServer01' required>
                                                <option value=''disabled selected>Select</option>
                                                <option value='1'>1 st</option>
                                                <option value='2'>2 nd</option>
                                                <option value='3'>3 rd</option>
                                        </td>
                        <td><span class=' badge badge-success'>PASS</span></td>
                       

                    </tr>
                </tbody>
            </table>
            <!-- button -->
            <div class='row'>
                <div class='col-md'>
                    <h3 class='text-primary'></h3>
                </div>
                <div class='col-md'>

                </div>
                <div class='col-md-auto'>
                    <button type='submit' name='cancel' class='btn btn-danger btn btn-sm '>CANCEL</button>
                    <button type='submit' name='save' class='btn btn-primary btn btn-sm '>SAVE</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
}
else
{
?>
<form method='POST' action='assessment_result.php'>
    <div class='row'>
        <div class='form-group col-md-12 table-responsive'>
            <table class='table align-middle'>
                <thead class='bg-primary text-light'>
                    <tr>
                        <th scope='col'>NO</th>
                        <th scope='col'>REG NO</th>
                        <th scope='col'>STUDENT NAME</th>
                        <th scope='col'>MARKS</th>
                        <th scope='col'>STATUS</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope='row'>1</th>
                        <td>2018ICTBIT30</td>
                        <td>S.Sumanan</td>
                        <td><h6>65 <span class="badge badge-dark">Attempt-1</span></h6></td>
                        <td><span class=' badge badge-success p-2'>PASS</span></td>
                    </tr>

                    <tr>
                        <th scope='row'>2</th>
                        <td>2018ICTBIT05</td>
                        <td>R.Kogila</td>
                        <td><h6>80 <span class="badge badge-dark">Attempt-1</span></h6></td>
                        <td><span class=' badge badge-success p-2'>PASS</span></td>
                    </tr>

                    <tr>
                        <th scope='row'>3</th>
                        <td>2018ICTBIT05</td>
                        <td>R.Kodvin</td>
                        <td> <h6>75 <span class="badge badge-dark">Attempt-2</span></h6></td>
                        <td><span class=' badge badge-success p-2'>PASS</span></td>
                    </tr>
                </tbody>
            </table>
            <!-- button -->
            
        </div>
    </div>
</form>
    
<?php
}
?>

                <!-- #1 Insert Your Content" -->

            </div>
        </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>

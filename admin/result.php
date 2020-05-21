<?php
$title = ' Result | SLGTI(page Title)';
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
        <?php include_once('nav.php');
        ?>
        <div id='overlay' class='overlay'></div>
        <div class='container-fluid p-5'>
            <!-- #1 Insert Your Content-->
            <div class='row'>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                        
                            <h3> <?php echo " Result" ?></h3>
                        </div>
                        <div class="card-body">
                            <div class="card">
                            <div class="card-body">


                            <div class="row">
                            <div class="col-sm">
                     <div class="form-group">
                     Deparment  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  deparment  </option>
                            <option value="1">ICT</option>
                            <option value="2">CON</option>
                            <option value="2">MEC</option>
                        </select>
                        </div>
                         </div>
                     </div>


                     <div class="col-sm">
                     <div class="form-group">
                     Course  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Course  </option>
                            <option value="1">5IT</option>
                            <option value="2">Bridgeing</option>
                        </select>
                        </div>
                         </div>
                     </div>
                           </dive> 
                        </div>
                    </div>
                </div>



                <div class="row">
                            <div class="col-sm">
                     <div class="form-group">
                     Module  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Module  </option>
                            <option value="1">EMP</option>
                            <option value="2">M02</option>
                            <option value="2">M03</option>
                        </select>
                        </div>
                         </div>
                     </div>


                     <div class="col-sm">
                     <div class="form-group">
                     Batch  <br>
                     <div class="input-group input-group-sm mb-3">
  
                        <select class="custom-select" id="inputGroupSelect01"id="validationCustom04" required>
                        <option selected disabled value="">Choose  Batch  </option>
                            <option value="1">Batch04</option>
                            <option value="2">Batch05</option>
                        </select>
                        </div>
                         </div>
                     </div>
                           </dive> 
                        </div>
                    </div>
                    <div class="card-footer "><div class="row">
                     <div class="col "></div>
                     <div class="col-auto">
                     <button type="submit" class="btn btn-outline-success" data-toggle="modal"
                                data-target="#exampleModal">
                                View Result
                            </button>
                     </div>
                     </div>
                </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </main>

    <?php include_once("../script.php");
    ?>
</body>

</html>
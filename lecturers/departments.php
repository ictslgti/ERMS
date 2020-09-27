<?php
$title = "Add Department | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("./head.php"); ?>
    <?php include_once("../config.php"); ?>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">

        <?php include_once("nav.php"); ?>

        <!-- <main class="page-content pt-2"> -->
        <!-- 1st row start -->

        <div class="container">
            <!-- delete -->
<?php
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "select department_code from courses where department_code='$id';";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        ?>
       <div class='alert alert-warning' role='alert'>
       This department already allocate courses so not delete this department.
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
        </button>
      </div>
        <?php
    }  
    else{
    $sql = "DELETE FROM `departments` WHERE `departments`.`code` = '$id'";
    if(mysqli_query($con,$sql)){
        echo 'Record was deleted';
    }else{
        echo 'Try again';
    }
}
}
?>
<!-- delete -->
            <br>
            <form action="">
                <div class="card  mb-3">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col">
                                <h4>Department</h4>
                            </div>
                            <div class="col-auto">
                                <a href="department.php" class="btn btn-outline-primary">New</a>
                            </div>

                        </div>
                    </div>
                    <div class="card-body ">

                        <!-- select -->

                        <form method="POST">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <div class="table-responsive-sm">
                                        <table class="table ">
                                            <thead class="p-3 mb-2 bg-primary text-white">
                                                <tr>
                                                    <th scope="col">code</th>
                                                    <th scope="col">Name</th>
                                                    <div class="row"></div>
                                                    <th class="text-right"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = 'SELECT * FROM `departments`';
                                                $result = mysqli_query($con, $sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo '<tr>
            <td>', $row['code'], '</td>
            <td>', $row['name'], '</td>
            
            <td>
            <div class="row">
            <div class="col"></div>
            <div class="col-auto">
            <div class="btn-group btn-sm" role="group" aria-label="Basic example">
            
            <a href="courses.php?view=', $row['code'], '" class="btn btn-success"><b>courses</b> </a>
            </div>
            </div>
          </div>
            </td>
        </tr>';
                                                    }
                                                } else {
                                                    echo 'no rows';
                                                }
                                                ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <br>
                    <!-- 2 row end -->



                </div>





        </div>
        </form>



    </div>
    <!-- #1 Insert Your Content" -->
    </div>
    </main>
    </div>
    <?php include_once("../script.php"); ?>
</body>

</html>

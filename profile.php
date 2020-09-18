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
        <div class="container">
            <div class="avatar mx-auto white text-center"><img
                    src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" alt="avatar mx-auto white"
                    class="rounded-circle img-fluid">
            </div>

            <div class="card-body">
                <h4 class="card-title mt-1 text-center">Anna Aston</h4>
                <h4 class="card-title mt-1 text-center"><button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#staticBackdrop">Edit profile <i class="fas fa-edit"></i></button></h4>

                        

            </div>
            <div class="card-body">
                <div class="row">
                <table class="table center col-1">
                    <table class="table col-10">
                        <tr>
                            <th scope="row">Username</th>
                            <td>Mariya</td>
                        </tr>
                        <tr>
                            <th scope="row">E-mail*</th>
                            <td>Mariya@gmail.com</td>
                        </tr>
                        <tr>
                            <th scope="row">Course</th>
                            <td>NVQ L5 (2018-2020)</td>
                        </tr>
                        <tr>
                            <th scope="row">Phone</th>
                            <td>0773569868</td>
                        </tr>
                        <tr>
                            <th scope="row">Bithday</th>
                            <td>1998.02.15</td>
                        </tr>
                        <tr>
                            <th scope="row">Phone</th>
                            <td>0773569868</td>
                        </tr>
                    </table>
                    <table class="table center col-1">
                </div>
            </div>
        </div>
        </div>

        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <form method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Reset password</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputAddress2" name="number"
                                            placeholder="Register No / Nic No">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputAddress2" name="user_name"
                                            placeholder="User name">
                                    </div>
                                    <!-- <div class="form-group">
                                            <input type="email" class="form-control" id="inputAddress" name="email"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputAddress2" name="Verify"
                                                placeholder="Verification code">
                                        </div> -->
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="password" class="form-control" id="" placeholder="New Password"
                                                name="new_password">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="password" class="form-control" id=""
                                                placeholder="Conform Password" name="c_password">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="forgot">Reset</button>
                                </div>
                            </div>
                        </form>
        <!-- #1 Insert Your Content" -->
        <!-- </div> -->
    </main>
    </div>
    <?php include_once("script.php"); ?>
</body>

</html>
<?php
$title = "lecturer | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../head.php"); ?>
    <?php include_once("../config.php"); ?>
    <script type='text/javascript'>
        function preview_image(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    <style>
        #output_image {
            width: 140px;
            height: 0px;
            border: 0px solid black;
        }
    </style>
</head>

<body>
    <div class="page-wrapper toggled bg2 border-radius-on light-theme">

        <!-- 1st row start -->

        <div class="container">


            <!-- insert -->
            <?php
            $regno = null;
            $image = null;

            if (
                isset($_POST['add'])
                && !empty($_POST['regno'])
            ) {
                $regno = $_POST['regno'];

                if (!empty($_FILES["image"]["name"])) {
                    // Get file info 
                    $fileName = basename($_FILES["image"]["name"]);
                    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                    // Allow certain file formats 
                    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
                    if (in_array($fileType, $allowTypes)) {
                        $image = $_FILES['image']['tmp_name'];
                        $imgContent = addslashes(file_get_contents($image));
                        $sql = "INSERT INTO student_image (id,image) VALUES ('$regno','$imgContent')";

                        if (mysqli_query($con, $sql)) {
                            echo "<div class='alert alert-success' role='alert'>
                                insert success fully 
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                            </div>";
                        } else {
                            echo "<div class='alert alert-danger' role='alert'>
                                This academic_year alredy submit 
                                <a data-dismiss='alert' href='student.php'>dd</a>
                                    <span aria-hidden='true'>&times;</span></div>" . "<br>" . mysqli_error($con);
                        }
                    } else {
                        echo '<div class="alert alert-danger" role="alert"> Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button></div>';
                    }
                } else {
                    echo '<div class="alert alert-danger" role="alert"> Please select an image file to upload.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button></div>';
                }
            }
            ?>
            <!-- insert -->



            <br>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="card  mb-3">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col">
                                <h4>Lecture</h4>
                            </div>

                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="card  mb-3">

                            <div class="card-body ">
                                <!-- 1st start -->
                                <div class="row">

                                    <div class="col-2">
                                        <label for="regno"> First name: </label>
                                        <input type="text" name="regno" class="form-control" placeholder="2018SLGTIBIT04" value="" required>
                                    </div>
                                    <div class="col-5">
                                        <label for="image"> Image: </label>
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="customFile" accept="image/*" onchange="preview_image(event)"><br>
                                            <label class="custom-file-label" for="customFile"> Choose</label>
                                            <img id="output_image" />
                                        </div>
                                    </div>
                                    <!-- <script>
                                        $('#customFile').on('change', function() {
                                            //get the file name
                                            var fileName = $(this).val();
                                            //replace the "Choose a file" label
                                            $(this).next('.custom-file-label').html(fileName);
                                        })
                                    </script> -->

                                    <!-- <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile"> Choose</label>
                                    </div> -->

                                </div>
                                <!-- 2nd end -->

                            </div>

                            <div class="card-footer ">
                                <div class="row">
                                    <div class="col-11 "></div>
                                    <div class="col-1">
                                        <button type="submit" name="add" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
                                            Add
                                        </button>
                                    </div>
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
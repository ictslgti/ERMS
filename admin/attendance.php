<?php
$title = "Dashboard | Online Examination Result Management System | SLGTI";
$description = "Online Examination Result  Management System (ERMS)-SLGTI";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("../head.php"); ?>

</head>

<body>

    <div class="page-wrapper toggled bg2 border-radius-on light-theme">
        <nav id="sidebar" class="sidebar-wrapper">
            <?php include_once("nav.php"); ?>
        </nav>
        <main class="page-content pt-2">
            <div id="overlay" class="overlay"></div>
            <div class="container-fluid p-5">
                <!-- #1 Insert Your Content-->
                <div class="container">
                    <div class="card border-success mb-3">
                        <div class="card-header bg-transparent border-success">Header</div>
                        <div class="card-body text-success">
                            <!-- content -->
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col">
                                        <div class="input-group input-group-sm mb-3">

                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Choose Batch...</option>
                                                <option value="1">Batch-01</option>
                                                <option value="2">Batch-02</option>
                                                <option value="3">Batch-03</option>
                                                <option value="3">Batch-04</option>
                                                <option value="3">Batch-05</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group input-group-sm mb-3">

                                            <input type="date" name="a" id="a" class="form-control" placeholder="" aria-label="Example text with two button addons" aria-describedby="button-addon3">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="input-group input-group-sm mb-3">

                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Choose Batch...</option>
                                                <option value="1">Batch-01</option>
                                                <option value="2">Batch-02</option>
                                                <option value="3">Batch-03</option>
                                                <option value="3">Batch-04</option>
                                                <option value="3">Batch-05</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group input-group-sm mb-3">

                                            <input type="date" name="b" id="b" class="form-control" placeholder="" aria-label="Example text with two button addons" aria-describedby="button-addon3">
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    function add(a, b) {
                                        var startDate = new Date(a); //YYYY-MM-DD
                                        var endDate = new Date(b); //YYYY-MM-DD

                                        var getDateArray = function(start, end) {
                                            var arr = new Array();
                                            var dt = new Date(start);
                                            while (dt <= end) {
                                                arr.push(new Date(dt));
                                                dt.setDate(dt.getDate() + 1);
                                            }
                                            return arr;
                                            document.getElementById("demo").innerHTML = arr;
                                        }

                                        var dateArr = getDateArray(startDate, endDate);

                                        // Output
                                        document.write("<p>Start Date: " + startDate + "</p>");
                                        document.write("<p>End Date: " + endDate + "</p>");
                                        document.write("<p>Date Array</p>")
                                        for (var i = 0; i < dateArr.length; i++) {
                                            const birthday = new Date(dateArr[i]);
                                            const day1 = birthday.getDay();

                                            if (day1 == 1 || day1 == 2 || day1 == 3 || day1 == 4 || day1 == 5) {
                                               
                                                document.write("<p name='date'>" + dateArr[i] + "</p>");
                                            }
                                        }
                                        document.write("<p>" + dateArr[1] + "</p>");
                                    }
                                </script>



                                <div class="row">
                                    <div class="col">
                                        <div class="input-group input-group-sm mb-3">

                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Choose Chemister...</option>
                                                <option value="1">Chemister-01</option>
                                                <option value="2">Chemister-02</option>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group input-group-sm mb-3">

                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- content -->
                        </div>
                        <div class="card-footer bg-transparent border-success">
                            <button onclick="add(document.getElementById('a').value,document.getElementById('b').value)">Add</button>
                        </div>
                    </div>




                    
                </div>
                <!-- #1 Insert Your Content" -->
            </div>
        </main>
    </div>
    <?php include_once("../script.php"); ?>
    <script>

    </script>
</body>

</html>
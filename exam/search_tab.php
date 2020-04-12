<!-- modal-->

<!-- Extra large modal -->

<div class="modal fade bd-example-modal-xl" style="opacity: 0.9;" tabindex=" -1" id="search_tab" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Update Results Search </h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;
                    </span>
                </button>
            </div>
            <!-- new exams add form-->
            <div class='modal-body'>

                <form method='POST' action=''>
                    <div class='row '>
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <!-- <label class = 'input-group-text' for = 'inputGroupSelect01'>Exams type</label> -->
                                    <label for='exampleInputEmail1'>Exams type</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer01' required>
                                    <option value=''>Select Exams</option>
                                    <option value='1'>INSTITUTE</option>
                                    <option value='2'>TVEC</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <!-- <label class = 'input-group-text' for = 'inputGroupSelect01' id = 'validationServer02' required>Department</label> -->
                                    <label for='exampleInputEmail1'>Department</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01'>
                                    <option value=''>Select Department</option>
                                    <option value='1'>Information Communication Technology</option>
                                    <option value='2'>Automotive & Technology</option>
                                    <option value='3'>Construction Technology</option>
                                    <option value='4'>Electrical Technology</option>
                                    <option value='5'>Food Technology</option>
                                    <option value='6'>Mechanical Technology</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInputEmail1'>Course</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option value=''>Select Course</option>
                                    <option value='1'>NVQ LEVEL-4</option>
                                    <option value='2'>BRIDGING LEVEL-5</option>
                                    <option value='3'>NVQ LEVEL-5</option>
                                    <option value='4'>NVQ LEVEL-6</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInputEmail1'>Academic Year</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option value=''>Select Year...</option>
                                    <option value='1'>2016</option>
                                    <option value='2'>2017</option>
                                    <option value='3'>2018</option>
                                </select>
                            </div>
                        </div> -->
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <label for='exampleInput'>Betch</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option selected>select betch...</option>
                                    <option value='1'>betch 1</option>
                                    <option value='2'>betch 2</option>
                                    <option value='3'>betch 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class='row '>

                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <!-- <label class = 'input-group-text' for = 'inputGroupSelect01'>semester</label> -->
                                    <label for='exampleInput'>semester</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option value=''>Select Semester</option>
                                    <option value='1'>1 st semester</option>
                                    <option value='2'>2 nd semester</option>
                                    <option value='3'>3 rd semester</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <!-- <label class = 'input-group-text' for = 'inputGroupSelect01'>Module</label> -->
                                    <label for='exampleInput'>Module</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option value=''>Select Module</option>
                                    <option value='1'>EMP-MO1</option>
                                    <option value='2'>EMP-MO2</option>
                                    <option value='3'>EMP-MO3</option>
                                    <option value='4'>MO4</option>
                                    <option value='5'>MO5</option>
                                    <option value='6'>MO6</option>
                                    <option value='7'>MO7</option>
                                    <option value='8'>MO8</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-md'>
                            <div class='input-group-sm mb-3'>
                                <div class='input-group-prepend'>
                                    <!-- <label class = 'input-group-text' for = 'inputGroupSelect01'>Type</label> -->
                                    <label for='exampleInput'>Type</label>
                                </div>
                                <select class='custom-select' id='inputGroupSelect01' id='validationServer02' required>
                                    <option value=''>Select Type</option>
                                    <option value='1'>THEORY</option>
                                    <option value='2'>PRACTICAL</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- button-->
                    <div class='row '>
                        <div class='col-md'>
                            <h3 class='text-primary'></h3>
                        </div>
                        <div class='col-md'>

                        </div>
                        <div class='col-md-auto modal-footer'>
                            <button type='submit' name='search' class='btn btn-primary btn btn-sm '>SEARCH</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- form end-->
        </div>
    </div>
</div>
<!-- end modal-->
<!-- db coneection-->
<!-- add exam sql-->
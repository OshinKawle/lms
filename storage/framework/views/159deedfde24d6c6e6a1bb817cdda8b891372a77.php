
<?php $__env->startSection("wrapper"); ?>




    <div class="container-fluid mastercont">
        <br>
        <br>
        <div class="row">
            <div class="col-md-2">
                
            </div>
            <div class="col-md-7">
                <div>
                    <a class="backbtn" href="master.html"><i class="fa fa-long-arrow-left" style="margin-right:5px;" aria-hidden="true"></i>Back</a>
               </div>

               <br>

               <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a class="breadcrumbmenu" href="master.html">Master</a></li>
                  <li class="breadcrumb-item "><a class="breadcrumbmenu" href="master.html">University</a></li>
                  <li class="breadcrumb-item active breadcrumbactivemenu"  aria-current="page">Add</li>
                </ol>
            </nav>
            </div>
            <div class="col-md-3">

            </div>
        </div>

        <br>

        <div class="row mastertabtop">
           <?php echo $__env->make("admin.master.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="col-md-10">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-uni" role="tabpanel"
                        aria-labelledby="v-pills-uni-tab" tabindex="0">

                        

                        <div class="formbd">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div>
                                            <p style="margin-bottom: 5px;"><strong>University</strong></p>
                                            <input class="form-control" type="text" name=""
                                                placeholder="Enter University">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-3">
                                        <div>
                                            <button class="btn btn-primary cancelbtn">Cancel</button>
                                            <button class="btn btn-primary savebtn" type="submit">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- <div style="overflow-x:scroll; width:100%;">
                            <table class="table table-bordered table-responsive" style="border-bottom: 1px solid;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>University</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Dr.D.Y.Patil University Pune</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2.</td>
                                        <td>Dr.D.Y.Patil University Mumbai</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3.</td>
                                        <td>NMIMS</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4.</td>
                                        <td>UpGrad</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->
                    </div>

                    <div class="tab-pane fade" id="v-pills-course" role="tabpanel" aria-labelledby="v-pills-course-tab"
                        tabindex="0">
                        <div style="overflow-x:scroll; width:100%;">
                            <table class="table table-bordered table-responsive" style="border: 1px solid;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>University</th>
                                        <th>Course</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td rowspan="4">1.</td>
                                        <td rowspan="4">Dr.D.Y.Patil University Pune</td>
                                        <td>MBA</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BBA</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>B.com</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Certifications</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>





                                    <tr>
                                        <td rowspan="2">2.</td>
                                        <td rowspan="2">NMIMS</td>
                                        <td>MBA</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>BBA</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-special" role="tabpanel"
                        aria-labelledby="v-pills-special-tab" tabindex="0">

                        <div style="overflow-x:scroll; width:100%;">
                            <table class="table table-bordered table-responsive" style="border-bottom: 1px solid;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>University</th>
                                        <th>Courses</th>
                                        <th>Specialization</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td rowspan="6">1.</td>
                                        <td rowspan="6">Dr.D.Y.Patil University Pune</td>
                                        <td rowspan="5">MBA</td>
                                        <td>MBA in Human Resourse Management</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>MBA in Marketing Management</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>MBA in Financial Management</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>MBA in Retail Management</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>MBA in Supply Chain Management</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>BBA</td>
                                        <td>MBA in Human Resourse Management</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>




                                    <tr>
                                        <td>2.</td>
                                        <td>NMIMS</td>
                                        <td>MBA</td>
                                        <td>MBA in Human Resourse Management</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>






                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="v-pills-sem" role="tabpanel" aria-labelledby="v-pills-sem-tab"
                        tabindex="0">

                        <div style="overflow-x:scroll; width:100%;">
                            <table class="table table-bordered table-responsive" style="border-bottom: 1px solid;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>University Name</th>
                                        <th>Courses</th>
                                        <th>Specialization</th>
                                        <th>Semester</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td rowspan="4">1.</td>
                                        <td rowspan="4">Dr.D.Y.Patil University Pune</td>
                                        <td rowspan="4">MBA</td>
                                        <td rowspan="4">MBA in Human Resourse Management</td>
                                        <td>Semester I</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Semester II</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Semester III</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Semester IV</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="v-pills-fees" role="tabpanel" aria-labelledby="v-pills-fees-tab"
                        tabindex="0">
                        <div style="overflow-x:scroll; width:100%;">
                            <table class="table table-bordered table-responsive" style="border-bottom: 1px solid;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>University Name</th>
                                        <th>Courses</th>
                                        <th>Specialization</th>
                                        <th>Semester</th>
                                        <th>Fees</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td rowspan="4">1.</td>
                                        <td rowspan="4">Dr.D.Y.Patil University Pune</td>
                                        <td rowspan="4">MBA</td>
                                        <td rowspan="4">MBA in Human Resourse Management</td>
                                        <td>Semester I</td>
                                        <td>30,000/-</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Semester II</td>
                                        <td>30,000/-</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Semester III</td>
                                        <td>30,000/-</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Semester IV</td>
                                        <td>30,000/-</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="v-pills-subject" role="tabpanel"
                        aria-labelledby="v-pills-subject-tab" tabindex="0">

                        <div style="overflow-x:scroll; width:100%;">
                            <table class="table table-bordered table-responsive" style="border-bottom: 1px solid;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>University Name</th>
                                        <th>Courses</th>
                                        <th>Specialization</th>
                                        <th>Semester</th>
                                        <th>Fees</th>
                                        <th>Subject</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td rowspan="8">1.</td>
                                        <td rowspan="8">Dr.D.Y.Patil University Pune</td>
                                        <td rowspan="8">MBA</td>
                                        <td rowspan="8">MBA in Human Resourse Management</td>
                                        <td rowspan="4">Semester I</td>
                                        <td rowspan="4">30,000/-</td>
                                        <td>Lorem, ipsum dolor.</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Lorem, ipsum dolor.</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Lorem, ipsum dolor.</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Lorem, ipsum dolor.</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td rowspan="4">Semester II</td>
                                        <td rowspan="4">30,000/-</td>
                                        <td>Lorem, ipsum dolor.</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Lorem, ipsum dolor.</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Lorem, ipsum dolor.</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Lorem, ipsum dolor.</td>
                                        <td>
                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary btn-sm">View</a>
                                            <a href="" class="btn btn-warning btn-sm">Edit</a> <a href=""
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>        
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\oshin\xampp\htdocs\lms\resources\views/admin/master/university/edit.blade.php ENDPATH**/ ?>

<?php $__env->startSection("wrapper"); ?>
    <div class="container-fluid mastercont">
        <br> <br>
        <div class="row">
            <div class="col-md-2">
                <div>
                </div>
            </div>
            <div class="col-md-7">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a class="breadcrumbmenu" href="#">Master</a></li>
                      <li class="breadcrumb-item "><a class="breadcrumbmenu" href="#">University</a></li>
                    
                    </ol>
                </nav>
            </div>
            <div class="col-md-3">
                <div class="d-flex">
                    <div>
                        <a href="" ><button class="bulkbutton">Bulk Upload <img class="bulkicon img-fluid" src="<?php echo e(asset('admin/assets/images/uload_icon.png')); ?>"></button></a>
                    </div>
                    <div>
                        <a href="<?php echo e(url('master/university/create')); ?>"><button  class="unibutton">Add University<img class="addkicon img-fluid"
                                src="<?php echo e(asset('admin/assets/images/plus_icon.png')); ?>"></button></a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row mastertabtop">
            <?php echo $__env->make("admin.master.sidebar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <br>
            <div class="col-md-10">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-uni" role="tabpanel"
                        aria-labelledby="v-pills-uni-tab" tabindex="0">
                        <div style="overflow-x:scroll; width:100%;">
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
                                           <a href="<?php echo e(url('master/university/{{ $Univercity->name); ?>/edit') }}" class="btn btn-warning btn-sm">Edit</a>  <a href=""
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
<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> ?><?php /**PATH D:\oshin\xampp\htdocs\lms\resources\views/admin/master/university/index.blade.php ENDPATH**/ ?>
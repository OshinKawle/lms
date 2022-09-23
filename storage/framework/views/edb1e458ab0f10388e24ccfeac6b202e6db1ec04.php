
<?php $__env->startSection("style"); ?>
    <link href="<?php echo e(asset('assets/plugins/highcharts/css/highcharts.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')); ?>" rel="stylesheet" />
    <?php $__env->stopSection(); ?>
        <?php $__env->startSection("wrapper"); ?>
        <div class="page-wrapper">
            <div class="page-content">
                <div class="row row-cols-1 row-cols-lg-4">
                    <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-cosmic">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white">Total Orders</p>
                                        <h5 class="mb-0 text-white"><?php echo e(__('3,612')); ?></h5>
                                    </div>
                                    <div class="ms-auto text-white"><i class='bx bx-cart font-30'></i>
                                    </div>
                                </div>
                                <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 46%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-burning">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white">Total Income</p>
                                        <h5 class="mb-0 text-white"><?php echo e(__('35,500')); ?></h5>
                                    </div>
                                    <div class="ms-auto text-white"><i class='bx bx-wallet font-30'></i>
                                    </div>
                                </div>
                                <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 72%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-Ohhappiness">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white">Total Users</p>
                                        <h5 class="mb-0 text-white"><?php echo e(__('865')); ?></h5>
                                    </div>
                                    <div class="ms-auto text-white"><i class='bx bx-bulb font-30'></i>
                                    </div>
                                </div>
                                <div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 68%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-moonlit">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white">Total Product</p>
                                        <h5 class="mb-0 text-white">869</h5>
                                    </div>
                                    <div class="ms-auto text-white"><i class='bx bx-chat font-30'></i>
                                    </div>
                                </div>
                                <div class="progress  bg-white-2 radius-10 mt-4" style="height:4.5px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 66%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            
               
                

                
                    <!-- </div>
                </div>
            </div> -->
        </div>
        <?php $__env->stopSection(); ?>
        
   
<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\affixcity\resources\views/admin/dashboard/dashboard.blade.php ENDPATH**/ ?>
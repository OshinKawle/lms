
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
                                        <p class="mb-0 text-white">Total Customer</p>
                                        <h5 class="mb-0 text-white"><?php echo e($customer); ?></h5>
                                    </div>
                                  
                                </div>
                               
                            </div>
                        </div>
                    </div>
                 
                    <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-Ohhappiness">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white">Total Booking</p>
                                        <h5 class="mb-0 text-white"><?php echo e($booking); ?></h5>
                                    </div>
                                    
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-moonlit">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white">Total Revenue</p>
                                        <h5 class="mb-0 text-white"><?php echo e($revenue); ?></h5>
                                    </div>
                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                       <div class="col">
                        <div class="card radius-10 overflow-hidden bg-gradient-burning">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white">Total Technican</p>
                                        <h5 class="mb-0 text-white"><?php echo e($technican); ?></h5>
                                    </div>
                                   
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div id="chartContainer1" style="height: 100%; width: 100%;"></div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                       <div id="chartContainer" style="height: 100%; width: 100%;"></div>
                    </div>
                    
                       
                     
                  
                </div><!--end row-->
            
               
                

                
                    <!-- </div>
                </div>
            </div> -->
        </div>
        <?php echo $__env->make('admin.dashboard.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php $__env->stopSection(); ?>
        
   
<?php echo $__env->make("layouts.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\vesta\resources\views/admin/dashboard/dashboard.blade.php ENDPATH**/ ?>
 
<?php $__env->startSection('title', 'Admin Technican'); ?>
<?php $__env->startSection("wrapper"); ?>
    <div class="page-wrapper">
      <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Technican</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
         
            <form role="form" method="get" action="">
                <div class="box-body">
                  <div class="row">
                     <div class="col-md-2">
                          <div class="form-group">
                                  <input type="text" class="form-control  " name="search_daterange" value="<?php echo e(Request::get('search_daterange')); ?>" / autocomplete="off" placeholder="search daterange">
                          </div>
                        </div>
                   
                    
                    <div class="col-md-1">
                     <button type="submit" class="btn btn-success">Search</button>
                   </div>
                   <div class="col-md-1">
                     <a href="<?php echo e(url('technican/income')); ?>" class="btn btn-danger reset-btn">Reset</a>
                   </div>
                 </div>
               </div>
             </form>
                 
            <div class="table-responsive my-4">
              <table class="table mb-0">
                <thead class="table-light">
                    <tr>
                      <th>No</th>
                     <th>Technican Name</th>
                     <th>Technican Mobile</th>
                     <th>Technican Email</th>
                     <th>Booking Id</th>
                     <th>Earning</th>
                     <th>Afficity Earning</th>
                     <th>Amount</th>
                    </tr>
                   <?php 
                      $page=1;
                     
                   ?>

                   <?php $__empty_1 = true; $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                   <tbody>
                     <tr>
                       <td><?php echo e($page++); ?></td>
                       <td><?php echo e($list->name); ?></td>
                       <td><?php echo e($list->mobile_number); ?></td>
                       <td><?php echo e($list->email); ?></td>
                       <td><?php echo e(isset($list->technicanIncome) ? $list->technicanIncome->total_booking : 0); ?></td>
                       <td><?php echo e(isset($list->technicanIncome) ? $list->technicanIncome->earn : 0); ?></td>
                       <td><?php echo e(isset($list->technicanIncome) ? $list->technicanIncome->affixcity : 0); ?></td>
                       <td><?php echo e(isset($list->technicanIncome) ? $list->technicanIncome->total : 0); ?></td>
                    </td>
                     </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                     <tr>
                       <td colspan="8">Record not found </td>
                     </tr>
                     </tbody>
                   <?php endif; ?>              
                  
                
                
              </table>
            </div>
            
             
          </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\demoafficity\resources\views/admin/technican/list/IncomeHistory.blade.php ENDPATH**/ ?>
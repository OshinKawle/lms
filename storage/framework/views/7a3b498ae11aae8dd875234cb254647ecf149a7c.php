 
<?php $__env->startSection('title', 'Admin Booking List'); ?>
<?php $__env->startSection("wrapper"); ?>
    <div class="page-wrapper">
      <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="<?php echo e(url('/bookings/list')); ?>">Booking List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Booking Payment History</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
           
           
                 
            <div class="table-responsive my-4">
              <table class="table mb-0">
                <thead class="table-light">
                    <tr>
                     <th>S.No</th>
                     <th>Booking No</th>
                     <th>Customer Name</th>
                     <th>Customer Mobile</th>
                     <th>Price</th>
                     <th>Booking Date</th>
                     <th>Booking Time</th>
                     <th>Booking Status</th>
                     <th>Payment Status</th>
                     <th>Payment Status Date</th>
                     <th>Payment Status Time</th>
                     <th>Comment</th>
                     
                     
                    </tr>
                   <?php 
                      $page=1;
                     
                   ?>

                   <?php $__empty_1 = true; $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                   <tbody>
                     <tr>
                       <td><?php echo e($page++); ?></td>
                       <td><?php echo e($list->booking->id); ?> </td>
                       <td><?php echo e(isset($list->booking->customer) ? $list->booking->name: ''); ?> </td>
                       <td><?php echo e(isset($list->booking->customer) ? $list->booking->customer->mobile_number : ''); ?> </td>
                       <td><?php echo e($list->booking->amount); ?> </td>
                        <td><?php echo e(dateShow($list->booking->created_at)); ?> </td>
                       <td><?php echo e(timeShow($list->booking->created_at)); ?> </td>
                       
                       <td>
                       <?php if($list->booking->booking_status_id == 3 || $list->booking->booking_status_id == 5): ?>
                       <button type="button" class="btn <?php echo e(($list->booking->booking_status_id == 3 ? 'btn-danger' : ($list->booking->booking_status_id == 5 ? 'btn-success' : 'btn-info'))); ?>" > <?php echo e(isset($list->booking->bookingStatus) ? $list->booking->bookingStatus->name : ''); ?> </button>
                       <?php else: ?>
                        <button type="button" class="btn <?php echo e(($list->booking->booking_status_id == 3 ? 'btn-danger' : ($list->booking->booking_status_id == 5 ? 'btn-success' : 'btn-info'))); ?>" > <?php echo e(isset($list->booking->bookingStatus) ? $list->booking->bookingStatus->name : ''); ?> </button>
                       <?php endif; ?>
                        
                      </td>
                       <td>
                        <?php if($list->payment_status_id == 1 || $list->payment_status_id == 3): ?>
                        <button type="button" class="btn <?php echo e(($list->payment_status_id == 3 ? 'btn-danger' : ($list->payment_status_id == 1 ? 'btn-success' : 'btn-info'))); ?>"><?php echo e(isset($list->paymentStatus) ? $list->paymentStatus->name : ''); ?></button>
                        <?php else: ?>
                        <button type="button" class="btn <?php echo e(($list->payment_status_id == 3 ? 'btn-danger' : ($list->payment_status_id == 1 ? 'btn-success' : 'btn-info'))); ?>" ><?php echo e(isset($list->paymentStatus) ? $list->paymentStatus->name : ''); ?></button>
                        <?php endif; ?>
                      </td>
                      
                       
                    <td><?php echo e(dateShow($list->created_at)); ?> </td>
                      <td><?php echo e(timeShow($list->created_at)); ?> </td>
                      <td><?php echo e($list->comment); ?> </td>
                     
                     </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                     <tr>
                       <td colspan="12">Record not found </td>
                     </tr>
                     </tbody>
                   <?php endif; ?>              
                  
                
                
              </table>
            </div>
            
          </div>
        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\demoafficity\resources\views/admin/booking/list/history.blade.php ENDPATH**/ ?>
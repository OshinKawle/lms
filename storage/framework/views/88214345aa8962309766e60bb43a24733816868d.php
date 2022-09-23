 
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
                <li class="breadcrumb-item active" aria-current="page">Booking List</li>
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
                        <input type="text" name="search_name" id="search_by_name-btn" class="form-control" placeholder="Search by  Name " value="<?php echo e(Request::get('search_name')); ?>">
                      </div>
                    </div>
                     <div class="col-md-2">
                      <div class="form-group">
                        <input type="text" name="search_mobile" id="search_by_mobile-btn" class="form-control" placeholder="Search by  Mobile " value="<?php echo e(Request::get('search_mobile')); ?>">
                      </div>
                    </div>
                     <div class="col-md-2">
                      <div class="form-group">
                        <input type="text" name="search_booking" id="search_by_booking-btn" class="form-control" placeholder="Search by  Booking No " value="<?php echo e(Request::get('search_booking')); ?>">
                      </div>
                    </div>
                     <div class="col-md-2">
                      <div class="form-group">
                        <select class="form-control select2"  name="search_booking_status_id" style="width: 100%;">
                          <option value="">--Select Booking Status --</option>
                          <?php $__currentLoopData = $sbookingStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sbookingStatuss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($sbookingStatuss->id); ?>" <?php echo e(Request::get('search_booking_status_id') == $sbookingStatuss->id ? 'selected' : ''); ?>><?php echo e($sbookingStatuss->name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    </div>
                      <div class="col-md-2">
                      <div class="form-group">
                        <select class="form-control select2"  name="search_payment_status_id" style="width: 100%;">
                          <option value="">--Select Payment Status --</option>
                          <?php $__currentLoopData = $spaymentStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spaymentStatuss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($spaymentStatuss->id); ?>" <?php echo e(Request::get('search_payment_status_id') == $spaymentStatuss->id ? 'selected' : ''); ?>><?php echo e($spaymentStatuss->name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    </div>
                      <div class="col-md-2">
                      <div class="form-group">
                        <select class="form-control select2"  name="search_service_list_id" style="width: 100%;">
                          <option value="">--Select Service--</option>
                          <?php $__currentLoopData = $appliedFor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appliedFors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($appliedFors->id); ?>" <?php echo e(Request::get('search_service_list_id') == $appliedFors->id ? 'selected' : ''); ?>><?php echo e($appliedFors->name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    </div>
                     
                    </div>
                    <div class="row" style="margin-top: 1%!important">
                      <div class="col-md-2">
                          <div class="form-group">
                                  <input type="text" class="form-control  " name="search_daterange" value="<?php echo e(Request::get('search_daterange')); ?>" / autocomplete="off" placeholder="search daterange">
                          </div>
                        </div>
                    <div class="col-md-1">
                     <button type="submit" class="btn btn-success">Search</button>
                   </div>
                   <div class="col-md-1">
                     <a href="<?php echo e(url('bookings/list')); ?>" class="btn btn-danger reset-btn">Reset</a>
                   </div>
                 </div>
               </div>
             </form>
                 
            <div class="table-responsive my-4">
              <table class="table mb-0">
                <thead class="table-light">
                    <tr>
                     <th>S.No</th>
                     <th>Booking No</th>
                     <th>Customer Name</th>
                     <th>Customer Mobile</th>
                     <th>Service Name</th>
                     <th>Service Type</th>
                     <th>Service Date</th>
                     <th>Technican Name</th>
                     <th>Price</th>
                     <th>Booking Date</th>
                     <th>Booking Time</th>
                     <th>Booking Status</th>
                     <th>Payment Status</th>
                     <th>Payment History</th>
                     <th>Booking History</th>
                     
                     
                    </tr>
                   <?php 
                      $page=1;
                      if(Request::input('page'))
                      $page=Request::input('page');
                      $sort = $lists->perPage();
                   ?>

                   <?php $__empty_1 = true; $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                   <tbody>
                     <tr>
                       <td><?php echo e($sort*($page-1)+($key+1)); ?></td>
                       <td><?php echo e($list->id); ?> </td>
                       <td><?php echo e(isset($list->customer) ? $list->name: ''); ?> </td>
                       <td><?php echo e(isset($list->customer) ? $list->customer->mobile_number : ''); ?> </td>
                    
                       <td><?php echo e(isset($list->serviceList->appliedFor) ? $list->serviceList->appliedFor->name : ''); ?> </td>
                       <td><?php echo e(isset($list->serviceType) ? $list->serviceType->name : ''); ?> </td>
                       <td><?php echo e($list->date); ?> </td>
                       <?php if($list->booking_status_id!=1): ?>
                       <td><?php echo e(isset($list->technican) ? $list->technican->name : ''); ?> </td>
                       <?php else: ?>
                       <td></td>
                       <?php endif; ?>
                       <td><?php echo e($list->amount); ?> </td>
                        <td><?php echo e(dateShow($list->created_at)); ?> </td>
                       <td><?php echo e(timeShow($list->created_at)); ?> </td>
                       
                       <td>
                       <?php if($list->booking_status_id == 3 || $list->booking_status_id == 5): ?>
                       <button type="button" class="btn <?php echo e(($list->booking_status_id == 3 ? 'btn-danger' : ($list->booking_status_id == 5 ? 'btn-success' : 'btn-info'))); ?>" > <?php echo e(isset($list->bookingStatus) ? $list->bookingStatus->name : ''); ?> </button>
                       <?php else: ?>
                        <button type="button" class="btn <?php echo e(($list->booking_status_id == 3 ? 'btn-danger' : ($list->booking_status_id == 5 ? 'btn-success' : 'btn-info'))); ?>" onclick="bookingStatusChange(<?php echo e($list->id); ?>)"> <?php echo e(isset($list->bookingStatus) ? $list->bookingStatus->name : ''); ?> </button>
                       <?php endif; ?>
                        
                      </td>
                       <td>
                        <?php if($list->payment_status_id == 1 || $list->payment_status_id == 3 || $list->payment_status_id == 4): ?>
                        <button type="button" class="btn <?php echo e(($list->payment_status_id == 3 ? 'btn-danger' : ($list->payment_status_id == 1 ? 'btn-success' : 'btn-info'))); ?>" onclick="paymentStatusChange(<?php echo e($list->id); ?>)"><?php echo e(isset($list->paymentStatus) ? $list->paymentStatus->name : ''); ?></button>
                        <?php else: ?>
                        <button type="button" class="btn <?php echo e(($list->payment_status_id == 3 ? 'btn-danger' : ($list->payment_status_id == 1 ? 'btn-success' : 'btn-info'))); ?>" ><?php echo e(isset($list->paymentStatus) ? $list->paymentStatus->name : ''); ?></button>
                        <?php endif; ?>
                       
                      
                      </td>
                      
                       
                     <td>
                      <a href="<?php echo e(url('bookings/history/'.$list->id)); ?>" class=""><i class="bx bx-history"></i></a>
                    </td>
                     <td>
                      <a href="<?php echo e(url('bookings/booking-history/'.$list->id)); ?>" class=""><i class="bx bx-history"></i></a>
                    </td>
                     
                     </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                     <tr>
                       <td colspan="12">Record not found </td>
                     </tr>
                     </tbody>
                   <?php endif; ?>              
                  
                
                
              </table>
            </div>
            
             <div class="row">
               <div class="col-md-6 text-start" style="margin: 20px 0px;">
                  Showing  <?php echo e($lists->firstItem()); ?> to <?php echo e($lists->lastItem()); ?> of <?php echo e($lists->total()); ?>

               </div>
               <div class="col-md-6 text-end">
                 <?php echo e($lists->links('vendor.pagination.default')); ?>

               </div>
             </div>
          </div>
        </div>
<?php echo $__env->make('admin.booking.list.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\demoafficity\resources\views/admin/booking/list/index.blade.php ENDPATH**/ ?>
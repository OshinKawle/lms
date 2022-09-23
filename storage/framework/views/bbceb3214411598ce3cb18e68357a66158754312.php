 
<?php $__env->startSection('title', 'Admin Registration'); ?>
<?php $__env->startSection("wrapper"); ?>
    <div class="page-wrapper">
      <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Registration</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
             <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('partner-registration-create')): ?>
            <div class="d-lg-flex align-items-center mb-4 gap-3">
              <div class=""><a href="<?php echo e(url('partner/registration/create')); ?>" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Create New Registration</a></div>
            </div>
            <?php endif; ?>
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
                        <input type="text" name="search_name" id="search_by_name-btn" class="form-control" placeholder="Search by  Application Number " value="<?php echo e(Request::get('search_application')); ?>">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <input type="text" name="search_mobile" id="search_by_mobile-btn" class="form-control" placeholder="Search by  Mobile " value="<?php echo e(Request::get('search_mobile')); ?>">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <select class="form-control select2"  name="search_status" style="width: 100%;">
                          <option value="">--Select Status --</option>
                          <option value="1" <?php echo e(Request::get('search_status') == '1' ? 'selected' : ''); ?>>Active</option>
                          <option value="0" <?php echo e(Request::get('search_status') == '0' ? 'selected' : ''); ?>>Inactive</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-1">
                     <button type="submit" class="btn btn-success">Search</button>
                   </div>
                   <div class="col-md-1">
                     <a href="<?php echo e(url('partner/registration')); ?>" class="btn btn-danger reset-btn">Reset</a>
                   </div>
                 </div>
               </div>
             </form>
                 
            <div class="table-responsive my-4">
              <table class="table mb-0">
                <thead class="table-light">
                    <tr>
                     <th>No</th>
                     <th>Application Number</th>
                     <th>Applied For</th>
                     <th>Name</th>
                     <th>Date Of Birth</th>
                     <th>Age</th>
                     <th>Gender</th>
                     <th>Mobile Number</th>
                     <th>Email Id</th>
                     <th>Pin Code</th>
                     <th>Payment Type</th>
                     <th>Fee</th>
                     <th>Create Date</th>
                     <th>Create Time</th>
                     <th >Status</th>
                     <th width="280px">Action</th>
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
                        <td><?php echo e($list->application_no); ?> </td>
                       <td>
                        <?php if(count($list->partnerAppliedFor)>0): ?>
                        <?php $__currentLoopData = $list->partnerAppliedFor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$aa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e(isset($aa->appliedFor) ? $aa->appliedFor->name : ''); ?>

                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                      </td>
                       <td><?php echo e($list->f_name); ?> <?php echo e($list->l_name); ?></td>
                       <td><?php echo e(dateShow($list->dob)); ?> </td>
                       <td><?php echo e($list->age); ?> </td>
                       <td><?php echo e($list->gender); ?> </td>
                       <td><?php echo e($list->mobile_number); ?> </td>
                       <td><?php echo e($list->email_id); ?> </td>
                           <td><?php echo e(isset($list->pimcode) ? $list->pimcode->pincode : ''); ?> </td>
                       <td><?php echo e($list->payment_type); ?> </td>
                       <td><?php echo e($list->registration_fee); ?> </td>
                       <td><?php echo e(dateShow($list->created_at)); ?> </td>
                       <td><?php echo e(timeShow($list->created_at)); ?> </td>

                       <td>
                         <a href="<?php echo e(url('/partner/registration/changestatus/'.$list->id)); ?>" class="badge rounded-pill p-2 px-3 btn-<?php echo e(($list->status == 'Active') ? 'success' : 'danger'); ?> button_flow"  data-toggle="tooltip" data-placement="top" title=""  onclick="return confirm('Do you Really want to  <?php echo e(($list->status == 'Active') ? 'Inactive' : 'Active'); ?> this Registration ?')"> <i class="fa <?php echo e(($list->status == 'Active') ? 'fa-toggle-on' : 'fa-toggle-off'); ?> fa-xl"></i></a>
                       </td>
                       <td>
                        <div class="d-flex order-actions">
                          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('partner-registration-edit')): ?>
                        <a href="<?php echo e(url('partner/registration/'.$list->id.'/edit')); ?>" class=""><i class='bx bxs-edit'></i></a>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('partner-registration-delete')): ?>
                        <a href="<?php echo e(url('/partner/registration/delete/'.$list->id)); ?>" class="ms-3" onclick="return confirm('Do you really Want to Delete the  Registration ?')"><i class='bx bxs-trash'></i></a>
                        <?php endif; ?>

                         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('partner-registration-delete')): ?>
                        <a href="<?php echo e(url('/partner/registration/pdf/'.$list->id)); ?>" class="ms-3" target="_blank"><i class='bx bxs-file'></i></a>
                        <?php endif; ?>
                      </div>
                    </td>
                     </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                     <tr>
                       <td colspan="6">Record not found </td>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\demoafficity\resources\views/admin/partner/registrtaion/index.blade.php ENDPATH**/ ?>
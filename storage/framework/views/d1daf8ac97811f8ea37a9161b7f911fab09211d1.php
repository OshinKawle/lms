 
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
                    <div class="col-md-3">
                      <div class="form-group">
                        <input type="text" name="search_name" id="search_by_name-btn" class="form-control" placeholder="Search by  Name " value="<?php echo e(Request::get('search_name')); ?>">
                      </div>
                    </div>
                   
                    <div class="col-md-3">
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
                     <a href="<?php echo e(url('technican/lists')); ?>" class="btn btn-danger reset-btn">Reset</a>
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
                     <th>Technican PinCode</th>
                     <th >Present/Absent</th>
                    
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
                       <td><?php echo e($list->name); ?></td>
                       <td><?php echo e($list->mobile_number); ?></td>
                       <td><?php echo e($list->email); ?></td>
                       <td><?php echo e(isset($list->partnerRegistrtaion->pimcode) ? $list->partnerRegistrtaion->pimcode->pincode : ''); ?></td>
                       
                        <td>
                         <a href="<?php echo e(url('/technican/attandance/changestatus/'.$list->id)); ?>" class="badge rounded-pill p-2 px-3 btn-<?php echo e(isset($list->technicianAttendance) ?  ($list->technicianAttendance->present == 1 ? 'success' : 'danger'): ''); ?> button_flow"  data-toggle="tooltip" data-placement="top" title=""  onclick="return confirm('Do you Really want to present/Absent this User ?')"> <i class="fa <?php echo e(isset($list->technicianAttendance) ?  ($list->technicianAttendance->present == 1 ? 'fa-toggle-on' : 'fa-toggle-off'): ''); ?> fa-xl"></i></a>
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
                 <?php echo $lists->appends(request()->input())->links(); ?>

               </div>
             </div>
          </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\affixcity\resources\views/admin/technican/attandance/index.blade.php ENDPATH**/ ?>
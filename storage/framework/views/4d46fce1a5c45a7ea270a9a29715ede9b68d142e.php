 
<?php $__env->startSection('title', 'Admin Pin Code'); ?>
<?php $__env->startSection("wrapper"); ?>
    <div class="page-wrapper">
      <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Pin Code</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('pincode-create')): ?>
            <div class="d-lg-flex align-items-center mb-4 gap-3">
              <div class=""><a href="<?php echo e(url('master/pimcode/create')); ?>" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Create New Pin Code</a></div>
            </div>
            <?php endif; ?>
          <!--   <div class="d-lg-flex align-items-center mb-4 gap-3">
              <div class="">
                 <form action="<?php echo e(url('master/pimcodeimport')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>
            </form>
              </div>
            </div> -->
            <form role="form" method="get" action="">
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <input type="text" name="search_name" id="search_by_name-btn" class="form-control" placeholder="Search by  pin Code " value="<?php echo e(Request::get('search_name')); ?>">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <select class="form-control select2"  name="search_state_id" style="width: 100%;" onchange="getCity(this);">
                          <option value="">--Select State --</option>
                           <?php $__currentLoopData = $state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $states): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($states->id); ?>"  <?php echo e(Request::get('search_state_id') == $states->id ? 'selected' : ''); ?>><?php echo e($states->name); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    </div>
                      <div class="col-md-2">
                      <div class="form-group">
                        <select class="form-control select2"  name="search_city_id" style="width: 100%;" id="city_id">
                          <option value="">--Select City --</option>
                           <?php $__currentLoopData = $city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $states): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($states->id); ?>"  <?php echo e(Request::get('search_city_id') == $states->id ? 'selected' : ''); ?>><?php echo e($states->name); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
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
                     <a href="<?php echo e(url('master/pimcode')); ?>" class="btn btn-danger reset-btn">Reset</a>
                   </div>
                 </div>
               </div>
             </form>
                 
            <div class="table-responsive my-4">
              <table class="table mb-0">
                <thead class="table-light">
                    <tr>
                      <th>No</th>
                     <th>Country Name</th>
                     <th>State Name</th>
                     <th>City Name</th>
                     <th>Pincode</th>
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
                       <td><?php echo e(isset($list->couuntry) ? $list->couuntry->name : ''); ?></td>
                       <td><?php echo e(isset($list->state) ? $list->state->name : ''); ?></td>
                       <td><?php echo e(isset($list->city) ? $list->city->name : ''); ?></td>
                       <td><?php echo e($list->pincode); ?></td>
                       <td>

                         <a href="<?php echo e(url('/master/pimcode/changestatus/'.$list->id)); ?>" class="badge rounded-pill p-2 px-3 btn-<?php echo e(($list->status == 'Active') ? 'success' : 'danger'); ?> button_flow"  data-toggle="tooltip" data-placement="top" title=""  onclick="return confirm('Do you Really want to <?php echo e(($list->status == 'Active') ? 'Inactive' : 'Active'); ?> this Pin Code ?')"> <i class="fa <?php echo e(($list->status == 'Active') ? 'fa-toggle-on' : 'fa-toggle-off'); ?> fa-xl"></i></a>
                       </td>
                       <td>
                        <div class="d-flex order-actions">
                           <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('pincode-edit')): ?>
                        <a href="<?php echo e(url('master/pimcode/'.$list->id.'/edit')); ?>" class=""><i class='bx bxs-edit'></i></a>
                        <?php endif; ?>
                         <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('pincode-delete')): ?>
                        <a href="<?php echo e(url('/master/pimcode/delete/'.$list->id)); ?>" class="ms-3" onclick="return confirm('Do you really Want to Delete the  Pin Code ?')"><i class='bx bxs-trash'></i></a>
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
        <?php echo $__env->make('admin.master.pincode.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\demoafficity\resources\views/admin/master/pincode/index.blade.php ENDPATH**/ ?>
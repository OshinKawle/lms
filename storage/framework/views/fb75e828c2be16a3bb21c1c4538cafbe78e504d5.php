 
<?php $__env->startSection('title', 'Admin Serive Type'); ?>
<?php $__env->startSection("wrapper"); ?>
<div class="page-wrapper">
    <div class="page-content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2>Create New Serive Type</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <hr/>
                     <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                        </div>
                                        <h5 class="mb-0 text-info">New Serive Type</h5>
                                    </div>
                                    <hr/>
                                    <form method="post" action="<?php echo e(url('service/type')); ?>"  onsubmit="return validateForm('addsstatus')" class="addsstatus" autocomplete="off" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                     
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Select Service Name</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 input-mandatory " name="service_id" onchange="getServiceList(this);">
                                                <option value="">Select Service Name</option>
                                                <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($caste->id); ?>"  <?php echo e(old('applied_for_id')== $caste->id ? 'Selected' : ''); ?>><?php echo e($caste->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Service List</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 input-mandatory " name="service_list_id" id="service_list_id">
                                                
                                              <option value=""> Select Service List</option>
                                            </select>
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Service Type Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="banner" name="name" value="<?php echo e(old('name')); ?>" placeholder="Service Type Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="banner" name="description" value="<?php echo e(old('description')); ?>" placeholder="Description">
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Price</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="banner" name="price" value="<?php echo e(old('price')); ?>" placeholder="Price" onkeydown="onlyNumericDecimal(this, event);">
                                        </div>
                                    </div>
                            
                                  
                                    
                                 
                                    <div class="row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <button type="submit" class="btn btn-info px-5">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection("script"); ?>
<?php echo $__env->make('admin.service.type.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/profglobal/public_html/demoafficity/resources/views/admin/service/type/create.blade.php ENDPATH**/ ?>
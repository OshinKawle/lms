 
<?php $__env->startSection('title', 'Admin Pin Code'); ?>
<?php $__env->startSection("wrapper"); ?>
<div class="page-wrapper">
    <div class="page-content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2>Create New Pin Code</h2>
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
                                        <h5 class="mb-0 text-info">New Pin Code</h5>
                                    </div>
                                    <hr/>
                                    <form method="post" action="<?php echo e(url('master/pimcode')); ?>"  onsubmit="return validateForm('addsstatus')" class="addsstatus" autocomplete="off" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Country Name</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 input-mandatory" name="country_id" onchange="getState(this);">
                                                <option value="">---Select Country---</option>
                                                <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($caste->id); ?>"  <?php echo e(old('country_id')== $caste->id ? 'Selected' : ''); ?>><?php echo e($caste->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">State Name</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 input-mandatory" name="state_id" id="state_id" onchange="getCity(this);">
                                                <option value="">---Select State---</option>
                                                   
                                            </select>
                                        </div>
                                    </div>

                                      <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">City Name</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 input-mandatory" name="city_id" id="city_id">
                                                <option value="">---Select City---</option>
                                                   
                                            </select>
                                        </div>
                                    </div>
                                   
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Pin Code Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="banner" name="pincode" value="<?php echo e(old('pincode')); ?>" placeholder="Pin Code Name"  onblur="pinCodeFormat1(this, event);" onkeydown="pinCodeFormat(this, event);">
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
<?php echo $__env->make('admin.master.pincode.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\affixcity\resources\views/admin/master/pincode/create.blade.php ENDPATH**/ ?>
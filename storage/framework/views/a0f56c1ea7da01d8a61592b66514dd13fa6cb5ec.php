 
<?php $__env->startSection('title', 'Admin User'); ?>
<?php $__env->startSection("wrapper"); ?>
<div class="page-wrapper">
    <div class="page-content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2>Edit Technican</h2>
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
                                        <h5 class="mb-0 text-info">Edit Technican</h5>
                                    </div>
                                    <hr/>
                                    <form method="post" action="<?php echo e(url('technican/lists/'.$detail->id)); ?>"  onsubmit="return validateForm('addsstatus')" class="addsstatus" autocomplete="off" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                     <?php echo e(method_field('PATCH')); ?>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Technican Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="banner" name="name" value="<?php echo e($detail->name); ?>" placeholder="User Name">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Technican Mobile</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="mobile_number" name="mobile_number" value="<?php echo e($detail->mobile_number); ?>" placeholder="User Mobile">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Technican Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="email" name="email" value="<?php echo e($detail->email); ?>" placeholder="User Email">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Technican Password</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control " id="password" name="password" value="" placeholder="User Password">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Technican Confirm Password</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control " id="confirm-password" name="confirm-password" value="<?php echo e(old('confirm-password')); ?>" placeholder="User Confirm Password">
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\affixcity\resources\views/admin/technican/list/edit.blade.php ENDPATH**/ ?>
 
<?php $__env->startSection('title', 'Admin Wallet Amount'); ?>
<?php $__env->startSection("wrapper"); ?>
<div class="page-wrapper">
    <div class="page-content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2>Add Wallet Amount</h2>
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
                                        <h5 class="mb-0 text-info">Add Wallet Amount</h5>
                                    </div>
                                    <hr/>
                                    <form method="post" action="<?php echo e(url('technican/wallet')); ?>"  onsubmit="return validateForm('addsstatus')" class="addsstatus" autocomplete="off" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="user_id" value="<?php echo e($detail->id); ?>">
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Technican Name</label>
                                        <div class="col-sm-9">
                                            <span class="form-control "><?php echo e($detail->name); ?></span>
                                           
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Technican Mobile</label>
                                        <div class="col-sm-9">
                                            <span class="form-control "><?php echo e($detail->mobile_number); ?></span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Wallet Amount </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="amount" name="amount" value="<?php echo e(old('name')); ?>" placeholder="Wallet Amount " onkeydown="onlyNumericDecimal(this, event);">
                                        </div>
                                    </div>
                                      <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Description </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="description" name="comment" value="<?php echo e(old('name')); ?>" placeholder="Description" >
                                        </div>
                                    </div>
                                   
                                   
                                     <div class="row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-info px-5">Save</button>
                                        </div>
                                        <div class="col-sm-2">
                                             <a href="<?php echo e(url('technican/wallet')); ?>" class="btn btn-danger reset-btn">Cancel</a>
                                        </div>
                                        <label class="col-sm-3 col-form-label"></label>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\demoafficity\resources\views/admin/technican/wallet/edit.blade.php ENDPATH**/ ?>
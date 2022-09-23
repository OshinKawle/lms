 
<?php $__env->startSection('title', 'Application Setting'); ?>
<?php $__env->startSection("wrapper"); ?>
<div class="page-wrapper">
    <div class="page-content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2>Edit Application Setting</h2>
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
                                        <h5 class="mb-0 text-info">Edit Application Setting</h5>
                                    </div>
                                    <hr/>
                                    <form method="post" action="<?php echo e(url('master/application/'.$detail->id)); ?>"  onsubmit="return validateForm('addsstatus')" class="addsstatus" autocomplete="off" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo e(method_field('PATCH')); ?>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">No Of Booking Free</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="banner" name="no_of_booking" value="<?php echo e($detail->no_of_booking); ?>" placeholder="No Of Booking Free">
                                        </div>
                                    </div>
                                   <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Wallet Recharge Amount</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="banner" name="recharge_amount" value="<?php echo e($detail->recharge_amount); ?>" placeholder="Wallet Recharge Amount">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Razer Pay Key</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="banner" name="razer_pay_key" value="<?php echo e($detail->razer_pay_key); ?>" placeholder="Razer Pay Key">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Razer Pay Auth Key</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="banner" name="razer_pay_auth_key" value="<?php echo e($detail->razer_pay_auth_key); ?>" placeholder="Razer Pay Auth Key">
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/profglobal/public_html/demoafficity/resources/views/admin/master/application/edit.blade.php ENDPATH**/ ?>
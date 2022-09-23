 
<?php $__env->startSection('title', 'Admin Banner'); ?>
<?php $__env->startSection("wrapper"); ?>
<div class="page-wrapper">
    <div class="page-content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2>Create New Banner</h2>
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
                                        <h5 class="mb-0 text-info">New Banner</h5>
                                    </div>
                                    <hr/>
                                    <form method="post" action="<?php echo e(url('master/banner')); ?>"  onsubmit="return validateForm('addsstatus')" class="addsstatus" autocomplete="off" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Banner Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="banner" name="name" value="<?php echo e(old('name')); ?>" placeholder="Banner Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Banner Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 input-mandatory" name="type">
                                                <option value="">---Select Type---</option>
                                                <option value="Web">Web</option>
                                                <option value="Mobile">Mobile</option>
                                                    
                                            </select>
                                        </div>
                                    </div>
                                      <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Banner Image</label>
                                        <div class="col-sm-3">
                                            <input type="file" class="form-control input-mandatory" value="" id="id_b_image" name="image" placeholder=""> 
                                        </div>
                                          <div class="col-sm-6">
                                              <img src="#" width="200" height="50" class="img-fluid" id="id_prof_b_img" style="display: none;">
                                        </div>
                                    </div>
                                      <div class="row">
                                        <label class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-info px-5">Save</button>
                                        </div>
                                        <div class="col-sm-2">
                                             <a href="<?php echo e(url('master/banner')); ?>" class="btn btn-danger reset-btn">Cancel</a>
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
<?php $__env->startSection("script"); ?>
<?php echo $__env->make('admin.master.banner.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\demoafficity\resources\views/admin/master/banner/create.blade.php ENDPATH**/ ?>
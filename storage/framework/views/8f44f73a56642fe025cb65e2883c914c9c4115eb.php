 
<?php $__env->startSection('title', 'Admin Registration'); ?>
<?php $__env->startSection("wrapper"); ?>
<div class="page-wrapper">
    <div class="page-content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2>Create New Registration</h2>
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
                                        <h5 class="mb-0 text-info">New Registration</h5>
                                    </div>
                                    <hr/>
                                    <form method="post" action="<?php echo e(url('partner/registration')); ?>"  onsubmit="return validateForm('addsstatus')" class="addsstatus" autocomplete="off" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Applied For</label>
                                        <div class="col-sm-9">
                                            <select class="form-control selectmultiple3 input-mandatory" name="applied_for_id[]" multiple>
                                                <option value="">---Select Applied For---</option>
                                                <?php $__currentLoopData = $appliedFor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($caste->id); ?>"  <?php echo e(old('applied_for_id')== $caste->id ? 'Selected' : ''); ?>><?php echo e($caste->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                                            </select>
                                        </div>
                                    </div>
                                   <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="banner" name="f_name" value="<?php echo e(old('f_name')); ?>" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="banner" name="l_name" value="<?php echo e(old('l_name')); ?>" placeholder="Last Name">
                                        </div>
                                    </div>

                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Date Of Birth</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="dob" name="dob" value="<?php echo e(old('dob')); ?>" placeholder="Date Of Birth">
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Age</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="age" name="age" value="<?php echo e(old('age')); ?>" placeholder="Age" readonly>
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Gender</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 input-mandatory" name="gender">
                                                <option value="">---Select Gender---</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                    
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Mobile Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="mobile_number" name="mobile_number" value="<?php echo e(old('mobile_number')); ?>" placeholder="Mobile Number"  onblur="phoneFormat1(this, event);" onkeydown="phoneFormat(this, event);"> 
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Alternate Mobile Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="a_mobile_number" name="a_mobile_number" value="<?php echo e(old('a_mobile_number')); ?>" placeholder="Alternate Mobile Number"  onblur="phoneFormat1(this, event);" onkeydown="phoneFormat(this, event);"> 
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Email Id</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="email_id" name="email_id" value="<?php echo e(old('email_id')); ?>" placeholder="Email Id"  onblur="chechEmail(this, event);" > 
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Full Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="address" name="address" value="<?php echo e(old('address')); ?>" placeholder="Full Address"   > 
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Pin Code</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 input-mandatory" name="pimcode_id" onchange="getPincode(this);">
                                                <option value="">---Select Pin Code---</option>
                                                <?php $__currentLoopData = $pimcode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($caste->id); ?>"  <?php echo e(old('pimcode_id')== $caste->id ? 'Selected' : ''); ?>><?php echo e($caste->pincode); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">State</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" value="" readonly id="state_id"> 
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">City</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" value="" readonly id="city_id"> 
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Id Proof Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 input-mandatory" name="id_prof_type_id">
                                                <option value="">---Select Id Proof Type---</option>
                                                <?php $__currentLoopData = $idProfType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($caste->id); ?>"  <?php echo e(old('id_prof_type_id')== $caste->id ? 'Selected' : ''); ?>><?php echo e($caste->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Id Proof Font Page</label>
                                        <div class="col-sm-3">
                                            <input type="file" class="form-control input-mandatory" value="" id="id_f_image" name="id_f_image"> 
                                        </div>
                                          <div class="col-sm-6">
                                              <img src="#" width="200" height="50" class="img-fluid" id="id_prof_f_img" style="display: none;">
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Id Proof Back Page</label>
                                        <div class="col-sm-3">
                                            <input type="file" class="form-control input-mandatory" value="" id="id_b_image" name="id_b_image" placeholder=""> 
                                        </div>
                                          <div class="col-sm-6">
                                              <img src="#" width="200" height="50" class="img-fluid" id="id_prof_b_img" style="display: none;">
                                        </div>
                                    </div>
                                      <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Address Proof Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 input-mandatory" name="address_proof_type_id">
                                                <option value="">---Select Address Proof Type---</option>
                                                <?php $__currentLoopData = $adressProofType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($caste->id); ?>"  <?php echo e(old('address_proof_type_id')== $caste->id ? 'Selected' : ''); ?>><?php echo e($caste->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Address Proof Font Page</label>
                                        <div class="col-sm-3">
                                            <input type="file" class="form-control input-mandatory" value="" id="address_f_image" name="address_f_image"> 
                                        </div>
                                          <div class="col-sm-6">
                                              <img src="#" width="200" height="50" class="img-fluid" id="address_prof_f_img" style="display: none;">
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Address Proof Back Page</label>
                                        <div class="col-sm-3">
                                            <input type="file" class="form-control input-mandatory" value="" id="address_b_image" name="address_b_image" placeholder=""> 
                                        </div>
                                          <div class="col-sm-6">
                                              <img src="#" width="200" height="50" class="img-fluid" id="address_prof_b_img" style="display: none;">
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Applicant Image</label>
                                        <div class="col-sm-3">
                                            <input type="file" class="form-control " value="" id="applicatimage" name="image" placeholder=""> 
                                        </div>
                                          <div class="col-sm-6">
                                             <img src="#" width="200" height="50" class="img-fluid" id="applicant_image" >style="display: none;"
                                            
                                        </div>
                                    </div>
                                   <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Payment Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 input-mandatory" name="payment_type">
                                                <option value="">---Select Payment Type---</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Online">Online</option>
                                                  
                                            </select>
                                        </div>
                                    </div>
                                      <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Registration Fee</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" value=""  id="registration_fee" onkeydown="onlyNumericDecimal(this, event);" name="registration_fee"> 
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
<?php echo $__env->make('admin.partner.registrtaion.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\affixcity\resources\views/admin/partner/registrtaion/create.blade.php ENDPATH**/ ?>
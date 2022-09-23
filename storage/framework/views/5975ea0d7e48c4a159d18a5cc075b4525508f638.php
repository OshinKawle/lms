 
<?php $__env->startSection('title', 'Admin Registration'); ?>
<?php $__env->startSection("wrapper"); ?>
<div class="page-wrapper">
    <div class="page-content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2>Edit Registration</h2>
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
                                        <h5 class="mb-0 text-info">Edit Registration</h5>
                                    </div>
                                    <hr/>
                                    <form method="post" action="<?php echo e(url('partner/registration/'.$detail->id)); ?>"  onsubmit="return validateForm('addsstatus')" class="addsstatus" autocomplete="off" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                     <?php echo e(method_field('PATCH')); ?>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Applied For</label>
                                        <div class="col-sm-9">
                                            <select class="form-control selectmultiple3 input-mandatory" name="applied_for_id[]" multiple>
                                                <?php $__currentLoopData = $appliedFor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($caste->id); ?>"   <?php echo e(!empty($applieddata) ? (in_array($caste->id ,$applieddata) ? 'Selected' : '' ) : ''); ?>><?php echo e($caste->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 


                                               

                                            </select>
                                        </div>
                                    </div>
                                   <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="banner" name="f_name" value="<?php echo e($detail->f_name); ?>" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="banner" name="l_name" value="<?php echo e($detail->l_name); ?>" placeholder="Last Name">
                                        </div>
                                    </div>

                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Date Of Birth</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="dob" name="dob" value="<?php echo e($detail->dob); ?>" placeholder="Date Of Birth">
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Age</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="age" name="age" value="<?php echo e($detail->age); ?>" placeholder="Age" readonly>
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Gender</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 input-mandatory" name="gender">
                                                <option value="">---Select Gender---</option>
                                                <option value="Male" <?php echo e($detail->gender== 'Male' ? 'Selected' : ''); ?>>Male</option>
                                                <option value="Female" <?php echo e($detail->gender== 'Female' ? 'Selected' : ''); ?>>Female</option>
                                                    
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Mobile Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="mobile_number" name="mobile_number" value="<?php echo e($detail->mobile_number); ?>" placeholder="Mobile Number"  onblur="phoneFormat1(this, event);" onkeydown="phoneFormat(this, event);"> 
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Alternate Mobile Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="a_mobile_number" name="a_mobile_number" value="<?php echo e($detail->a_mobile_number); ?>" placeholder="Alternate Mobile Number"  onblur="phoneFormat1(this, event);" onkeydown="phoneFormat(this, event);"> 
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Email Id</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="email_id" name="email_id" value="<?php echo e($detail->email_id); ?>" placeholder="Email Id"  onblur="chechEmail(this, event);" > 
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Full Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" id="address" name="address" value="<?php echo e($detail->address); ?>" placeholder="Full Address"  onblur="chechEmail(this, event);" > 
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Pin Code</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 input-mandatory" name="pimcode_id">
                                                <option value="">---Select Pin Code---</option>
                                                <?php $__currentLoopData = $pimcode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($caste->id); ?>"  <?php echo e($detail->pimcode_id== $caste->id ? 'Selected' : ''); ?>><?php echo e($caste->pincode); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">State</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" value="<?php echo e(isset($detail->pimcode->state) ? $detail->pimcode->state->name : ''); ?>" readonly id="state_id"> 
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">City</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" value="<?php echo e(isset($detail->pimcode->city) ? $detail->pimcode->city->name : ''); ?>" readonly id="city_id"> 
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Id Proof Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 input-mandatory" name="id_prof_type_id">
                                                <option value="">---Select Id Proof Type---</option>
                                                <?php $__currentLoopData = $idProfType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($caste->id); ?>"  <?php echo e($detail->id_prof_type_id== $caste->id ? 'Selected' : ''); ?>><?php echo e($caste->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Id Proof Font Page</label>
                                        <div class="col-sm-3">
                                            <input type="file" class="form-control " value="" id="id_f_image" name="id_f_image"> 
                                        </div>
                                          <div class="col-sm-6">
                                            <img src="<?php echo e(url($detail->id_f_image)); ?>" width="200" height="50" class="img-fluid" id="id_prof_f_img" >
                                            
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Id Proof Back Page</label>
                                        <div class="col-sm-3">
                                            <input type="file" class="form-control " value="" id="id_b_image" name="id_b_image" placeholder=""> 
                                        </div>
                                          <div class="col-sm-6">
                                              <img src="<?php echo e(url($detail->id_b_image)); ?>" width="200" height="50" class="img-fluid" id="id_prof_b_img" >
                                           
                                        </div>
                                    </div>
                                      <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Address Proof Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 input-mandatory" name="address_proof_type_id">
                                                <option value="">---Select Address Proof Type---</option>
                                                <?php $__currentLoopData = $adressProofType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caste): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($caste->id); ?>"  <?php echo e($detail->address_proof_type_id== $caste->id ? 'Selected' : ''); ?>><?php echo e($caste->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Address Proof Font Page</label>
                                        <div class="col-sm-3">
                                            <input type="file" class="form-control " value="" id="address_f_image" name="address_f_image"> 
                                        </div>
                                          <div class="col-sm-6">
                                            
                                             <img src="<?php echo e(url($detail->address_f_image)); ?>" width="200" height="50" class="img-fluid" id="address_prof_f_img" >
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Address Proof Back Page</label>
                                        <div class="col-sm-3">
                                            <input type="file" class="form-control " value="" id="address_b_image" name="address_b_image" placeholder=""> 
                                        </div>
                                          <div class="col-sm-6">
                                             <img src="<?php echo e(url($detail->address_b_image)); ?>" width="200" height="50" class="img-fluid" id="address_prof_b_img" >
                                            
                                        </div>
                                    </div>
                                      <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Applicant Image</label>
                                        <div class="col-sm-3">
                                            <input type="file" class="form-control " value="" id="applicatimage" name="image" placeholder=""> 
                                        </div>
                                          <div class="col-sm-6">
                                             <img src="<?php echo e(url($detail->image)); ?>" width="200" height="50" class="img-fluid" id="applicant_image" >
                                            
                                        </div>
                                    </div>
                                   <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Payment Type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 input-mandatory" name="payment_type">
                                                <option value="">---Select Payment Type---</option>
                                                <option value="Cash" <?php echo e($detail->payment_type== 'Cash' ? 'Selected' : ''); ?>>Cash</option>
                                                <option value="Online" <?php echo e($detail->payment_type== 'Online' ? 'Selected' : ''); ?>>Online</option>
                                                  
                                            </select>
                                        </div>
                                    </div>
                                      <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Registration Fee</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control input-mandatory" value="<?php echo e($detail->registration_fee); ?>"  id="registration_fee" onkeydown="onlyNumericDecimal(this, event);" name="registration_fee"> 
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\affixcity\resources\views/admin/partner/registrtaion/edit.blade.php ENDPATH**/ ?>
 
<?php $__env->startSection('title', 'Admin Registration'); ?>
<?php $__env->startSection("wrapper"); ?>
<div class="page-wrapper">
    <div class="page-content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2>View Registration</h2>
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
                                        <h5 class="mb-0 text-info">View Registration</h5>
                                    </div>
                                    <hr/>
                                    <form method="post"  autocomplete="off" enctype="multipart/form-data">
                                  
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Applied For</label>
                                        <div class="col-sm-9">
                                            <span class="form-control  input-mandatory">
                                                <?php echo e(isset($detail->appliedFor) ? $detail->appliedFor->name : ''); ?>

                                            </span>
                                           
                                        </div>
                                    </div>
                                   <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                            <span class="form-control input-mandatory"><?php echo e($detail->f_name); ?></span>
                                          
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <span class="form-control input-mandatory"><?php echo e($detail->l_name); ?></span>
                                           
                                        </div>
                                    </div>

                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Date Of Birth</label>
                                        <div class="col-sm-9">
                                             <span class="form-control input-mandatory"><?php echo e($detail->dob); ?></span>
                                           
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Age</label>
                                        <div class="col-sm-9">
                                             <span class="form-control input-mandatory"><?php echo e($detail->age); ?></span>
                                           
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Gender</label>
                                        <div class="col-sm-9">
                                             <span class="form-control input-mandatory"><?php echo e($detail->gender); ?></span>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Mobile Number</label>
                                        <div class="col-sm-9">
                                             <span class="form-control input-mandatory"><?php echo e($detail->mobile_number); ?></span>
                                           
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Alternate Mobile Number</label>
                                        <div class="col-sm-9">
                                            <span class="form-control input-mandatory"><?php echo e($detail->a_mobile_number); ?></span>
                                           
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Email Id</label>
                                        <div class="col-sm-9">
                                             <span class="form-control input-mandatory"><?php echo e($detail->email_id); ?></span>
                                           
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Full Address</label>
                                        <div class="col-sm-9">
                                             <span class="form-control input-mandatory"><?php echo e($detail->address); ?></span>
                                            
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Pin Code</label>
                                        <div class="col-sm-9">
                                             <span class="form-control input-mandatory"><?php echo e(isset($detail->pimcode) ? $detail->pimcode->pincode : ''); ?></span>
                                           
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">State</label>
                                        <div class="col-sm-9">
                                            <span class="form-control input-mandatory"><?php echo e(isset($detail->pimcode->state) ? $detail->pimcode->state->name : ''); ?></span>
                                           
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">City</label>
                                        <div class="col-sm-9">
                                            <span class="form-control input-mandatory"><?php echo e(isset($detail->pimcode->city) ? $detail->pimcode->city->name : ''); ?></span>
                                         
                                            
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Id Proof Type</label>
                                        <div class="col-sm-9">
                                            <span class="form-control input-mandatory"><?php echo e(isset($detail->idProfType) ? $detail->idProfType->name : ''); ?></span>
                                           
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Id Proof Font Page</label>
                                      
                                          <div class="col-sm-9">
                                            <img src="<?php echo e(url($detail->id_f_image)); ?>" width="200" height="50" class="img-fluid" id="id_prof_f_img" >
                                            
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Id Proof Back Page</label>
                                       
                                          <div class="col-sm-9">
                                              <img src="<?php echo e(url($detail->id_b_image)); ?>" width="200" height="50" class="img-fluid" id="id_prof_b_img" >
                                           
                                        </div>
                                    </div>
                                      <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Address Proof Type</label>
                                        <div class="col-sm-9">
                                             <span class="form-control input-mandatory"><?php echo e(isset($detail->addressProofType) ? $detail->addressProofType->name : ''); ?></span>
                                            
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Address Proof Font Page</label>
                                      
                                          <div class="col-sm-9">
                                            
                                             <img src="<?php echo e(url($detail->address_f_image)); ?>" width="200" height="50" class="img-fluid" id="address_prof_f_img" >
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Address Proof Back Page</label>
                                       
                                          <div class="col-sm-9">
                                             <img src="<?php echo e(url($detail->address_b_image)); ?>" width="200" height="50" class="img-fluid" id="address_prof_b_img" >
                                            
                                        </div>
                                    </div>
                                   <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Payment Type</label>
                                        <div class="col-sm-9">
                                            <span class="form-control input-mandatory"><?php echo e($detail->payment_type== 'Cash' ? 'Cash' : 'Online'); ?></span>
                                            
                                        </div>
                                    </div>
                                      <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Registration Fee</label>
                                        <div class="col-sm-9">
                                             <span class="form-control input-mandatory"><?php echo e($detail->registration_fee); ?></span>
                                           
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Verify By</label>
                                       
                                          <div class="col-sm-9">
                                             <span class="form-control input-mandatory"><?php echo e(isset($detail->verifcation) ? $detail->verifcation->verify_to :  ''); ?></span>
                                             
                                            
                                        </div>
                                    </div>
                                    <?php if($detail->verifcation->verify_to!='applicant'): ?>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Relation</label>
                                       
                                          <div class="col-sm-9">
                                             <span class="form-control input-mandatory"><?php echo e(isset($detail->verifcation) ? $detail->verifcation->relation :  ''); ?></span>
                                             
                                            
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Full Name</label>
                                       
                                          <div class="col-sm-9">
                                             <span class="form-control input-mandatory"><?php echo e(isset($detail->verifcation) ? $detail->verifcation->full_name :  ''); ?></span>
                                             
                                            
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Verifier Photo</label>
                                       
                                          <div class="col-sm-9">
                                             <img src="<?php echo e(isset($detail->verifcation) ? url($detail->verifcation->verify_image) :  '#'); ?>" width="200" height="50" class="img-fluid" id="address_prof_b_img" >
                                            
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">House Main Image</label>
                                       
                                          <div class="col-sm-9">
                                             <img src="<?php echo e(isset($detail->verifcation) ? url($detail->verifcation->house_m_image) :  '#'); ?>" width="200" height="50" class="img-fluid" id="address_prof_b_img" >
                                            
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Signature</label>
                                       
                                          <div class="col-sm-9">
                                             <img src="<?php echo e(isset($detail->verifcation) ? url($detail->verifcation->signature) :  '#'); ?>" width="200" height="50" class="img-fluid" id="address_prof_b_img" >
                                            
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Longitude </label>
                                       
                                          <div class="col-sm-9">
                                             <span class="form-control input-mandatory"><?php echo e(isset($detail->verifcation) ? $detail->verifcation->longitude  :  ''); ?></span>
                                             
                                            
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Latitude </label>
                                       
                                          <div class="col-sm-9">
                                             <span class="form-control input-mandatory"><?php echo e(isset($detail->verifcation) ? $detail->verifcation->latitude  :  ''); ?></span>
                                             
                                            
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Date</label>
                                       
                                          <div class="col-sm-9">
                                             <span class="form-control input-mandatory"><?php echo e(isset($detail->verifcation) ? $detail->verifcation->date :  ''); ?></span>
                                             
                                            
                                        </div>
                                    </div>
                                     <div class="row mb-3">
                                        <label for="Name" class="col-sm-3 col-form-label">Time</label>
                                       
                                          <div class="col-sm-9">
                                             <span class="form-control input-mandatory"><?php echo e(isset($detail->verifcation) ? $detail->verifcation->time :  ''); ?></span>
                                             
                                            
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\affixcity\resources\views/admin/partner/registrtaion/view.blade.php ENDPATH**/ ?>
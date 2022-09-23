 <!--JoinUs Popup Start-->
    <div id="joinus_popup" class="modal">
        <div class="modal-dialog">
            <div class="modal-content" style="border-color: black;" id="joinuscontent">
                 <div class="modal-header" style="border: none;">
                    <span id="joinus_close" class="close">&times;</span>
                </div>
                <form method="post" action="<?php echo e(url('joinus')); ?>"  onsubmit="return validateForm('addsstatus111')" class="addsstatus111 form-signin" autocomplete="off" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                       <h3 style="color: #2660b1;" class="row d-flex justify-content-center">
                        JOIN US
                    </h3>
                    <br />
                    <h3 style="color: #2660b1; padding-bottom: 12px; text-align: center;"
                        class="row d-flex justify-content-center">
                        AS A SERVICES PARTNER
                        AND EARN UNLIMITED
                    </h3>
                    <label>Name<span class="text-danger"> *</span></label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Enter your Name"
                        required>
                    <br />
                       
            <label>Email ID</label>
            <input class="form-control" type="text" name="email" placeholder="Enter your Email address"  />
            <br />

            <label>Phone Number<span class="text-danger">
                    *</span></label>
            <input class="form-control" type="text" name="mobile" placeholder="Enter your Phone Number" required />
            <br />

            <label>Select Service<span class="text-danger">
                    *</span></label>
            <select  class="form-control select2" name="applied_for_id" placeholder="AC Technician" required />
                <option value="">Select Service</option>
                <?php $__currentLoopData = AppliedFor(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apploed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($apploed->id); ?>"><?php echo e($apploed->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            
            <br />

            <label>You want to Join us as ?</label>
            <br />
            <textarea id="ans" name="remark" placeholder="About Your Service" 
                style="width: 100%;height: 100px;"></textarea>
            <br /> <br />
                    <button class="btn btn-lg btn-primary btn-block" type="submit" style="border-radius:5rem;" >SubMit Enquiry</button>
                </form>

            </div>
        </div>
    </div>
    <!--JoinUs Popup End--><?php /**PATH D:\xampp\htdocs\demoafficity\resources\views/frontend/include/joinus_popup.blade.php ENDPATH**/ ?>
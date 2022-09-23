<!-- Modal order status -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Booking Status </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="post" action="<?php echo e(url('bookings/list')); ?>"  onsubmit="return validateForm('addsstatus11111111')" class="addsstatus11111111" autocomplete="off" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                     <div class="row">
                      <input type="hidden" name="booking_id" value="" id="booking_id">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form1">Booking Status</label>
                                <span class="star label-mandatory">*</span>
                                <select class="form-control input-mandatory " id="booking_status_id" name="booking_status">
                                  <option value="">--Select--</option>
                                  <?php if(isset($bookingStatus)): ?>
                                   <?php $__currentLoopData = $bookingStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderStatuss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($orderStatuss->id); ?>"><?php echo e($orderStatuss->name); ?></option>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   <?php endif; ?>
                                </select>
                            </div>
                        </div> 
                    </div>
                    <div class="row" style="margin-top:1%!important">
                        <div class="col-md-4">
                            <div class="form-group">
                                 <button type="submit"  class="btn btn-primary" >Submit</button>
                            </div>
                        </div> 
                    </div>
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function bookingStatusChange(id){
    
      $('#booking_id').val(id);
      $('#exampleModal').modal('show');
   
   
  }
</script>

<!-- Modal order status -->
<div class="modal fade" id="payment_status" tabindex="-1" aria-labelledby="payment_statusLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="payment_statusLabel">Change Payment Status </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="post" action="<?php echo e(url('bookings/list/paymentStatus')); ?>"  onsubmit="return validateForm('addsstatus111111')" class="addsstatus111111" autocomplete="off" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                     <div class="row">
                      <input type="hidden" name="booking_id" value="" id="booking_p_id">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form1">Payment Status</label>
                                <span class="star label-mandatory">*</span>
                                <select class="form-control input-mandatory " id="payment_status_id" name="payment_status_id">
                                  <option value="">--Select--</option>
                                  <?php if(isset($paymentStatus)): ?>
                                   <?php $__currentLoopData = $paymentStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paymentStatuss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($paymentStatuss->id); ?>"><?php echo e($paymentStatuss->name); ?></option>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   <?php endif; ?>
                                </select>
                            </div>
                        </div> 
                    </div>
                    <div class="row" style="margin-top:1%!important">
                        <div class="col-md-4">
                            <div class="form-group">
                                 <button type="submit"  class="btn btn-primary" >Submit</button>
                            </div>
                        </div> 
                    </div>
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function paymentStatusChange(id){
      $('#booking_p_id').val(id);
      $('#payment_status').modal('show');
   
  }
</script><?php /**PATH /home/profglobal/public_html/demoafficity/resources/views/admin/booking/list/js.blade.php ENDPATH**/ ?>